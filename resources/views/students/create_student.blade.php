<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= "{{ asset('createStudent.css') }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
<h1>@lang('lang.add') @lang('lang.student')</h1>
<div class="container">
<form id = "form" method="POST" action="{{ route('add-student' , ['lang' => App::getLocale()]) }}" enctype="multipart/form-data">
        @csrf 
        <input type="text" name="name" placeholder="name">
        <input type="number" name="faculty_id" placeholder="faculty_id">
        <input type="number" name="age" placeholder="age">
        <input type="file" name="photo" accept="image/png,image/jpeg">
        <button type="submit">Create</button>
    </form>
    </div>
</body>
</html> 

