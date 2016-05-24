<?php

abstract class API
{

  // complete at: http://coreymaynard.com/blog/creating-a-restful-api-with-php/

  protected $method = '';

  protected $endpoint = '';

  protected $verb = '';

  protected $args = Array();

  protected $file = Null;

  public function __construct($request){
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json");

    $this->args = explode('/', rtrim($request, '/'));
    $this->endpoint = array_shift($this->args);
    if (array_key_exists(0, $this->args) && !is_numeric($this->args[0])){
      $this->verb = array_shift($this->args);
    }

    $this->method = $_SERVER['REQUEST_METHOD'];
    if ($this->method == 'POST' && array_key_exists(HTTP_X_HTTP_METHOD, $_SERVER)){
      if($_SERVER['HTTP_X_HTTP_METHOD'] == 'DELETE'){
        $this->method = 'DELETE';
      }
    }
  }
}


 ?>
