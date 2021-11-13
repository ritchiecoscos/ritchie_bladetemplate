@extends('layouts.app')

@section('content')

<h1 class ='text-center'>This is My Application</h1>
<div class="container d-flex align-items-center justify-content-center mt-5">
<div class="card" style="width: 18rem;">
     <div class="card-body">
        <h5 class="card-title">Units</h5>
         <p class="card-text">Do you want to continue click proceed.</p>
         <a href="/units" class="btn btn-primary">Proceed</a>
      </div>
    </div>
 <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Categories</h5>
        <p class="card-text">Do you want to continue click proceed.</p>
        <a href="/categories" class="btn btn-primary">Proceed</a>
      </div>
     </div>
 <div class="card" style="width: 18rem;">
   <div class="card-body">
       <h5 class="card-title">Merchandices</h5>
       <p class="card-text">Do you want to continue click proceed.</p>
       <a href="/merchandices" class="btn btn-primary">Proceed</a>
    </div>
</div>
@endsection