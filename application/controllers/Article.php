<?php

namespace Application\Controllers;

use Application\Model\Article as articleModel;
use Application\Model\Category;

class Article extends Controller{
    public function index(){
        $article = new articleModel();
        $articles = $article->all();
        return $this->view('panel.article.index' ,compact('articles'));
    }
    public function create(){
        $category = new Category();
        $categories = $category->all();
        return $this->view('panel.article.create' , compact('categories'));
    }
    public function store(){
        $article = new articleModel();
        $article->insert($_POST);
        return $this->redirect('article');
    }
    public function show($id){
        $article = new articleModel();
        $article->find($id);
        return $this->view('panel.artilce.index' , compact('article'));
    }
    public function edit($id){
        $category = new Category();
        $categories = $category->all();
        $ob_article = new articleModel();
        $article = $ob_article->find($id);
        // return $this->view('panel.article.edit' , compact('categories','article'));
        return $this->view('panel.article.edit' , compact('categories' , 'article'));
    }

    public function update($id){
        $article = new articleModel();
        $article->update($id , $_POST);
        return $this->redirect('article');
    }

    public function destroy($id){
        $article = new articleModel();
        $article->delete($id);
        return $this->back();
    }
}