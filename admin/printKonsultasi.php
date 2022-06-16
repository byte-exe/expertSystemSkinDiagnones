<?php
 

  
  include "../koneksi2.php";
  include "../model/classKonsul.php";
  include "model/classPenyakit.php";
  $db = new konsul();
  $py = new penyakit();
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

<h3>Laporan Data Konsultasi Pasien</h3>
<h2>RSUD M. Natsir Solok</h2>

</center>



    <table  width="100%" border="1">
                <thead>
                    <tr>
                    <th style="text-align:center;">No.</th>
                    <th style="text-align:center;" hidden>ID Pasien</th>
                    <th style="text-align:center;">Nama Pasien</th>
                    <th style="text-align:center;">Usia</th>
                    <th style="text-align:center;">Jenis Kelamin</th>
                    <th style="text-align:center;">No Handphone</th>
                    <th style="text-align:center;">Alamat</th>
                    <th style="text-align:center;">Tanggal Konsultasi</th>
                    <th style="text-align:center;">Penyakit Kulit yang diderita</th>
                    <th style="text-align:center;">Rekomendasi Pencegahan</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
                   $data = mysqli_query($con, "SELECT  * FROM konsultasi
                   join penyakit
                   using(ID_Penyakit)");
                    while ($m = mysqli_fetch_array($data)) {
                    $i++;
                ?>
                    <tr>
                        <td style="text-align:center;"><?php print $i;?></td>
                        <td style="text-align:center;" hidden><?php print $m['ID_Konsul'];?></td>
                        <td style="text-align:center;"><?php print $m['namaPasien'];?></td>
                        <td style="text-align:center;"><?php print $m['usia'];?></td>
                        <td style="text-align:center;"><?php print $m['jenisKelamin'];?></td>
                        <td style="text-align:center;"><?php print $m['noHP'];?></td>
                        <td style="text-align:center;"><?php print $m['alamat'];?></td>
                        <td style="text-align:center;"><?php print $m['tglKonsul'];?></td>
                        <td style="text-align:center;"><?php print $m['ketPenyakit'];?></td>
                        <td style="text-align:center;"><?php print $m['opsiTR'];?></td>

                        
                    </tr>

                

                    

                <?php
                    }
                ?>
                
                
                </tbody>
            </table>



            


 </table> 
 <table>
 <script>
 window.print()
 </script>
 </table>

  
</body>
</html>