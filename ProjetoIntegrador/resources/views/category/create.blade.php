<form action="/category/create" method="POST">
    @csrf
    Nome da Categoria: <input type="text" name="name">
    <input type="submit" value="Enviar">
</form>