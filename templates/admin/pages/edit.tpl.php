<h3 class="mb-5">Edição de página</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle"><h5>Título</h5></label>        
        <input name="title" 
            id="pagesTitle" 
            type="text" 
            class="form-control" 
            placeholder="Título da página..."
            value="<?php echo $data['page']['title']; ?>"
            required
        >
    </div>
    <div class="form-group">
        <label for="pagesUrl"><h5 class="mt-3">URL</h5></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" 
                id="pagesUrl" 
                type="text" 
                class="form-control" 
                placeholder="URL amigável, deixe em branco para informar a página inicial..." 
                value="<?php echo $data['page']['url']; ?>"
            >
        </div>
    </div>
    <br>
    <div class="form-group">
        <input id="pagesBody" type="hidden" name="body" value="<?php echo htmlentities($data['page']['body']); ?>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<hr>
<a href="/admin/pages/<?php echo $data['page']['id']; ?>" class="btn btn-secondary">Voltar</a>