<?php

    if($_POST){
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        echo "user name is " . $name . " user comment is " . $comment . ".";
    }

?>