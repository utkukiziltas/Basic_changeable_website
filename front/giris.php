<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giriş</title>

<?php include 'inc/header.php'; ?>
</head>
<body>


<?php include 'inc/navbar.php'; ?>

  <section class="vh-100 bg-image" style="background-image: url('assets/img/registerbg.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">GİRİŞ YAP</h2>

                <form>

                  <div class="form-outline mb-4">
                    <input type="email" name="e-posta" class="form-control form-control-lg" placeholder="E-posta" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="sifre" class="form-control form-control-lg" placeholder="Şifre" />
                  </div>


                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-white border-0 register-btn">Giriş Yap</button>
                  </div>

                  <p class="text-center main-color mt-5 mb-0">Kayıtlı değil misin? <a href="kayit.php" class="fw-bold text-body "><u>Kayıt ol</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>


<?php include 'inc/footer.php'; ?>