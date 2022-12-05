<?php
        if(isset($_GET["submit"])){
            $result1=$_GET['Number1'];
            $result2=$_GET['Number2'];
            $operator=$_GET['operator'];
        }
        switch($operator){
            case "select type":
                echo"select a symbol";
                break;
            case "Add":
                echo"$result1+$result1";
                break;
            case "Subtract":
                echo"$result1-$result1";
                break;
            case "Divide":
                echo"$result1/$result1";
                break;
            case "Multiply":
                echo"$result1*$result1";
                break;
        }
    ?>