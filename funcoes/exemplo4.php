<?php

    function ola(){

        $argumentos = func_get_args();
        return $argumentos;
    }
    print_r(ola("ola bom dia", 10));