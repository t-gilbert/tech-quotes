<?php
  class nonexist extends Controller{
    public function __construct(){
      if(isset($_SESSION['user_id'])){
        redirect('posts');
      }
    }

    public function index(){
      $this->view('nonexist', ['title' => 'page dose not exist']);
    }
  }
