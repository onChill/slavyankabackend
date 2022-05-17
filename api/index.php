<?php

    header('Content-type: json/application');
    $connection = mysqli_connect('api', 'root', '', 'tests');

    require 'reqFunctions.php';

    $q = $_GET['q'];
    $params = explode('/', $q);

    $test = $params[0];
    $type = $params[1];
    $id = $params[2];

    // ddo20

    if ($test === 'ddo20'){

        // get запрос 
        if ($type === 'getResult'){

            if (isset($id)) {

                getResult($connection, $id, "`ddo20`");

            } else {
    
                getResults($connection, "`ddo20`");
            }
    
        }

        // post запрос
        if ($type === 'newUser'){

            newUser($connection, "`ddo20`");
        }

    }


    // ddo50

    if ($test === 'ddo50'){

        // get запрос 
        if ($type === 'getResult'){

            if (isset($id)) {

                getResult($connection, $id, "`ddo50`");

            } else {
    
                getResults($connection, "`ddo50`");
            }
    
        }

        // post запрос
        if ($type === 'newUser'){

            newUser($connection, "`ddo50`");
        }

    }

    // golland

    if ($test === 'golland'){

        // get запрос 
        if ($type === 'getResult'){

            if (isset($id)) {

                getResult($connection, $id, "`golland`");

            } else {
    
                getResults($connection, "`golland`");
            }
    
        }
    
        // post запрос
        if ($type === 'newUser'){

            newUser($connection, "`golland`");
        }
    
    }

?>