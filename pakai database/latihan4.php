<?php
$servername = "localhost";
$username = "root";
$database = "db_akademis";
$password = "";

//membuat koneksi database
$conn = new mysqli($servername, $username, $password, $database);

//check koneksi
if($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}

//query
$sql = "SELECT * from mahasiswa";
$result =  $conn->query($sql);

if($result->num_rows > 0) {
    //menampilkan output   
    while($row = $result->fetch_assoc()) {
        echo"NIM: " . $row["nim"]. " || NAMA: " . $row["nama"]. " || UMUR: " . $row["umur"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<?php //fetch assoc -> untuk mengambik baris hasil sebagai array asosiatif (array yg tidak menjadikan nomor sebagai indeksnya)
?>