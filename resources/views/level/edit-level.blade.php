@extends('template.base')
@section('title','Edit Peran / Level')
@section('content')
<form action="{{ route('level.update', $level->id) }}" method="POST">
    @method('put')
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

    @endif
    <div class="form-group">
        <label for="level_name">Nama</label>
        <input type="text" class="form-control" id="level_name" name="level_name" required value="{{ $level->level_name }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
