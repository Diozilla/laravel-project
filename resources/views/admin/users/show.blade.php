@extends('layouts.admin')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Show user</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                ID: {{ $users->id }}
            </div>
            <div>
                Email: {{ $users->email }}
            </div>
            <div>
                Username: {{ $users->name }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        @if(auth()->user()->hasRole('admin'))
        <a href="{{ route('users.edit', $users->id) }}" class="btn btn-info">Edit</a>
        @endif

        <a href="{{ route('users.index') }}" class="btn btn-info">Back</a>
    </div>
@endsection

























