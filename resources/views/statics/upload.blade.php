@extends('layouts.layout_2')
@section('content')
	<div class="container ">
  <div class="d-flex justify-content-center min-vh-100 align-items-center form_background "> 
    <form class="row g-3 login_form col-md-8 shadow-lg p-4 mb-4 bg-white pt-5">
     <!-- <div class="img ">
        <img src="{{ asset('images/logo_4.png')}}">
        </div> -->
      <div class="align-items-center textt">
      <label class="headings text-color ">Upload a file</label> <br>
    </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label text-color">File name</label>
        <input type="Text" class="form-control" id="inputEmail4 required!" required>
         <div class="valid-feedback">
	       Please enter a the file name
	    </div>
   	  </div>
       <div class="col-md-6">
        <label for="inputEmail4" class="form-label text-color">Author</label>
        <input type="text" class="form-control" id="inputEmail4" required>
      </div>
      <div class="input-group">
		  <span class="input-group-text">Enter file description</span>
		  <textarea class="form-control" aria-label="With textarea" placeholder="Enter description" name="upload_description" required></textarea>
	  </div>
     
      
      <div class="col-md-6">
    <label class="visually-hidden" for="autoSizingSelect">Ciriculum</label>
    <select class="form-select" id="autoSizingSelect" required>
      <option selected class="text-color">Choose cirriculum</option>
      <option value="cambridge">Cambridge</option>
      <option value="uneb">Uneb</option>
      
    </select>
  </div>
     
    
      <div class="col-md-6">
        <label class="visually-hidden" for="autoSizingSelect">Class</label>
        <select id="autoSizingSelect" class="form-select" required>
          <option selected class="text-color">Enter class</option>
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
	  <div>
		  <label for="formFileLg" class="form-label">Upload file</label>
		  <input class="form-control form-control-lg" id="formFileLg" type="file">
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
	    <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-danger" style="width: 25%">25%</div>
</div>
    </form>

</div>

  </div>
  </div>
@endsection