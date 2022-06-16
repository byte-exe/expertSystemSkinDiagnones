<?php
    include "model/classGejala.php";
    $db = new Gejala();
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

<h3>Laporan Data Gejala Penyakit</h3>
<h2>RSUD M. Natsir Solok</h2>

</center>

<table  width="100%" border="1">
<thead>
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Kode Gejala</th>
                        <th style="text-align:center;">Keterangan</th>
                        <th style="text-align:center;">Pertanyaan</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
					$data = $db->tampilGejala();
					if($data!=0){
					    foreach($data as $m){
                        $i++;
                ?>
                    <tr>
                        <td style="text-align:center;"><?php print $i;?></td>
                        <td style="text-align:center;"><?php print $m['ID_Gejala'];?></td>
                        <td style="text-align:center;"><?php print $m['ketGejala'];?></td>
                        <td style="text-align:center;"><?php print $m['tanyaGejala'];?></td>
                       
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