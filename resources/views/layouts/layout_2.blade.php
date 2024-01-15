<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link href="https://fonts.cdnfonts.com/css/cartoon-free" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg p-1 mb-4bg-white pt-1 navbar-expand fixed-top"> 
                <div class="container">
                  
                   <!--  <a href=""> <img src="{{ asset('images/logo.png')}}" alt="Bootstrap" width="90" height="64" class="rounded-circle" ></a> -->
                 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me mb-2 mb-lg-0 gap-3">
                                <li class="nav-item">
                                  <label class=" nav-link active taskbar_text"> <a href="{{ url('home')}}">Online books </a> </label>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link active taskbar_text" aria-current="page" href="{{url('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active taskbar_text" href="{{ url('library')}}">Library</a>
                                    </li>
                                    <li class="nav-item dropdown taskbar_text ">
                                        <a class="nav-link dropdown-toggle"  role="" data-bs-toggle="dropdown" aria-expanded="true">Dropdown</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                </li>
                                <form class="d-flex search" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                              </form>
                               <li class="nav-item">
                                    <a class="nav-link active taskbar_text" href="{{ url('')}}">Upload</a>
                                </li>
                                 <li class="nav-item">
                                        <a class="nav-link active taskbar_text" href="{{ url('')}}">Account</a>
                                 </li>
                            </ul>
                        </div>
                
                </div>
            </nav>
        
            <div class="col-md-8">
                @yield('content')
             </div>
        </div>
    </div>
        @include('statics.footer')
          <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>