@extends('layouts.app')
@section('title', 'Students')
@section('content')
<div class="panel">
    <h1>Students</h1>
    <p><a class="button" href="{{ route('students.create') }}">Create Student</a></p>
    @if($students->isEmpty())
        <p class="muted">No students found.</p>
    @else
    <table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr></thead><tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td><td>{{ $student->name }}</td><td>{{ $student->email }}</td><td>{{ $student->phone }}</td>
            <td class="actions">
                <a href="{{ route('students.show', $student->id) }}">View</a>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form class="inline" action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Delete this student?')">
                    @csrf @method('DELETE') <button class="danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody></table>
    @endif
</div>
@endsection
