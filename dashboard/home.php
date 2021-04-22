<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function myfunc(){
            $num=89;echo $num;
        }
        myfunc();
    ?>
    <br>
    <hr>
    <?php
        echo strlen("hello world");//ene ni urtiig ni oldog zuil
    ?>
    <br>
    <hr>
    <?php
        echo strrev("hello world");//araas ni bichdeg zuil dlrow edr geed
    ?>
    <br> <hr>
    <?php
    //soligdoh jishee
    $oldtxt = "hello world";
    $newtxt = str_replace("world","soligd",$oldtxt); 
    echo $newtxt;
    ?>
</body>
</html>