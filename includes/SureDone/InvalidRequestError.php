<?php

class SureDone_InvalidRequestError extends SureDone_Error 
{
  public function __construct($message, $param, $http_status=null, $http_body=null, $json_body=null)
  {
    parent::__construct($message, $http_status, $http_body, $json_body);
    $this->param = $param;
  }
}
