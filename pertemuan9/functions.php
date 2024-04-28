<?php 
// mengkoneksi dengan database mySQL
$db = mysqli_connect("localhost", "root", "", "phpwpu");

// Query data
function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
};
?>