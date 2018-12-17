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
        .totop {
            margin-top: 20vh;
            text-align: center;
        }

        .row {
            padding: 5vh 5vw 0 5vw;
            justify-content: center;
        }
        
        .jumbotron {
            border-bottom: double black 5px;
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
                <a class="nav-item nav-link active" href="PC4U2.php">Reparatie</a>
                <a class="nav-item nav-link" href="PC4U3.php">Klantenservice</a>
                <a class="btn btn-outline-primary" href="login.php">Sign up</a>
            </div>
        </div>
    </nav>

    <section>
        <div class="jumbotron" style="margin-top: 5vh;">
            <h1 style="text-align: center;">Reparatie</h1>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md">
                <ul class="list-group">
                    <li class="list-group-item">
                        <img class="" src="Images/vga-card.png" alt="" width="140" height="140" style="float: right">
                        <strong>
                            <h4>Hardware problemen</h4>
                        </strong>
                        Geeft u laptop geen beeld meer, maakt uw harde schijf een tikkend geluid of werkt het geluid
                        niet meer?<br>
                        Hardware-Expert repareert het snel en vakkundig voor u!<br>
                        Meld uw probleem bij ons aan en wij lossen het zo snel mogelijk voor u op!
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md">
                <ul class="list-group">
                    <li class="list-group-item">
                            <img class="" src="Images/drive.png" alt="" width="140" height="140" style="float: right">
                        <strong>
                            <h4>Software problemen</h4>
                        </strong>
                        Start uw computer of laptop traag op, heeft u last van ongewenste virussen,<br>
                        willen bepaalde programma’s installeren of start Windows helemaal niet meer op?<br>
                        Bij Hardware-Expert kunnen wij de meeste software problemen voor u verhelpen.<br>
                        Meld uw probleem bij ons aan en wij nemen zo snel mogelijk contact met u op.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md">
                <ul class="list-group list-group">
                    <li class="list-group-item">
                        <img class="" src="Images/plug-in.png" alt="" width="140" height="140" style="float: right">
                        <strong>
                            <h4>Internet problemen</h4>
                        </strong>
                        Last van een trage internet verbinding, geen bereik op zolder of valt u internet verbinding
                        regelmatig weg?<br>
                        Bij Hardware-Expert hebben wij de oplossing voor al uw netwerk problemen.<br>
                        Meld uw probleem bij ons aan en wij lossen het zo snel mogelijk voor u op!
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="Images/robocraftlogo.png" alt="" width="48" height="48">
                    <small class="d-block mb-3 text-muted">© 2017-2018</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Bij service</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Netwerk-installatie</a></li>
                        <li><a class="text-muted" href="#">Webshops</a></li>
                        <li><a class="text-muted" href="#">Winkels</a></li>
                        <li><a class="text-muted" href="#">Webshopbestellingen</a></li>
                        <li><a class="text-muted" href="#">Bestellingen</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Hoofservice</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Installatie</a></li>
                        <li><a class="text-muted" href="#">Betalen</a></li>
                        <li><a class="text-muted" href="#">Levertijd</a></li>
                        <li><a class="text-muted" href="#">Annuleren</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Anders</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="PC4U1.html">Producten</a></li>
                        <li><a class="text-muted" href="PC4U2.html">Reparatie</a></li>
                        <li><a class="text-muted" href="PC4U3.html">Klantenservice</a></li>
                        <li><a class="text-muted" href="PC4UHome.html">Home</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="popper.min.js"></script>
<script src="jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>