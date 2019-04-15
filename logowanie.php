
<html lang="pl">
    <head>

        <title>Borussia Dortmund</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="skrypt.js"></script>

    </head>
    <style>
        .carousel-inner img {

            width:65%; /* Set width to 100% */
            margin: auto;
        }

        .carousel-caption h3 {
            color: #fff !important;
        }

        @media (max-width: 600px) {
            .carousel-caption {
                display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
            }
        }
         body { text-align: center; }
        table { width: 300px; height: 70px; margin: 0 auto; text-align: left; }
        .ramka {border: #000000   double  medium; width:350px; height: 130px; margin: 0 auto; text-align: left; }
        .ramka1 {border: #000000   double  medium; width:350px; height: 90px; margin: 0 auto; text-align: center; }

    </style>



    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="sklep.php">BVB FANSHOP</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="rejestracja.php">TWOJE KONTO</a></li>
                        <li><a href="koszyk.php"><i class="fa fa-shopping-cart" style="font-size:24px; color: white"></i></a></li>

                    </ul>
                </div>
            </div>
        </nav>      

        <div id="Kontakt" class="container-fluid bg-grey">

            <div class="contactBlock ">
                
                <div class="col-sm-12 text-center" >
                    <form action="zaloguj.php" method="POST" >
                        <h2>Zaloguj się!</h2>
                        <div class="ramka">
                            <br/>
                        <table>
                            <tr> <td>Login:</td>
                                <td><input type="text "name="login" > </td>
                            </tr>
                            <tr> <td>Hasło:</td>
                                <td><input type="password" name="haslo" > </td> 
                            </tr>

                        </table align="center"></div>
                        <input type="submit" value="Zaloguj się" />
</form>
                
               
                
                <div class="contactBlock ">
                <div class="col-sm-12 text-center" >
                    <h2>Zarejestruj się!</h2>
                    <form action="rejestracja.php" method="POST">
                         <div class="ramka1">
                            <br/>
                            <div>Nie masz jeszcze konta?</div></br></div>
                                
                            <div> <input type="submit" name="zarejestruj" value="Zarejestruj się" />
                            </div> 
                        </form>
                </div>
                </div>



</body>
</html>
