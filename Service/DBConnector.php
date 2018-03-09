<?php
namespace Service;

class DBConnector
{
    private static $config;
    
    public static function setConfig(array $config)
    {
        self::$config = $config;
    }
    
    //public 
    private static function createConnection()
    {
        $dsn = sprintf(
        '%s:host=%s;dbname=%s',
        self::$config['driver'],
        self::$config['host'],
        self::$config['dbname']
        );
        
        self::$connection = new\PDO(
            $dsn,
            self::$config['dbuser'],
            self::$config['dbpass']
        //$connection = new \PDO5
        //backslash for global namespace
        );
    }
        public static function getConnection()
        {
            if (!self::$connection) {
                self::createConnection();
            }
            return self::$connection;
        }
        
}

