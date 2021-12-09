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
    
    <div class="card results-card">
        <div class="card-body">
            @forelse($results as $result)
                <p class='full-path'>{{ $result->full_path }}</p>
            @empty
                <p>No results found.</p>
            @endforelse
        </div>
    </div>
@stop
