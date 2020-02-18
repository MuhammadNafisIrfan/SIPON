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
<h2 style="text-align: center">DATA RIWAYAT Santri</h2>
<br/>
<br/>
<table style="width:100%">
<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alasan</th>
        <th>Tanggal Keluar</th>
        <th>Tanggal Masuk</th>
        </tr>

        <?php
        $no = 1;
        foreach ($perizinan as $izin) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $izin->nama_santri?></td>
            <td><?php echo $izin->alasan?></td>
            <td><?php echo $izin->tanggal_keluar?></td>
            <td><?php echo $izin->tanggal_masuk?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
      </body></html>