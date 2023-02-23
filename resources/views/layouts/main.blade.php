<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    @include('includes.header')

    @include('includes.jumbotron')

    @include('includes.mainup')

    @include('includes.maindown')

    @include('includes.footerup')

    @include('includes.footerdown')
</body>
</html>