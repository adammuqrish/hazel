<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="h-letter-modified.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        /* Custom CSS for navbar and footer */
        .navbar {
            background-color: lightblue;
            border-bottom: 2px solid blue; 
        }
        .footer {
            border-top: 2px solid green; 
            background-color: #94bbe9;
        }
        .nav-item {
        transition: background-color 0.3s ease; /* Add a transition effect */
        }
        .nav-item:hover {
            background-color: rgba(0, 0, 0, 0.1); /* Slightly dark background color on hover */
        }

        /* Apply the active (clicked) effect */
        .nav-item:active {
            background-color: rgba(0, 0, 0, 0.3); /* Darker background color when clicked */
        }
    </style>
</head>
<body class="bg-primary-subtle">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid flex-row">
                <h3 class="my-0"><?php echo "Welcome, " . $_SESSION["username"] . "!";?></h3>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about_hazel.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="video_hazel.html">Videos</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-2 mb-2">
        <main>
            <section>
                <div class="container mt-2">
                    <div class="card">
                        <img src="images\photo_6314389622578329228_y - Copy.jpg" class="card-img-top" alt="...">                        
                        <div class="card-body">
                          <h5 class="card-title">Nur Ain Zulaikha binti Abd Rahim</h5>
                          <ul class="list-group">
                            <li class="list-group-item">Birthday: 23 January 2005</li>
                            <li class="list-group-item">Home: Kulai, Johor</li>
                            <li class="list-group-item">Surname: Zulaikha</li>
                            <li class="list-group-item">Age: 18</li>
                            <li class="list-group-item">Height: 130cm</li>
                          </ul>
                          <a href="about_hazel.html" class="btn btn-primary mt-2">View</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="container mt-2">
                    <div class="card">
                        <img src="images\photo_6172383692941538975_y (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Muhammad Adam Muqrish bin Abdul Rahim</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Birthday: 28 November 2003</li>
                                <li class="list-group-item">Home: Cheras, Kuala Lumpur</li>
                                <li class="list-group-item">Surname: Adam</li>
                                <li class="list-group-item">Age: 20</li>
                                <li class="list-group-item">Height: 174cm</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-2">View</a>
                        </div>
                    </div>
                </div>                 -->
            </section>
    
            <section>
                <!-- // -->
            </section>
    
            <!-- Add more sections as needed -->
        </main>
    </div>

    <footer>
        <div class="container-fluid sticky-bottom footer">
            <strong>Copyright &copy; 2023-? <a href="#">Hak Milik Adam & Ain</a>.</strong> All rights reserved.
        </div>
    </footer>
</body>
</html>