<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Daftar Produk</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk ID</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produk as $p): ?>
                    <tr>
                        <td><?= $p['ProdukID'] ?></td>
                        <td><?= $p['NamaProduk'] ?></td>
                        <td>Rp <?= number_format($p['HargaProduk'], 2, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>