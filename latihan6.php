<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>

    <h2>Form Data Mahasiswa</h2>

    <form method="POST" action="">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <br><br>

        <label for="prodi">Program Studi:</label>
        <input type="text" id="prodi" name="prodi" required>

        <br><br>

        <button type="submit" name="kirim">
            Kirim Data
        </button>

    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $nama = trim($_POST["nama"] ?? "");
            $prodi = trim($_POST["prodi"] ?? "");

            if ($nama === "" || $prodi === "") {

                echo "<p>Semua kolom wajib diisi.</p>";

            } else {

                echo "<h3>Data Diterima</h3>";

                echo "Nama: " .
                     htmlspecialchars($nama, ENT_QUOTES, "UTF-8") .
                     "<br>";

                echo "Program Studi: " .
                     htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
            }
        }

    ?>

</body>
</html>