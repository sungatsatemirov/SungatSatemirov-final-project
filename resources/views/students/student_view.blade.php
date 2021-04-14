
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href= "{{ asset('view.css') }}" />
</head>
<body>

@forelse ($students as $student)
    <div class="container">
    

    <div class="our-team">
      <div class="picture">
        <img class="img-fluid" src="{{$student->photo}}">
      </div>
      <div class="team-content">
        <h3 class="name">{{$student->name}}</h3>
        <h4 class="title">{{$student->get_results($student->faculty_id)}}</h4>
  
      
 
  </div>
  </div>
  </div>
    @empty
        <p id="nothing">There are no students registered.</p>
    @endforelse

    </body>
</html> 