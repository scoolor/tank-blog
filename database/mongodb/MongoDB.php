<?php
/**
 * User: liuhao
 * Date: 18-7-4
 * Time: 下午6:55
 */
namespace root\database\mongodb;

use engine\application\base\Component;
use MongoDB\Client;
use MongoDB\Database;

class MongoDB extends Component
{
    /**
     * @var Database
     */
    private static $instance = null;


    private function __construct()
    {
    }

    /**
     * @return Database
     */
    public static function instance()
    {
        if (self::$instance == null) {
            $config = require_once('config.php');
            $uri = $config['uri'] ?? 'mongodb://127.0.0.1/';
            $dbName = $config['dbName'] ?? 'test';
            $uriOptions = $config['uriOptions'] ?? [];
            $driverOptions = $config['driverOptions'] ?? [];
            self::$instance = (new Client($uri, $uriOptions, $driverOptions))->$dbName;
        }

        return self::$instance;
    }

    private function __clone()
    {
    }
}