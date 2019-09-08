@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit User</h2>
        {{ Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) }}
        {!! Form::hidden('id') !!}
        @include('users::user._fields')
        <div>
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
        {{ Form::close() }}
    </div>
@endsection
