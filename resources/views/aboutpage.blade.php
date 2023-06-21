@include('header')
<link rel="stylesheet" href="{{ asset('css/aboutpage.css') }}">
<title>About</title>

<body style="background-image: url('/images/bluebg.png');">

    {{-- Description Container --}}
    <div class="aboutpage">
        <div class="des-container">
            <h1 class="about-title" style="">About me</h1>
            <h2 class="about-header">
                I believe in the transformative power of code, where imagination becomes reality. With every line I
                write, I
                strive to shape innovative digital experiences that leave a lasting impact. Let's embark on a journey of
                limitless possibilities, pushing boundaries and redefining the world of web development.</h2>

            <h2 class="about-header1">Learn more about me:</h2>
        </div>
        <div class="boxes-container">
            <div class="biography-box" style="display: flex; flex-direction:column; color:white;">
                <img class="about-logo" src="/images/biologo.png" alt="">
                <p class="displayed-biography">Biography</p>
                <p class="hidden-biography" style="font-size: 20px">Learn about what my life has been so far &#8594</p>
            </div>
            <div class="education-box" style="display: flex; flex-direction:column; color:white">
                <img class="about-logo" src="/images/edu-logo.png" alt="">
                <p class="displayed-education">Education</p>
                <p class="hidden-education" style="font-size: 20px">Learn more about my educational background &#8594
                </p>
            </div>
            <div class="skill-box" style="color:white">
                <img class="about-logo" src="/images/skill-logo.png" alt="">
                <p class="displayed-skill">Skills</p>
                <p class="hidden-skill" style="font-size: 20px">Learn more about the technologies that I use &#8594</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/aboutpage.js') }}"></script>
    <script>
        var biographyBox = document.querySelector('.biography-box');
        biographyBox.addEventListener("click", function() {
            window.location.href = "{{ route('biography') }}";
        });

        var educationBox = document.querySelector('.education-box');
        educationBox.addEventListener("click", function() {
            window.location.href = "{{ route('education') }}";
        });

        var skillBox = document.querySelector('.skill-box');
        skillBox.addEventListener("click", function() {
            window.location.href = "{{ route('skill') }}";
        });
    </script>

</body>
