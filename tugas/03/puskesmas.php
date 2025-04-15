<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_puskesmas";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menampilkan semua data
$query = array(
    "kelurahan" => "SELECT * FROM kelurahan",
    "paramedik" => "SELECT * FROM paramedik",
    "pasien" => "SELECT * FROM pasien",
    "periksa" => "SELECT * FROM periksa",
    "unit_kerja" => "SELECT * FROM unit_kerja"
);

// Tampilkan data
foreach ($query as $tabel => $sql) {
    $result = $conn->query($sql);
    echo "<h2>Data $tabel</h2>";
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        $fields = array();
        while ($field = $result->fetch_field()) {
            $fields[] = $field->name;
        }
        echo "<tr>";
        foreach ($fields as $field) {
            echo "<th>$field</th>";
        }
        echo "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($fields as $field) {
                echo "<td>".$row[$field]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data";
    }
}

// Tutup koneksi
$conn->close();
?>

