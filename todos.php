
<?php

    $todosJSON = file_get_contents('db/todos');

    $todos = json_decode($todosJSON, true);
    
    $newTodo = json_decode(file_get_contents('php://input'), true);
    $todos[] = $newTodo;
    
    $updatedTodosJSON = json_encode($todos, JSON_PRETTY_PRINT);
    
    file_put_contents('db/todos.json', $updatedTodosJSON);
    
    header('Content-Type: application/json');
    echo json_encode($newTodo);

?>