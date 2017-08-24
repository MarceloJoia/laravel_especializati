<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>@yield("title")</title>
        <link rel="stylesheet" href=" {{url("css/app.css")}} "/>
        <link rel="stylesheet" href=" {{url("css/style.css")}} "/>
    </head>
    <body>
        <div class="container">
            @yield("content")
        </div>
        
        @stack("scripts")
    </body>
</html>
