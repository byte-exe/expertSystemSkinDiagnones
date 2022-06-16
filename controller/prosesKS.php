<?php
include '../model/classKonsul.php';
include '../koneksi.php';
$db = new konsul();
$ID_Konsul = $_GET['ID_Konsul'];

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$ID_Konsul = $_POST['ID_Konsul'];
	$db->truncateGP();
	$db->truncate_ya_Penyakit();
    $db->input($_POST['ID_Konsul'], $_POST['namaPasien'], $_POST['usia'], $_POST['jenisKelamin'], $_POST['noHP'], $_POST['alamat'], $_POST['tglKonsul']);
	header ("location:../formPenentuanGP.php?ya=0&ID_Konsul=$ID_Konsul&ID_Gejala=G001&parent=-");
    
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../admin/listKonsultasi.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../admin/listKonsultasi.php");
}elseif ($aksi == "update") {
	$db->update($_POST['ID_Konsul'], $_POST['namaPasien'], $_POST['usia'], $_POST['jenisKelamin'], $_POST['noHP'], $_POST['alamat']);
	header("location:../admin/listKonsultasi.php");
}elseif ($aksi == "konsulGP") {
	
	$db->truncate();
	$db->truncate_ya_JK();
	header ("location:../formPenentuanJK.php?ya=0&ID_Konsul=$ID_Konsul&ID_FR=FR001&parent=-");
}
?>