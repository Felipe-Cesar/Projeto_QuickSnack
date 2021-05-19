
<style type="text/css">

input.inputPreco {
    display: block;
    width: 20%;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 13px;
    text-indent: 10px;
}

	input.inputDesconto {
    display: block;
    width: 10%;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 13px;
    text-indent: 10px;
	}

</style>

<div class="formulario">

<h1>Novo Produto</h1>

			


	<form  method="POST" action="Controllers/ProdutosCadastrarController.php">
		
	    <fieldset>
		
			<legend>Informações do Produto</legend>

				<label>Descrição</label>
		     	<input type="text" autofocus required name="descricao" placeholder="Descrição" class="input">
					
					
				<label for="preco">Preço de venda</label>
				<input type="number" step="any" min="0" max="1000" required  placeholder="R$ 00,00" name="preco" class="inputPreco">

					
				<label for="desconto">Desconto</label>
				<input type="number" step="any" min="0" max="1000" required placeholder="0%" name="desconto" class="inputDesconto">

				<label for="descontinuado">
					<input type="checkbox"  name="descont" >
					
					Descontinuado
				</label>
					

				<button id="botao" type="submit" name="submit">Cadastrar</button>

		</fieldset>



	</form>

</div>