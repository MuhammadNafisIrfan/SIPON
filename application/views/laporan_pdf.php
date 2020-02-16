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
<h2 style="text-align: center">DATA Pelanggaran Santri</h2>
<br/>
<br/>
<table style="width:100%">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Pelanggaran</th>
        <th>Tanggal</th>
        </tr>

        <?php
        $no = 1;
        foreach ($pelanggaran as $pg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $pg->nama_santri?></td>
            <td><?php echo $pg->pelanggaran?></td>
            <td><?php echo $pg->tanggal?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
      </body></html>