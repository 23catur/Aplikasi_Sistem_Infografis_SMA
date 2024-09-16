<?php
include "koneksi.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$Q = mysqli_query($koneksi, "SELECT * FROM sekolah WHERE id_instansi=" . $id) or die(mysqli_error($koneksi));
if ($Q) {
    $posts = array();
    if (mysqli_num_rows($Q)) {
        while ($post = mysqli_fetch_assoc($Q)) {
            $posts[] = $post;
        }
    }
    $data = json_encode(array('results' => $posts));
}
?>
