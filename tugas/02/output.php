<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Data yang Di kirim</h1>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    $prodi = $_POST["prodi"];
    $skills = isset($_POST["skill"]) ? implode(", ", $_POST["skill"]) : "Tidak ada";
    $domisili = $_POST["domisili"];
    $email = $_POST["email"];
} else {
    header("Location: index.php");
    exit();
}
?>
     </div>

</body>
</html>