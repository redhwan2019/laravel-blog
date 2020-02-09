<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        $title= "Main page";
        return view("pages.index",compact('title'));
    }
    public function about(){
        return view("pages.about");
    }
    public function services(){
              $data = array(
               'title' => 'Services!!',
               'services'=> ['web design' , 'HCI','Programming','Instagram']
             );
        return view("pages.services")->with($data);
    }
}
