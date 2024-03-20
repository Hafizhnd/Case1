<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Pythagoras 3D</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
    <header>
        <div class = "wrapper">
            <h1><?php include 'header.php'; ?></h1>
        </div>
    </header>

    
        <div class="container">
            <h1 class="mt-4">Hasil Pythagoras 3D</h1>
            <form action="formPythagoras.php" method="post">
            <div>
            <h3>
            <?php
                if (isset($_POST['submit'])) {
                    $x = $_POST['x'];
                    $y = $_POST['y'];
                    $z = $_POST['z'];
                    $hasil = sqrt(pow($x, 2) + pow($y, 2) + pow($z, 2));
                    echo "Panjang x = " . $x . "<br>";
                    echo "Panjang y = ". $y ."<br>";
                    echo "Panjang z = ". $z ."<br><br>";
                    echo "Rumus Pythagoras 3D: <br>√(x² + y² + z²)<br><br>";
                    echo "Hasil Perhitungan: <br>" . $hasil;
                    echo "<br><br>";
                }
            ?>
            </h3>
            </div>
            <button type="submit" class="btn btn-dark" name="submit">Kembali</button>
            </form>
        </div>
    
    
    <footer>
        <div class = footer>
            <h3><?php include 'footer.php'; ?></h3>
        </div>
    </footer>
    </body>
</html>
