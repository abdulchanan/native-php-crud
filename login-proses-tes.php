<?php 
session_start();


// echo $_SESSION["favorite_color"];
// echo $_SESSION["favorite_fruit"];

// if(isset($_SESSION["favorite_color"])) {
//     echo $_SESSION["favorite_color"] . "<br>" . $_SESSION["favorite_fruit"];
// } else {
//     echo "Session tidak bisa diambil";
// }

echo $_SESSION['username_aktif'];
echo $_SESSION['nama_lengkap'];


?>