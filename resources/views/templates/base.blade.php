<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{@yield('pageTitle')}}</title>
        <link rel="stylesheet" href="{{assets('css/app.css')}}">
    </head>

    <body>

        @include('partials/header')

        @include('partials/contents')

        @include('partials/purchases')

        @include('partials/footer')

        @include('partials/bottom')
        
    </body>
</html>