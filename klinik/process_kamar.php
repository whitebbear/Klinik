<?php
require 'db.php';

// Proses update kamar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST['pagi'] as $id => $pagi) {
        $siang = $_POST['siang'][$id];

        $stmt = $conn->prepare("UPDATE ketersediaan_kamar SET pagi = :pagi, siang = :siang WHERE id = :id");
        $stmt->bindParam(':pagi', $pagi);
        $stmt->bindParam(':siang', $siang);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Redirect kembali ke edit_kamar.php setelah perubahan berhasil disimpan
    header('Location: edit_kamar.php');
    exit();
}
?>
