@extends('template')
@section('content')
<table class="table table-bordered">
    
<tr><td width='200'>ID Buku</td><td>{{ $buku->id_buku }}</td>
    <td rowspan="5"><img src="{{ asset('foto/'.$buku->foto) }}" width="300" height="250"></td></tr>
    
<tr><td>Judul</td><td>{{ $buku->judul }}</td></tr>
    
<tr><td>Penerbit</td><td>{{ $buku->penerbit }}</td></tr>
    
<tr><td>Pengarang</td><td>{{ $buku->pengarang }}</td></tr>
 
<tr><td>Rak</td><td>{{ $buku->rak }}</td></tr>
    
</table>

@stop