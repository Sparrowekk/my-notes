<?php

declare(strict_types=1);

namespace MyNotes;

$dbConfig = include 'src/db/dbSettings.php';

class Database {

    private static array $dbConfig;
    public static object $dbObject;

    public function __construct($dbConfig) {
        self::$dbConfig = $dbConfig;
        self::$dbObject = new \mysqli(
            $dbConfig['dbHostname'],
            $dbConfig['dbUsername'],
            $dbConfig['dbPassword'],
            $dbConfig['dbName'],
            $dbConfig['dbPort']
        );
        self::$dbObject->init();
    }


    public static function prepareStatement(string $statement): void {
        $query = self::$dbObject->query($statement);
        if ($query->num_rows > 0) {
            foreach ($query->fetch_assoc() as $key => $value) {
//                print('<div class=' .$key. '>' .$key. '<div class=' .$key. '-content>' .$value. '</div>' . '</div>');
                print('<div class=' .$key. '>' .$key. '</div>');
            }
        }

    }


    public static function checkConnect(): bool {

        $dbConfig = self::$dbConfig;
        $mysqliConnect = new \mysqli(
            $dbConfig['dbHostname'],
            $dbConfig['dbUsername'],
            $dbConfig['dbPassword'],
            $dbConfig['dbName'],
            $dbConfig['dbPort']
        );

        $dbStatus = $mysqliConnect->connect_error ?? 'Success!';

        if ($dbStatus == 'Success!') {
            print '<pre>Connect with Database -> success!</pre>';
            return TRUE;
        } else {
            print '<pre>'.$mysqliConnect->connect_error .'</pre>';
            return FALSE;
        }


    }

}

$db = new Database($dbConfig);

