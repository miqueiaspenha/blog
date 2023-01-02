@include('includes.alerts')
@csrf
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name ?? old('name') }}">
</div>
<div class="form-group">
    <label for="price">Preço</label>
    <input type="text" class="form-control" id="price" name="price"
        value="{{ $product->price ?? old('price') }}">
</div>
<div class="form-group">
    <label for="description">Descrição</label>
    <input type="text" class="form-control" id="description" name="description"
        value="{{ $product->description ?? old('description') }}">
</div>
<div class="form-group">
    <label for="image">Imagem</label>
    <input type="file" class="form-control-file" id="image" name="image">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
