<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titolo")</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

        <div class='container'>

        <div onclick="delMsg(this)" title="clicca ed elimina il messaggio">
            @include('layouts.ErrorriSuccessi')
        </div>

            @yield("contenuti")

        </div>
    
</body>
</html>

<script>

function delMsg(e) {
 e.remove();
}

</script>



