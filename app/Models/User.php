<?php

namespace App\models;

class User extends Model {

    protected $table = 'users';

    public function getByUsername(string $username): User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);
    }
}
