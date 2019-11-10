<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$string = 'My name is Arsalan';
echo $string;
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo is_string($string);
echo "<br>";
echo strlen($string);
echo "<br>";
echo strpos($string,'r');
echo "<br>";
echo substr($string, 0, 6);
echo "<br>";
echo str_replace('Arsalan', 'Ali', $string);
echo "<br>";
echo trim($string, 'My' );

//I have used the most important string funtions, but there are many others.

?>
</body>
</html>