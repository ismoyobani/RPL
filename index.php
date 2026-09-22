<?php
$namaAplikasi = 'PRAKTIKUM RPL';
$waktu = date('d-m-Y H:i:s');

$alatLaboratorium = [
    [
        'nama' => 'Mikroskop',
        'jumlah' => 5,
        'kondisi' => 'Baik'
    ],
    [
        'nama' => 'Multimeter',
        'jumlah' => 8,
        'kondisi' => 'Baik'
    ],
    [
        'nama' => 'Komputer',
        'jumlah' => 10,
        'kondisi' => 'Baik'
    ]
];
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($namaAplikasi) ?></title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="header-content">
            <p class="label">LABORATORIUM</p>

            <h1><?= htmlspecialchars($namaAplikasi) ?></h1>

            <p class="subtitle">
                Mengelola inventaris dengan sederhana dan teratur.
            </p>
        </div>
    </header>

    <main class="container">

        <section class="welcome">
            <div class="welcome-icon">🌿</div>

            <div>
                <h2>Selamat Datang</h2>

                <p>
                    Aplikasi praktikum Rekayasa Perangkat Lunak
                    untuk membantu mengelola inventaris laboratorium.
                </p>
            </div>
        </section>

        <section>
            <div class="section-title">
                <p class="label">INVENTARIS</p>
                <h2>Daftar Alat Laboratorium</h2>
            </div>

            <div class="alat-container">

                <?php foreach ($alatLaboratorium as $alat): ?>

                    <div class="alat">

                        <div class="alat-icon">
                            🔬
                        </div>

                        <h3>
                            <?= htmlspecialchars($alat['nama']) ?>
                        </h3>

                        <p class="jumlah-label">
                            Jumlah tersedia
                        </p>

                        <p class="jumlah">
                            <?= htmlspecialchars($alat['jumlah']) ?>
                            <span>unit</span>
                        </p>

                        <span class="kondisi">
                            ● <?= htmlspecialchars($alat['kondisi']) ?>
                        </span>

                    </div>

                <?php endforeach; ?>

            </div>
        </section>

        <div class="waktu">
            <span>🕒</span>
            Waktu server:
            <?= htmlspecialchars($waktu) ?>
        </div>

    </main>

    <footer>
        <p>🌱 Sistem Inventaris Laboratorium</p>
        <small>Praktikum Rekayasa Perangkat Lunak</small>
    </footer>

</body>

</html>