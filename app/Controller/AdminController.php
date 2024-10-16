<?php
namespace App\Controller;
use App\Controller\BaseController;
class AdminController extends BaseController {

    public function index(){
        return view("admin.index");
    }

}