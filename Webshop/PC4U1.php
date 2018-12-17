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
            padding-left: auto;
            padding-right: auto;
            margin-left: auto;
            margin-right: auto;
            padding-top: 10vh;
        }

        .item {
            padding: 80px;
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Producten
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="video.php">Videokaarten</a>
                        <a class="dropdown-item" href="monitoren.php">Monitoren</a>
                        <a class="dropdown-item" href="ssdhdd.php">SSD's en HDD's</a>
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

        <div class="col-lg-12 totop">
            <p><a class="btn btn-light" href="#" role="button">Naar Begin</a></p>
            <p class="mt-5 mb-3 text-muted totop">© 2018-2019 PC4U</p>
        </div>
    </div>
</body>
<script src="popper.min.js"></script>
<script src="jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>