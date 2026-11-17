@extends('layouts.app')
@section('title', 'Edit Course')
@section('content')
<div class="panel"><h1>Edit Course</h1><form action="{{ route('courses.update', $course->id) }}" method="POST">@csrf @method('PUT')
<label>Course Name</label><input name="name" value="{{ old('name', $course->name ?? '') }}" required maxlength="255">
<label>Description</label><textarea name="description">{{ old('description', $course->description ?? '') }}</textarea>
<label>Duration (weeks)</label><input type="number" name="duration" min="1" value="{{ old('duration', $course->duration ?? '') }}" required>
<label>Fee</label><input type="number" name="fee" min="0" step="0.01" value="{{ old('fee', $course->fee ?? '') }}" required>
<label>Difficulty</label><select name="difficulty" required>
@foreach(['Easy', 'Medium', 'Hard'] as $level)
<option value="{{ $level }}" @selected(old('difficulty', $course->difficulty ?? '') === $level)>{{ $level }}</option>
@endforeach
</select>
<label>Active?</label><select name="is_active" required>
<option value="1" @selected((string)old('is_active', isset($course) ? (int)$course->is_active : '1') === '1')>Yes</option>
<option value="0" @selected((string)old('is_active', isset($course) ? (int)$course->is_active : '1') === '0')>No</option>
</select>

<button type="submit">Update Course</button> <a href="{{ route('courses.index') }}">Cancel</a>
</form></div>
@endsection
