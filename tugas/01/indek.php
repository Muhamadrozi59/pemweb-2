<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
            background: #f8f8d9;
            padding: 20px;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .radio-group, .checkbox-group {
            display: flex;
            gap: 10px;
        }
        button {
            background: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2><strong>Percobaan 1: Form Registrasi</strong></h2>
    <div class="container">
        <h3>Form Registrasi IT Club Data Science</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" required>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio-group">
                    <input type="radio" name="gender" value="Laki-Laki" required> Laki-Laki
                    <input type="radio" name="gender" value="Perempuan" required> Perempuan
                </div>
            </div>
            <div class="form-group">
                <label>Program Studi</label>
                <select name="prodi">
                    <option>Sistem Informasi</option>
                    <option>Teknik Informatika</option>
                    <option>Manajemen Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label>Skill Web & Programming</label>
                <div class="checkbox-group">
                    <input type="checkbox" name="skill[]" value="HTML"> HTML
                    <input type="checkbox" name="skill[]" value="CSS"> CSS
                    <input type="checkbox" name="skill[]" value="JavaScript"> JavaScript
                    <input type="checkbox" name="skill[]" value="RWD Bootstrap"> RWD Bootstrap
                    <input type="checkbox" name="skill[]" value="PHP"> PHP
                    <input type="checkbox" name="skill[]" value="Python"> Python
                    <input type="checkbox" name="skill[]" value="Java"> Java
                </div>
            </div>
            <div class="form-group">
                <label>Tempat Domisili</label>
                <select name="domisili">
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                    <option>Yogyakarta</option>
                </select>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>