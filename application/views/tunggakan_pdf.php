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
<h2 style="text-align: center">DATA Tunggakan Santri</h2>
<br/>
<br/>
<table style="width:100%">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nominal</th>
        <th>Keterangan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($tunggakan as $tgk) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tgk->nama?></td>
            <td><?php echo $tgk->nominal?></td>
            <td><?php echo $tgk->keterangan?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
      </body></html>