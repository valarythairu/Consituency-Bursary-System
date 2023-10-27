<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dashboard.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard</title>
</head>
<body background="cdf.png">
    <a href="aboutpagesfw.php"></a>
    <nav class="sidebar close">
        <header>

                <div class="text logo-text">
                    <span class="name">OTHAYA BURSARY NG-CDF SYSTEM</span>
                    <span class="profession">Welcome</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="aboutpagesfw.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">dashboard</span>
                                
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="login.php">
                            <i class='bx bx-user-plus icon' ></i>
                            <span class="text nav-text">User login</span>
                        </a>
                    </li>

                    
                     <li class="nav-link">
                        <a href="cdfofficial.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">cdf login</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="contactpages.html">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Need Help?</span>
                        </a>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="aboutpagesfw.html">
      
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">OTHAYA BURSARY NG-CDF SYSTEM</div>
    </section>

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

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
