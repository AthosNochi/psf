<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> PSF </title>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href= "{{ asset('site/style.css') }}">
    <link rel="stylesheet" href= "{{ asset('site/auto-contraste-backgrounds.css') }}">
    <link rel="stylesheet" href= "{{ asset('site/auto-contraste-texts.css') }}">
    <link rel="stylesheet" href= "{{ asset('site/auto-contraste-actions.css') }}">
    <link rel="stylesheet" href= "{{ asset('site/auto-contraste-images.css') }}">
    <link rel="stylesheet" href= "{{ asset('site/auto-contraste-forms.css') }}">
    <link href='{{asset('assets/fullcalendar/lib/main.css')}}' rel='stylesheet' />

    @yield('css-view')
</head>
<body>
    <script src="{{ asset('site/contrast.class.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/fullcalendar.js') }}"></script>
    <script src='{{asset('assets/fullcalendar/lib/main.js')}}'></script>
    <script src='{{asset('assets/fullcalendar/packages/daygrid/main.js')}}'></script>
    <script src='{{asset('assets/fullcalendar/lib/locales-all.js')}}'></script>


    <section id="view-conteudo">
        @yield('conteudo-view')
    </section>
    
    @yield('js-view')
    

    

</html>