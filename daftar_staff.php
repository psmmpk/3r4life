<?php
include ('config.php');

$nama=$_POST["nama"];
$no_kp=$_POST["no_kp"];
$tarikh_mula=$_POST["tarikh_mula"];
$tarikh_tamat=$_POST["tarikh_tamat"];
$jumlah_cuti=$_POST["jumlah_cuti"];
$sebab_cuti=$_POST["sebab_cuti"];
$id_pengganti=$_POST["id_pengganti"];
//$id_penyokong=$_POST["id_penyokong"];
//$id_pelulus=$_POST["id_pelulus"];

echo "Nama : $nama <br/>
	  No Kad Pengenalan : $no_kp <br/>
	  Tarikh Mula Bercuti : $tarikh_mula <br/>
	  Tarikh Tamat Bercuti  : $tarikh_tamat <br/>
	  Jumlah Cuti : $jumlah_cuti <br/>
	  Catatan / Sebab bercuti : $sebab_cuti <br/>
	  
	  ";
	  
	
 $sql="INSERT INTO peribadi (`nama`, `no_kp`, `tarikh_mula`, `tarikh_tamat`, `jumlah_cuti`, 
 `sebab_cuti`,id_pengganti`)
VALUES ('$nama', '$no_kp', '$tarikh_mula', '$tarikh_tamat', '$jumlah_cuti', '$sebab_cuti', '$sebab_cuti','$id_pengganti')";

mysql_query($sql);


?>