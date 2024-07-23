<?php

namespace Application\Controllers;

use Application\Model\Article;
use Application\Model\Category;
 
class Home extends Controller{
    public function index(){
        $category = new Category();
        $categories = $category->all();
        $article = new Article();
        $articles = $article->all();
        return $this->view('app.index' , compact('categories' , 'articles'));
    }
    public function category($id){
        $ob_category = new Category();
        $categories = $ob_category->all();
        $ob_category = new Category();
        $category = $ob_category->find($id);
        $ob_category = new Category();
        $articles = $ob_category->articles($id);
        return $this->view('app.category' , compact('categories' , 'articles' ,'category'));
    }

    public function show($id){
     $ob_article = new Article();
     $article = $ob_article->find($id);
     $ob_category = new Category();
     $category = $ob_category->articless($id);
     return $this->view('app.detail' , compact('article' , 'category'));
    }
}