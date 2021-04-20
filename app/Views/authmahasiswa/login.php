<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pelayanan Surat Bebas Komdisma SV IPB</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700;800;900&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('../assets/images/IPBLogo.png'); ?>">

        <!-- Main Stylesheet File -->
        <link href="<?= base_url('../css/style_login.css'); ?>" rel="stylesheet">

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      </head>
    <body>
      <div class="hero">
          <div class="container">
            <img src="<?= base_url('../assets/images/logo-sv.png'); ?>"></img>
            <div id="infoMessage">
                <?php echo $message;?>
            </div>
            <br>
            <?php echo form_open('login');?>
                <p align="left" style="font-size:14pt; color:#707070"><b>Masuk Akun</b></p>
                <hr>
                <div class="label-field">
                  <label for="identity"><b>Username</b></label>
                  <div class="input-field">
                    <input id="identitiy" name="identity" type="text" placeholder="Masukan NIM" require>
                  </div>
                </div>
                
                <div class="label-field">
                  <label for="password"><b>Kata Sandi</b></label>
                  <div class="input-field">
                    <input id="password" name="password" class="pswrd" type="password" placeholder="Masukan Kata Sandi" require>
                  </div>
                </div>

              <div class="button">
                <div class="iner"></div>
                <button type="submit">MASUK</button>
              </div>
            <?php echo form_close();?>
          </div>

          <footer class="footer text-center" style="color : #FFF ; font-size:10pt">
            Copyright &copy </font> <font> 2021 - Komisi Disiplin dan Kemahasiswaan SV IPB </font></p>
          </footer>
        </div>
        
        <script>
          var input=document.querySelector('pswrd');
          var show=document.querySelector('show');
          show.addEventListener('click',active);
          function active(){
            if(input.type==="password"){
              input.type="text";
              show.style.color="#1DA1F2";
              show.textContent="Sembunyikan"
            }
            else{
              input.type="password";
              show.textContent="Tampilkan";
              show.style.color="#111";
            }
          }
        </script>
        
    
            <!-- JS, Popper.js, and jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
	