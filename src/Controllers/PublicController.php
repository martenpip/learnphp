<?php
namespace App\Controllers;

class PublicController {
    public function home(){
        view('home');
    }
    public function about(){
        echo 'about';
    }
}