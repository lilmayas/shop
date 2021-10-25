<?php
namespace App\Core\ModelDrivers;

class FileModelDriver implements Contract
{
    protected $tableName = null;

    public function __constructor($tableName)
    {
        $this->tableName = $tableName;
    }
    public function getAll(): Array
    {
        $path = $this->getFilePath();
        if(file_exists($path)) {
            return json_decode(file_get_contents($path), true) ?? [];
        }
        return [];
    }
    public function insert($data)
    {
        $array = $this->getAll();
        $array[] = $data;
        file_put_contents($this->getFilePath(), json_encode($array));

    }
    public function update($id, $data)
    {

    }
    public function delete($id)
    {

    }
    public function where($field, $cond, $value)
    {

    }
    public function getTableName()
    {
        return $this->tableName;
    }
    protected function getFilePath()
    {
        return __DIR__ . "/../../../database/{$this->tableName}.txt";
    }
}