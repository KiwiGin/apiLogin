<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="wrapper">

        <div class="form-wrapper sign-in">
            <form action="" class="change-password-form">
                <h2>Change Password</h2>
                <div class="input-group input-group-tight">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group input-group-tight">
                    <input type="password" required>
                    <label for="">Old Password</label>
                </div>
                <div class="input-group input-group-tight">
                    <input id="new_password_input" type="password" required>
                    <label for="">New Password</label>
                </div>
                <div class="input-group input-group-tight">
                    <input id="confirm_new_password_input" type="password" required>
                    <label for="">Confirm New Password</label>
                </div>
                <button type="submit" class="btn">Change Password</button>
                <div class="password-actions-container">
                    <div class="forget-pass" style="margin: 0px auto 15px; text-align: center;">
                        <a href="reset_password">Forgot Password?</a>
                    </div>
                </div>
                <div class="sign-link">
                    <p>Already have an account? <a href="/login" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/change_password.js') }}"></script>
</body>
</html>
