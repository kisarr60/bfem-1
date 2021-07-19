@extends('errors.layout')

@section('content')
    @include('errors.partial', ['number' => '404', 'info' => 'La page demandée est introuvable sur le site'])
@endsection