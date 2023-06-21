<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<form action="">
    <header style="font-family:'Courier New', sans-serif; font-style:italic ">
        <nav class="nav-bar bg-light bg-gradient">
            <h1 class="name-header"><a href="{{ route('homepage') }}">
                    <img src="/images/claudlogo.PNG" alt="Header Image" style="width:50px; height:50px">
                    Jose Claudio Bereber</a>
            </h1>
            <ul style="display:flex; flex-direction:row; gap:50px; justify-content:center; font-weight:bold;"
                class="nav-links">
                <li><a href="{{ route('homepage') }}" id="home-link">Home</a></li>
                <li class="dropdown">
                    <a href="{{ route('aboutpage') }}" class="dropdown-toggle" id="about-link">About</a>
                    <ul class="dropdown-menu">
                        <li class="bes">
                            <span onclick="window.location.href = '{{ route('biography') }}'">Biography</span>
                        </li>
                        <li class="bes">
                            <span onclick="window.location.href = '{{ route('education') }}'">Education</span>
                        </li>
                        <li class="bes">
                            <span onclick="window.location.href = '{{ route('skill') }}'">Skills</span>
                        </li>

                    </ul>
                </li>
                <li><a href="{{ route('contactpage') }}" id="contact-link">Contact</a></li>
            </ul>

            </ul>
        </nav>
    </header>
</form>

<body>
    <script>
        // Get the current page URL
        var currentPage = window.location.href;

        // Get the navigation links
        var homeLink = document.getElementById('home-link');
        var aboutLink = document.getElementById('about-link');
        var contactLink = document.getElementById('contact-link');

        // Check if the current page URL matches the link and add the active class
        if (currentPage.includes("{{ route('homepage') }}")) {
            homeLink.classList.add('active');
        } else if (currentPage.includes("{{ route('aboutpage') }}")) {
            aboutLink.classList.add('active');
        } else if (currentPage.includes("{{ route('contactpage') }}")) {
            contactLink.classList.add('active');
        }
    </script>
    <script src="{{ asset('js/header.js') }}"></script>

</body>

</html>
