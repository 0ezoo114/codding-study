
<?php
$host = "localhost";
$user = "richclub8";
$pw = "Forever0";
$db = "richclub8";
$connect = new mysqli($host, $user, $pw, $db);
$connect -> set_charset("utf8");

if( mysqli_connect_errno() ){
    echo "database Connect False";
} else {
    echo "database Connect True";
}
?>
<?php
    $host = 'localhost';
    $user = 'youngee01';
    $pw = 'work121722^^';
    $db = 'youngee01';
    $connect = new mysqli( $host,$user,$pw,$db);
    $connect -> set_charset('utf8');

    if( mysqli_connect_errno() ){
        echo "database Connect False";
    } else {
       // echo "database Connect True";
    }
?>