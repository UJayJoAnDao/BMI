<?php
        $name = $_GET['name'];
        $age = $_GET['age'];
        $height = $_GET['height']/100;
        $squ = $height*$height;
        $weight = $_GET['weight'];
        $BMI = $weight/$squ;
        echo $name."先生/小姐:<br>";
        echo "您的年齡:". $age."<br>";
        echo "您的身高:". ($height*100)."<br>";
        echo "您的體重". $weight."<br>";
        echo "您的BMI值為:". $BMI."<br>";
?>