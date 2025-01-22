<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$jdl_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$ktg_id = $_POST['kategori_id'];
$cover = $_POST['cover_buku'];

#3. menulis query
$sunting = "UPDATE bukus SET judul_buku='$jdl_buku', penulis='$penulis', kategori_id='$ktg_id', cover_buku='$cover' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>