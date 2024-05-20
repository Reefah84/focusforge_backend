<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sixtyfour&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: aliceblue;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="logo2.png" alt="" class="img-fluid" style="max-width: 80px; height: auto;">
            <a class="navbar-brand" href="home.php">Focus Forge</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image 3 alt22.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="todo">TO-DO LIST</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image2 alt2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FOCUS TIMER</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="music3 alt2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="music">CONNECT YOUR MUSIC</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-extra">
        <div class="col">
            <div class="card h-100">
                <img src="stopwatch2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="timer.php" style="text-decoration:none; color:black">Focus
                            Timer</a></h5>
                    <p class="card-text">A timer to help you focus in a comfortable zone.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="todolist1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="index.php" style="text-decoration:none; color:black">To-Do List</a>
                    </h5>
                    <p class="card-text">List out your tasks to have a clear vision and be productive.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="musicplayer.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="musicplayer.php" style="text-decoration:none; color:black">Music Player</a>
                    <p class="card-text">Listen to variety of music while working.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="main">
        <div class="container py-5">
            <div class="row py-4">
                <div class="col-lg-7 pt-5 text-center">
                    <h1 class="pt-5">Focus more and be a better you everyday</h1>
                    <button class="btn1 mt-3" id="loginButton"><a href="timer.php">Start Focusing Now</a></button> 
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Focus Forge is a platform that helps you better focus on your tasks by
                        keeping them organized along with a timer to keep you on track.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="home.php">Home</a></li>
                        <li><a>About</a></li>
                        <li><a>Features</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Contact</h6>
                    <ul class="footer-links">
                        <li><a>info@example.com</a></li>
                        <li><a>+123 456 7890</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>&copy; 2024 Focus Forge. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>