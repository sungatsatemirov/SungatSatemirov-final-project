<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('email.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('lang.send_me')</title>
</head>
<body>
    
 
    <h1>@lang('lang.send') @lang('lang.mail')</h1>
    <form method="POST" action="{{ route('send_mail' , ['lang' => App::getLocale()])}}">
        @csrf
        <input type="text" name="sender" placeholder="sender">
        <input type="text" name="message" placeholder="message">
        <input type="submit" name="send" value="Send">
    </form>
</body>
</html> 