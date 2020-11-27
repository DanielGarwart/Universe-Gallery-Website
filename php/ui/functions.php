<?php

// CONSTRUCT BARRIER-FREE HEAD
function head($title, $stylesheet) {
return "
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$title</title>
    <link rel='stylesheet' href = '/css/$stylesheet.css'>
    </head>
";
}

function newsPost($key, $type, $object) {
return "
    <div class='post'>
        <h4 class='blog_name'><span class='un'>$key</span></h4>
        <p>$object</p>
        <img src='/img/$type/$key.jpg' alt = '$key'></img>
    </div>
";
}

// Must satisfy get_name() as class method !!!
function uiFeed($array, $type) {
echo "<div class='ui'>";
    foreach($array as $object) {
        $key = $object->get_name();
        echo newsPost($key, $type, $object);
    }
echo "</div>";
}

function headerBox($headerString) {
return "
    <div class = 'header-box'
        <h1>{$headerString}</h1>
    </div>
    <p></p>
";
}

function connect($host, $db_name, $user, $passwd) {
    try {
        return new PDO("mysql:host=$host;dbname=$db_name", $user, $passwd);
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
}

function fmt($arr) {
    return implode(", ", $arr);
}