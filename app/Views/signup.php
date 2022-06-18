<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="button"></div>
                <button type="button" class="toggle-button" onclick="login()">Login</button>
                <button type="button" class="toggle-button" onclick="register()">Register</button>
            </div>

            <form id="login" action="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username">
                <input type="password" class="input-field" placeholder="Password">
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <button type="submit" class="submit-button">Login</button>
            </form>
            <form id="register" action="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username">
                <input type="password" class="input-field" placeholder="Password">
                <input type="email" class="input-field" placeholder="Email">
                <input type="checkbox" class="check-box"><span>I agree with term & conditions</span>
                <button type="submit" class="submit-button">Register</button>
            </form>
            <div class="media-sosial">
                <h4>Follow me on :</h4>
                <img src="/img/facebook.svg" alt="facebook">
                <img src="/img/twitter.svg" alt="twitter">
                <img src="/img/instagram.svg" alt="instagram">
                <img src="/img/youtube.svg" alt="youtube">



            </div>

        </div>
    </div>

    <!-- javascript -->
    <script>
        var a = document.getElementById("login");
        var b = document.getElementById("register");
        var c = document.getElementById("button");

        function register() {
            a.style.left = "-400px";
            b.style.left = "50px";
            c.style.left = "110px";
        }

        function login() {
            a.style.left = "50px";
            b.style.left = "450px";
            c.style.left = "0";
        }
    </script>

</body>

</html>