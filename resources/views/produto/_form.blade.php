
<div class="row">
  <div class="input-field col s1">
    <input type="text" name="categoria_id" value="{{isset($prod->categoria_id) ? $prod->categoria_id : ''}}">
    <label>Categoria</label>
  </div>

  <div class="input-field col s1">
    <input type="text" name="nome" value="{{isset($prod->nome) ? $prod->nome : ''}}">
    <label>Nome</label>
  </div>

  <div class="input-field col s12">
    <input type="text" name="modelo" value="{{isset($prod->modelo) ? $prod->modelo : ''}}">
    <label>Modelo</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s1">
    <input type="text" name="descricao" value="{{isset($prod->descricao) ? $prod->descricao : ''}}">
    <label>Descrição</label>
  </div>

  <div class="input-field col s1">
    <input type="text" name="preco" value="{{isset($prod->preco) ? $prod->preco : ''}}">
    <label>Valor</label>
  </div>

  <div class="input-field col s1">
    <input type="text" name="qtde_estoque" value="{{isset($prod->qtde_estoque) ? $prod->qtde_estoque : ''}}">
    <label>Qtd estoque</label>
  </div>
</div>
