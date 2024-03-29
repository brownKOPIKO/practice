<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>GHCCI</title>
</head>

<body class="vh-100 overfloww-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <!-- Logo -->
            <div class="d-flex align-items-center">
                <a class="navbar-brand fs-4" href="#">
                    <div class="d-flex align-items-center">
                        <img src="images/logo.png" alt="Logo" height="40" class="d-inline-block align-top">
                        <div class="ms-2"> <!-- Margin start for spacing -->
                            <span class="d-block d-lg-none"> <!-- Visible on small screens -->
                                GHCCI
                            </span>
                            <span class="d-none d-lg-block"> <!-- Hidden on small screens -->
                                Glorious Hope Christian Center Int'l
                            </span>
                        </div>
                    </div>
                </a>

            </div>

            <!-- Toggle button-->
            <button class="navbar-toggler shawdow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- SideBar -->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- SideBar Header -->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Glorious Hope Christian Center Int'l</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- SideBar Body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#beliefs">Beliefs</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#contacts">Contacts</a>
                        </li>
                    </ul>

                    <!-- Login/ Signup -->
                    <div class="d-flex flex-column justify-content-center flex-lg-row align-items-center gap-3">
                        <a href="#login" class="text-white">Admin</a>
                        <a href="#SignUp" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: #f94ca4;">Be a Member</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <section id="home" class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center text-white fs-1">
            <h1 style="font-size: 1.5em">ALL ABOARD</h1>
            <h1 style="font-size: 1.0em">Saturate | Enhance | Advance</h1>
        </section>

        <!-- Services Section -->
        <section id="services" class="bg-light text-dark w-100 vh-100 d-flex flex-column justify-content-center align-items-center">
            <h2 style="font-size: 3.0em">Services</h2><br><br>
            <p style="font-size: 1.0em">Sunday Service: 9:00am - 11:00am</p>
            <p style="font-size: 1.0em">Bible Study: Every Wednesday, 7:00pm - 9:00pm</p>
            <p style="font-size: 1.0em">Prayer Night: Every Friday, 7:00pm - 9:00pm</p>
        </section>

        <!-- Beliefs Section -->
        <section id="beliefs" class="bg-dark text-white text-center py-5 w-100 vh-100 d-flex flex-column justify-content-center align-items-center">
            <h2>Beliefs</h2>
            <!-- Add your content for the Beliefs section here -->
        </section>

        <!-- Contacts Section -->
        <section id="contacts" class="bg-light text-dark text-center py-5 w-100 vh-100 d-flex flex-column justify-content-center align-items-center">
            <h2>Contacts</h2>
            <!-- Add your content for the Contacts section here -->
        </section>
    </main>
</body>

</html>