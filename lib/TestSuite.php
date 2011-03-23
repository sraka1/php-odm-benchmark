<?php

abstract class TestSuite
{
    const USLEEP = '500000';

    protected $server = 'mongodb://localhost:27017';
    protected $dbName = 'php_odm_benchmark';
    protected $mongo;
    protected $db;

    public function __construct()
    {
        $this->mongo = new \Mongo($this->server);
        $this->db = $this->mongo->selectDB($this->dbName);
    }

    public function getDB()
    {
        return $this->db;
    }

    protected function initialize()
    {
    }

    public function run($test, $nb, $excludeBootstrap)
    {
        $method = $test.'Test';

        if ($excludeBootstrap) {
            $this->initialize();
            $start = microtime(true);
            $this->$method($nb);
        } else {
            $start = microtime(true);
            $this->initialize();
            $this->$method($nb);
        }

        return round((microtime(true) - $start) * 1000, 3);
    }

    public function runTestDependence($test, $nb)
    {
        if ($dependence = self::getTestDependence($test)) {
            $this->initialize();
            $this->$dependence($nb);
        }
    }

    /*
     * General.
     */
    static public function displayHeader($test, $nb)
    {
        echo sprintf(<<<EOF
test: %s, nb: %s
                               |        rel |        avg |          1 |          2 |          3 |          4 |          5 |
                               |------------|------------|------------|------------|------------|------------|------------|

EOF
            ,
            $test, $nb
        );
    }

    /*
     * Tests.
     */
    static public function getAllTests()
    {
        return array_keys(self::getTests());
    }

    static protected function getTestDependence($test)
    {
        $tests = self::getTests();

        return $tests[$test];
    }

    static protected function getTests()
    {
        return array(
            'insertSimpleDocument'       => null,
            'updateSimpleDocument'       => 'insertSimpleDocumentTest',
            'updateSimpleDocumentGroup'  => 'insertSimpleDocumentTest',
            'deleteSimpleDocument'       => 'insertSimpleDocumentTest',
            'deleteSimpleDocumentGroup'  => 'insertSimpleDocumentTest',
            'hydrateSimpleDocument'      => 'insertSimpleDocumentTest',
            'insertComplexDocument'      => null,
            'insertComplexDocumentMinimum' => null,
            'updateComplexDocument'      => 'insertComplexDocumentTest',
            'updateComplexDocumentGroup' => 'insertComplexDocumentTest',
            'deleteComplexDocument'      => 'insertComplexDocumentTest',
            'deleteComplexDocumentGroup' => 'insertComplexDocumentTest',
            'hydrateComplexDocument'     => 'insertComplexDocumentTest',
            'hydrateComplexDocumentQueryCache2Fields' => 'insertComplexDocumentTest',
        );
    }
}
