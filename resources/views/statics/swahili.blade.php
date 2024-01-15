@extends('layouts.app')
@section('content')
<div class="row">
	<div class="heading">
	 	<label class="welcome">Swahili Books</label> <br />
 		<label class="paragraph">Find Swahili books here </label>

 	</div>
 	<div class="row">
 		<form class="d-flex search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search book" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>
@endsection
