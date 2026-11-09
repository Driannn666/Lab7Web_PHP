<?php

    function hitungDiskon($harga, $persen) {

        $potongan = $harga * ($persen / 100);

        return $harga - $potongan;
    }

    $hargaAkhir = hitungDiskon(150000, 10);

    echo "Harga awal: Rp150.000<br>";

    echo "Diskon: 10%<br>";

    echo "Harga setelah diskon: Rp" .
         number_format($hargaAkhir, 0, ",", ".");

?>