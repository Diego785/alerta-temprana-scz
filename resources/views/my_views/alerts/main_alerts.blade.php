@extends('layouts.official_layout')

@section('title')
    Alerta Temprana SCZ
@endsection

{{-- @section('action')
    <a href="{{ route('#') }}" class="hover:underline ">Another view</a>
@endsection --}}

@section('content')
    @livewire('alerts.main-alerts', ['id'=>$id])
@endsection

