<html>
    <head>
        <title>admin</title>
    </head>
    <body>
        <form action={{"saveRole"}} method="post">
            {!! csrf_field() !!}
        <h2>User's role</h2>
        <select name="iduser">
            @foreach($user as $mem)
                <option value="{!! $mem['id'] !!}"> {!!  $mem['user'] !!} </option>
             @endforeach
        </select>
        <br>
        <select name="idapp">
            @foreach($app as $mem)
                <option value="{!! $mem['id'] !!}"> {!! $mem['name'] !!} </option>
            @endforeach
        </select>
        <br>
        <select name="idrole">
            @foreach($role as $mem)
                <option value="{!! $mem['id'] !!} "> {!! $mem['name'] !!} </option>
            @endforeach
        </select>
        <br>

        <input type="submit" value="Done">
         </form>

    </body>
</html>