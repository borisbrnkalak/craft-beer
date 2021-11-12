<?php

class User{

    private ?int $id;
    private string $email;
    private string $password;
    private string $fullName;
    private bool $isAdmin;

    function __construct($id, $email, $password, $fullName, $isAdmin = false)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->fullName = $fullName;
        $this->isAdmin = $isAdmin;
    }

    public function getId(){
        return $this->id;
    }
    public function getMail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getFullName() {
        return $this->fullName;
    }
    public function getIsAdmin() {
        return $this->isAdmin;
    }

    public static function getAll($database){
        $result = $database->select("SELECT * FROM `users`");
        $user = [];

        if($result['status']){

            foreach ($result['data'] as $row) {
                $user[] = new User((int) $row['id'],$row['email'],$row['password'],$row['full_name'],$row['is_admin']);
            }
            
            return $user;
        } else {
            return null;
        }
    }

    public static function getByID($database, $id){
        $result = $database->select("SELECT * FROM `users` WHERE id = {$id}");
        if($result['status']){
            $record = $result['data'][0];
            return new User($record['id'],$record['email'],$record['password'],$record['full_name'],$record['is_admin']);
        } else {
            return null;
        }
    }

    public static function update($database, User $user) {
        $result = $database->update("UPDATE `users` SET `email`='{$user->getMail()}', `password`='{$user->getPassword()}', `full_name`='{$user->getFullName()}', `is_admin`={$user->getIsAdmin()} WHERE `id` = {$user->getId()}");
        return $result['status'];
    }

    public static function insert($database, User $user) {
        $admin = (int)$user->getIsAdmin();
        $hashedPassword = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $result = $database->insert("INSERT INTO `users` (email, password, full_name, is_admin)  VALUES ('{$user->getMail()}', '{$hashedPassword}', '{$user->getFullName()}',{$admin})");
        return $result['status'];
    }

    public static function delete($database, $id) {
        $result = $database->delete("DELETE FROM `users` WHERE id = {$id}");
        return $result['status'];
    }

    public static function checkIfContains($database, $email) {
        $result = $database->select("SELECT * FROM `users` WHERE `email` = '{$email}' LIMIT 1");
         if($result['status']){
            $record = $result['data'][0];
            return new User($record['id'],$record['email'],$record['password'],$record['full_name'],$record['is_admin']);
        } else {
            return null;
        }
    }
}