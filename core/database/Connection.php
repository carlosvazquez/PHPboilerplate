<?php

declare(strict_types=1);

/**
 * This is the basic PDO connection.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class Connection
{
    /**
     * Static method for PDO
     *
     * @return \PDO::class Obj
     */
    public static function make($config)
    {
        $host = $config["driver"].':host='.$config["host"].';dbname='.$config["dbname"];
        print_r($host);
        try {
            return new PDO($host, $config["username"], $config["password"], $config["options"]);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
}
