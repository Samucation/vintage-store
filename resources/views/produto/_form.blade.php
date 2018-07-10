
<div class="row">
  <div class="input-field col s1">
    <input type="text" name="categoria_id" value="{{isset($registro->categoria_id) ? $registro->categoria_id : ''}}">
    <label>Categoria</label>
  </div>

  <div class="input-field col s1">
    <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
  </div>

  <div class="input-field col s12">
    <input type="text" name="modelo" value="{{isset($registro->modelo) ? $registro->modelo : ''}}">
    <label>Modelo</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s1">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descrição</label>
  </div>

  <div class="input-field col s1">
    <input type="text" name="preco" value="{{isset($registro->preco) ? $registro->preco : ''}}">
    <label>Valor</label>
  </div>

  <div class="input-field col s1">
    <input type="text" name="qtde_estoque" value="{{isset($registro->qtde_estoque) ? $registro->qtde_estoque : ''}}">
    <label>Qtd estoque</label>
  </div>
</div>
