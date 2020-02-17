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
<h2 style="text-align: center">DATA IDENTITAS Santri</h2>
<br/>
<br/>
<table style="width:100%">
        <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIS</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Wali</th>
        <th>Kelas Pondok</th>
        <th>Kelas Payung</th>
        <th>Semester</th>
        </tr>

        <?php
        $no = 1;
        foreach ($identitas as $idnt) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $idnt->nama?></td>
            <td><?php echo $idnt->nis?></td>
            <td><?php echo $idnt->tempat_lahir?></td>
            <td><?php echo $idnt->tanggal_lahir?></td>
            <td><?php echo $idnt->alamat?></td>
            <td><?php echo $idnt->wali?></td>
            <td><?php echo $idnt->kelas_pondok?></td>
            <td><?php echo $idnt->kelas_payung?></td>
            <td><?php echo $idnt->semester?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
      </body></html>