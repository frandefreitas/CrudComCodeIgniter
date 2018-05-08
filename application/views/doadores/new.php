<h2>Nova página</h2>

<?php echo validation_errors(); ?>

<form action="../doadores/new" method="post">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome"  class="form-control" placeholder="Nome"/>
    </div>
    
    <div class="form-group">
        <label for="text">Endereço</label>
        <textarea name="endereco" class="form-control" placeholder="Endereço"></textarea>
    </div>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="mail" name="email"  class="form-control" placeholder="Email"/>
    </div>
    
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo"  class="form-control" placeholder="Sexo"/>
    </div>
    
    <div class="form-group">
        <label for="cpf">Cpf</label>
        <input type="number" name="cpf"  class="form-control" placeholder="Cpf"/>
    </div>
    
    <div class="form-group">
        <label for="prefixo">Prefixo</label>
        <input type="number" name="prefixo"  class="form-control" placeholder="Prefixo"/>
    </div>
    
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="number" name="telefone"  class="form-control" placeholder="Telefone"/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Criar nova página" class="btn btn-primary" />
    </div>


</form>