<?php
namespace Controllers;

class Index
{
  public function home()
  {
    view('Index/home');
  }

  public function login()
  {
    view('Index/login');
  }
}