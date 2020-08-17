<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>

    <body>

    <section id="conteudo-view" class="login">
        {!! Form::open(['route' => 'user.login', 'method' => 'get']) !!}

        {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuario"]) !!}
        {!! Form::password('password', ['palceholder' => "Senha"]) !!}

        {!! Form::submit('Login') !!}


        {!! Form::close() !!}
    
    <form class="" action="index.html" method="post">

  
    </section>

    </body>
</html>