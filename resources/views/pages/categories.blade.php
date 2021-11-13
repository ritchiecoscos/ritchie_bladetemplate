@extends('layouts.app')
@section('content')
<div class='container'>
   <table class='table table-bordered'>
     <thead class='thead-dark'>
        <tr>
         <th scope='col'> Categories</th>
         <th scope='col'> Description</th>
        </tr>
     </thead>
   <tbody>
       @foreach($categories as $category)
          <tr>
              <td>{{$category->category}}</td>
              <td>{{$category->description}}</td>
          </tr>
            @endforeach
          </tbody>
       </table>
    </div>
@endsection