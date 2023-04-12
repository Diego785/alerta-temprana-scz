@extends('layouts.my_menu_layouts.menu_1')

@section('title')
    Alerta Temprana SCZ
@endsection

{{-- @section('action')
    <a href="{{ route('#') }}" class="hover:underline ">Another view</a>
@endsection --}}

@section('content')
    @livewire('alerts.show-alerts')
@endsection

