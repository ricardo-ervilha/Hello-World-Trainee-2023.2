<link rel="stylesheet" href="../../../public/css/modalView.css">

<div class="modal" id="modal-edit<?=$function->id?>" style="display: none;">
    <div class="modal-content">
        <div class="modal-head">
            <div class="close-container">
            <span class="close" id="closeUserModalBtn">&times;</span>
            </div>
            <div class="modal-head">
                <h2>Edição de usuários</h2>
            </div>
        </div>

        <div class="content-body">
            <div class="name">
                <h2 class="h2-edit">Nome</h2>
                <input type="text" placeholder="Primeiro nome">
                <input type="text" placeholder="Sobrenomes">
            </div>

            <div class="celular">
                <h2 class="h2-edit">Telefone</h2>
                <input type="tel">
            </div>

            <div class="email">
                <h2 class="h2-edit">E-mail</h2>
                <input type="email">
            </div>

            <div class="senha">
                <h2 class="h2-edit">Senha</h2>
                <input type="password">
            </div>

            <button class="save">Salvar</button>
        </div>
    </div>
</div>