<?php

namespace App\Controllers;

use App\Models\Article;

class ArticlesController {
    public function index(){
        $articles = Article::all();
        view('articles/index', compact('articles'));
    }

    public function create(){
        view('articles/create');
    }

    public function store(){
        $article = new Article();
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();
        header('Location: /admin/articles');
    }

    public function show(){
        $id = $_GET['id'];
        $article = Article::find($id);
        //view('articles/view', ['article' => $article]);

        view('articles/view', compact('article'));
    }

    public function edit(){
        $id = $_GET['id'];
        $article = Article::find($id);
        view('articles/edit', compact('article'));
    }

    public function update(){
        $id = $_GET['id'];
        $article = Article::find($id);
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();
        header('Location: /admin/articles');
    }
    public function delete(){
        $id = $_GET['id'];
        $article = Article::find($id);
        $article->delete();
        header('Location: /admin/articles');
    }
}