<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>
<body>
<style>
    *{
        margin:0px;
        padding:0px;
        box-sizing:border;
    }
    .container{
        /* text-align:center; */
        max-width:80%;
        background-color:gray;
        margin:auto;
        padding:20px;
    }

</style>
    <div class="container">
        <h1>I learn PHP</h1>

    This is a container

    <?php

    $age = 12;

    if($age > 18){
        echo "<br> You can go to the party";

    }
    else{
        echo "<br> You can not go to the party";
    }

 $languages = array(" python","C++","PHP","JAVA","nodeJs");
//echo $languages[0];

//Loop in php
// $a = 0;
// while ($a <= 10) {
//     echo "<br> this is my value: ";
//      echo $a;
//     $a++;
// }

// $a = 0;
// while ($a< count($languages)) {
//     echo "<br> The value of language is: ";
//      echo $languages[$a];
//     $a++;
// }

//do while loop

// $a = 0;
// do {
//     echo "<br> The value of language is: ";
//      echo $languages[$a];
//     $a++;
// }while ($a< count($languages))

//for loop

for($a=0; $a < count($languages) ; $a++)
 { 
    echo "<br> The value of language is: ";
    echo $languages[$a];
    // echo $a;
}
foreach ($languages as $key => $value) {
    echo "<br> The value of for each language is: ";
    echo $value;
}

function kazi(){
    echo "<br> kazi vhai";
}
kazi();
kazi();
kazi();

$str = "This";
echo "<br> ".$str;

$lenn = strlen($str);
echo "<br> the length is: ".$lenn;

 ?>
    </div>
</body>
</html>