<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Form</title>
</head>
<body>
    <?php require "block/header.php" ?> 
    <div class="container mt-5" > 
    <h3> Form </h3>
    <form action="chek.php" method="post">
        <input type="email" name="email" placeholder="Enter Email" class="form-control"> <br>
        <textarea name="message" class="form-control" placeholder="Enter your feedback"></textarea> <br>
        <button type="submit" name="send" class="btn btn-success"> Send </button>
    </form>

    </div>
    
    <?php require "block/footer.php" ?> 
    

</body>
</html>

