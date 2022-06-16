<?php

    include "model/classHP.php";
    $db = new Home();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak laporan</title>
</head>
<body>


<center>

<h3>Laporan Data Pengobatan Penyakit Kulit</h3>
<h2>RSUD M. Natsir Solok</h2>

</center>

<table  width="100%" border="1">
<thead>
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Kode Pengobatan</th>
                        <th style="text-align:center;">Keterangan</th>
                     
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
					$data = $db->tampilHP();
					if($data!=0){
					    foreach($data as $m){
                        $i++;
                ?>
                    <tr>
                        <td style="text-align:center;"><?php print $i;?></td>
                        <td style="text-align:center;"><?php print $m['ID_HP'];?></td>
                        <td style="text-align:center;"><?php print $m['ketHP'];?></td>
                     
                    </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>



 <table>
 <script>
 window.print()
 </script>
 </table>

  
</body>
</html>