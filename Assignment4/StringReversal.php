<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reverse String</title>

</head>
<body>

<form action="StringReversal.php" method="post">
<input type="text" name="user">
<input type="submit">
</form>
    <?php

    if(!empty($_POST['user']) && isset($_POST['user'])){
        @$strin = $_POST[user];
        echo $strin;
    }
    
    
    $string = $strin;

    $stringLength = 0;

    echo "<br>";
    echo "<h3>Reversed: </h3>";

//Since i cant use inbuilt functions i used a for loop to find string length
    for ($i=0; $i < 1000 ; $i++) { 
        if (@$string[$i] != "" ) {
            $stringLength++;
        } else {
            break;
        }
    }
    //This self explanatory 
    for ($j = $stringLength-1; $j >= 0  ; $j--) { 
        echo $string[$j];
    }
    
    ?>
</body>
</html>