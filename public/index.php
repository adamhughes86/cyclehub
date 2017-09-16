<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie ie6" lang="en-GB"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie ie7" lang="en-GB"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie ie8" lang="en-GB"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9" lang="en-GB"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en-GB"> <!--<![endif]-->
<head>
  <title>Skeleton</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="../../../assets/build/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Unica+One|Vollkorn" rel="stylesheet">
</head>

<body>

  <header class="header">
    <h1 class="header__heading">Cyclehub <span class="header__city">Liverpool</span></h1>
  </header>

  <nav class="nav">
    <a href="#benefits">Benefits</a>
    <a href="#find-a-bike">Find a Bike</a>
    <a href="#where-to-ride">Where to ride?</a>
  </nav>

  <section class="hero">
    <h2 class="hero__heading">Get into cycling in Liverpool</h2>
  </section>

  <section class="why section" id="benefits">
    <h3 class="section__heading">What are the benefits of cycling?</h3>

    <div class="section-grid-3">
      <article class="card benefit">
        <h4 class="card__heading">It's great for the environment</h4>
        <img class="card__icon" src="/assets/img/reasons/tree.png"/>
        <div class="card__text">
          <p>Reduces carbon emissions by 100%</p>
        </div>
      </article>

      <article class="card benefit">
        <h4 class="card__heading">It's much cheaper than public transport</h4>
        <img class="card__icon" src="/assets/img/reasons/moneybox.png"/>
        <div class="card__text">
          <p>You could easily save £100's a year</p>
        </div>
      </article>

      <article class="card benefit">
        <h4 class="card__heading">It's incredible for your health</h4>
        <img class="card__icon" src="/assets/img/reasons/pulse.png"/>
        <div class="card__text">
          <p>Commuting to work could add years onto your life expectancy</p>
        </div>
      </article>
    </div>
  </section>

  <!-- <section class="calculator">
    <h3 class="calculator__heading">Calculate how much benefit you would gain from commuting on a bike?</h3>

    <form class="form">
      <label for="distance">How far do you commute?</label>
      <div class="distance">
        <input id="distance" type="number" placeholder="5"/>
        miles
      </div>
      <button>Submit</button>
    </form>
  </section> -->

  <section class="section find-a-bike" id="find-a-bike">
    <h2 class="section__heading">Not got a bike?</h2>

    <div class="section-grid-2">
      <article class="card bike">
        <h4 class="card__heading">Hire</h4>
        <img src="/assets/img/bikes/hire.jpg"/>
        <div class="card__text">
          <p>Liverpool has a great City Bike scheme which allows you to cycle between stations for a low cost</p>
        </div>

        <a class="card__cta" href="https://www.citybikeliverpool.co.uk/">Find out more about City Bike Liverpool</a>
      </article>

      <article class="card bike">
        <h4 class="card__heading">Buy</h4>
        <img class="card__icon" src="/assets/img/bikes/shop.png" height="128" width="128"/>
        <div class="card__text">
          <p>There are a great selection of bike shops in Liverpool where you can get expert advice on buying a bike</p>
        </div>

        <a class="card__cta" href="https://www.google.co.uk/search?q=liverpool+bike+shops">Find your nearest bike shop</a>
      </article>
    </div>
  </section>

  <section class="section where" id="where-to-ride">
    <h2 class="section__heading">Where can I ride?</h2>

    <div class="section-grid-3">
      <article class="card location">
        <h4 class="card__heading">Sefton Park</h4>
        <img src="/assets/img/locations/sefton-park.jpg"/>
        <div class="card__buttons">
          <a href="https://www.google.co.uk/maps/place/Sefton+Park/@53.3833764,-2.937126,17z" target="_blank" class="card__cta">Find it</a>
        </div>
      </article>

      <article class="card location">
        <h4 class="card__heading">Otterspool Promenade</h4>
        <img src="/assets/img/locations/otterspool.jpg"/>
        <div class="card__buttons">
          <a href="https://www.google.co.uk/maps/place/Otterspool+Promenade/@53.3706835,-2.9354665,16.16z/" target="_blank" class="card__cta">Find it</a>
        </div>
      </article>

      <article class="card location">
        <h4 class="card__heading">Liverpool Loop Line</h4>
        <img src="/assets/img/locations/loop-line.jpg"/>
        <div class="card__buttons">
          <a href="https://www.sustrans.org.uk/ncn/map/route/liverpool-loop-line" target="_blank" class="card__cta">Find it</a>
        </div>
      </article>
    </div>
  </section>

  <footer class="footer">
    <p>A prototype made during <a href="https://www.cyclehack.com/cyclehack-liverpool">Liverpool Cyclehack 2017</a> by <a href="http://forwardtheory.co.uk">Adam Hughes</a></p>
  </footer>

<script src="../../../assets/src/js/libs/modernizr-custom.js"></script>
<script src="../../../assets/src/js/libs/jquery-1.12.4.min.js"></script>
<script src="../../../assets/src/js/libs/enquire.min.js"></script>
<script src="../../../assets/vendor/slick/slick.js"></script>
<script src="../../../assets/src/js/app.js"></script>
</body>
</html>
