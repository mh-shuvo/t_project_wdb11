<?php

namespace App\Controller;
use App\Controller\BaseController;
class LoginController extends BaseController
{
    public function show(){
        return view("admin.login");
    }

    public function attempt()
    {
        $data = $_POST;
        print_r($data);
    }
}