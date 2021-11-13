

@extends('layouts.app')
@section('content')

 <div class='container'>
   <table class='table table-bordered'>
     <thead class='thead-dark'>
        <tr>
         <th scope='col'> Unit Type</th>
         <th scope='col'> Description</th>
        </tr>
     </thead>
   <tbody>
      @foreach($units as $units)
         <tr>
            <td>{{$units->unit_type}}</td>
            <td>{{$units->description}}</td>
         </tr>
            @endforeach
          </tbody>
       </table>
    </div>
@endsection