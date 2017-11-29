<?php
namespace classes\model;
use classes\model\model;
class account extends model {
  
  protected static $modelName = 'account';
  public $id;
	public $email;
	public $fname;
	public $lname;
	public $phone;
	public $birthday;
	public $gender;
	public $password;
  
  public static function tableName(){
    $tableName='accounts';
    return $tableName;
  }
}

?>