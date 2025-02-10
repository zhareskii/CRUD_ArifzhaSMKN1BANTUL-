<?php
session_start(); // Mulai session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="form">   
    <form method="POST" action="cek_login.php">
        <div class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-4 bg-white shadow box-area">
                
                <!-- Left Side -->
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background:rgb(157, 204, 255);">
                    <p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">LOGIN</p>
                </div> 

                <!-- Right Side -->
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4 text-center">
                            <h2>Welcome Back</h2>
                            <p>We are happy to have you back.</p>
                        </div>

                        <!-- Flash Message -->
                        <?php if (isset($_SESSION['message'])) : ?>
                            <div class="alert alert-<?php echo $_SESSION['message']['type']; ?>" role="alert">
                                <?php
                                echo $_SESSION['message']['text'];
                                unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
                                ?>
                            </div>
                        <?php endif; ?>

                        <!-- Input Fields -->
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg w-100" style="background-color: #0056b3; color: white; border: none; font-size: 1rem;">Login</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </form>
</body>
</html>
