<?php

class Model
{
    protected static $table = null;
    protected $fields = [];
    protected $fillable = null;


    public function __construct($fields = [])
    {
        $this->fields = $fields;
    }

    public static function all()
    {
        $table = static::$table;
        $path = __DIR__ . "/../database/{$table}.txt";
        $output = [];
        if(file_exists($path)) {
            $rows = json_decode(file_get_contents($path), true) ?? [];

            if ($rows) {
                foreach ($rows as $row) {
                    $output[] = new static($row);
                }
            }
        }
        return $output;
    }

    public function save()
    {
        $fields = [];
        foreach ($this->fillable as $fillable) {
            $fields[$fillable] = $this->fields[$fillable] ?? null;
        }
        
        $table = static::$table;
        $path = __DIR__ . "/../database/{$table}.txt";
        $array = static::allAsArray();
        $array[] = $fields;
        file_put_contents($path, json_encode($array));
    }

    public function getFields()
    {
        return $this->fields;
    }

    public static function allAsArray()
    {
        $output = [];
        $all = static::all();
        if ($all) {
            foreach($all as $obj) {
                $output[] = $obj->getFields();
            }
        }

        return $output;
    }


    public function __set($name, $value) 
    {
        $this->fields[$name] = $value;
    }

    public function __get($name) 
    {
        return $this->fields[$name] ?? null;
    }
}