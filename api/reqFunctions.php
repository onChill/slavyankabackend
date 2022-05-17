<?php

require 'testFunctions.php';

    function getResult ($connection, $id, $table) {
        $user = mysqli_query($connection, "SELECT id, result FROM " . $table . "  WHERE `id` = '" . $id . "'");
        $user = mysqli_fetch_assoc($user);

        echo json_encode($user);
    }

    function getResults ($connection, $table) {

        $users = mysqli_query($connection, "SELECT id, result FROM " . $table);
    
        $usersList = [];
    
        while($user = mysqli_fetch_assoc($users)) {
            $usersList[] = $user;
        }
    
        echo json_encode($usersList);
    }

    function newUser ($connection, $table) {
        $name_surname = $_POST['name'] . ' ' . $_POST['surname'];
        $school = $_POST['school'];
        $result = $_POST['result'];

        mysqli_query($connection, "INSERT INTO " . $table ." ( `name_surname`, `school`, `result`) VALUES ('" . $name_surname . "', '" . $school . "', '" . $result . "') ");

        $res = [
            "status" => true,
            "post_id" => mysqli_insert_id($connection)
        ];

        echo json_encode($res);
    }

?>