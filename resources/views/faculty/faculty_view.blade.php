
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href= "{{ asset('faculty_view.css') }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
</head>
<body>
    @forelse ($faculty as $fac)
        <table class = "center">
            <tr>
                <td>{{$fac->name}}</td>
             
            </tr>
        </table>
    @empty
        <p>Nothing at the moment.</p>
    @endforelse
</body>
</html> 