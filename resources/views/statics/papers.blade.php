@extends('layouts.app')
@section('content')
<div class="row">
	<div class="heading">
	 	<label class="welcome">Economics Books</label> <br />
 		<label class="paragraph">Find every Past papers here</label>

 	</div>
 	<div class="">
     	<div class="col-md-6">
            <label class="visually-hidden" for="autoSizingSelect">Ciriculum</label>
            <select class="form-select" id="autoSizingSelect">
            <option selected class="text-color">Choose cirriculum</option>
            <option value="cambridge">Cambridge</option>
            <option value="uneb">Uneb</option>              
            </select>
        </div>
     
    </div>
</div>
@endsection
