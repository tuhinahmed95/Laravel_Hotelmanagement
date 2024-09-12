@extends('admin')
@section('content')


<link rel="stylesheet" href="admin-css/booked.css">
<section>
  
  <h1>This is booked table</h1>
  <div class="tbl-header">
  
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Check In</th>
          <th>Check Out</th>
		      <th>Adult</th>
		      <th>Child</th>
		      <th>Room No.</th>
		      <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
    @foreach ($books as $book)
        <tr>
          
          <td>{{$book->id}}</td>
          <td>{{$book->name}}</td>
          <td>{{$book->email}}</td>
          <td>{{$book->checkin}}</td>
          <td>{{$book->checkout}}</td>
		      <td>{{$book->adult}}</td>
		      <td>{{$book->children}}</td>
		      <td>{{$book->room}}</td>
		      <td>

          
          <a href="{{ route('bokedt', $book->id) }}">Edit</a>
         
          <form action="{{ route('destoy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
          
          </td>
        </tr>
        @endforeach
       
		  </tbody>
    </table>
    
    

  </div>
</section>
@endsection