<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href= "{{ asset('main_view.css') }}" />
       
    </head>
    <body>
        <h1>@lang('lang.intro')</h1>
        <div class = "center">
        <button class="button students"><a href="{{URL::route('students' ,['lang' => App::getLocale()])}}">@lang('lang.our') @lang('lang.student')</a></button>
        <button class="button faculty"><a href="{{URL::route('faculties' , ['lang' => App::getLocale()])}}">@lang('lang.our') @lang('lang.faculty')</a></button>
        <button class="button create_stud"><a href="{{URL::route('add-student' , ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.student')</a></button>
        <button class="button create_fac"><a href="{{URL::route('add-faculty' , ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.faculty')</a></button>
        <button class="button send_mail"><a href="{{URL::route('send-mail' , ['lang' => App::getLocale()])}}">@lang('lang.send') @lang('lang.mail')</a></button>
    </div>
    </body>
    
</html>
