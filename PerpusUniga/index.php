<?php
  include "assets/bootstrap.php";
  include "assets/koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
      .divider:after,
      .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
  </style>
  <meta charset="utf-8">
  <title>LOGIN</title>
</head>

<body class="bg-dark">

  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="assets/draw2.svg"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-4 col-xl-4 offset-xl-1">

          <form action="login.php" method="POST" name="formlogin" onsubmit="return validateForm()" required>
            <h1 class="font-weight-bold text-light text-center mb-4">LOG!N</h1>
              <?php
                    session_start();
                    if(isset($_SESSION['gagal'])){
                    ?>
                        <div class="alert bg-white text-danger text-center">
                            <b>Username/Password Salah!</b>
                        </div> 
            <?php
                        session_destroy();
                      }
                    
                    if(isset($_SESSION['gagallogin'])){?>
                        <script>
                            Swal.fire({
                                icon: 'warning',
                                title: '<?= $_SESSION['gagallogin']?>',
                                text: 'Login Dulu Yaa..!',
                            }).then(function(){
                                document.location.href = 'index.php';
                            });
                        </script>
                       <?php  session_destroy();
                    }
            ?>
            <!-- User input -->
            <div class="form-outline mb-4">
              <input type="text" id="username" name="username" class="form-control form-control-lg" />
              <label class="form-label text-light" for="form1Example13">Username</label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="pass" name="pass" class="form-control form-control-lg" />
              <label class="form-label text-light" for="form1Example23">Password</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label text-light" for="form1Example3"> Remember me </label>
              </div>
              <a href="#!">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>