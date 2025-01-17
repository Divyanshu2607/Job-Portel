<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>@yield('title', 'Jobs') | {{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />

  <script>
    window.app = {};
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="{{ route('welcome') }}"> <img src="{{ asset('img/logo.png') }}" width="50px" alt="Logo"> {{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Join Now</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> <!-- /.navbar -->

  <main id="app" role="main" class="my-5">

  <section class="brand" style="background-image: url('{{ asset('img/landing/img2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; color: #ffffff; padding: 50px 0; position: relative;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.0);"></div>
  <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
          <div class="col-md-6">
            <h2 class="display-4 text-dark">Welcome to your professional Job Portal</h2>
            <hr>
            <p class="mt-4 text-dark">
            Welcome to Online Job Portal, where your career journey begins! We connect skilled professionals with top job opportunities, offering a variety of roles across industries to suit every experience level. Discover tailored job recommendations, expert career advice, and a smooth, easy application process—all designed to help you succeed. Join our community today and take the first step toward your dream job!</p>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('img/landing/img1.png') }}" class="mt-2 img-fluid img-rounded" alt="Image 1">
          </div>
        </div>
      </div>
    </section>

    
  <section class="find" style="background-image: url('{{ asset('img/landing/img1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; color: #ffffff; padding: 50px 0; position: relative;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.0);"></div>
  <div class="container" style="position: relative; z-index: 2;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center">
            <h2 class="display-4 my-5 text-dark">Find  your dream job </h2>
            <a href="{{ route('login') }}" class="btn btn-outline-success btn-lg">Let's Go</a>
          </div>
        </div>
      </div>
    </section>

    <section class="postjob bg-light-red">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2 class="display-5">Want to apply for a new job?</h2>
          </div>
          <div class="col-md-6 text-center">
            <a href="{{ route('user.dashboard') }}" class="btn-post-job btn btn-outline-secondary btn-lg btn-">Apply for a Job</a>
          </div>
        </div>
      </div>
    </section>

  </main><!-- /.container -->

  <footer class="footer py-3">
    <div class="container">
      <div class="col-12">&copy; 2024- {{ config('app.name') }}</div>
    </div>
  </footer> <!-- /.footer -->


  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script type="application/javascript" src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script type="application/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  @stack('js')
</body>

</html>
