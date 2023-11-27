<div class="modal" id="modal-edit" style="display: none;">
    <div class="modal-content">
        <form action="listaDeUsuarios/update" method="post">
            <input hidden value="1" name="id">
            <div class="modal-head">
                <div class="close-container">
                    <span class="closeEdit">&times;</span>
                </div>
                <div class="title-container">
                    <h1 class="title-edit">Edição de usuários</h1>
                </div>
            </div>

            <div class="content-body">
                <div class="name">
                    <h2>Nome</h2>
                    <input type="text" placeholder="Primeiro nome" name="nome">
                    <input type="text" placeholder="Sobrenomes" name="sobrenome">
                </div>

                <div class="celular">
                    <h2>Telefone</h2>
                    <input type="phone" name="phone">
                </div>

                <div class="email">
                    <h2>E-mail</h2>
                    <input type="email" name="email">
                </div>

                <div class="senha">
                    <h2>Senha</h2>
                    <input type="password" name="password">
                </div>

                <button class="save">Salvar</button>
            </div>
        </form>
    </div>
</div>