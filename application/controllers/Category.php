<?php

namespace Application\Controllers;

use Application\Model\Category as categoryModel;

class Category extends Controller{
    public function index(){
        $category = new categoryModel();
        $categories = $category->all();
        return $this->view('panel.category.index' ,compact('categories'));
    }
    public function show($id){

    }

    public function create(){
        $this->view('panel.category.create');
    }
    public function store(){
        $category = new categoryModel();
        $category->insert($_POST);
        // var_dump($_POST);
        // exit;
        return $this->redirect('category');
    }
    public function edit($id){
        $ob_category = new categoryModel();
        $category = $ob_category->find($id);
        return $this->view('panel.category.edit' , compact('category'));
    }

    public function update($id){
        $category = new categoryModel();
        $category->update($id , $_POST);
        // var_dump($category);
        // exit;
        return $this->redirect('category');
    }

    public function destroy($id){
        $category = new categoryModel();
        $category->delete($id);
        return $this->back();
    }
}