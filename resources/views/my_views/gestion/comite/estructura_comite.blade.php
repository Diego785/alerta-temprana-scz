@extends('layouts.official_layout')

@section('title')
    Gestión de la Estructura Comité
@endsection

{{-- @section('action')
    <a href="{{ route('#') }}" class="hover:underline ">Another view</a>
@endsection --}}

@section('content')
    @livewire('gestion.comite.estructura-comite')
@endsection
