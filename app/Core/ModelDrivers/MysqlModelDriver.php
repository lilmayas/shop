<?php

use App\Core\ModelDrivers;

class MysqlModelDriver //implements Contract
{
    // protected $tableName = null;
    // protected $connect = null;

    // public function __construct($tableName) //Not ready
    // {
    //     $this->tableName = $tableName;

    //     $this->connect = mysqli_connect(
    //         DB_HOST . ':' . DB_PORT,
    //         DB_USER,
    //         DB_NAME
    //     );
    // }

    // function __destruct()
    // {
    //     mysqli_close($this->connect);
    // }

    // public function getAll(): array //Done
    // {
    //     $result = mysqli_query(
    //         $this->connect,
    //         "SELECT * FROM {$this->tableName}"
    //     );

    //     $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //     $updatedArray = [];

    //     for ($i = 0; $i < count($array); $i++) {
    //         $id = $array[$i]['id'];
    //         unset($array[$i]['id']);

    //         $updatedArray[$id] = $array[$i];
    //     }


    //     return  $updatedArray;
    // }
}