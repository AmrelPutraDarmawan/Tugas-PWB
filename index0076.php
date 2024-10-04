<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Diskon Belanja</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f9f9f9;">

    <h1 style="text-align: center; color: #333;">Perhitungan Diskon Belanja</h1>
    
    <form method="post" action="" style="max-width: 400px; margin: 20px auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <div style="margin-bottom: 15px;">
            <label for="totalBelanja0076" style="display: block; margin-bottom: 5px;">Total Belanja: Rp</label>
            <input type="number" id="totalBelanja0076" name="totalBelanja0076" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px;">Apakah Member?</label>
            <label style="margin-right: 10px;">
                <input type="radio" name="member0076" value="ya" required> Ya
            </label>
            <label>
                <input type="radio" name="member0076" value="tidak"> Tidak
            </label>
        </div>
        
        <input type="submit" value="Hitung" style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #007BFF; color: white; cursor: pointer; transition: background-color 0.3s;">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalBelanja0076 = $_POST['totalBelanja0076'];
        $member0076 = $_POST['member0076'];

        $diskon0076 = 0; 

        if ($member0076 == "ya") {

            $diskon0076 = 10; 

            if ($totalBelanja0076 >= 500000) {
                $diskon0076 = 20; 
            } elseif ($totalBelanja0076 >= 300000) {
                $diskon0076 = 15;
            }

        } else {

            if ($totalBelanja0076 >= 500000) {
                $diskon0076 = 10; 
            }
        }

        $jumlahDiskon0076 = ($diskon0076 / 100) * $totalBelanja0076;
        $totalAkhir0076 = $totalBelanja0076 - $jumlahDiskon0076;

        echo "<h2 style='text-align: center;'>Hasil Perhitungan:</h2>";
        echo "<p style='text-align: center;'>Total Belanja: Rp " . number_format($totalBelanja0076, 0, ',', '.') . "</p>";
        echo "<p style='text-align: center;'>Diskon: " . $diskon0076 . "% (Rp " . number_format($jumlahDiskon0076, 0, ',', '.') . ")</p>";
        echo "<p style='text-align: center;'>Total yang Harus Dibayar: Rp " . number_format($totalAkhir0076, 0, ',', '.') . "</p>";
    }
    ?>

</body>
</html>
