 @extends('layouts.main')
 @section('container')
 <h1>Halaman About</h1>
 <h3>{{ $name }}</h3>
 <p>{{ $email }}</p>
 <img src="img/0001.jpg" alt="{{ $name }}" width="200" class="img-thumbnail"> 
 @endsection