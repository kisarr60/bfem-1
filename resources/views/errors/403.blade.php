@extends('errors.layout')

@section('content')
    @include('errors.partial', ['number' => '403', 'info' => 'Non autorisé'])
@endsection