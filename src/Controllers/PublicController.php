<?php
namespace App\Controllers;

use app\DB;
use App\Models\User;

class PublicController {
    public function home(){
        $result = User::all();
$servername = "localhost";
$username = "username";
$password = "password";
    $db = new DB();
    $result = $db->all('users', User::class);
    var_dump($result);

        die();
        $name = 'matu';
        $num = 10;
        view('home', compact('name', 'num'));
        
    }
    public function about(){
        view('about');
    }
    public function test(){
        var_dump($_GET);
        var_dump($_SERVER);
        view('form');
    }
    public function testAnswer(){
        var_dump($_POST);    
    }
}