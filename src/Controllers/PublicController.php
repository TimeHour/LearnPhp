<?php 

namespace App\Controllers;

use App\DB;
use App\Models\User;


class PublicController {
    public function home(){
        $db = new DB;
        $result = User::all();
        var_dump($result);
    


        die();
        $name = 'Martin';
        $num = 10;
        view('home', compact('name', 'num'));
    }
    public function about(){
        view('about');
    }
    public function test(){
        var_dump($_POST);
        var_dump($_SERVER);
        view("form");
    }
    public function testAnswer(){
        var_dump($_POST);
    }
}