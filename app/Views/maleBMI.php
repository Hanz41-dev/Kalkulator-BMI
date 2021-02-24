<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi BMI (Body Mass Index)</title>
    <meta charset="UTF-8">
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <h1> Male BMI Kalkulator </h1>
        <form methot="get" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="tb" class="form-label">Tinggi Badan</label>
                <input type="text" class="form-control" id="tb" name="tb">
            </div>
            <div class="mb-3">
                <label for="bb" class="form-label">Berat Badan</label>
                <input type="text" class="form-control" id="bb" name="bb">
            </div>
            <input type="submit" name="submit" value="Hitung BMI">
        </form>
    <div>
    <?php
        // Action form
        if (isset($_GET['submit'])) {
            // Input form
            $nama        = $_GET['nama'];
            $tb            = $_GET['tb']/100;
            $bb            = $_GET['bb'];
            /* Rumus BMI adalah:
            BMI = BERAT BADAN / KUADRAT TINGGI BADAN
            */   
            // Hitung BMI
            $bmi        = $bb / ($tb * $tb);
            // Mencetak hasil
            echo '<hr><div class="hasil">';
            echo "<h3>Hasil perhitungan BMI</h3>";
            echo "Nama Anda: $nama<br>";
            echo "Jenis kelamin: Laki-Laki<br>";
            echo "Tinggi Badan: $tb meter<br>";
            echo "Berat Badan: $bb kilogram<br>";
            echo "<hr>BMI Anda: ".number_format($bmi);
            echo "<h4>Kesimpulan:</h4>";
            // Menghitung dan mencetak kesimpulan
            if($bmi < 15.5) {
                echo "Anda mengalami anoreksia";
            }elseif ($bmi < 18.5 ) {
                echo "Anda mengalami kekurangan gizi";
            }elseif ($bmi < 25 ) {
                echo "Anda memiliki berat badan normal";
            }elseif ($bmi < 30 ) {
                echo "Anda memiliki overweight";
            }elseif ($bmi < 35 ) {
                echo "Anda mengalami Obesitas Level 1";
            }elseif ($bmi < 40 ) {
                echo "Anda mengalami Obesitas Level 2";
            }else {
                echo "Anda mengalami Obesitas Akut";
            }
            // closing div
            echo '</div>';
        }
        ?>
</body>
</html>