<?php

class Contact{

    private ?int $id;
    private string $email;
    private string $name;
    private string $message;

    function __construct($id, $email, $name, $message)
    {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->message = $message;
    }

    public function getId(){
        return $this->id;
    }
    public function getMail(){
        return $this->email;
    }
    public function getName(){
        return $this->name;
    }
    public function getMessage(){
        return $this->message;
    }

    public static function getAll($database){
        $result = $database->select("SELECT * FROM `contact`");
        $contact = [];

        if($result['status']){
            // if(count($result['data']) == 1 ){
            //     return new Beer((int) $result['data'][0]['id'],$result['data'][0]['title'],$result['data'][0]['description']);
            // }

            foreach ($result['data'] as $row) {
                $contact[] = new Contact((int) $row['id'],$row['email'],$row['name'],$row['message']);
            }
            
            return $contact;
        } else {
            return null;
        }
    }

    public static function getByID($database, $id){
        $result = $database->select("SELECT * FROM `contact` WHERE id = {$id}");
        if($result['status']){
            $record = $result['data'][0];
            return new Contact($record['id'],$record['email'],$record['name'],$record['message']);
        } else {
            return null;
        }
    }

    //public static function update($database, $what, $value, $id) {
    public static function update($database, Contact $contact) {
        //$result = $database->update($query);
        //$result = $database->update("UPDATE `contact` SET {$what}='{$value}' WHERE id = {$id}");
        $result = $database->update("UPDATE `contact` SET `email`='{$contact->getMail()}', `name`='{$contact->getName()}', `message`='{$contact->getMessage()}' WHERE `id` = {$contact->getId()}");
        if($result['status']){
            return true;
        }
        return false;
        // return new Beer($row['id'],$row['title'],$row['description']);
    }

    public static function insert($database, Contact $contact) {
        $result = $database->insert("INSERT INTO `contact` (email, name, message)  VALUES ('{$contact->getMail()}', '{$contact->getName()}', '{$contact->getMessage()}')");
        if($result['status']){
            return true;
        }
        return false;
    }

    public static function delete($database, $id) {
        $result = $database->delete("DELETE FROM `contact` WHERE id = {$id}");
        if($result['status']){
            return true;
        }
        return false;
    }
}