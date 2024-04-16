<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input id="username-input" type="text" required>
                    <label for="username-input">Username</label>
                </div>
                <div class="input-group">
                    <input id="email-input" type="text" required>
                    <label for="email-input">Email</label>
                </div>
                <div class="input-group">
                    <input id="password-input" type="password" required>
                    <label for="password-input">Password</label>
                </div>

                <button type="submit" class="btn">Sign Up</button>
                <div class="sign-link">
                    <p>Already have an account? <a href="#" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-in" id="signinModal">
            <form action="">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="password-actions-container">
                    <div class="forget-pass">
                        <a href="reset_password">Forgot Password?</a>
                    </div>
                    <div class="forget-change">
                        <a href="change_password">Change Password</a>
                    </div>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
                </div>
            </form>
            <div class="google">
                <button class="btn-google" id="btn-google">
                    <img class="google" src="https://rotulosmatesanz.com/wp-content/uploads/2017/09/2000px-Google_G_Logo.svg_.png" alt="" srcset="">
                    Google
                </button>
            </div>
        </div>


    </div>
    <script type="module" src="{{asset('js/app/main.js')}}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
