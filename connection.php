<?php

class Database{

    public static $connection;

    public static function setUpConnection(){
        if(!isset(Database::$connection)){
            Database::$connection = new mysqli("localhost","root","Heshan2023#","crickethut","3306");
        }
    }

    public static function iud($q){
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q){
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }

}

?>

<?php

// class Database {
//     public static $connection;

//     public static function connect() {
//         self::$connection = new mysqli("localhost","root","Heshan2023#","crickethut");
//         if (self::$connection->connect_error) {
//             die("Connection failed: " . self::$connection->connect_error);
//         }
//     }

//     public static function iud($query) {
//         if (!self::$connection->query($query)) {
//             throw new mysqli_sql_exception(self::$connection->error);
//         }
//     }

//     public static function search($query) {
//         $result = self::$connection->query($query);
//         if (!$result) {
//             throw new mysqli_sql_exception(self::$connection->error);
//         }
//         return $result;
//     }
// }

// Connect to the database when this file is included
// Database::connect();

?>
