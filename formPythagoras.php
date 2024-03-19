<!DOCTYPE html>
<html>
    <head>
        <title>Form Pythagoras 3D</title>
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
            <form action="hasilPythagoras.php" method="post">
            <div class = "main">
                <img class = "image"src="/Case1/img/pth.svg" alt="">
            <div class = "form-main">
                <h1 class="mt-4"> Pythagoras dalam Ruang Tiga Dimensi</h1>
                <div class="form-group">
                    <label for="x">x:</label>
                    <input type="number" class="form-control" id="x" name="x" min="0" placeholder="Masukkan nilai x" required>
                </div>
                <div class="form-group">
                    <label for="y">y:</label>
                    <input type="number" class="form-control" id="y" name="y" min="0" placeholder="Masukkan nilai y" required>
                </div>
                <div class="form-group">
                    <label for="z">z:</label>
                    <input type="number" class="form-control" id="z" name="z" min="0" placeholder="Masukkan nilai z" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
            </div>
            </div> 
            </form>
        </div>

    <footer>
        <div class = footer>
            <h3><?php include 'footer.php'; ?></h3>
        </div>
    </footer>
    </body>
</html>
