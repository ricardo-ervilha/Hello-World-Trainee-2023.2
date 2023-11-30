<div class="modal" id="modal-edit<?=$function->id?>" style="display: none;">
<div class="modal-content">
        <div class="modal-head">
            <h2>Edição de Usuários</h2>
        </div>
        <div class="content-body">

            <div class="imputNome">
                <label for="userNameInput">
                    <h2>Nome:</h2>
                </label>
                <input type="text" id="userNameInput" class="imp" value="<?=$function->name?>">
            </div>

            <div class="imputData">
                <label for="userDOBInput">
                    <h2>Sobrenome:</h2>
                </label>
                <input type="text" id="userDOBInput" class="imp" value="<?=$function->sobrenome?>">
            </div>

            <div class="imputEmail">
                <label for="userEmailInput">
                    <h2>Email:</h2>
                </label>
                <input type="text" id="userEmailInput" class="imp" value="<?=$function->email?>">
            </div>

            <div class="imputPhone">
                <label for="userPhoneInput">
                    <h2>Senha:</h2>
                </label>
                <input type="text" id="userPhoneInput" class="imp" value="<?=$function->password?>">
            </div>

            <button class="savebtn">Salvar</button>

            <span class="close"
                title="Close Modal">&times;</span>
            </div>
    </div>
</div>
<link rel="stylesheet" href="../../../../public/css/modalView.css">