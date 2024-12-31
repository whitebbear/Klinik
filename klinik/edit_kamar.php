<?php
require 'db.php';

// Proses update kamar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST['pagi'] as $id => $pagi) {
        $siang = $_POST['siang'][$id];

        // Update data di database
        $stmt = $conn->prepare("UPDATE ketersediaan_kamar SET pagi = :pagi, siang = :siang WHERE id = :id");
        $stmt->bindParam(':pagi', $pagi);
        $stmt->bindParam(':siang', $siang);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Redirect ke index.html setelah update selesai
    header('Location: index.php');
    exit();
}

// Ambil data kamar dari database
$stmt = $conn->query("SELECT * FROM ketersediaan_kamar");
$kamar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ketersediaan Kamar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 30px;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .table-container {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        footer {
            margin-top: 30px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h2>Edit Ketersediaan Kamar</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="table-container">
                    <form method="POST" action="">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Nomor Kamar</th>
                                    <th scope="col">Pagi (07.00-12.00)</th>
                                    <th scope="col">Siang (13.00-20.00)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($kamar)): ?>
                                    <?php foreach ($kamar as $row): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($row['nomor_kamar']); ?></td>
                                            <td>
                                                <select name="pagi[<?php echo $row['id']; ?>]" class="form-select">
                                                    <option value="Tersedia" <?php if ($row['pagi'] == 'Tersedia') echo 'selected'; ?>>Tersedia</option>
                                                    <option value="Penuh" <?php if ($row['pagi'] == 'Penuh') echo 'selected'; ?>>Penuh</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="siang[<?php echo $row['id']; ?>]" class="form-select">
                                                    <option value="Tersedia" <?php if ($row['siang'] == 'Tersedia') echo 'selected'; ?>>Tersedia</option>
                                                    <option value="Penuh" <?php if ($row['siang'] == 'Penuh') echo 'selected'; ?>>Penuh</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3" class="text-center">Data kamar tidak tersedia.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        © 2024 Klinik Hemodialisis PMI DIY. All Rights Reserved.
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
