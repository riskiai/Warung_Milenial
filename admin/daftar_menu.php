<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../index.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Warung Milenial</title>
  </head>
  <body>
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">WARUNG MILENIAL</span></h1>
          <hr>
          <p class="lead font-weight-bold"> <i> Silahkan Pesan Menu Sesuai Keinginan Anda <br> 
          Selamat Menikmati Sobat Milenials</i></p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  warna2">
        <div class="container">
        <a class="navbar-brand text-white" href="admin.php"><strong> <i> Warung Milenial</strong></i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="admin.php">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="../logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
      <div class="container">
        <a href="" class="btn warna3 mt-5 text-light" data-toggle="modal" data-target="#exampleModal">TAMBAH DAFTAR MENU</a>
        <div class="row">

          <?php 

          include('../koneksi.php');

          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>

          <div class="col-md-3 mt-4 mb-3">
            <div class="card brder-dark">
              <img src="../upload/<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href="" class="btn warna2 btn-sm btn-block text-light " id="editpisan" data-toggle="modal" data-target="#editModal" data-kode="<?php echo $result['id_menu']; ?>" data-namaa_menu="<?php echo $result['nama_menu']; ?>" data-jenis1="<?php echo $result['jenis_menu']; ?>" data-jenis2="<?php echo $result['jenis_menu']; ?>" data-stokk="<?php echo $result['stok']; ?>"  data-hargaa1="<?php echo $result['harga']; ?>"  data-image="<?php echo $result['gambar']; ?>" >EDIT</a>
                
                <a href="hapus_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn warna3 btn-sm btn-block text-light">HAPUS</a>
              </div>
            </div>
          </div>
              <?php endforeach; ?>
            </div>
          </div>

          
  <!-- Akhir Menu -->

  <!-- Awal Footer -->
  <hr class="footer">
      <div class="container ">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> <i>2022 -  Warung Milenial</i> </p>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold"> <i>Contact Us</i>  </label>
          <a href="https://www.instagram.com/"><img src="../images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="https://www.instagram.com/"><img src="../images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="https://www.instagram.com/"><img src="../images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->

          <!-- Button trigger modal -->
     

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                            <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="menu1">Nama Menu</label>
                          <input type="text" class="form-control" id="menu1" name="nama_menu">
                        </div>
                        <div class="form-group">
                          <label for="#">Jenis Menu</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="Makanan" name="jenis_menu" checked>Makanan 
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="Minuman" name="jenis_menu">Minuman
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="stok1">Stok</label>
                          <input type="text" class="form-control" id="stok1" name="stok">
                        </div>
                        <div class="form-group">
                          <label for="harga1">Harga Menu</label>
                          <input type="text" class="form-control" id="harga1" name="harga">
                        </div>
                        <div class="form-group">
                          <label for="gambar">Foto Menu</label>
                          <input type="file" class="form-control-file border" id="gambar" name="gambar">
                        </div><br>
                        <button type="submit" class="btn warna2 text-light" name="tambah">Tambah</button>
                        <button type="reset" class="btn warna3 text-light" name="reset">Hapus</button>
                      </form>

                      <?php 
                  if(isset($_POST['tambah'])){
                    $nama = $_POST['nama_menu'];
                    $jenis = $_POST['jenis_menu'];
                    $stok = $_POST['stok'];
                    $harga = $_POST['harga'];
                    $nama_file = $_FILES['gambar']['name'];
                    $source = $_FILES['gambar']['tmp_name'];
                    $folder = './upload/';

                    move_uploaded_file($source, $folder.$nama_file);
                    $insert = mysqli_query($koneksi, "INSERT INTO produk VALUES (NULL, '$nama', '$jenis', '$stok', '$harga', '$nama_file')");

                    if($insert){
                      echo '<script>location="./daftar_menu.php"</script>';
                    }
                    else {
                      echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
                    }
                  }

                  ?>
          </div>
        </div>
      </div>
      </div>

          <!-- Button trigger modal -->

      <!-- Modal -->
     <!-- Button trigger modal -->
         

          <!-- Modal -->
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        
                  <form method="POST" action="edit.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="menu1">Nama Menu</label>
                    <input type="hidden"  name="id_menu" id="kode" >
                    <input type="text" id="namaa_menu" class="form-control" id="menu1" name="nama_menu" >
                  </div>
                  <div class="form-group">
                    <label for="#">Jenis Menu</label>t -
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" id="jenis1" class="form-check-input" name="jenis_menu" value="Makanan">Makanan 
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" id="jenis2" class="form-check-input" value="Minuman" name="jenis_menu">Minuman
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="stok1">Stok</label>
                    <input type="text" id="stokk" class="form-control" id="stok1" name="stok">
                  </div>
                  <div class="form-group">
                    <label for="harga1">Harga Menu</label>
                    <input type="text" class="form-control" id="hargaa1" name="harga" >
                  </div>
                  <div class="form-group">
                    <label for="gambar">Foto Menu</label>
                    <input type="file" id="image" class="form-control-file border" id="gambar" name="gambar">
                  </div>
                  <button type="submit" class="btn warna2 text-light" name="tambah">EDIT</button>
                  <button type="submit" class="btn warna3 text-light" name="reset">RESET</button>
                </div>
                </form>
               
              </div>
            </div>
          </div>
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>

    <script> 

        $(document).ready(function() {
              $('body').on('click', '#editpisan', function(){
                let kode=$(this).data('kode'); 
                let namaa_menu=$(this).data('namaa_menu'); 
                let jenis1=$(this).data('jenis1');
                let jenis2=$(this).data('jenis2');
                let stokk=$(this).data('stokk');
                let hargaa1=$(this).data('hargaa1');
                let image=$(this).data('image');
                
                $('#kode').val(kode);
                $('#namaa_menu').val(namaa_menu);
                $('#jenis1').val(jenis1);
                $('#jenis2').val(jenis2);
                $('#stokk').val(stokk);  
                $('#hargaa1').val(hargaa1); 
                $('#image').attr('src',('upload/'+image));     
              }) 
        })

</script>
  </body>
</html>
<?php } ?>