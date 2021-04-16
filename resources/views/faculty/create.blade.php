<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= "{{ asset('createStudent.css') }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
<div class="container">
<form id = "form" method="POST" action="{{ route('add-faculty' , ['lang' => App::getLocale()])}}" enctype="multipart/form-data">
        @csrf 
        <input type="text" name="name" placeholder="name of faculty">

        <button type="submit">Create</button>
    </form>
    </div>
</body>
</html> 