<?php
include "koneksi.php";

$Q = mysqli_query($koneksi, "SELECT COUNT(nama_instansi) AS sma FROM sekolah WHERE nama_instansi LIKE 'SMA%'") or die(mysqli_error($koneksi));

if($Q){
    $posts = array();
    if(mysqli_num_rows($Q) > 0)
    {
        while($post = mysqli_fetch_assoc($Q)){
            $posts[] = $post;
        }
    }
    $data = json_encode(array('results' => $posts));
}

?>
