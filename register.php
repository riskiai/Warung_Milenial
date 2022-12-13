<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/register.css">
    


    <title>Warung Milenial</title>
  </head>

  
  <body>
 
 <!-- Form Registrasi -->
  <div class="container mt-4 py-3">
    <h3 class="text-center mt-4 mb-3 py-1 text-light" style="margin-top: 100px; margin-bottom: 100px;">HALAMAN REGISTRASI <br>WARUNG MILENIAL </h3>
    <div class="p-5 mb-5 mt-5">
    <form method="POST" action="simpan_register.php" class="fo">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="user" style="color: white;">Username</label>
          <input type="text" class="form-control" id="user" name="username" placeholder="Masukan Username">
        </div>
        <div class="form-group col-md-6">
          <label for="pass" style="color: white;">Password</label>
          <input type="password" class="form-control" id="pass" name="password" placeholder="Masukan Password">
        </div>
      </div>
      <div class="form-group">
        <label for="nama" style="color: white;">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukan Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="jk" style="color: white;">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki">
          <label class="form-check-label" for="jk" style="color: white;">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Perempuan">
          <label class="form-check-label" for="jk" style="color: white;">Perempuan</label>
        </div>
      </div>
      <div class="form-group">
        <label for="tgl" style="color: white;">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl" name="tanggal_lahir">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="rumah" style="color: white;">Alamat</label>
          <input type="text" class="form-control" id="rumah" name="alamat" placeholder="Masukan Alamat">
        </div>
        <div class="form-group col-md-2">
          <label for="telp"style="color: white;">No. Telpon</label>
          <input type="text" class="form-control" id="telp" name="hp" placeholder="No. Telpon">
        </div>
      <div class="form-group col-md-4">
          <label for="sts"style="color: white;">Status Registrasi</label>
          <select id="sts" class="form-control" name="status">
            <option selected>Pilih...</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
      </div>     
      <button type="register" class="btn warna2 text-light">Register</button>
      <button type="reset" class="btn warna3 text-light">Reset</button>
    </form>
  </div>
  </div>
  <!-- Akhir Form Registrasi -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>