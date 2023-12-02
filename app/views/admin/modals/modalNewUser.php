<div class="modal" id="modal" style="display:none;">
    <div class="modal-newuser-content">
        <form action="users/create" method="POST">
        <span class="close">&times;</span>
        <div class="modal-newuser-head" id="cabecalho">
            <h1 class="h1-newuser"> Novo Usuário</h1>
        </div>

        <div class="modal-newuser-content-body">
            <div class="name" id="name">
                <h2>Nome: </h2>
                <input type="text" placeholder="Primeiro nome" name="name">
                <input type="text" placeholder="Sobrenome" name="sobrenome">
            </div>

            <div class="campo-phone" id="phone">
                <h2>Telefone:</h2>
                <input type="tel" name="phone">
            </div>

            <div class="campo-email" id="email">
                <h2>E-mail:</h2>
                <input type="email" name="email">
            </div>

            <div class="campo-senha" id="senha">
                <h2>Senha:</h2>
                <input type="password" name="password">
            </div>

            <div class="div-cadastrar" id="cadastrar">
            <button class="savebtn">Cadastrar</button>
            </div>
        </div>
        </form>

    </div>
</div>

<link rel="stylesheet" href="../../../public/css/modals/modalNewUser.css">
