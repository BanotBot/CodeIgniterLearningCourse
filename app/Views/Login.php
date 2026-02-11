<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Leave Management System (ELMS) | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

    <main>
        <section>

            <div class="container">
                <h2>Welcome Back</h2>
                <p>Log in to access your Account</p>
                <form class="" action="<?php echo site_url("Login/auth") ?>"  id="loginForm" method="POST">
                    <div class="form-group">
                        <label for="gmail">Email Account </label>
                        <input type="text" id="gmail" name="gmail" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        Secure Sign In
                    </button>

                    <p><strong>Don't have account ? : <a href="register/index">Register</a></strong></p>
                </form>
            </div>
        </section>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>