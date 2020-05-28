<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ isset($cartao->titulo) ? $cartao->titulo : ''}}" >
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('texto') ? 'has-error' : ''}}">
    <label for="texto" class="control-label">{{ 'Texto' }}</label>
    <textarea class="form-control" rows="5" name="texto" type="textarea" id="texto" >{{ isset($cartao->texto) ? $cartao->texto : ''}}</textarea>
    {!! $errors->first('texto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('icone') ? 'has-error' : ''}}">
    <label for="icone" class="control-label">{{ 'Icone' }}</label>
    <input class="form-control" name="icone" type="number" id="icone" value="{{ isset($cartao->icone) ? $cartao->icone : ''}}" >
    {!! $errors->first('icone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('caminhoImagem') ? 'has-error' : ''}}">
    <label for="caminhoImagem" class="control-label">{{ 'Caminhoimagem' }}</label>
    <input class="form-control" name="caminhoImagem" type="file" id="caminhoImagem" value="{{ isset($cartao->caminhoImagem) ? $cartao->caminhoImagem : ''}}" >
    {!! $errors->first('caminhoImagem', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
    <label for="data" class="control-label">{{ 'Data' }}</label>
    <input class="form-control" name="data" type="date" id="data" value="{{ isset($cartao->data) ? $cartao->data : ''}}" >
    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
