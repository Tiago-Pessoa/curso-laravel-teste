<h1>Cadastrar novo Post</h1>


<form action="submit" method="post">
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Título">
    </div>
    <div class="form-group">
        <label for="content">Conteúdo:</label>
        <textarea name="content" id="content" class="form-control" rows="4" placeholder="Conteúdo"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<a href="{{ route('posts.index')}}">Voltar</a>
<hr>
