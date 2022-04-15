@extends('layouts.master')

@section('content')

    <div class="w-5/12 rounded border p-2">
        @livewire('tickets')
    </div>
    <div class="w-7/12 mx-2 rounded border p-2">
        @livewire('comments')
    </div>

@stop
