@extends('layouts.app')
@section('content')
<div class="row">
 	<div class="heading">
 		<label class="welcome"> Welcome to our our Library</label> <br />
 		<label class="paragraph">Here you choose your wanted category</label>
 	</div>
	 <div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/history.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">History</h5>
		    <p class="card-text"></p>
		    <a href="{{url('history')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/econ.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Economics</h5>
		    <p class="card-text"></p>
		    <a href="{{url('economics')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/math.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Mathematics</h5>
		    <p class="card-text"></p>
		    <a href="{{url('mathematics')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/physics.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Physics</h5>
		    <p class="card-text"></p>
		    <a href="{{url('physics')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/chemistry.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Chemistry</h5>
		    <p class="card-text"></p>
		    <a href="{{url('chemistry')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/biology.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Biology</h5>
		    <p class="card-text"></p>
		    <a href="{{url('biology')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/english.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">English</h5>
		    <p class="card-text"></p>
		    <a href="{{url('english')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/literature.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Literature</h5>
		    <p class="card-text"></p>
		    <a href="{{url('literature')}}" class="btn btn-primary mt-4">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/french.webp')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">French</h5>
		    <p class="card-text"></p>
		    <a href="{{url('french')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/bs.png')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Business Studies</h5>
		    <p class="card-text"></p>
		    <a href="{{url('business')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/ent.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Entreprenuership</h5>
		    <p class="card-text"></p>
		    <a href="{{url('entreprenuership')}}" class="btn btn-primary mt-4">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width:18rem;">
		<img src="{{asset('images/swahili.jpg')}}" class="card-img-top" alt="...">
		<div card-body>
			<h5 class="card-title">Kiswahili</h5>
			<p class="card-text"></p>
			<a href="{{url('papers')}}" class="btn btn-primary mt-3">Go to</a>
		</div> 
	</div>

	<div class="card card_spacing" style="width: 18rem;">
		  <img src="{{ asset('images/ict.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Information Technology</h5>
		    <p class="card-text"></p>
		    <a href="{{url('ict')}}" class="btn btn-primary">Go to </a>
		  </div>
	</div>
	<div class="card card_spacing" style="width:18rem;">
		<img src="{{asset('images/paper.jpg')}}" class="card-img-top" alt="...">
		<div card-body>
			<h5 class="card-title">Past Papers</h5>
			<p class="card-text"></p>
			<a href="{{url('papers')}}" class="btn btn-primary">Go to</a>
		</div> 
	</div>
	<div class="card card_spacing" style="width:18rem;">
		<img src="{{asset('images/test.jpg')}}" class="card-img-top" alt="...">
		<div card-body>
			<h5 class="card-title">Tests</h5>
			<p class="card-text"></p>
			<a href="{{url('test')}}" class="btn btn-primary">Go to</a>
		</div> 
	</div>

 </div>

@endsection