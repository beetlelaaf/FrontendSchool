<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PC4U</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        html, body {
            background-color: rgb(255, 255, 255);
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        #content {
           margin-bottom: 0;
           padding: 50px 0px 50px 0px;
           border-top: 10px solid rgb(0, 174, 255);
           height: 95vh;
           color: rgb(0, 0, 0);
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


    <div id="carouselExampleIndicators" style="width: 1903px; height:950px; margin-top:55; margin-left:0; margin-right:0;"
        class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Images/PCimg1.jpg" style="width: 1920px; height:950px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/PCimg2.jpg" style="width: 1920px; height:950px;" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/PCimg3.jpg" style="width: 1920px; height:950px;" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/PCimg4.jpg" style="width: 1920px; height:950px;" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="lead display-4" style="text-align: center;">Welkom bij PC4U</p>
                    <h4 style="text-align: center;">Wij bieden het grootste assortiment aan hardware.</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 item">
                <img class="" src="Images/msi-geforce-gtx-1050-ti-gaming-x-4gb.jpg" alt="" width="240" height="240">
                <h2>Videokaarten</h2>
                <p><a class="btn btn-primary" href="video.php" role="button">Ga Naar</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <img class="" src="Images/msi-gaming-optix-ag32cq.jpg" alt="" width="240" height="240">
                <h2>Monitoren</h2>
                <p><a class="btn btn-primary" href="monitoren.php" role="button">Ga Naar</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <img class="" src="Images/samsung-860-pro-1tb-25-inch.jpg" alt="" width="240" height="240">
                <h2>SSD's en HDD's</h2>
                <p><a class="btn btn-primary" href="ssdhdd.php" role="button">Ga Naar</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <img class="" src="Images/intel i7.jpg" alt="" width="240" height="240">
                <h2>Processoren</h2>
                <p><a class="btn btn-primary" href="processor.php" role="button">Ga Naar</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <img class="" src="Images/rm750x.jpg" alt="" width="240" height="240">
                <h2>Voedingen</h2>
                <p><a class="btn btn-primary" href="voedingen.php" role="button">Ga Naar</a></p>
            </div>
            <div class="col-lg-4 col-md-6 item">
                <img class="" src="Images/behuizing 1.jpg" alt="" width="240" height="240">
                <h2>Behuizing</h2>
                <p><a class="btn btn-primary" href="behuizing.php" role="button">Ga Naar</a></p>
            </div>
        </div>
            <div class="col-lg-12 totop">
                <p><a class="btn btn-light" href="#" role="button">Naar Begin</a></p>
                <p class="mt-5 mb-3 text-muted totop">© 2018-2019 PC4U</p>
            </div>
        </div>
    </section>
    
</body>
<script src="popper.min.js"></script>
<script src="jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>