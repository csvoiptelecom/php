<?php
    function soma(int ...$valores):string{
        
      return array_sum($valores);
        
    }

    echo soma(2, 4);