
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href= "{{ asset('view.css') }}" />
</head>
<body>

@forelse ($students as $student)
    <div class="container">
    

    <div class="card">
      <div class="picture">
        <img class="img-fluid" src="{{$student->photo}}">
      </div>
      <div class="team-content">
        <h2 class="name">@lang('lang.name'): {{$student->name}}</h2>
        <h4?>@lang('lang.age'): {{$student->age}}</h4>
        <h4 class="title">@lang('lang.faculty'): {{$student->get_results($student->faculty_id)}}</h4>
  
      
 
  </div>
  </div>
  </div>
    @empty
        <p id="nothing">There are no students registered.</p>
    @endforelse

    </body>
</html> 