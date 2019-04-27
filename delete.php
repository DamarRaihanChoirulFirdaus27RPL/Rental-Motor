<?php

include 'config.php';
$id_rental = $_GET['id_rental'];

$query = "DELETE FROM heho WHERE id_rental = $id_rental";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "<script>alert('Data Berhasil dihapus');document.location.href='admin.php'</script>";
}
else
{
    echo "Gagal hapus data <br>";
}
?>
