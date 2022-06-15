<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="../css/landing.css">
</head>

<body>
    <?php
    include("../layout/header.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="img-register" src="../img/register.png" alt="">
            </div>
            <div class="col-6">
                <form action="">
                <div class="col-6 mx-auto">
                    <div class="input-group input-group-dynamic">
                        <label class="form-label">Regular</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                </form>
                
            </div>
        </div>
    </div>
    <?php
    include("../layout/footer.php");
    ?>
</body>

</html>