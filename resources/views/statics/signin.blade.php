<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <ion-icon name="{{ asset ('log-in-outline')}}"></ion-icon> Log in </title>
  <!-- <link href="css/bootstrap.css" type="text/css"> -->
  <link href="{{ asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet">
  <link href="{{ asset('css/app.css')}}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center min-vh-100 align-items-center log_div "> 
    <form class="row g-3 login_form col-md-8 shadow-lg p-4 mb-4 bg-white pt-5">
     <!-- <div class="img ">
        <img src="{{ asset('images/logo_4.png')}}">
        </div> -->
      <div class="align-items-center textt">
      <label class="headings text-color ">Create Accout</label> <br>
    </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label text-color">First name</label>
        <input type="Text" class="form-control" id="inputEmail4 required!">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label text-color">Last name</label>
        <input type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label text-color">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label text-color">Phone number</label>
        <input type="number" class="form-control" id="inputPassword4">
      </div>
      <div class="col-md-6">
    <label class="visually-hidden" for="autoSizingSelect">Ciriculum</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected class="text-color">Choose cirriculum</option>
      <option value="cambridge">Cambridge</option>
      <option value="uneb">Uneb</option>
      
    </select>
  </div>
     
    
      <div class="col-md-6">
        <label class="visually-hidden" for="autoSizingSelect">Class</label>
        <select id="autoSizingSelect" class="form-select">
          <option selected class="text-color">Enter your class</option>
          <option>S1</option>
          <option>S2</option>
          <option>S3</option>
          <option>S4</option>
          <option>S5</option>
          <option>S6</option>
          <li><hr class="dropdown-divider">Cambridge</li>
          <option>Yr7</option>
          <option>Yr8</option>
          <option>Yr9</option>
          <option>Yr10</option>
          <option>Yr11</option>
          <option>Yr12</option>
          <option>Yr13</option>
        
        </select>
      </div>
      
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label text-color" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12 align-items-left ">
        <button type="submit" class="btn btn-primary buttons btn btn-success">Next</button>
      </div>
    </form>
  </div>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>