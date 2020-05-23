<html>
    <head></head>
    <body>
        <h1>Editar clientes</h1>
        <form method="post" action="{{"/admin/client/{$client->id}/editar"}}">
            {!!csrf_field()!!}
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{$client->name}}"/>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" value="{{$client->name}}"/>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
