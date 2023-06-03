<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=Lexend+Deca:wght@100;300&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/panel.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&family=Lexend+Deca:wght@100;300&family=Libre+Baskerville&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&family=Lexend+Deca:wght@100;300&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Panel</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle" onclick="toggleDiv()"><img src="/images/menu.png" alt="logo" width = "40px" height = "40px"></i>
        </div>
        
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="hide-these" id="hide-div">
                    <a href="#" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <span class="nav_logo-name pt-3 mt-3"><img src="/images/Frame 40.png" alt="logo" width = "100px" height = "100px"></span>
                    </a>
                    <a href="#" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <h2 class="welcome-back">Welcome Back</h2>
                    </a>
                    <a href="#" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <h2 class="user-name">John Harper</h2>
                    </a>
                </div>
                <div class="nav_list">
                    <a href="{{ route('dashboard') }}" class="nav_link active mb-0">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name"><img src="/images/space_dashboard.png" alt="logo" width = "auto" height = "auto"><h5 class="dashboard-text pt-3">Dashboard</h5></span>
                    </a>
                    <a href="{{ route('orders') }}" class="nav_link  mb-0" >
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name"><img src="/images/local_mall.png" alt="logo" width = "auto" height = "auto"><h5 class="dashboard-text pt-3">My Orders</h5></span>
                    </a>
                    <a href="{{ route('payments') }}" class="nav_link  mb-0">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name"><img src="/images/local_atm.png" alt="logo" width = "auto" height = "auto"><h5 class="dashboard-text pt-3">Payments</h5></span>
                    </a>
                    <a href="#" class="nav_link  mb-0">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name"><img src="/images/settings.png" alt="logo" width = "auto" height = "auto"><h5 class="dashboard-text pt-3">Settings</h5></span>
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
    @csrf
    <button class="row pb-5 mt-5 dashboard-category height" type="submit">
        <div class="col-sm-4 col-md-4 text-right">
            <img src="/images/Sign out.png" alt="logo" width="auto" height="auto">
        </div>
        <div class="col-sm-8 col-md-8 dashboard-text pt-1">
            <h5>Logout</h5>
        </div>
    </button>
            
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100">
    @if(Request::is('dashboard'))
        @include('userPanel.dashboard')
    @endif

    @if(Request::is('orders'))
        @include('userPanel.orders')
    @endif
    @if(Request::is('payments'))
        @include('userPanel.payments')
    @endif
    </div>
    <!--Container Main end-->


    
    <script>
        
   document.addEventListener("DOMContentLoaded", function(event) {
    const nav = document.getElementById("nav-bar");
    const bodypd = document.getElementById("body-pd");
    const header = document.getElementById("header");

    if (nav && bodypd && header) {
        nav.classList.add("show");
        bodypd.classList.add("body-pd-expanded");
        header.classList.add("header-expanded");
    }
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId),
            hideDiv = document.getElementById("hide-div");

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // Show/hide navbar
                nav.classList.toggle('show');
                // Change icon
                toggle.classList.toggle('bx-x');
                // Add/remove padding to body
                bodypd.classList.toggle('body-pd');
                // Add/remove padding to header
                headerpd.classList.toggle('body-pd');
                // Show/hide hide-div
                if (nav.classList.contains('show')) {
                    hideDiv.style.display = 'block';
                } else {
                    hideDiv.style.display = 'none';
                }
            });
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink));

    // Your code to run since DOM is loaded and ready

    const screenSize = window.innerWidth;
    const hideDiv = document.getElementById("hide-div");

    if (screenSize > 1000) {
        hideDiv.style.display = 'block';
    }
});

function toggleDiv() {
    var div = document.getElementById("hide-div");
    div.style.display = div.style.display === "none" ? "block" : "none";

    const bodypd = document.getElementById("body-pd");
    const header = document.getElementById("header");
    if (bodypd && header) {
        bodypd.classList.toggle("body-pd-expanded");
        header.classList.toggle("header-expanded");
    }
}

 document.getElementById('logout-form').addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });

</script>
</body>
</html>