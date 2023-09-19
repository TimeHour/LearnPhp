<?php
namespace App\Models;

class User extends Model {
    public static $table ="User";
    public $id;
    public $email;
    public $password;
}