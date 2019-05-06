<?php
    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>"joao Cesar",
        'idade'=>47
    ));
    array_push($pessoas, array(
        'nome'=>"Gisele Maria",
        'idade'=>39
    ));

   echo json_encode($pessoas);