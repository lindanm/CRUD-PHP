<?php  
 include "koneksi.php";

 $id_param = abs(intval($_GET['id_param']));
 $query="SELECT * FROM tabelartikel WHERE id_artikel = '$id_param' LIMIT 1";
 $sql = mysqli_query($connect,$query);

 while($data=mysqli_fetch_array($sql)) {
    echo '<p><strong>'.$data['judul_artikel'].'</strong></p>';
    echo "<p>".$data['isi_artikel']."</p>";
    echo "<td><a href='beranda.php?'> Back</a></td>";
    echo "<td><a href='edit-artikel.php?id_param=".$data['id_artikel']."'> Edit</a></td>";
    echo "<td><a href='hapus-artikel.php?id_param=".$data['id_artikel']."'> Hapus</a></td>";
 } 
?>