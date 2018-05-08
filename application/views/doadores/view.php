<h2>Vendo o doador</h2>


<div class="row">
    <div class="col-md-6">
        Nome: <?php echo $doador->nome; ?><br>
        Telefone: <?php echo "$doador->prefixo"." "."$doador->telefone"; ?>
        Endereço: <?php echo $doador->endereco; ?>

    </div>
    <div class="col-md-6">
        <p>Demais informações:</p>
        <div class="panel panel-default">
            <div class="panel-body">
               Email: <?php echo $doador->email; ?>

            </div>
        </div>
    </div>
</div>

<hr>
<a href="../" class="btn btn-success">Voltar</a>