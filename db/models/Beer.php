<?php

class Beer{

    private ?int $id;
    private string $title;
    private string $description;

    function __construct($id, $title, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }

    public static function getAll($database){
        $result = $database->select("SELECT * FROM `beers`");
        $beers = [];

        if($result['status']){
            // if(count($result['data']) == 1 ){
            //     return new Beer((int) $result['data'][0]['id'],$result['data'][0]['title'],$result['data'][0]['description']);
            // }

            foreach ($result['data'] as $row) {
                $beers[] = new Beer((int) $row['id'],$row['title'],$row['description']);
            }
            
            return $beers;
        } else {
            return null;
        }
    }

    public static function getByID($database, $id){
        $result = $database->select("SELECT * FROM `beers` WHERE id = {$id}");
        if($result['status']){
            $record = $result['data'][0];
            return new Beer($record['id'],$record['title'],$record['description']);
        } else {
            return null;
        }
    }

    public static function update($database, $query) {
        $result = $database->update($query);
        if($result['status']){
            return true;
        }
        return false;
        // return new Beer($row['id'],$row['title'],$row['description']);
    }

    public static function insert($database, Beer $beer) {
        $result = $database->insert("INSERT INTO `beers` (title, description)  VALUES ('{$beer->getTitle()}', '{$beer->getDescription()}')");
        if($result['status']){
            return true;
        }
        return false;
    }

    public static function delete($database, $id) {
        $result = $database->delete("DELETE FROM `beers` WHERE id = {$id}");
        if($result['status']){
            return true;
        }
        return false;
    }
}