<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Asia Track</title>
  </head>
  <body>
  
   <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="../assets/logo_asiatracks_color.png" width="120"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        </ul>
        <span class="navbar-text">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact    </a>
            </li>
            <span class="navbar-text"> | </span>
            <li class="nav-text">
                <a class="nav-link disabled" href="#" aria-disabled="true"> User </a>
            </li> 
        </ul>

    </div>
    </nav>

    
    

    <!-- isi halaman -->
    @yield('content')

<br/>
<br/>


    <footer class="py-5 bg-light">
    <div class="container">
    <div class="row">
        <div class="col-sm">
        <p class='text-danger'>Destination</p>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        </div>
        <div class="col-sm">
        <p class='text-danger'>Themes</p>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        </div>
        <div class="col-sm">
        <p class='text-danger'>Connect</p>
        <a href="#" class='text-dark'>Facebook</a><br/>
        <a href="#" class='text-dark'>Instagram</a><br/><br/>
        <p class='text-danger'>Contact</p>
        <a href="#" class='text-dark'>Destination</a><br/>
        <a href="#" class='text-dark'>Destination</a><br/>
        </div>
        <div class="col-sm">
            <div class="d-flex">
                <div class="btn-group">
                        <button type="button" class="btn btn-light">English</button>
                        <button type="button" class="btn btn-loght dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item" href="#">---</a>
                        <a class="dropdown-item" href="#">---</a>
                        <a class="dropdown-item" href="#">---</a>
                        </div>
                </div>
            </div><br/>
            <div class="d-flex">
                <div class="btn-group">
                    <button type="button" class="btn btn-light">EUR</button>
                    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">---</a>
                    <a class="dropdown-item" href="#">---</a>
                    <a class="dropdown-item" href="#">---</a>
                    </div>
                </div>
            </div>

            <div class="row">
            <img src="../assets/logotype_asiatracks_color@2x.png.png" width=45%>
            <div class="container">
            </div>
            </div>
            <div class="row">
            <img src="../assets/GGTO_logo_bw.png" width=15%>
            <img src="../assets/vvkr_bw.png" width=15%>
            <img src="../assets/calamiteitenfonds_bw@2x.png" width=15%>
            </div>
        </div>
    </div>
    </div>
    </footer>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>