<?php
include_once "./User.php";

class Feedback
{

    private ?int $id;
    private string $subject;
    private string $message;
    private int $userId;
    private $user;

    function __construct($id, $subject, $message, $userId, $user = null)
    {
        $this->id = $id;
        $this->subject = $subject;
        $this->message = $message;
        $this->user = $user;
        $this->userId = $userId;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getUserId()
    {
        return $this->userId;
    }


    public static function getAll($database)
    {
        $result = $database->select("SELECT * FROM `feedbacks`");
        $feedbacks = [];

        if ($result['status']) {

            foreach ($result['data'] as $row) {
                $feedbacks[] = new Feedback((int) $row['id'], $row['subject'], $row['message'], $row['user_id']);
            }

            return $feedbacks;
        } else {
            return null;
        }
    }

    public static function getAllWithUser($database)
    {
        $result = $database->select("SELECT feedbacks.*, users.id AS 'checked_id', users.email, users.password, users.full_name, users.is_admin FROM `feedbacks` inner JOIN users on feedbacks.user_id = users.id");
        $feedbacks = [];

        if ($result['status']) {

            foreach ($result['data'] as $row) {
                $user = new User((int) $row['checked_id'], $row['email'], $row['password'], $row['full_name'], $row['is_admin']);
                $feedbacks[] = new Feedback((int) $row['id'], $row['subject'], $row['message'], $row['user_id'], $user);
            }

            return $feedbacks;
        } else {
            return null;
        }
    }

    public static function getByID($database, $id)
    {
        $result = $database->select("SELECT * FROM `feedbacks` WHERE id = {$id}");
        if ($result['status']) {
            $record = $result['data'][0];
            return
                new Feedback((int) $record['id'], $record['subject'], $record['message'], $record['user_id']);
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

    public static function insert($database, Feedback $feedback)
    {
        $result = $database->insert("INSERT INTO `feedbacks` (subject, message, user_id)  VALUES ('{$feedback->getSubject()}', '{$feedback->getMessage()}', {$feedback->getUserId()})");
        if ($result['status']) {
            return true;
        }
        return false;
    }

    public static function delete($database, $id)
    {
        $result = $database->delete("DELETE FROM `feedbacks` WHERE id = {$id}");
        if ($result['status']) {
            return true;
        }
        return false;
    }
}
