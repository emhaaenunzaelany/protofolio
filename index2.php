
<!DOCTYPE html>
<?php

include_once 'koneksi2.php';

$db = new Database();
$aksi = $_GET['aksi'];

if ($aksi == "index2") {
    //tambah data
    $db->tambah_data($_POST['nama'], $_POST['role'], $_POST['availability'], $_POST['usia'], $_POST['lokasi'], $_POST['pengalaman'], $_POST['email']);
    header("location:index2.php");
}
?>

<html>
    <head>
        <title>Profil Saya</title>
        <!-- 1 Masukkan meta name habis itu ke style.css-->
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="asset/css/style2.css">
    </head>
    <body>
        <nav>
            <!-- buat menu mobile responsive balik ke css lagi-->
            <div class="menu-mobile">
                <a href="#" class="active">Menu</a>
                <div id="link">
                    <a href="/">HOME</a>
                    <a href="#">PRODUCT</a>
                    <a href="#">GALLERY</a>
                    <a href="#">BLOG</a>
                    <a href="#">INVENTORY</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>

        <section id="box-profile">
            <div class="img-profile">
                <div class="photo"  style="background-image: url('asset/img/images.png')">
                </div>
            </div>
            <div class="description">
                <?php
                $no = 1;
                foreach ($db->tampil_data()as $data){
                ?>
                <h1><?php echo $data ['nama'];?></h1>
                <p><h1><?php echo $data ['role'];?></h1></p>
                <a href="#" class="button bg-blue">Edit</a>
                <a href="#" class="button border-green">Resume</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Availability</p>
                    <p class="text-gray"><h4><?php echo $data ['availability'];?></h4></p>
                </div>
                <div class="data">
                    <p class="field">Usia</p>
                    <p class="text-gray"><h4><?php echo $data ['usia'];?></h4></p>
                </div>
                <div class="data">
                    <p class="field">Lokasi</p>
                    <p class="text-gray"><h4><?php echo $data ['lokasi'];?></h4></p>
                </div>
                <div class="data">
                    <p class="field">Pengalaman</p>
                    <p class="text-gray"><h4><?php echo $data ['year_experience'];?></h4></p>
                </div>
                <div class="data">
                    <p class="field">Email</p>
                    <p class="text-gray"><h4><?php echo $data ['email'];?></h4></p>
                </div>
                <?php
                }
                ?>
            </div>
        </section>

        <section id="input-form">
            <form method="POST" action="index2.php?aksi=index2">
                <div class="form">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Anda">
                </div>   
                <div class="form">
                    <label>Role</label>
                    <input type="text" name="role" placeholder="Masukkan Kahlian Anda">
                </div>  
                <div class="form">
                    <label>Availability</label>
                    <input type="text" name="availability" placeholder="Paruh Waktu atau Penuh Waktu">
                </div>  
                <div class="form">
                    <label>Usia</label>
                    <input type="number" name="usia" placeholder="Masukkan Usia Anda">
                </div>  
                <div class="form">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi">
                </div>  
                <div class="form">
                    <label>Years Experience</label>
                    <input type="number" name="pengalaman" placeholder="">
                </div>  
                <div class="form">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan email anda">
                </div>            
                <div class="form">
                    <input type="submit" name="submit" value="SUBMIT" class="bg-green">
                </div>
            </form>            
        </section>

        <script>
            function myFunction() {
              var x = document.getElementById("link");
              if (x.style.display === "block") {
                x.style.display = "none";
              } else {
                x.style.display = "block";
              }
            }
        </script>
            
    </body>
</html>
