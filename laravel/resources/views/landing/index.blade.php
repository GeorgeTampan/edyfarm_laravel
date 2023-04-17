<!DOCTYPE html>
<html lang="en">
   <!-- Favicons -->
 <link rel="apple-touch-icon" href="aset/EDY FARM.png" sizes="180x180">
 <link rel="icon" href="aset/EDY FARM.png" sizes="32x32" type="image/png">
 <link rel="icon" href="aset/EDY FARM.png" sizes="16x16" type="image/png">
 <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
 <link rel="icon" href="aset/EDY FARM.png">
 <meta name="theme-color" content="#712cf9">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edy Farm</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <style>
      body {
        padding: 0%;
      }
      .top {
        background-color: #60c06f;
        height: 100vh;
        margin: 0;
      }
      .navbar {
        padding: 20px;
        margin-bottom: 20px;
      }

      .row1 {
        padding: 5%;
        margin: 0;
      }

      .row2 {
        padding: 10%;
        margin: o;
      }

      .row3 {
        background-color: #60c06f;
        height: 300px;
        padding: 3%;
        margin-top: 5%;
        margin-left: 5%;
        margin-right: 5%;
        border-radius: 50px;
      }

      .row4 {
        background-color: #dbeaff;
        margin-top: -100px;
        margin-bottom: 5%;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        padding: 2%;
        border-radius: 50px;
      }

      .row5 {
        background-color: #60c06f;
        height: 300px;
        padding: 5%;
        margin-top: 5%;
        margin-left: 10%;
        margin-right: 10%;
        border-radius: 200px;
        text-align: center;
      }

      .row6 {
        margin: 5%;
      }

      .ops {
        background-color: #dbeaff;
        margin: 20px;
        padding: 20px;
        border-radius: 20px;
      }
      .footer {
        background-color: #60c06f;
        padding: 5%;
        margin: 0;
      }

      .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
      }
/* rtl:begin:ignore */
      .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
      }

    </style>
  </head>
  <body>
    <div class="top">
      <!-- #navbar -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <img src="aset/EDY FARM.png"  class="me-3" width="60" height="60" alt="">
          <a style="color:cornsilk" class="navbar-brand fw-bold fs-3" href="{{ route('landing.index') }}">Edy Farm</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <button class="btn btn-success me-2">Home</button>
            <a href="{{ route('login.index') }}"><button class="btn btn-success me-2">Sign in</button></a>
          </div>
        </div>
      </nav>

      <div class="row row1">
        <div class="col-6">
          <h1>Solusi Manajemen Peternakan Anda</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quis quia dolores ratione, corrupti ducimus libero distinctio totam porro ex! Culpa hic, beatae ad iusto odio optio sint sequi dolor.</p>
        </div>
        <div class="col-4">
          <img src="aset/1.png" alt="" width="600px" />
        </div>
      </div>
    </div>

    <div class="row row1 justify-content-evenly">
      <div class="col-4">
        <img src="aset/2.png" alt="" width="500px" />
      </div>
      <div class="col-6">
        <h1>Manajemen data ternakmu dengan mudah dan aman !</h1>
        <p>Kebutuhan akan pendataan ternak para peternak telah tersedia dengan fitur yang praktis dan mudah diimplementasikan</p>
      </div>
    </div>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <div class="col">
            <div class="card shadow-sm">
              <img src="./aset/ternak1.jpeg" alt="">
              <div class="card-body">
                <h4 class="mb-0">Edi Rahadian</h4>
                <p class="text-muted">Peternak Ayam Tiren</p>
                <p class="card-text">"Sejak menggunakan Edy Farm manajemen peternakan ayam saya lebih teratur"</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(211, 210, 209);" class="fa fa-star me-3"></i>
                    <small class="text-muted">20/10/2022</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="./aset/gambar2.jpg" alt="">
              <div class="card-body">
                <h4 class="mb-0">Puji Bawafy</h4>
                <p class="text-muted">Peternak Sapi</p>
                <p class="card-text">"Edy Farm topp, tanpa aplikasi ini mungkin peterernakan saya tidak sebaik sekarang"</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(211, 210, 209);" class="fa fa-star"></i>
                    <i style="color: rgb(211, 210, 209);" class="fa fa-star me-3"></i>
                    <small class="text-muted">23/11/2022</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="./aset/gambar3.jpg" alt="">
              <div class="card-body">
                <h4 class="mb-0">Mamat Mahmumet</h4>
                <p class="text-muted">Peternak Ikan Mujair</p>
                <p class="card-text">"Mantappp, manajemen pemasukan dan pengeluaran lancar, thanks to Edy Farm!"</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star me-3"></i>
                    <small class="text-muted">14/12/2022</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="./aset/gambar4.jpg" alt="">
              <div class="card-body">
                <h4 class="mb-0">Januar Rifky</h4>
                <p class="text-muted">Peternak Burung Perkutut</p>
                <p class="card-text">"Makasih Edy Farm, jualan burung jadi termanajemen, we love you"</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(211, 210, 209);" class="fa fa-star"></i>
                    <i style="color: rgb(211, 210, 209);" class="fa fa-star me-3"></i>
                    <small class="text-muted">23/12/2022</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="./aset/gambar5.jpg" alt="">
              <div class="card-body">
                <h4 class="mb-0">Azril Mahmudin</h4>
                <p class="text-muted">Peternak Babi</p>
                <p class="card-text">"Website ini sangat berguna bagi saya dan babi saya"</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star me-3"></i>
                    <small class="text-muted">01/01/2023</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="./aset/gambar6.jpeg" alt="">
              <div class="card-body">
                <h4 class="mb-0">Slamet Aji Raharjo</h4>
                <p class="text-muted">Peternak Kuda</p>
                <p class="card-text">"Terimakasih Edy Farm, saya senang kuda pun tenang"</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star"></i>
                    <i style="color: rgb(255, 149, 0);" class="fa fa-star me-3"></i>
                    <small class="text-muted">04/01/2023</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


        </div>
      </div>
    </div>

    <div class="row5">
      <h1>Manage Data Ternak Mu Sekarang !</h1>
      <p>Bergabung bersama kami hanya di EDY FARM dan jadilah bagian dari peternak terbaik</p>
      <button class="btn btn-success">Gabung</button>
    </div>

    <div class="row6">
      <h1>Kenapa memilih Edy Farm</h1>
      <h5>Beberapa alasan yang mengapa Anda harus memilih Edy Farm dalam memanage data ternak Anda</h5>

      <div class="row justify-content-evenly">
        <div class="col ops">
          <h4>Gratis</h4>
          <p>Tak hanya mudah diimplementasikan, Edy Farm juga gratis dalam penggunaannya.</p>
        </div>
        <div class="col ops">
          <h4>Fitur yang fleksibel</h4>
          <p>Fitur yang tersedia simple dan mudah dipahami sehingga pengguna wan dapat dengan mudah untuk beradaptasi.</p>
        </div>
        <div class="col ops">
          <h4>Keamanan data terjamin</h4>
          <p>Keamanan data ternak Anda sudah terjamin dengan penuh privasi dari berbagai pihak.</p>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5>Jalan Notosarno No. 48 Purwokerto Selatan, Banyumas</h5>
          <h5>edyfarm@gmail.com</h5>
          <h5>4234-4522-3323</h5>
        </div>
        <div class="col-4">
          <h5>Connect with us :</h5>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-telegram"></i>
          <i class="fab fa-twitter"></i>
          <br /><br />
          <h5>Copyright Edy FARM 2022</h5>
        </div>
      </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
