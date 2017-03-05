@extends('template')
@section('content')


{!! link_to('perpus/create','tambah data',['class'=>'btn btn-danger']) !!}

<hr>

{!! Form::open(array('url'=>'perpus/search')) !!}
{!! Form::text('keyword','',['class'=>'form-control','placeholder'=>'Lokasi Rak buku']) !!}
{!! Form::submit('lakukan pencarian',['class'=>'btn btn-info btn-sm']) !!}
{!! Form::close() !!}
<br><br>
<table class="table table-bordered">

<tr>
    
<th>ID Buku</th>    
<th>Judul</th> 
<th>Penerbit</th>
<th>Pengarang</th>
<th>Rak</th>
<th>Detail</th>
<th>Edit</th>
<th>Delete</th>



    @foreach($buku as $n)
    
    <tr>
    
    <td>{{ $n->id_buku }}</td>
    <td>{{ $n->judul }}</td>
    <td>{{ $n->penerbit }}</td>
    <td>{{ $n->pengarang }}</td>
    <td>{{ $n->rak }}</td>
    <td>{!! link_to('perpus/'.$n->id,'Detail',['class'=>'btn btn-success btn-sm']) !!}</td>
    <td>{!! link_to('perpus/'.$n->id.'/edit','Edit',['class'=>'btn btn-primary btn-sm']) !!}</td>
        <td>
        {!! Form::open(array('method'=>'delete','url'=>'perpus/'.$n->id)) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
        {!! Form::hidden('_delete','DELETE') !!}
        {!! Form::close() !!}
        
        </td>
    
    </tr>
    
    
    
    @endforeach
    
    </tr>


</table>

 {!! $buku->render() !!}


@stop