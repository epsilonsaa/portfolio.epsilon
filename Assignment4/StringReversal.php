<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reverse String</title>

</head>
<body>
    <?php
    
    $string = 'could be any string';

    echo '<h2>Original String: </h2> ';
    echo $string;
    echo '<h2>Reversed: </h2> ';

    $stringLength = 0;

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