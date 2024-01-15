@extends('layouts.app')
@section('content')
<div class="row">
	<div class="heading">
	 	<label class="welcome">NOVELS</label> <br />
 		<label class="paragraph">Find every novel here </label>

 	</div>
 	<div class="row">
 		<form class="d-flex search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search Novels" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="card card_spacing" style="width: 16rem;">
          <img src="{{ asset('images/short_story.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Short story</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Read... </a>
          </div>
    </div>
    <div class="card card_spacing" style="width: 16rem;">
          <img src="{{ asset('images/drama_n.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Drama</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Read... </a>
          </div>
    </div>
    <div class="card card_spacing" style="width: 16rem;">
          <img src="{{ asset('images/love_n.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Romance</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Read... </a>
          </div>
    </div>
    <div class="card card_spacing" style="width: 16rem;">
          <img src="{{ asset('images/.adventure.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Adventure</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Read... </a>
          </div>
    </div>
     <div class="card card_spacing" style="width: 16rem;">
          <img src="{{ asset('images/.adventure.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Fictional</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Read... </a>
          </div>
    </div>
     <div class="card card_spacing" style="width: 16rem;">
          <img src="{{ asset('images/.adventure.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Thriller</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Read... </a>
          </div>
    </div>
   <div class="card mb-3 card_spacing">
          <img src="{{asset('')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Find more novels</h5>
                <p class="card-text">In case you cannot find a certain genre of novels click the link below to find more.</p>
               <button class="btn btn-primary"><a>Find more</a></button>
          </div>
    </div>
    
</div>
@endsection