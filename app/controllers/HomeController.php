<?php

require_once '../app/core/Controller.php';

class HomeController extends Controller{

   public function index(){

      $data=[
        'title'=>'HeberCampus'
      ];

      $this->view('home',$data);

   }

}