<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Training Institute')</title>
    <style>
        body{font-family:Arial,sans-serif;max-width:1050px;margin:35px auto;padding:0 18px;color:#20242a;background:#f7f8fa}
        nav{display:flex;gap:18px;margin-bottom:25px} a{color:#1759a6;text-decoration:none}
        .panel{background:white;padding:22px;border:1px solid #e1e5eb;border-radius:10px;margin:14px 0}
        input,textarea,select{display:block;width:100%;max-width:560px;padding:10px;margin:6px 0 14px;border:1px solid #cbd2dc;border-radius:5px;box-sizing:border-box}
        button,.button{padding:9px 14px;border:0;border-radius:5px;background:#1759a6;color:white;cursor:pointer;display:inline-block}
        .danger{background:#b42318}.muted{color:#667085}.success{padding:12px;background:#e8f7ed;color:#176b35;border-radius:6px}
        .errors{padding:12px;background:#fff0ef;color:#a12622;border-radius:6px} table{width:100%;border-collapse:collapse;background:white}
        th,td{padding:11px;border:1px solid #e1e5eb;text-align:left} th{background:#f0f3f7}
        form.inline{display:inline} .actions{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
    </style>
</head>
<body>
<nav>
    <a href="{{ route('students.index') }}">Students</a>
    <a href="{{ route('courses.index') }}">Courses</a>
</nav>
@if(session('success')) <p class="success">{{ session('success') }}</p> @endif
@if($errors->any())
    <div class="errors"><strong>Please fix these errors:</strong><ul>
        @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
    </ul></div>
@endif
@yield('content')
</body>
</html>
