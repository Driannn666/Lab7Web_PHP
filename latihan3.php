<?php

    $mahasiswa = [
        "Adhyt",
        "Cibek",
        "Lepek",
        "Samits",
        "Eka",
        "Fajar",
        "Ucup"
    ];

    echo "<h3>Daftar Mahasiswa</h3>";
    echo "<ol>";

    foreach ($mahasiswa as $nama) {
        echo "<li>" . htmlspecialchars($nama) . "</li>";
    }

    echo "</ol>";

?>