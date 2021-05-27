<?php

require_once ( __DIR__ . '\..\Models\Task.php' );

class TaskController
{
    public function index()
    {
        $view = new View('Task');
        $view->set('title', 'Taken');
        $view->set('tasks', Task::getAll());

        $view->render();
    }

    public function add()
    {
        $view = new View('Task.edit');
        $view->set('title', 'Taak');

        $view->render();
    }

    public function edit()
    {
        if( ! isset($_GET['id']) )
            throw new Exception('Geen id gevonden!');

        $task = new Task();
        $task->getSingle($_GET['id']);

        $view = new View('Task.edit');
        $view->set('title', 'Taak');
        $view->set('id', $_GET['id']);
        $view->set( 'person', $task->get('person') );
        $view->set( 'taskTitle', $task->get('title') );
        $view->set( 'description', $task->get('description') );

        $view->render();
    }

    public function save()
    {
        $task = new Task($_POST['person'], $_POST['title'], $_POST['description']);
        $task->save();
        header("Location: index.php?controller=Task");
    }

    public function delete()
    {
        if( ! isset($_GET['id']) )
            throw new Exception('Geen id gevonden!');
        
        $task = new Task('', '', '', $_GET['id']);
        $task->delete();

        header("Location: index.php?controller=Task");
    }
}
