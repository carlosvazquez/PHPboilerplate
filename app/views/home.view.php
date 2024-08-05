<?php include('partials/header.php'); ?>
<?php include('partials/navigation.php'); ?>
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
<?php include('partials/footer.php'); ?>
