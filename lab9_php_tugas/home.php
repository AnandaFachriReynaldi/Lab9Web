<?php require('header.php'); ?>

<div class="container">
    <h1>Data Barang</h1>
    <div class="main">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><img src="gambar/<?= $row['gambar'];?>" alt="<?=
                        $row['nama'];?>"></td>
                        <td><?= $row['nama'];?></td>
                        <td><?= $row['kategori'];?></td>
                        <td><?= $row['harga_beli'];?></td>
                        <td><?= $row['harga_jual'];?></td>
                        <td><?= $row['stok'];?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row['id_barang'];?>">Ubah</a>
                            <a href="hapus.php?id=<?= $row['id_barang'];?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; else: ?>
                        <tr>
                            <td colspan="7">Belum Ada Data</td>
                        </tr>
                        <?php endif; ?>
        </table>
    </div>
</div>

<?php require('footer.php'); ?>