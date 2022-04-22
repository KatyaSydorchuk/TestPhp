<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Veb</title>
</head>
<body>
<?php require "block/header.php" ?> 

    <div class="container mt-5">
        <h3 class="mb-5"> Our Menu </h3> 

        <div class="d-flex flex-wrap"> 
            <?php
                for($i = 0; $i < 6; $i ++):
            ?>
            <div class="col-lg-4">
                <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail" alt="#"> 

                <h2>Margarita</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="#">Add to basket »</a></p>
            </div>
            <?php endfor; ?>
        </div> 
    </div>
    
    <?php require "block/footer.php" ?> 


</body>
</html>

