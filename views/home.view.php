<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
    <style>
        .completed {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <?php 
        include('partials/navigation.php');
    ?>
    <h1>Home</h1>
    <ul class="list-unstyled">
        <?php
        foreach($tasks as $task) {
            $status = $task->completed == 1 ? 'completed' : 'incompleted';
            echo '<li class="'.$status.'">'.$task->description.'</li>';
        }
        ?>    
    </ul>
    <hr>
    <ul class="list-unstyled">
        <?php
        // foreach($users as $user) {
        //     echo '<li>'.$user->name.'</li>';
        // }
        ?>    
    </ul>
</body>
</html>