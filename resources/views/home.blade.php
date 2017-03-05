@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                
                @if(Auth::user()->jabatan == 'ADMIN')
                <div class="panel-body">
                Hai Admin
                </div>
                @else
                <div class="panel-body">
                Hai Member
                </div>
                @endif
                
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
