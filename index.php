<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Hitung HPP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #e8f5e9;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Aplikasi Menghitung HPP</h2>

    <form method="post">

        <label>Nama Produk</label>
        <input type="text" name="produk" placeholder="Masukkan nama produk" required>

        <label>Persediaan Awal</label>
        <input type="number" name="awal" placeholder="Rp 0" required>

        <label>Pembelian Bersih</label>
        <input type="number" name="pembelian" placeholder="Rp 0" required>

        <label>Persediaan Akhir</label>
        <input type="number" name="akhir" placeholder="Rp 0" required>

        <button type="submit" name="hitung">Hitung HPP</button>

    </form>

    <?php
    if (isset($_POST['hitung'])) {

        $produk = $_POST['produk'];
        $awal = $_POST['awal'];
        $pembelian = $_POST['pembelian'];
        $akhir = $_POST['akhir'];

        // Rumus HPP
        $hpp = $awal + $pembelian - $akhir;
    ?>

        <div class="hasil">
            <h3>Hasil Perhitungan</h3>

            <p><b>Nama Produk:</b> <?= htmlspecialchars($produk); ?></p>

            <p>
                <b>HPP:</b>
                Rp <?= number_format($hpp, 0, ',', '.'); ?>
            </p>
        </div>

    <?php } ?>

</div>

</body>
</html>
