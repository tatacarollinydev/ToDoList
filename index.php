<?php
 
session_start();
 
if( !isset($_SESSION['tasks']) ) {
    $_SESSION['tasks'] = array();
}
 
if ( isset($_GET['task_name']) ) {
    array_push($_SESSION['tasks'], $_GET['task_name']);
    unset($_GET['task_name']);
}
 
if ( isset($_GET['clear']) ) {
    unset($_SESSION['tasks']);
}
 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciador de Tarefas</h1>
        </div>
        <div class="form">
            <form action="" method="get">
                <label for="task_name">Tarefa:</label>
                <input type="text" name="task_name" placeholder="Nome da Tarefa">
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="separator">
           
        </div>
        <div class="list-task">
            <?php
                if ( isset($_SESSION['tasks']) ) {
                    echo "<ul>";
 
                    foreach($_SESSION['tasks'] as $key => $task ) {
                        echo "<li>$task</li>";
                    }
 
                    echo "</ul>";
                }
            ?>
 
            <form action="" method="get">
                <input type="hidden" name="clear" value="clear">
                <button type="submit" class="btn-clear">Limpar Tarefas</button>
            </form>
        </div>
        <div class="footer">
            <p>Desenvolvido por Thaynna :)</p>
        </div>
    </div>
</body>
</html>