<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/70920e8a48.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</head>

<body>
    <!--HEADER SECTION STARTS-->
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="logo.png" class="w-75" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a key="0" class="nav-link active" aria-current="page" href="index.html#home">ANASAYFA</a>
                        </li>
                        <li class="nav-item">
                            <a key="1" class="nav-link" aria-current="page" href="index.html#about">HAKKIMIZDA</a>
                        </li>
                        <li class="nav-item">
                            <a key="2" class="nav-link" aria-current="page" href="index.html#services">HİZMETLERİMİZ</a>
                        </li>
                        <li class="nav-item">
                            <a key="3" class="nav-link" aria-current="page" href="index.html#contact">İLETİŞİM</a>
                        </li>
                        <li class="nav-item">
                            <a key="4" class="nav-link" aria-current="page" href="gallery.php">GALERİ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="language" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                TÜRKÇE
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" id="en">ENGLISH</a></li>
                                <li><a class="dropdown-item" id="tr">TÜRKÇE</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a key="5" class="nav-link ms-3" aria-current="page" href="">GİRİŞ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--HEADER SECTION ENDS-->
    <!--GALLERY SECTION STARTS-->
    <section id="gallery" class="gallery section-padding">
        <div class="container">
            <div class="section-header text-center pb-3">
                <h3 key="4">GALERİ</h3>
                <p key="9">Sektördeki son derece olumlu bilinirliğini, yüksek hizmet kalitesi,
                    müşteri odaklı çalışması, servislerinin garantili olması, sürekli
                    kendini yenileyen ve eğitimlerini aksatmayan güler yüzlü personeli,
                    iş disiplini ve takım çalışması sayesinde sürdürmektedir.</p>
            </div>

            <div class="row">
            <?php
                $handle = opendir(dirname(realpath(__FILE__)).'/images/');
                while($file = readdir($handle)){
                  if($file !== '.' && $file !== '..'){
                    $control=explode(".",$file);
                    $cont=$control[1];
                    if($cont=="jpeg" || $cont=="png" ||$cont=="jpg"){
                        echo '<div class="col-lg-4 col-sm-6">
                            <img src="images/'.$file.'" class="gallery-item img-thumbnail mb-3"  style="width: 100%; height:250px" alt="">
                            </div>';
                    }else{
                        echo '<div class="col-lg-4 col-sm-6">
                            <video  class="gallery-item img-thumbnail mb-3" style="width: 100%; height:250px" controls>
                            <source src="images/'.$file.'" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                            </div>';
                    }
                    
                  }
                }
            ?>
               
            </div>
        </div>
    </section>
    <!--GALLERY SECTION ENDS-->
    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p key="27" class="text-white">Copyright © 2023 Tüm Hakları Saklıdır.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>