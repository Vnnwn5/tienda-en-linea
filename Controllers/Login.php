<?php


class Login extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $data['page_tag']= "Login - Tienda virtual";
        $data['page_title']= "Vnnwn";
        $data['page_name']= "login";
        $data['page_functions_js']= "function_login.js";
        $this->views->getView($this,"login",$data);
    }
    public function loginUser(){
        dep($_POST);
        die();
        }
    }

