
<?php


$dbhost = "localhost";
$dbname = "StaffBD";
$username = "root";
$password = "";

$db = new mysqli($dbhost,$username,$password,$dbname);


function get_person_all() {
    global $db;
    $person = $db->query("SELECT * FROM user");
    return $person;
}

function get_img($temp) {
    global $db;
    $image = $db->query("SELECT `image` FROM ImgBD WHERE id=$temp");
    return $image;
}


