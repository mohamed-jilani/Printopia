<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  @include('layouts.head')
</head>

<body>

 <div class="hero_area">
    <div class="bg-box">
      <img src="{{asset('assets/lesImages/hero-bg/hero-bg3.jpg')}}" alt="">
    </div>

    <!-- header section strats -->
    @include('layouts.main-headerbar')
    <!-- end header section -->


    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">

                    <h1>
                        Des stickers personnalisés qui déchirent
                    </h1>
                    <p>
                        Commande en ligne simplifiée, délai de production de 4 jours et bons à tirer (BAT) en ligne gratuits. Livraison gratuite.
                    </p>
                    <div class="btn-box">
                        <a href="" class="btn1">
                            Acheter maintenant
                        </a>&nbsp;
                        <a href="" class="btn1">
                            Recevoir des échantillons
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                        Des stickers personnalisés qui déchirent
                    </h1>
                    <p>
                        Commande en ligne simplifiée, délai de production de 4 jours et bons à tirer (BAT) en ligne gratuits. Livraison gratuite.
                    </p>
                    <div class="btn-box">
                        <a href="" class="btn1">
                            Acheter maintenant
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                        Des stickers personnalisés qui déchirent
                    </h1>
                    <p>
                        Commande en ligne simplifiée, délai de production de 4 jours et bons à tirer (BAT) en ligne gratuits. Livraison gratuite.
                    </p>
                    <div class="btn-box">
                        <a href="" class="btn1">
                            Recevoir des échantillons
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->

  </div>

@yield('content')


  <!-- footer section -->
  @include('layouts.footer')
  <!-- footer section -->

  @include('layouts.footer-scripts')
</body>

</html>
