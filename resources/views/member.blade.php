@extends('user')
@section('content')
<!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
          
           @if(Auth::user()->jabatan == 'ADMIN')
                <div class="panel-body">
                <h3>Selamat Datang Admin</h3>
                </div>
                @else
                <div class="panel-body">
                <center><h3>Selamat Datang Member</h3></center>
                </div>
                @endif
          
      </div>

<table class="table table-bordered">

<tr>
<th>ID Buku</th>    
<th>Judul</th> 
<th>Penerbit</th>
<th>Pengarang</th>
<th>Rak</th>
<th>Detail</th>
    
   

    
    
    
</tr>
</table>


@stop