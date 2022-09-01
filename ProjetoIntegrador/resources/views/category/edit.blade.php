<h1>Editar Categoria</h1>

<form action="{{route('category.update' , $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    Nome da Categoria: <input type="text" name="name" value="{{ $category->name }}">
    <input type="submit" value="Enviar">
    <a href="{{ route('category.index', $category->id)}}">Voltar</a>
</form>