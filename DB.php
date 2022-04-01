<?php


final class DB extends PDO
{

    private const DBHOST = '172.23.171.236';
    private const DBUSER = 'test';
    private const DBPASS = 'test';
    private const DBNAME = 'horse_sim';

    public function __construct()
    {
    }

    public function execDB($str) : void
    {
        try{
            $dsn = 'mysql:host='. self::DBHOST . ';dbname=' . self::DBNAME;
            $pdo = new PDO($dsn,self::DBUSER,self::DBPASS);

            $pdo->exec('SET CHARACTER SET utf8');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pdo->exec($str);

        }catch(PDOException $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
}