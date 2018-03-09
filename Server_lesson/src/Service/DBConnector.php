<?php
namespace Service;

class DBConnector
{
    private static $config;
    
    private static $connection;
    
    /**
     * set config
     *
     * store the given configuration. this configuration must contain
     * a 'host', 'driver', 'dbname', 'dbuser', 'dbpass' keys
     * @param array $config the configuration to store
     * @return void
     */
    public static function setConfig(array $config) {
        self::$config = $config;
    }
    
    /**
     * Create a connection
     * Create a live connection with the database and store it internally
     *  @return void
     */
    private static function createConnection() {
        //'mysql:host=localhost;dbname=register
        //driver, host, dbname, dbuser, dbpass
    $dsn = sprintf('driver' . ":host=" . 'host' . ";dbname=" . 'dbname');
    self::$connection = new \PDO(
        $dsn,
        self::$config['dbuser'],
        self::$config['dbpass']
        );
    }
/**
 * Get connection
 * Return the current existing connection, and create it first
 * if not exist
 *  @return \PDO
 */
public static function getConnection(){
    if (!self::$connection) {
         self::createConnection();
    }
    return self::$connection;
    }
}