<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>{{$title}} NoteFlix</title>
    <!-- CSS only -->
    <link rel=stylesheet href="../public/css/css.app">
</head>

<body>

    <div class="titulo">
        <h1>{{$title}}</title>
        </h1>
    </div>

    <div class="container">

    </div>
    <div class="content">
        {{$slot}}
    </div>

</body>

</html>