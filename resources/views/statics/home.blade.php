@extends('layouts.app')
@section('content')
<div class="row">
       <div class="card cards" style="width: 14rem;">
            <img class="card-img-top" src="{{ asset('images/economics.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Economics Book</h5>
              <p class="card-text">New A level Cambridge Economics Syllabus book..</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Class: Yr 12-Yr 13</li>
              <li class="list-group-item"> For Cambridge International AS & A Level </li>
              <li class="list-group-item">Authors: Colin Bamford & Susan Grant</li>
               <button type="button" class="btn btn-primary  fade-in-right" name="Add to cart">Add to cart </button>
                <button class="btn btn-dark">  <a href="{{ asset ('documents/economics.pdf')}}" class="card-link">Preview</a> </button>
            </ul>
            
        </div>
    
        <div class="card cards" style="width: 14rem;">
            <img class="card-img-top" src="{{ asset('images/business.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Business Course Book</h5>
              <p class="card-text"> Business Coursebook  4th edition</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Class: Yr 12-Yr 13</li>
              <li class="list-group-item"> For Cambridge International AS & A Level </li>
              <li class="list-group-item">Authors: Peter Stimpson, Alastair Farquharson</li>
               <button type="button" class="btn btn-primary  fade-in-right" name="Add to cart">Add to cart </button>
               <button class="btn btn-dark"><a href="{{ asset ('documents/business.pdf')}}" class="card-link">Preview</a> </button> 
            </ul>
        </div>

        <div class="card cards" style="width: 14rem;">
                <img class="card-img-top" src="{{ asset('images/ict.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Information Technology </h5>
                  <p class="card-text"> Information Coursebook  4th edition</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Class: Yr 12-Yr 13</li>
                  <li class="list-group-item"> For Cambridge International AS & A Level </li>
                  <li class="list-group-item">Authors: Graham Brown, Brian Sarget</li>
                  <li class="list-group-item">Price : 50,000</li>
                  <button type="button" class="btn btn-primary  fade-in-right" name="Add to cart">Add to cart </button>
                   <button class="btn btn-dark">   <a href="{{ asset ('documents/it.pdf')}}" class="card-link">Preview</a> </button>
                </ul>      
        </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      

@endsection