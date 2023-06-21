@include('header')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
<title>Home</title>
<body style="background-image: url('/images/bluebg.png');" class="">
    {{-- Div blcok for the whole homepage --}}
    <div class="homepage">
        {{-- div block for the introductory statement --}}

        <div style="margin:100px; margin-right:40%; display:flex;">
            <div class="header-container">
                <h1 class="header1">Hello,</h1>

                <h2 class="header2">I'm Claud, an aspiring
                    web
                    developer
                    passionate about transforming ideas into impactful digital
                    experiences. Let's explore web development together!</h2>

            </div>
            <div class="img-container">
                <img class="claud-image" src="/images/walle.png" alt="">
            </div>
            <div>
                <button class="explore-button" id="toAboutPage">
                    Explore<img src="/images/arrow-icon.png" alt="" class="arrow-icon">
                </button>
            </div>
        </div>
    </div>
</body>

<script>
    var button = document.getElementById('toAboutPage');
    button.addEventListener("click", function() {
        window.location.href = "{{ route('aboutpage') }}";
    });
</script>
