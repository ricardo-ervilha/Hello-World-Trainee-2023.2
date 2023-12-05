<div class="modal-newuser" id="modalNew" style="display:none;">
    <div class="modal-newuser-content">

        <form action="users/create" method="POST">

            <span class="close-new" >&times</span>

            <div class="modal-newuser-head" id="cabecalho">
                <h1> Novo Usuário</h1>
            </div>

            <div class="modal-newuser-content-body">
                <div class="name" id="name">
                    <h2>Nome: </h2>
                    <input class="campo-first-name" type="text" placeholder="Primeiro nome" name="name">
                    <input class="campo-last-name" type="text" placeholder="Sobrenome" name="sobrenome">
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
                    <button>Cadastrar</button>
                </div>
            </div>
        </form>

    </div>
</div>

<link rel="stylesheet" href="../../../public/css/modalNewUser.css">
<script src="../../../public/js/allModals.js"></script>