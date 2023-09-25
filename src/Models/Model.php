<?php
namespace App\Models;

use App\DB;

class Model {
    public static $table;

    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
    public function save(){
        $db = new DB();
        $fields = get_object_vars($this);
        $db->insert(static::$table, $fields);
    }
}