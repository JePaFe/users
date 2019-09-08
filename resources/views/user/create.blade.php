@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Create User</h2>
        {{ Form::open(['route' => 'admin.users.store']) }}
        @include('users::user._fields')
        <div>
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
        {{ Form::close() }}
    </div>
@endsection
