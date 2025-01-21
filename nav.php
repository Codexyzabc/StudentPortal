<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!----===== Font Awesome CSS ===== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Document</title>
</head>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./images/p1.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">CU CS</span>
                    <span class="profession">Student Portal</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="./home.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./videos.php">
                            <i class="fas fa-video icon"></i>
                            <span class="text nav-text">Videos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./notes.php">
                            <i class="fas fa-file-pdf icon"></i>
                            <span class="text nav-text">Notes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./questions.php">
                            <i class="far fa-file-word icon"></i>
                            <span class="text nav-text">Question Papers</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./contact.php">
                            <i class="far fa-envelope icon"></i>
                            <span class="text nav-text">Contact</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="./logout.php">
                            <i class="fas fa-sign-out-alt fa-4x icon"></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    
    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click" , () =>{
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click" , () =>{
            sidebar.classList.remove("close");
        })

    </script>

</body>
</html>