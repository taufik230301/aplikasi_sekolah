<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?=base_url();?>assets/login_register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/login_register/css/style.css">

    <!-- Sweetalert -->
    <script src="<?= base_url(); ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <?php if ($this->session->flashdata('eror_password')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Masukan Ulang password !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_register')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Lakukan Registrasi Ulang !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="<?=base_url();?>Register/proses" method="POST" class="register-form"
                            id="register-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?=base_url();?>assets/login_register/images/signup-image.jpg"
                                alt="sing up image"></figure>
                        <a href="<?=base_url();?>Login/index" class="signup-image-link">Saya sudah terdaftar !</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="<?=base_url();?>assets/login_register/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/login_register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>