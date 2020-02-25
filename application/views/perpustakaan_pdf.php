<!DOCTYPE html>
<html><head>
    <title></title>
</head><style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style><body>
<h2 style="text-align: center">DATA Peminjaman Inventaris</h2>
<br/>
<br/>
<table style="width:100%">
<tr>
        <th>No</th>
        <th>Nama</th>
        <th>PLP</th>
        <th>Pinjaman</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        </tr>

        <?php
        $no = 1;
        foreach ($perpustakaan as $perpus) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $perpus->nama_santri?></td>
            <td><?php echo $perpus->plp?></td>
            <td><?php echo $perpus->pinjaman?></td>
            <td><?php echo $perpus->tanggal_minjam?></td>
            <td><?php echo $perpus->tanggal_balik?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
      </body></html>