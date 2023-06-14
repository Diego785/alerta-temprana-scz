@extends('layouts.my_menu_layouts.menu_1')

@section('title')
    Gestión de las notificaciones
@endsection


@section('content')
   @livewire('gestion.notificacion.notificacion-create-livewire')
   
   
@endsection