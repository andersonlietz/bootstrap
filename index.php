<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
</head>
<body>
<div class="text-center">
 <h1 class="display-3">Cocina del Jef</h1>
 <p>Delivery de comida brasileira em São Paulo</p>
<p>Para imprimir nossas receitas tecle 
    <kbd>Ctrl+P</kbd>
</p>
 <mark>Peça pelo app</mark>
</div>
<div class="container">

<div class="row">

</div>
<div class="col-sm-4">
    <h3>Recomendação</h3>
    <img src="produto.jpg" class=".img-thumbnail" >
    <br><b>Nome do prato</b>
    <p>Descrição do prato</p>
 </div>
<div class="col-sm-4">
<h3>Recomendação</h3>
    <img src="produto.jpg" class=".img-thumbnail" >
    <br><b>Nome do prato</b>
    <p>Descrição do prato</p>
</div>
 <div class="col-sm-4">
<h3>Recomendação</h3>
    <img src="produto.jpg" class=".img-thumbnail" >
    <br><b>Nome do prato</b>
    <p>Descrição do prato</p>
 </div>
<table class=".table-light">
    <thead>
            <th>ALIMENTOS</th>
            <th>PROTEINAS</th>
            <th>CARBOIDRATOS</th>
</thead>
<tbody>
        <tr>
            <td>Alimento</td>
            <td>Proteinas</td>
            <td>Carboidratos</td>
        </tr>
        <tr>
            <td>Alimento</td>
            <td>Proteinas</td>
            <td>Carboidratos</td>
        </tr>
        <tr>
            <td>Alimento</td>
            <td>Proteinas</td>
            <td>Carboidratos</td>
        </tr>
</tbody>
</table>

<button class="btn btn-primary">
 <span class="spinner-border spinner-border-sm"></span>
 Carregando..
 </button>

<form action="envio.php" class="was-validated">
<div class="form-group">
    <label for="cliente">Nome</label>
    <input type="text" class="form-control" name="cliente">
    <div class="valid-feedback">Ok</div>
    <div class="invalid-feedback">Ops, verifique seu nome!</div>

</div>
<div class="form-group">
<label for="e-mail">Telefone</label>
<input type="e-mail" class="form-control" name="e-mail">
<div class="valid-feedback">Ok</div>
    <div class="invalid-feedback">Ops, verifique seu nome!</div>
</div>
<div class="form-group">
    <textarea class="form-control" name="pedido"></textarea>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

     </div>
</body>
</html>