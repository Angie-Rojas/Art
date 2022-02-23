<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fullcalendar -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js"></script>
        
        
        
    </head>
    <body class="font-sans antialiased bg-light">

        <script src="{{ asset('js/agenda.js') }}" defer></script>
        

    </body>
</html>
