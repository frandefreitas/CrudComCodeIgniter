<h2>Editando página</h2>

<?php echo validation_errors(); ?>

<form action="../edit/<?php echo $doador->id; ?>" method="post">



<div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome"  class="form-control" placeholder="Nome value=" value="<?php echo $doador->nome;?>"/>
    </div>
    
    <div class="form-group">
        <label for="text">Endereço</label>
        <textarea name="endereco" class="form-control" value="<?php echo $doador->endereco;?>" placeholder="Endereço"></textarea>
    </div>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="mail" name="email"  class="form-control" placeholder="Email" value="<?php echo $doador->email;?>"/>
    </div>
    
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo"  class="form-control" placeholder="Sexo" value="<?php echo $doador->sexo;?>"/>
    </div>
    
    <div class="form-group">
        <label for="cpf">Cpf</label>
        <input type="number" name="cpf"  class="form-control" placeholder="Cpf" value="<?php echo $doador->cpf;?>"/>
    </div>
    
    <div class="form-group">
        <label for="prefixo">Prefixo</label>
        <input type="number" name="prefixo"  class="form-control" placeholder="Prefixo"  value="<?php echo $doador->prefixo;?>"/>
    </div>
    
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="number" name="telefone"  class="form-control" placeholder="Telefone"  value="<?php echo $doador->telefone;?>"/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Atualizar nova página" class="btn btn-primary" />
    </div>

</form>

<hr>
<a href="../" class="btn btn-success">Voltar</a>