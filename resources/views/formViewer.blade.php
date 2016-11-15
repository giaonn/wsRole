<html>
    <head>
        <title>

        </title>

    </head>
    <body>
    @foreach($lstApp as $app)
        <button type="button" >{!! $app->name !!}</button><br>
    @endforeach

    </body>

</html>