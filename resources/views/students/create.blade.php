@extends('layouts.app')
@section('title', 'Create Student')
@section('content')
<div class="panel"><h1>Create Student</h1>
<form action="{{ route('students.store') }}" method="POST">@csrf
<label>Name</label><input name="name" value="{{ old('name', $student->name ?? '') }}" required maxlength="255">
<label>Email</label><input type="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
<label>Phone</label><input name="phone" value="{{ old('phone', $student->phone ?? '') }}" required maxlength="20">
<label>Address</label><textarea name="address">{{ old('address', $student->address ?? '') }}</textarea>
<label>Date of Birth</label><input type="date" name="date_of_birth" value="{{ old('date_of_birth', isset($student) && $student->date_of_birth ? $student->date_of_birth->format('Y-m-d') : '') }}">

<button type="submit">Create Student</button> <a href="{{ route('students.index') }}">Cancel</a>
</form></div>
@endsection
