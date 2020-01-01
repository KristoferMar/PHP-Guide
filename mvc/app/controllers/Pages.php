<?php
  class Pages extends Controller {
    public function __construct(){
      //How we load host
      //$this->postModel = $this->model('Post');
    }

    public function index(){
      //For posts
      // $posts = $this->postModel->getPosts();

      $data = [
      'title' => 'MVC Framework - Kristofer Mar Einarsson',
      /* 'posts' => $posts */
    ];

      $this->view('pages/index', $data);
    }

    public function about($id){
      $data = ['title' => 'About Us'];
      $this->view('pages/about', $data);
    }
  }