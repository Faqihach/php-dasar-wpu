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

<?php 
function tambah($data) {
    global $db;
    // ambil data dari tiap elemen dalam form
    $Judul = htmlspecialchars($data["Judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $cover = htmlspecialchars($data["cover"]);

    // query insert data
    $query = "INSERT INTO perpustakaan
    VALUES
    ('', '$Judul', '$penulis', '$tahun_terbit', '$penerbit', '$cover')
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>