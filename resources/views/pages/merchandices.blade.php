@extends('layouts.app')
@section('content')

  <div class='container'>
   <table class='table table-bordered'>
     <thead class='thead-dark'>
        <tr>
         <th scope='col'> Brand Name</th>
         <th scope='col'> Product Name</th>
         <th scope='col'> Category Id</th>
         <th scope='col'> Unit Id</th>
         <th scope='col'> Retail Price</th>
         <th scope='col'> Whole Sales Price</th>
         <th scope='col'> Wholesales Quantity</th>
         <th scope='col'> Quantity Stock</th>
        </tr>
     </thead>
   <tbody>
    @foreach($merchandices as $merchandice)
       <tr>
           <td>{{$merchandice->brand_name}}</td>
            <td>{{$merchandice->product_name}}</td>
            <td>{{$merchandice->category_id}}</td>
            <td>{{$merchandice->unit_id}}</td>
            <td>{{$merchandice->retail_price}}</td>
            <td>{{$merchandice->wholesale_price}}</td>
            <td>{{$merchandice->wholesale_qty}}</td>
            <td>{{$merchandice->qty_stock}}</td>
          </tr>
         @endforeach
      </tbody>
    </div>
@endsection