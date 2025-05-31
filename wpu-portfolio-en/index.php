<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCvh5ndmeaPVwrog3kLC93ow&key=AIzaSyDl9P1svYKBRCwTO48J0v4dbc7iWkgzVwE');

$youtubeProfilePic = $result ['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result ['items'][0]['snippet']['title'];
$subscriber = $result ['items'][0]['statistics']['subscriberCount'];

// latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDl9P1svYKBRCwTO48J0v4dbc7iWkgzVwE&channelId=UCvh5ndmeaPVwrog3kLC93ow&maxResults=1&order=date&part=snippet&type=video';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

// intragram API
$result = get_Curl($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];
$clientID = "1277256363821289";
$accessToken = "IGAASJqGvaSOlBZAE9qR2VzX3hKZATk3VFRWVm9wbmdqOTlUalNuUW4zT2JLOXVQUlcxTG5DdEVhek9hV2Q1cUxMRmZA0a21HLXhfVHRkSllHMzBXWE5TbHNualpnOXRPc3JINGpoQVFWYmxzcEVxMmZAyc1lEV2ZAyWTY3a0I4N3JYOAZDZD";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
    
  <style>
  /* Warna dasar */
  .bg-pink {
    background-color:rgb(238, 118, 198) !important; 
  }

  .bg-purple {
    background-color: #d8b4f8 !important; 
  }

  .navbar {
    background-color:rgb(245, 42, 177) !important;
  }

  .jumbotron {
    background: linear-gradient(to right, #ffb6c1, #d8b4f8);
    color: #4a4a4a;
  }

  .about, .portfolio, .contact {
    background-color:rgb(221, 189, 203);
  }

  .card {
    border: none;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .card-title, .nav-link, .navbar-brand, h2 {
    color: #7a278f;
  }

  .btn-primary {
    background-color: #d8b4f8;
    border-color: #d8b4f8;
  }

  .btn-primary:hover {
    background-color:rgb(92, 46, 138);
    border-color:rgb(173, 97, 248);
  }

  footer {
    background-color: #7a278f;
    color: white;
  }

  .ig-thumbnail img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-right: 8px;
    border-radius: 8px;
  }
</style>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-pink bg-pink fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Queen Erika</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#social">Social Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">My Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profile.png" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Erika Nurhasnah</h1>
          <h3 class="lead">Student | Programmer | Desainer | Data Analyst</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Hi! My name is Erika Nurhasnah, and I was born in Padang on September 26, 2002. I am currently a sixth-semester student majoring in Information Systems at UIN Imam Bonjol Padang.
            I have a strong interest in design and data exploration. Design allows me to express my creativity, while working with data challenges me to think analytically and pay attention to detail.</p>
          </div>
          <div class="col-md-5">
            <p>I am the eldest of two siblings and currently live with my grandmother in Padang. In my free time, I enjoy cycling, running, and drawing—activities that help keep both my body and mind active.
            I believe that combining technical skills, creativity, and a passion for learning will help me build a better and brighter future.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Youtube & IG -->
    <section class ="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $youtubeProfilePic; ?>" width="200" 
                class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p>@yoyoi-liak</p>
                <p><?= $subscriber; ?> Subscribers</p>
                <div class="g-ytsubscribe" data-channelid="UCvh5ndmeaPVwrog3kLC93ow" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item"
                  src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
            <div class="col-md-5">
              <div class="row justify-content-center">
                <div class="col-md-4">
                  <img src="img/profileig.png" width="200" class="rounded-circle img-thumbnail">
                </div>
                <div class="col-md-8">
                  <h5>@_hasnah.nyu</h5>
                  <p>Erika Nurhasnah ~ 안나 🐬</p>
                  <p>202 Followers</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="ig-thumbnail">
                    <img src="img/thumbs/7.jpg">
                  </div>
                  <div class="ig-thumbnail">
                    <img src="img/thumbs/2.png">
                  </div>
                  <div class="ig-thumbnail">
                    <img src="img/thumbs/9.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Projects -->
<section class="projects bg-purple" id="projects">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>My Projects</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <!-- Project WPU-Hut -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/wpu-hutpizza.png" class="card-img-top" alt="WPU-Hut">
          <div class="card-body">
            <h5 class="card-title">Menu Hut</h5>
            <p class="card-text">Website katalog menu makanan dari Pizza Hut. Dibuat dengan HTML dan Bootstrap, menampilkan menu seperti Pizza, Pasta, dan Nasi.</p>
            <a href="http://localhost/api-erika/wpu-hut/latihan2.html" class="btn btn-primary" target="_blank">View Project</a>
          </div>
        </div>
      </div>

      <!-- Project WPU-Movie -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/wpu-movie.png" class="card-img-top" alt="WPU-Movie">
          <div class="card-body">
            <h5 class="card-title">Search Movie</h5>
            <p class="card-text">Website pencarian film menggunakan OMDb API. Menampilkan data film dan detailnya lewat modal popup.</p>
            <a href="http://localhost/api-erika/wpu-movie/index.html" class="btn btn-primary" target="_blank">View Project</a>
          </div>
        </div>
      </div>

      <!-- Project WebCRUD -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/webcrud.png" class="card-img-top" alt="WebCRUD">
          <div class="card-body">
            <h5 class="card-title">WebCRUD</h5>
            <p class="card-text">Website CRUD untuk mendata siswa lulusan MAN 1 Padang Pariaman. Memiliki fitur tambah, edit, hapus, dan ekspor ke Excel.</p>
            <a href="http://localhost/api-erika/webcrud-main" class="btn btn-primary" target="_blank">View Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/8.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kolase inspirasi visual yang saya buat untuk menuangkan perasaan dan kreativitas dalam bentuk desain. 
                  Setiap gambar memiliki makna tersendiri dan menggambarkan suasana hati saya.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/10.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Ilustrasi digital yang saya buat dari karakter favorit saya. 
                  Menggambar merupakan salah satu cara saya mengekspresikan imajinasi dan hobi saya sejak kecil.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/9.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Perencanaan studi saya selama kuliah. 
                  Gambar ini saya desain sendiri untuk membantu memvisualisasikan perjalanan akademik saya dari semester 1 hingga 8.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Tangkapan layar dari aktivitas saya dalam dunia pemrograman. Sebagai mahasiswa Sistem Informasi, 
                  saya sering menulis kode dan membangun proyek sebagai bagian dari pembelajaran dan eksplorasi teknologi.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/11.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Keseharian saya tidak lepas dari mengabadikan keindahan sekitar. 
                  Saya suka memotret langit, bunga, dan suasana alam sebagai bentuk apresiasi terhadap hal-hal kecil yang menenangkan.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/7.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Foto ini saya ambil saat bersepeda di sore hari. 
                  Aktivitas ini adalah bagian dari hobi saya yang menyegarkan pikiran sambil menikmati keindahan alam sekitar.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Wa: +6282171615501</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">Padang</li>
              <li class="list-group-item">Jl. kabun, RT.3/RW.8, kelurahan balai gadang, koto tangah</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Wpu portfolio EN &copy; 2025.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>