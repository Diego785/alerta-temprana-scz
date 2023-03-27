@extends('layouts.official_layout_empty')

@section('title')
    Alerta Temprana SCZ
@endsection

{{-- @section('action')
    <a href="{{ route('#') }}" class="hover:underline ">Another view</a>
@endsection --}}

@section('content')
    @livewire('alerts.detail-alerts', ['alerta_id' => $alerta_id, 'evento_id' => $evento_id])
@endsection
