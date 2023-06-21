@include('header')
<link rel="stylesheet" href="{{ asset('css/underaboutpage.css') }}">

<body style="background-image: url('/images/bluebg.png');">
    <style>
        /* CSS styling for the skills webpage */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            margin: 0px;
            color: #333333;
        }

        h2 {
            margin-top: 20px;
            color: black;
            font-family: 'Courier New', Courier, monospace;
        }
        p{
            color: black;
        }
    </style>
    <h1 class="bio-header">Skills</h1>
    <h2>Technical Skills</h2>
    <div class="skills-container">
        <div class="skill-box"><a href="https://www.php.net/">
            <p>PHP<img class="php-logo" src="/images/phplogo.png" alt=""></p></a>

        </div>
        <div class="skill-box"><a href="https://www.w3schools.com/html/">
            <p>HTML <img class="html-logo" src="/images/htmllogo.png" alt=""></p></a>

        </div>
        <div class="skill-box"><a href="https://www.w3.org/Style/CSS/Overview.en.html">
            <p>CSS<img class="css-logo" src="/images/csslogo.png" alt=""></p></a>
        </div>
        <div class="skill-box"><a href="https://www.javascript.com/">
            <p>JavaScript<img class="js-logo" src="/images/jslogo.png" alt=""></p></a>
        </div>
        <div class="skill-box"><a href="https://laravel.com/">
            <p>Laravel<img class="laravel-logo" src="/images/laravellogo.png" alt=""></p></a>
        </div>
    </div>

    <h2>General Skills</h2>
    <div class="skills-container">
        <div class="skill-box"><a href="education">
            <p>Problem Solving<img class="php-logo" src="/images/pslogo.png" alt=""></p></a>

        </div>
        <div class="skill-box"><a href="education">
            <p>Teamwork<img class="html-logo" src="/images/teamworklogo.png" alt=""></p></a>

        </div>
        <div class="skill-box"><a href="education">
            <p>Computer Literacy<img class="css-logo" src="/images/cllogo.png" alt=""></p></a>
        </div>

</body>
