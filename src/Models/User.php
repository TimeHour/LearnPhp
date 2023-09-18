<?php
namespace App\Models;

class User extends Model {
    public static $table;
    public $id;
    public $email;
    public $password;
}