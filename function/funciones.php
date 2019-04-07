<?php 
    function showValue($input)
    {
        if (isset($_POST[$input]))
        {
            echo "value = '{$_POST[$input]}' ";
        }
    }
    
?>