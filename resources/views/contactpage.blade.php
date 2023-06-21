@include('header')
<link rel="stylesheet" href="{{ asset('css/underaboutpage.css') }}">
<style>
    .contact-button {
        text-decoration: none;
        font-size: 20px;
    }

    .contact-button:hover {
        text-decoration: none;
    }

    .contact-img {
        height: 100px;
        width: 100px;
    }

    .contacth2,
    h2 {
        font-family: 'Courier New', Courier, monospace;
        margin: 30px;
        margin-right: 60px;
        color: white;
    }

    .contact {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .h1-email {
        font-family: 'Courier New', Courier, monospace;
        margin: 30px;
        margin-right: 60px;
        color: white;
    }

    .cpy-btn {
        background-color: #3B82F6;
        color: whitesmoke;
        font-weight: bold;
        border-radius: 15px;
        border-color: #3B82F6;
        width: 150px;
        height: 50px;
        margin-top: 20px;
        margin-right: 500px;
        transition: 0.5s;
    }
    .cpy-btn:hover{
        background-color: whitesmoke;
        color: #3B82F6;

    }
</style>

<body style="background-image: url('/images/bluebg.png');">

    <h1 class="bio-header">Contact</h1>
    <h2 class="contact-h2">Contact me through my social media links below:</h2>
    <div class="contact">
        <a href="https://www.facebook.com/noonebutm3n" class="contact-button">
            <img src="{{ asset('images/fblogo.png') }}" class="contact-img" alt="Social Media Icon">
            Facebook
        </a>
        <a href="https://instagram.com/claudzzzzd?igshid=ZDc4ODBmNjlmNQ==" class="contact-button">
            <img src="{{ asset('images/iglogo.png') }}" class="contact-img" alt="Social Media Icon">
            Instagram
        </a>
    </div>
    <div class="c-email" style="display:flex; flex-direction:row;">
        <h1 class="h1-email">Email Address:</h1>
        <h2 id="email" style="color:black; font-weight:bold">cbereber7@gmail.com</h2>
        <button class="cpy-btn" onclick="copyText('email', this)">Copy</button>
    </div>
    <div class="c-email" style="display:flex; flex-direction:row;">
        <h1 class="h1-email">Contact Number:</h1>
        <h2 id="contact-number" style="color:black; font-weight:bold">(+63) 921 817 6896</h2>
        <button class="cpy-btn" onclick="copyText('contact-number', this)">Copy</button>
    </div>

    <script>
        function copyText(elementId, button) {
            const element = document.getElementById(elementId);
            const text = element.innerText;

            // Create a temporary input element
            const input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);

            // Copy the text from the input
            input.select();
            document.execCommand('copy');

            // Remove the temporary input
            document.body.removeChild(input);

            // Change the button text to "Copied"
            button.textContent = 'Copied';

            // Disable the button after copying
            button.disabled = true;

            // Reset button text after a delay
            setTimeout(function() {
                button.textContent = 'Copy';
                button.disabled = false;
            }, 2000); // Change back to 'Copy' after 3 seconds (adjust as needed)
        }
    </script>




</body>
