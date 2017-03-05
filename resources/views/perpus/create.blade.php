@extends('template')
@section('content')
  {!! Html::ul($errors->all()) !!}
    {!! Form::open(array('url'=>'perpus','files'=>'true')) !!}
 <br>
<table class="table table-bordered">
   
   @include('perpus.form')

   <tr>
    <td colspan="2">
        {!! Form::submit('simpan data',['class'=>'btn btn-danger btn-sm']) !!}
        {!! link_to('perpus','Kembali',['class'=>'btn btn-danger btn-sm']) !!}
       </td>
    </tr>



</table>
{!! Form::close() !!}

@stop