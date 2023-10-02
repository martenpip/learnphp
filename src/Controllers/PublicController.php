<?php

namespace App\Controllers;


use App\Models\Article;

class PublicController {
    public function home(){
        $articles = Article::all();
        dump($articles);
        view('home', compact('articles'));
    }
    public function about(){
        view('about');
    }
    public function test(){
        var_dump($_POST);
        var_dump($_SERVER);
        view('form');
    }
    public function testAnswer(){
        var_dump($_POST);
    }
}