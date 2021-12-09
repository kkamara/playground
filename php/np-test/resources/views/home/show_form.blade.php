@extends('layouts.master')

@section('content')
    <form 
        class='form' 
        action="{{ route('handleForm') }}"
        method='POST'
    >
        @csrf
        @method('POST')
        <label for="search">Submit search:</label>
        <input name='search' type="text"/>
        <input class='btn btn-success' type="submit"/>
    </form>
@stop
