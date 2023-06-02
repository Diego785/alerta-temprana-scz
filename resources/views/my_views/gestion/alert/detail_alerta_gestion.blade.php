@extends('layouts.my_menu_layouts.menu_1')

@section('title')
    Gestión de las Alertas
@endsection


@section('content')
    @livewire('gestion.alerta.show-detail-alerta-gestion', ['alerta_id' => $alerta_id])
@endsection
