<?php
namespace App\Models;

class Article extends Model {
    public $id;
    public $title;
    public $body;

    public function snippet(){
        return substr($this->body, 0, 3);
    }
}