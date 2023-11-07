<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,800;1,400;1,500;1,600;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <title>Homepage</title>
</head>
<body>

<nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="navbar__logo"><i class="fa-solid fa-burger"></i>  Bollen Broodjes</a>
            <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="home.php" class="navbar__links">Home</a>
                </li>
                <li class="navbar__btn">
                    <a href="index.php" class="button">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function() {
            $(".navbar__toggle").click(function() {
                $(".navbar__menu").toggleClass("active");
            });
        });
        </script>
    <script src="script.js"></script>


    <h2>Welkom op de homepagina van Bolle Broodjes</h2>

</body>
</html>