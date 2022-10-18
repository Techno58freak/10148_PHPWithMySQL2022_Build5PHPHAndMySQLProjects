<?php 
    //host
    $host = "192.168.178.32";

    //dbname
    $dbname = "10148_auth-sys";

    //user
    $user = "udemy";

    //pass
    $pass = "Udemy2022##";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
    
//     if($conn == true) {
//         echo "it's working fine";
//     } else {
//         echo "connection is wrong: err";
//     }
?>