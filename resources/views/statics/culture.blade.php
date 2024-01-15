@extends('layouts.app')
@section('content')
<div class="row">
	<div class="heading">
	 	<label class="welcome">Culture</label> <br />
 		<label class="paragraph">Discover every culture book here </label>

 	</div>
 	<div class="row">
 		<form class="d-flex search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search Cuture books" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
@endsection