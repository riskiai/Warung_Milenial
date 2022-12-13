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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

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
        <a class="navbar-brand text-white" href="user.php"><strong> <i> Warung Milenial</strong></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="user.php">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="menu_pembeli.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN ANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  

  <!-- Menu -->
      <div class="container mt-5">
      <h3 class="text-center font-weight-bold">DAFTAR MENU <br>  WARUNG MILENIAL </h3>
        <div class="row mt-3">
         
          <?PHP

          include('koneksi.php');

          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>

          <div class="col-md-3 mt-4">
            <div class="card brder-dark">
              <img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga efek"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href="beli.php?id_menu=<?php echo $result['id_menu']; ?>" class="btn warna2 btn-sm btn-block text-light  ">BELI MENU</a>

                <a href="" class="btn warna3 btn-sm btn-block text-light" id="detail" data-toggle="modal" data-target="#exampleModal" data-image="<?php echo $result['gambar']; ?>" data-nama="<?php echo $result['nama_menu']; ?>" data-harga="<?php echo $result['harga']; ?>"  >DETAIL MENU</a>
                
              </div>
            </div>
          </div>
          <?php endforeach; ?>
         </div> 
      </div>
  <!-- Akhir Menu -->

      

 <!-- Awal Footer -->
 <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> <i>2022 -  Warung Milenial</i> </p>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold"> <i>Contact Us</i>  </label>
          <a href="https://www.instagram.com/"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="https://www.instagram.com/"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="https://www.instagram.com/"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;"> <b>DETAIL MENU WARUNG MILENIAL</b>  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
                
                          
            <img src="" id="image" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold" id="nama" ></h5>
               <label class="card-text harga efek" id="rupiah" ><strong>Rp.</strong> </label>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn warna3 text-light" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
     


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

    <script> 

        $(document).ready(function() {
              $('body').on('click', '#detail', function(){
                let image=$(this).data('image'); 
                let nama=$(this).data('nama');
                let harga=$(this).data('harga');
                $('#image').attr('src',('upload/'+image)); 
                $('#nama').html(nama);
                $('#rupiah').html(harga);  
              }) 
        })

    </script>
  </body>
</html>
<?php } ?>