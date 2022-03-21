  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="/"><span><img src="{{Voyager::image(setting('site.logo'))}}" alt="">  {!!setting('site.title')!!}</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/officials">SK Officials</a></li>
          <li><a href="/admin">Admin</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>{!!setting('site.description')!!}</h1>
      <h2>{!!setting('site.motto')!!}</h2>
    </div>
  </section><!-- #hero -->
  <main id="main">
