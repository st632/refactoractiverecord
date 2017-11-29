<?php
use classes\database\dbConn;
use classes\htmldisplay\display;
use classes\collection\accounts;
use classes\collection\collection;
use classes\collection\todos;
use classes\model\account;
use classes\model\model;
use classes\model\todo;


class Manage{
  public static function autoload($class){
    $class=str_replace("\\","/",$class).".php";
    include $class;
  }
}

spl_autoload_register(array('Manage','autoload'));
//include 'accounts.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$obl=new main();
class main{
  public function __construct(){
     echo 'Existing Accounts Records.<br>';
     accounts::findAll();
     echo '<br>';
     
     echo 'Creating new id 20 in accounts table.<br>';
     $record = new classes\model\account;
     $record->id='';
     $record->email='dhl@gmail.com';
     $record->fname='def';
     $record->lname='stu';
     $record->phone='646-555-1234';
     $record->birthday='1990-11-09';
     $record->gender='male';
     $record->password='123';
     //$record->save();
     echo 'After adding record.<br>';
     accounts::findAll();
     echo '<br>';
	 
   echo 'Searching new created id 20 in accounts table.<br>';
     $id=20;
     accounts::findOne($id);
     
     echo '<br>';
     echo 'updating details of id=20.<br>';
     $record = new classes\model\account;
     $record->id=20;
     $record->email='cr7@gmail.com';
     $record->fname='cr';
     $record->lname='ronaldo';
     $record->phone='923-654-3210';
     $record->birthday='1985-02-05';
     $record->gender='male';
     $record->password='7777';
     $record->save();
     echo 'After update.<br>';
     accounts::findOne($id);
     echo '<br>';
      echo 'To delete id=20 from accounts.<br>';
    $record = new classes\model\account;
    $record->id=20;
    $record->delete();
    echo 'After Delete id=20.<br>';
    accounts::findAll();
    echo '<br>';
     
   /* echo 'Existing Todos Records.<br>';
     todos::findAll();
     echo '<br>';
     
     echo 'Creating new id 20 in todos table.<br>';
     $record = new todo();
     $record->id='';
     $record->owneremail='qwerty@gmail.com';
     $record->ownerid='18';
     $record->createddate='2017-11-09 10:30:00';
     $record->duedate='2017-12-10 12:00:00';
     $record->message='Active Record';
     $record->isdone='0';
     $record->save();
     echo 'After adding record.<br>';
     todos::findAll();
     echo '<br>';
     
     echo 'Searching new created id 20 in todos table.<br>';
     $id=20;
     todos::findOne($id);
     
     echo '<br>';
     echo 'updating details of id=20.<br>';
     $record = new todo();
     $record->id=20;
     $record->owneremail='rps@gmail.com';
     $record->ownerid='19';
     $record->createddate='2017-08-07 09:00:00';
     $record->duedate='2017-09-08 10:00:00';
     $record->message='Active Record update';
     $record->isdone='1';
     $record->save();
     echo 'After update.<br>';
     todos::findOne($id);
     echo '<br>';
    
    echo 'To delete id=20 from todos.<br>';
    $record=new todo();
    $record->id=20;
    $record->delete();
    echo 'After Delete id=20.<br>';
    todos::findAll();
    echo '<br>';
    
     */
   }
	 
	 }
	 ?>