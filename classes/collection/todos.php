<?php
namespace classes\collection;
use classes\collection\collection;

class todos extends collection {
  protected static $modelName = 'todo';
    public static function tableName1(){
    $tableName='todos';
    return $tableName;
    }

}
?>