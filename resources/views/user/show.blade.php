@extends('layouts.admin')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h2>{{ $user->name }}</h2>
        <h3>{{ $user->email }}</h3>
        <div>
            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">List</a>
        </div>
    </div>
@endsection
