@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if($laporan->count())
        @foreach($laporan as $key)
            <div class="panel panel-default">
                <div class="panel-heading">{{$key->title}} <span class="pull-right">{{$key->created_at->diffForHumans()}}</span></div>

                <div class="panel-body">
                    {{$key->laporan}}
                </div>
            </div>   
            @endforeach
        {{$laporan->links()}}
        @else
             <div class="panel panel-default">
                <div class="panel-heading">My Dummy Report</div>

                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        @endif        </div>
    </div>
</div>
@endsection
