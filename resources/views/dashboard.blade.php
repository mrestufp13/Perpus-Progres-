@extends('template')
@section('content')
<!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
          
           @if(Auth::user()->jabatan == 'ADMIN')
                <div class="panel-body">
                <h1>Selamat Datang Admin</h1>
                </div>
                @else
                <div class="panel-body">
                <h1>Selamat Datang Member</h1>
                </div>
                @endif
          
      </div>
@stop