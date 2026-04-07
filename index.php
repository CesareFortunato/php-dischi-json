<?php
require_once "./functions.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <!-- Titolo -->
        <h1 class="text-center mb-5">Catalogo Dischi</h1>

        <!-- GRID DISCHI -->
        <div class="row g-4">

            <!-- CARD DISCO -->

            <?php foreach ($lps as $lp) { ?>

                <div class="col-md-4 d-flex">
                    <div class="card h-100 shadow-sm w-100">

                        <img src="<?php echo $lp["cover"] ?>" class="card-img-top img-fluid"
                            style="height: 300px; object-fit: cover;" alt="cover">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lp["titolo"] ?></h5>

                            <p class="card-text mb-1">
                                <strong>Artista:</strong> <?php echo $lp["artista"] ?>
                            </p>

                            <p class="card-text mb-1">
                                <strong>Anno:</strong> <?php echo $lp["anno"] ?>
                            </p>

                            <p class="card-text">
                                <strong>Genere:</strong> <?php echo $lp["genere"] ?>
                            </p>
                        </div>

                    </div>
                </div>

            <?php } ?>



            

        </div>

        
        <div class="mt-5">
            <h2 class="mb-4">Aggiungi un nuovo disco</h2>

            <form action="server.php" method="POST">

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Titolo</label>
                        <input type="text" name="titolo" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Artista</label>
                        <input type="text" id="artista" name="artista" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">URL Cover</label>
                        <input type="text" id="cover" name="cover" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Anno</label>
                        <input type="number" id="anno" name="anno" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Genere</label>
                        <input type="text" id="genere" name="genere" class="form-control">
                    </div>

                </div>

                <button type="submit" class="btn btn-dark mt-4">Aggiungi Disco</button>

            </form>
        </div>

    </div>

</body>

</html>