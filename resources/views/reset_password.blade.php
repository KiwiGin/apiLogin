<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="">
                <h2>Reset Password</h2>
                <div class="input-group">
                    <input id="email-input" type="text" required>
                    <label for="email-input">Email</label>
                </div>

                <button type="submit" class="btn">Send email</button>
                <div class="sign-link">
                    <p>Already have an account? <a href="/login" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>


    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
