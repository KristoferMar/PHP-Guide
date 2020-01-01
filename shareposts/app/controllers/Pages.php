<?php
  class Pages extends Controller {
    public function __construct(){
      //How we load host
      //$this->postModel = $this->model('Post');
    }

    public function index(){
      //For posts
      // $posts = $this->postModel->getPosts();

      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
      'title' => 'SharePosts',
      'description' => 'Simple social network built on KomfyMVC PHP Framework'
    ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }