<?php

class Beer
{

    private ?int $id;
    private string $title;
    private string $description;
    private int $price;
    private string $country;
    private string $picture;

    function __construct($id, $title, $description, $price, $country, $picture)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->country = $country;
        $this->picture = $picture;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function getPicture()
    {
        return $this->picture;
    }

    public static function getAll($database)
    {
        $result = $database->select("SELECT * FROM `beers`");
        $beers = [];

        if ($result['status']) {

            foreach ($result['data'] as $row) {
                $beers[] = new Beer((int) $row['id'], $row['title'], $row['description'], $row['price'], $row['country'], $row['picture']);
            }

            return $beers;
        } else {
            return null;
        }
    }

    public static function getByID($database, $id)
    {
        $result = $database->select("SELECT * FROM `beers` WHERE id = {$id}");
        if ($result['status']) {
            $record = $result['data'][0];
            return new Beer($record['id'], $record['title'], $record['description'], $record['price'], $record['country'], $record['picture']);
        } else {
            return null;
        }
    }

    public static function update($database, $query)
    {
        $result = $database->update($query);
        if ($result['status']) {
            return true;
        }
        return false;
    }

    public static function insert($database, Beer $beer)
    {
        $result = $database->insert("INSERT INTO `beers` (title, description, price, country, picture)  VALUES ('{$beer->getTitle()}', '{$beer->getDescription()}', {$beer->getPrice()}, '{$beer->getCountry()}', '{$beer->getPicture()}')");
        if ($result['status']) {
            return true;
        }
        return false;
    }

    public static function delete($database, $id)
    {
        $result = $database->delete("DELETE FROM `beers` WHERE id = {$id}");
        if ($result['status']) {
            return true;
        }
        return false;
    }
}
