@extends('layouts.app')
@section('title', 'Course Details')
@section('content')
<div class="panel"><h1>Course Details</h1>
<p><strong>ID:</strong> {{ $course->id }}</p><p><strong>Name:</strong> {{ $course->name }}</p>
<p><strong>Description:</strong> {{ $course->description ?: '—' }}</p><p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
<p><strong>Fee:</strong> {{ number_format((float)$course->fee, 2) }}</p><p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
<p><strong>Active:</strong> {{ $course->is_active ? 'Yes' : 'No' }}</p>
<a class="button" href="{{ route('courses.edit', $course->id) }}">Edit Course</a> <a href="{{ route('courses.index') }}">Back to Courses</a>
</div>
@endsection
