<html>
    <head>
        <title>admin</title>
    </head>
    <body>

        <select>
            @foreach($user as $mem)
            <option value="{!! $mem['id'] !!} "> <?php echo $mem['user'] ?>  </option>
             @endforeach
        </select>
    </body>
</html>