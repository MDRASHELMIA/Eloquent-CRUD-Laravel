<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container">
        <div class="display-4 text-center font-weight-bolder ">Dhaka College, Dhaka</div>
        <div class="display-5 text-center font-weight-bolder ">University of Dhaka</div>
        <div class="display-5 text-center font-weight-bolder ">Department of Chemistry</div>
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <a class="navbar-brand text-light font-weight-bolder" href="/">Dhaka College</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{route('form')}}">Apply</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{route('view')}}">View</a>
                </li>
              </ul>
            </div>
          </nav>

          @yield('page')


          <div class="mt-5 pt-5 pb-5 footer bg-light container">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                  <h2>Dhaka College</h2>
                  <p class="pr-5 text-justify">Dhaka College is the oldest secular educational institution of Bangladesh located in New Market, Dhaka 1205. It offers higher secondary education. It has Honours and Masters programs as well which are affiliated to the University of Dhaka </p>
                  <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                  <h4 class="mt-lg-0 mt-sm-3">Quicks Links</h4>
                    <ul class="m-0 p-0 list-group list-group-flush">
                      <li class="list-group-item"> <a href="#">Home</a></li>
                      <li class="list-group-item"> <a href="#">Nam mauris velit</a></li>
                      <li class="list-group-item"> <a href="#">Etiam vitae mauris</a></li>
                      <li class="list-group-item"> <a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                  <h4 class="mt-lg-0 mt-sm-4">Address</h4>
                  <p>Dhaka College (Bengali: ঢাকা কলেজ) is a public college located in New Market, Mirpur Road, Dhanmoddi, Dhaka, Bangladesh.</p>
                  <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
                  <p><i class="fa fa-envelope-o mr-3"></i>info@dhakacollege.com</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col copyright">
                  <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
                </div>
              </div>
            </div>
            </div>
    <!-- Optional JavaScript -->
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
