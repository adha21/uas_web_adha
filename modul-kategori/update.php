<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$kategori_id = $_POST['id_kategori'];
$ktg = $_POST['nama_kategori'];

#3. menulis query
$sunting = "UPDATE kategoris SET nama_kategori='$ktg' WHERE id_kategori='$kategori_id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>