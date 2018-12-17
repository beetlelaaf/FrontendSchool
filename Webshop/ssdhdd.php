<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PC4U</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(255, 255, 255);
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
        }

        .row {
            text-align: center;
            padding-top: 10vh;
            padding-left: auto;
            padding-right: auto;
            margin: 0 10vw 0 10vw;
        }

        .totop {
            text-align: center;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg inverse navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="PC4UHome.php">PC4U</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <div class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Producten
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="video.php">Videokaarten</a>
                        <a class="dropdown-item" href="monitoren.php">Monitoren</a>
                        <a class="dropdown-item active" href="ssdhdd.php">SSD's en HDD's</a>
                        <a class="dropdown-item" href="processor.php">Processoren</a>
                        <a class="dropdown-item" href="voedingen.php">Voedingen</a>
                        <a class="dropdown-item" href="Behuizing.php">Behuizing</a>
                    </div>
                </li>
                <a class="nav-item nav-link" href="PC4U2.php">Reparatie</a>
                <a class="nav-item nav-link" href="PC4U3.php">Klantenservice</a>
                <a class="btn btn-outline-primary" href="login.php">Sign up</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 item">
                <h4> Samsung 860 EVO - 1TB - 2.5 Inch</h4>
                <img class="" src="Images/samsung-860-evo-ssd-1tb-25-inch1.jpg" alt="" width="240" height="240">
                <h5>€ 189,00</h5>
                <p><a class="btn btn-success" href="login.php" role="button">In Winkelmandje</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <h4>Samsung 860 EVO - 500 GB - 2.5 Inch</h4>
                <img class="" src="Images/samsung-860-evo-ssd-250-gb-25-inch2.jpg" alt="" width="240" height="240">
                <h5>€ 99,95</h5>
                <p><a class="btn btn-success" href="login.php" role="button">In Winkelmandje</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <h4>Samsung 860 EVO - 250 GB - 2.5 Inch</h4>
                <img class="" src="Images/samsung-860-evo-ssd-500-gb-25-inch3.jpg" alt="" width="240" height="240">
                <h5>€ 69,95</h5>
                <p><a class="btn btn-success" href="login.php" role="button">In Winkelmandje</a></p>
            </div>
            <div class="col-lg-12 border-top"></div><br>
            <div class="col-lg-4 col-md-6 item">
                <h4>Samsung 860 PRO - 1TB - 2.5 Inch</h4>
                <img class="" src="Images/samsung-860-pro-1tb-25-inch.jpg" alt="" width="240" height="240">
                <h5>€ 379,00</h5>
                <p><a class="btn btn-success" href="login.php" role="button">In Winkelmandje</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <h4>Samsung 860 PRO - 512GB - 2.5 Inch</h4>
                <img class="" src="Images/samsung-860-pro-512gb-25-inch.jpg" alt="" width="240" height="240">
                <h5>€ 194,95</h5>
                <p><a class="btn btn-success" href="login.php" role="button">In Winkelmandje</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <h4>Samsung 860 PRO - 256GB - 2.5 Inch</h4>
                <img class="" src="Images/samsung-860-pro-256gb-25-inch.jpg" alt="" width="240" height="240">
                <h5>€ 114,95</h5>
                <p><a class="btn btn-success" href="login.php" role="button">In Winkelmandje</a></p>
            </div>
        </div><br>
        <div class="col-lg-12 totop border-top"><br>
            <p><a class="btn btn-light" href="#" role="button">Naar Begin</a></p>
            <p class="mt-5 mb-3 text-muted totop">© 2018-2019 PC4U</p>
        </div>
    </div>
</body>
<script src="popper.min.js"></script>
<script src="jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>