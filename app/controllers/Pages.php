<?php
  class Pages extends Controller {
    public function __construct(){

    }

    // Load Homepage
    public function index(){
      // If logged in, redirect to posts
      if(isset($_SESSION['user_id'])){
        redirect('posts');
      }

     //Set Data
      $data = [
        'title' => 'Tech Quotes',
        'intro' => 'A Place to discover and share quotes base on tech',
         'signup' => 'Join Today'
      ];

      // Load homepage/index view
      $this->view('pages/index', $data);
    }

    public function about(){
      //Set Data
      $data = [
        'version' => '1.0.0',
        'abtitle' => 'ABOUT',
        'subtext' => 'Whats Tech Quotes All About?',
        'description' => 'Tech Quotes, is a website where you can read quotes base on tech as well as create you own to <br> share with the world of your love of tech.',
        'signup' => 'Join Today'
      ];

      // Load about view
      $this->view('pages/about', $data);
    }
  }
