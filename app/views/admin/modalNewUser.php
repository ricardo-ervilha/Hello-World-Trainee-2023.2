<link rel="stylesheet" href="../../../public/css/modalNewUser.css">

<div class="modal" id="modal" style="display:none;">
    <div class="modal-content">
        <form action="create" method="POST">
        <span class="close">&times</span>
        <div class="modal-head-new-user" id="cabecalho">
            <h1 class="cabecalho"> Novo Usuário</h1>
        </div>

        <div class="modal-content-body">
            <div class="name" id="name">
                <label>Nome: </label>
                <input class="campo-first-name" type="text" name='nome' placeholder="Primeiro nome">
                <input class="campo-last-name" type="text" name='sobrenome'placeholder="Sobrenome">
            </div>

            <div class="campo-phone" id="phone">
                <label>Telefone:</label>
                <input type="tel" name='phone'>
            </div>

            <div class="campo-email" id="email">
                <label>E-mail:</label>
                <input type="email" name='email'>
            </div>

            <div class="campo-senha" id="senha">
                <label>Senha:</label>
                <input type="password" name='password'>
            </div>

            <div class="cadastrar" id="cadastrar">
                <button>Cadastrar</button>
            </div>
        </div>
        </form>

    </div>
</div>

<script src="../../../public/js/allModals.js"></script>