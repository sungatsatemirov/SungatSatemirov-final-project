<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('email.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>
<body>
    

    <h1>Send me a mail!</h1>
    <form method="POST" action="{{ route('send_mail')}}">
        @csrf
        <input type="text" name="sender" placeholder="sender">
        <input type="text" name="message" placeholder="message">
        <input type="submit" name="send" value="Send">
    </form>
</body>
</html> 