@extends('layouts.app')
@section('title', 'Courses')
@section('content')
<div class="panel"><h1>Courses</h1>
<p><a class="button" href="{{ route('courses.create') }}">Create Course</a></p>
@if($courses->isEmpty()) <p class="muted">No courses found.</p>
@else
<table><thead><tr><th>ID</th><th>Name</th><th>Duration</th><th>Fee</th><th>Difficulty</th><th>Active</th><th>Actions</th></tr></thead><tbody>
@foreach($courses as $course)
<tr>
<td>{{ $course->id }}</td><td>{{ $course->name }}</td><td>{{ $course->duration }} weeks</td><td>{{ number_format((float)$course->fee, 2) }}</td><td>{{ $course->difficulty }}</td><td>{{ $course->is_active ? 'Yes' : 'No' }}</td>
<td class="actions"><a href="{{ route('courses.show', $course->id) }}">View</a><a href="{{ route('courses.edit', $course->id) }}">Edit</a>
<form class="inline" action="{{ route('courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Delete this course?')">@csrf @method('DELETE')<button class="danger">Delete</button></form></td>
</tr>
@endforeach
</tbody></table>
@endif
</div>
@endsection
