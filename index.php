<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rajasaland Property Building</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon" />
</head>

<body>

  <section id="home" class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
    <div class="header-4-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#">
          <img style="margin-right: 0.75rem" src="assets/img/logo.svg" height="60" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content border-0" style="background-color: #141432">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem" src="assets/img/logo.svg" height="60" alt="" />
                </a>
                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#home" style="color: #e7e7e8">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#fasilitas">Facilities</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#harga">Benefit</a>
                  </li>
                  <li class="nav-item">
                    <a href="#why" class="nav-link">Why Us</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem"></div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: #e7e7e8">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#fasilitas">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#harga">Benefit</a>
            </li>
            <li class="nav-item">
              <a href="#why" class="nav-link">Why Us</a>
            </li>
          </ul>
        </div>
      </nav>

      <div id="landing" class="background-home">
        <div class="mx-auto align-items-center d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div class="left-column d-flex flex-lg-grow-2 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <!-- <div class="img-hero text-center justify-content-center d-flex">
                <img id="hero" class="img-fluid" src="assets/img/logo.svg" alt="" />
              </div> -->
            <h1 class="mt-5 title-text-big">
              Investasi Kost Terpadu
              Pertama di Indonesia
            </h1>
          </div>
          <!-- Right Column -->
          <div class="right-column d-flex justify-content-lg-end justify-content-center p-0">
            <div class="overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
              <div class="container mx-auto">
                <!-- <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                    <h2 class="title-text" style="color: lightgray">Dapatkan Promo Menarik dari Rajasaland</h2>
                    <p class="caption-text mx-auto">Daftar Sekarang !<br /></p>
                  </div> -->
                <div class="d-flex flex-wrap">
                  <div class="card p-3 mx-auto mb-4 position-relative w-md-50 w-sm-100 rounded-3">
                    <div class="card-body">
                      <p>Dapatkan Potongan DP <span style="text-decoration:line-through;color:red">250 Juta</span> Menjadi <span style="color:red"> 50 Juta</span><br> Dengan Mengisi Form di Bawah Ini</p>

                      <form id="inputform" action="simpan.php" method="post">
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required />
                        </div>
                        <div class="mb-3">
                          <label for="pekerjaan" class="form-label">Pekerjaan</label>
                          <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" required />
                        </div>
                        <div class="mb-3">
                          <label for="alamat" class="form-label">Alamat Tempat Tinggal</label>
                          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required />
                        </div>
                        <div class="mb-3">
                          <label for="nomor" class="form-label">Nomor Whatsapp</label>
                          <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                            <input type="text" name="nomor" id="nomor" class="form-control" placeholder="Nomor Telp" required />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required />
                        </div>
                        <!-- <div class="mb-3">
                            <label for="">Kapan Rencana Membeli Property ?</label>
                            <select name="waktu" class="form-select" aria-label="Default select example">
                              <option selected>< 1 Bulan</option>
                              <option value="1">< 3 Bulan</option>
                              <option value="2">< 6 Bulan</option>
                              <option value="3">+= 1 Tahun</option>
                            </select>
                          </div> -->
                        <div class="mb-5">
                          <label for="">Apakah Anda Sudah Punya Rencana Metode Pembayaran ?</label>
                          <select name="metode" class="form-select" aria-label="Default select example">
                            <option selected value="Cash">Cash</option>
                            <option value="Soft Cash">Soft Cash</option>
                            <option value="KPR">KPR</option>
                          </select>
                        </div>
                        <div class="d-flex justify-content-center align-items-center text-center w-sm-100" style="text-align: center">
                          <button type="submit" class="btn btn-outline btn-info btn-lg ">Daftar Sekarang</button>
                          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess">Launch modal</button>
                            <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Success Modal</a> -->
                        </div>
                        <!-- Modal HTML -->
                        <!-- <div id="myModal" class="modal fade">
                              <div class="modal-dialog modal-confirm">
                                <div class="modal-content">
                                  <div class="modal-header justify-content-center">
                                    <div class="icon-box">
                                      <i class="material-icons">&#xE876;</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  </div>
                                  <div class="modal-body text-center">
                                    <h4>Great!</h4>	
                                    <p>Your account has been created successfully.</p>
                                    <button class="btn btn-success" data-dismiss="modal"><span>Start Exploring</span> <i class="material-icons">&#xE5C8;</i></button>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                        <!-- end modal    -->
                      </form>
                    </div>
                  </div>

                </div>
              </div>
              <!-- Modal -->
              <div id="success_tic" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <a class="close" href="#" data-dismiss="modal">&times;</a>
                    <div class="page-body">
                      <div class="head">
                        <h2 style="margin-top:5px;">Congratulation!</h2>
                        <p>Data Anda Telah Tersimpan</p>
                      </div>
                      <h1 style="text-align:center;">
                        <div class="checkmark-circle">
                          <div class="background"></div>
                          <div class="checkmark draw"></div>
                        </div>
                        <h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="why" class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid" src="assets/illus/alasan.svg" alt="" />
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <h2 class="title-text">Alasan Berinvestasi di Wangsarajasa</h2>
          <ul class="p-0 m-0">
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center"> 1 </span>
                Kawasan Kost Terpadu Pertama di Indonesia
              </h4>
              <p class="text-caption">Hadir dengan konsep study, life, play, Wangsarajasa dilengkapi dengan berbagai fasilitas penunjang yang menjadikan Wangsarajasa sebagai kawasan kost terpadu pertama di Indonesia</p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center"> 2 </span>
                Dekat dengan Universitas Ternama di Jawa Barat
              </h4>
              <p class="text-caption">Dikelilingi oleh universitas ternama seperti UNPAD, ITB, IKOPIN, dan IPDN, Wangsarajasa akan menjadi pilihan pertama untuk para mahasiswa yang membutuhkan hunian di sekitar kampus</p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center"> 3 </span>
                Jaminan Okupansi Selama 1 Tahun
              </h4>
              <p class="text-caption">Tidak perlu repot lagi mencari penghuni, kami akan menjamin okupansi penuh rumah kost yang telah anda beli selama 1 tahun</p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center"> 4 </span>
                Fasilitas Lengkap
              </h4>
              <p class="text-caption">Rumah kos yang dilengkapi furnitur, WiFi, dan sistem one gate entrance menjamin kenyamanan penghuni untuk tinggal di kawasan Wangsarajasa</p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 4rem">
              <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center"> 5 </span>
                Nilai Investasi Terus Meningkat
              </h4>
              <p class="text-caption">Pengembangan kawasan yang terus berlanjut di atas lahan seluas 4 hektar menjamin nilai investasi yang terus meningkat dari kawasan Wangsarajasa</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center text-center mt-2" style="text-align: center">
        <a href="#landing"><button class="btn btn-outline w-60">Mulai Berinvestasi</button></a>
      </div>
    </div>
  </section>

  <section id="fasilitas" class="h-100 w-100 background-rajasa">
    <div class="facilities-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">
        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 3.25rem">
          <h2 class="title-text">Fasilitas Unggulan Wangsarajasa</h2>
          <p class="caption-text mx-auto">Fasilitas yang diberikan Wangsarajasa adalah sebagai berikut</p>
        </div>
        <div class="text-center d-lg-flex row">
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/dormitory.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Dormitory</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/student-center.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Student Center</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/mosque.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Mosque</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/club-house.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Club House</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/public.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Public Space</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/wifi.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Wifi</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/basket-court.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Basket Court</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/soccer-filed.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Soccer Field</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/swiming-pool.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Swimming Pool</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/dormitory.svg" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Cafe</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/gym.svg" class="text-center align-center py-auto text-white" alt="" />
            </div>
            <p class="detail-text mt-3">Gym</p>
          </div>
          <div class="col-md-3 col-6 mb-5">
            <div class="icon mx-auto d-grid justify-content-center align-items-center">
              <img src="assets/icon/store.png" class="text-center align-center py-auto" alt="" />
            </div>
            <p class="detail-text mt-3">Commercial Area</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="h-100 w-100">
    <div class="facilities-3-7 overflow-hidden container-xl mx-auto position-relative">
      <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
        <h2 class="title-text" style="color:#2e3a53">Our Gallery </h2>
      </div>
      <div class="container mx-auto text-center d-lg-flex row mt-2">
        <div class="col-md-3 col-6 my-2">
          <div class="gallery">
            <a target="_blank" href="assets/img/3dbuilding-f.png">
              <img src='assets/img/3dbuilding-f.png' alt='Rajasa Img' width='100%' height='100%' />
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6 my-2">
          <div class="gallery">
            <a target="_blank" href="assets/img/3dbuilding.jpg">
              <img src="assets/img/3dbuilding.jpg" alt="Rajasa Img" width="100%" height="auto">
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6 my-2">
          <div class="gallery">
            <a target="_blank" href="assets/img/3dhome.jpg">
              <img src="assets/img/3dhome.jpg" alt="Rajasa Img" width="100%" height="auto">
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6 my-2">
          <div class="gallery">
            <a target="_blank" href="assets/img/3dbuilding-f.png">
              <img src="assets/img/3dbuilding-f.png" alt="Rajasa Img" width="100%" height="auto">
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section id="harga" class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">
        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
          <h2 class="title-text">Balik Modal Dalam Waktu 6 Tahun</h2>
          <p class="caption-text mx-auto">Macam - Macam Keuntungan Wangsarajasa<br /></p>
        </div>
        <div class="d-flex flex-wrap">
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-60">
              <h2 class="price-title">Apartment</h2>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Starta Title
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Rental Income 75 Million/Year
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Assets Management Service
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Land Assent Increment : ⭐⭐
                </p>
              </div>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-80">
              <h2 class="price-title">Other Rukos</h2>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Ownership SHM
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Rental Income 85 Million/Year
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Assets Management Service
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png" alt="" /> </span>Land Assent Increment : ⭐⭐
                </p>
              </div>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline d-flex flex-column position-relative overflow-hidden h-60" style="background-color: #2e3a53">
              <h2 class="price-title text-white">Wangsarajasa</h2>
              <div class="price-list">
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png" alt="" /> </span>Ownership SHM
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png" alt="" /> </span>Rental Income 108 Million/Year
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png" alt="" /> </span>Assets Management Service
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png" alt="" /> </span>Land Assent Increment : ⭐⭐⭐
                </p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-center mt-2 mx-3">
            <a target="_blank" href="assets/img/harga.png">
              <img src='assets/img/harga.png' alt='Rajasa Img' class="img-fluid" />
            </a>
          </div>
          <div class="detail mx-3">
            <p class="note">Note : Kondisi 6 kamar Nilai Sewa RP. 15 Juta/Bulan</p>
            <p class="deskripsi mt-2">Dengan perhitungan diatas maka waktu yang diperlukan untuk mencapai Break Even Point (BEP) dengan melihat kolom Total, dengan
              modal investasi Rukos sebesar RP. 2 Miliyar, Maka diperlukan waktu untuk mencapai BEP selama 6 (Enam) tahun. Dengan persentasi Return On
              Investment (ROI) pada kisaran 15 - 18 % pertahun.</p>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center text-center mt-5 pt-2" style="text-align: center">
        <a href="#landing"><button class="btn btn-outline w-60">Dapatkan Promo Menarik</button></a>
      </div>
    </div>
  </section>

  <!-- Form Daftar -->
  <!-- <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
      <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="container mx-auto">
          <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
            <h2 class="title-text" style="color: lightgray">Dapatkan Promo Menarik dari Rajasaland</h2>
            <p class="caption-text mx-auto">Daftar Sekarang !<br /></p>
          </div>
          <div class="d-flex flex-wrap w-100">
            <div class="card p-3 mx-auto mb-4 position-relative w-md-50 w-sm-100 rounded-3">
              <div class="card-body">
                <form action="">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap" />
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nomor Whatsapp</label>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">+62</span>
                      <input type="text" name="nomor" class="form-control" placeholder="Nomor Whatsapp" />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address" />
                  </div>
                  <div class="mb-3">
                    <label for="">Kapan Rencana Membeli Property ?</label>
                    <select name="waktu" class="form-select" aria-label="Default select example">
                      <option selected>< 1 Bulan</option>
                      <option value="1">< 3 Bulan</option>
                      <option value="2">< 6 Bulan</option>
                      <option value="3">+= 1 Tahun</option>
                    </select>
                  </div>
                  <div class="mb-5">
                    <label for="">Apakah Anda Sudah Punya Rencana Metode Pembayaran ?</label>
                    <select name="waktu" class="form-select" aria-label="Default select example">
                      <option selected>Cash</option>
                      <option value="1">Debit</option>
                      <option value="2">Kredit</option>
                    </select>
                  </div>
                  <div class="d-flex justify-content-center align-items-center text-center w-sm-100" style="text-align: center">
                    <button class="btn btn-outline ">Daftar Sekarang</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <section class="h-100 w-100 maps" style="box-sizing: border-box;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex flex-lg-grow-2 flex-column align-items-lg-start text-lg-start align-items-center mb-5" style="display: grid;">
          <h1 class="text-white mt-5 title-text-big" style="align-items: center;display: grid;">Jl. GKPN, Cibeusi, Jatinangor, Kabupaten Sumedang, Jawa Barat</h1>
        </div>
        <div class="col-md-6 d-flex flex-lg-grow-2 flex-column align-items-lg-start text-lg-start align-items-center overflow-hidden map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.1087978047827!2d107.76526918720536!3d-6.9397765034679
            45!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c4a658c9e5b7%3A0x3c73cf57f1c65501!2sKost-Kosan%20Wangsarajasa%20
            Jatinangor!5e0!3m2!1sid!2sid!4v1624586780310!5m2!1sid!2sid" width="600" height="450" style="border:1;" allowfullscreen="true" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
    <div class="footer-2-3 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
      <div class="border-color info-footer">
        <div class="">
          <hr class="hr" />
        </div>
        <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
          <div class="d-flex title-font font-medium align-items-center gap-4">
            <img src="assets/img/logo.svg" height="80" alt="" />
          </div>
          <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-5">
            <a href="" class="footer-link" style="text-decoration: none">Home</a>
            <a href="#fasilitas" class="footer-link" style="text-decoration: none">Facilities</a>
            <a href="#harga" class="footer-link" style="text-decoration: none">Benefit</a>
            <a href="#why" class="footer-link" style="text-decoration: none">Why Us</a>
          </nav>
          <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
            <p style="margin: 0">Copyright © 2021 Wangsarajasa</p>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.esm.min.js" integrity="sha384-pXJyILVSfKOB4xKYbM0dJr+oH4iVvo4s7mWbiTHe6LSxd38hl16DMj6AOJyy2Wcz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- jquery validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    // delete input after send 
    // function submitForm() {
    //   // var form = document.getElementById("inputform");

    //   setTimeout(function() {

    //     $("#inputform").validate();
    //   }, 2000);

    //   // check input validation
    //   let x = document.forms["inputform"]["nama", "pekerjaan", "alamat", "nomor", "email", "metode"].value;
    //   if (x == "") {
    //     alert("Mohon isi semua form");
    //     return false;
    //   }
    // }

    $(document).ready(function() {
      $.validator.addMethod("nourl",
        function(value, element) {
          return !/http\:\/\/|www\.|link\=|url\=/.test(value);
        },
        "No URL's"
      );
      $("#inputform").validate({
        rules: {
          nama: {
            required: true
          },
          pekerjaan: {
            required: true
          },
          alamat: {
            required: true,
            minlength: 10,
          },
          nomor: {
            required: true,
            minlength: 9,
            number: true
          },
          email: {
            required: true,
            email: true
          }
        },
        messages: {
          nama: "Mohon isikan nama anda",
          pekerjaan: "Mohon isikan pekerjaan anda",
          alamat: 'Mohon isikan alamat anda, tidak kurang dari 10 character',
          nomor: 'Mohon isikan nomor yang benar',
          email: "Masukan Email yang benar",
        },
        submitHandler: function(form) {
          swal("Selamat!", "Data anda telah tersimpan!", "success").then((value) => {
            form.submit();
          });

        }
      });
    });
    // }
  </script>
</body>

</html>