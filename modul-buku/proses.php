<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$jdl_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$ktg_id = $_POST['kategori_id'];
$cover = $_POST['cover_buku'];

#3. menulis query
$simpan = "INSERT INTO bukus (judul_buku,penulis,kategori_id,cover_buku) VALUES ('$jdl_buku','$penulis','$ktg_id','$cover')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>