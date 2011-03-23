<?php

require_once(__DIR__.'/lib/TestSuite.php');

/*
 * Options.
 */

// suites
if (!isset($argv[1])) {
    throw new RuntimeException('You have to indicate a suite.');
}
$suites = require($argv[1]);

// tests
if (!isset($argv[2])) {
    throw new RuntimeException('You have to indicate a test.');
}

$allTests = TestSuite::getAllTests();
if ('all' == $argv[2]) {
    $tests = $allTests;
} elseif ('simple' == $argv[2]) {
    $tests = array();
    foreach ($allTests as $test) {
        if (false !== strpos($test, 'Simple')) {
            $tests[] = $test;
        }
    }
} elseif ('complex' == $argv[2]) {
    $tests = array();
    foreach ($allTests as $test) {
        if (false !== strpos($test, 'Complex')) {
            $tests[] = $test;
        }
    }
} else {
    $tests = array($argv[2]);
}

// nb
if (!isset($argv[3])) {
    throw new RuntimeException('You have to indicate the number of documents.');
}
$nb = (int) $argv[3];

// exclude bootstrap
$excludeBootstrap = isset($argv[4]);

/*
 * Run.
 */

$usleep = 1000000;
foreach ($tests as $test) {
    echo "\n";
    TestSuite::displayHeader($test, $nb);

    $masterAvg = null;
    foreach ($suites as $suite) {
        require_once($suite);
        $suiteClass = str_replace('.php', '', basename($suite));
        $testSuite = new $suiteClass();
        $testSuite->getDB()->drop();

        // suite name
        $suiteName = str_replace('.php', '', str_replace('TestSuite', '', basename($suite)));

        // no test exists
        $reflectionClass = new \ReflectionClass(get_class($testSuite));
        if (!$reflectionClass->hasMethod($test.'Test')) {
            echo sprintf('%30s | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f |'."\n",
                $suiteName, '-', '-', '-', '-', '-', '-', '-'
            );
            continue;
        }

        // dependence
        $testSuite->runTestDependence($test, $nb * 5);
        usleep($usleep);

        // run
        $times = array();
        for ($i = 0; $i < 5; $i++) {
            $output = array();
            exec($command = sprintf('php '.__DIR__.'/suite.php %s %s %s%s', $suite, $test, $nb, $excludeBootstrap ? ' 1' : ''), $output);
            $times[] = $time = $output[0];

            usleep($usleep);
        }

        // avg
        $avg = 0;
        foreach ($times as $time) {
            $avg += $time;
        }
        $avg = round($avg / 5, 3);

        // rel
        if (null === $masterAvg) {
            $rel = 1;
            $masterAvg = $avg;
        } else {
            $rel = $masterAvg / $avg;
        }

        echo sprintf('%30s | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f |'."\n",
            $suiteName, $rel, $avg, $times[0], $times[1], $times[2], $times[3], $times[4]
        );
    }

    echo "\n";
}
