<?php

require_once ( 'Model.php' );

class Task extends Model
{
    
    protected string $person;
    protected string $title;
    protected string $description;
    protected string $id;

    public function __construct(string $person = '', string $title = '', string $description = '', string $id = '')
    {
        $this->person = $person;
        $this->title = $title;
        $this->description = $description;
        $this->id = $id;
    }

    public static function getAll()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM tasks");
        $stmt->execute();

        $taskArray = [];

        $allTasks = $stmt->fetchAll();

        foreach($allTasks as $task)
        {
            array_push( $taskArray, new Task($task['person'], $task['title'], $task['description'], $task['id']) );
        }

        return $taskArray;
    }

    public function getSingle($id)
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);

        $task = $stmt->fetch();

        if($stmt->rowCount() > 0)
        {
            $this->person = $task['person'];
            $this->title = $task['title'];
            $this->description = $task['description'];
            
            return $this;
        }

        throw new Exception('Record niet gevonden...');
    }

    public function save()
    {
        $pdo = DB::connect();
        if ( isset( $_POST['id'] ) )
        {
            $stmt = $pdo->prepare("UPDATE `tasks` SET `person` = :person, `title` = :title, `description` = :description WHERE `tasks`.`id` = :id");
            $stmt->execute([
                ':id' => $_POST['id'],
                ':person' => $this->person,
                ':title' => $this->title,
                ':description' => $this->description
            ]);
        } else
        {
            $stmt = $pdo->prepare("INSERT INTO `tasks` (`person`, `title`, `description`) VALUES (:person, :title, :description) ");
            $stmt->execute([
                ':person' => $this->person,
                ':title' => $this->title,
                ':description' => $this->description
            ]);
        }
    }

    public function delete()
    {
        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("DELETE FROM `tasks` WHERE `tasks`.`id` = :id");
        $stmt->execute([
            ':id' => $this->id
        ]);
    }

}