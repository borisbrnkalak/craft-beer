<?php

class Employee
{

    private ?int $id;
    private string $name;
    private string $description;
    private string $picture;


    function __construct($id, $name, $description, $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->picture = $picture;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPicture()
    {
        return $this->picture;
    }

    public static function getAll($database)
    {
        $result = $database->select("SELECT * FROM `employees`");
        $employees = [];

        if ($result['status']) {

            foreach ($result['data'] as $row) {
                $employees[] = new Employee((int) $row['id'], $row['name'], $row['description'], $row['picture']);
            }

            return $employees;
        } else {
            return null;
        }
    }

    public static function getByID($database, $id)
    {
        $result = $database->select("SELECT * FROM `employees` WHERE id = {$id}");
        if ($result['status']) {
            $record = $result['data'][0];
            return new Employee($record['id'], $record['name'], $record['description'], $record['picture']);
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

    public static function insert($database, Employee $employee)
    {
        $result = $database->insert("INSERT INTO `employees` (name, description, picture,)  VALUES ('{$employee->getName()}', '{$employee->getDescription()}', '{$employee->getPicture()}')");
        if ($result['status']) {
            return true;
        }
        return false;
    }

    public static function delete($database, $id)
    {
        $result = $database->delete("DELETE FROM `employees` WHERE id = {$id}");
        if ($result['status']) {
            return true;
        }
        return false;
    }
}
