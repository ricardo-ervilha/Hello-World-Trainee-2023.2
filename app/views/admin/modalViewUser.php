<div id="modalView" class="modal-view" style="display:none;">
    <div class="modal-view-content">
        <div class="modal-viewuser-head">
            <h1>Informações do Usuário</h1>
        </div>
        <div class="content-body">

            <div class="imputNome">
                <label for="userNameInput">
                    <h2>Nome:</h2>
                </label>
                <input disabled type="text" id="userNameInput" class="imp" value="<?=$row['name']?>">
            </div>

            <div class="imputEmail">
                <label for="userEmailInput">
                    <h2>Email:</h2>
                </label>
                <input disabled type="text" id="userEmailInput" class="imp"  readonly value="<?=$row['email']?>">
            </div>

            <div class="imputData">
                <label for="userDOBInput">
                    <h2>Senha:</h2>
                </label>
                <input disabled type="text" id="userDOBInput" class="imp" readonly value="<?=$row['password']?>">
            </div>

            <div class="imputPhone">
                <label for="userPhoneInput">
                    <h2>Telefone:</h2>
                </label>
                <input disabled type="text" id="userPhoneInput" class="imp"  readonly value="<?=$row['phone']?>">
            </div>

            <span class="close" id="close-view">&times;</span>
        </div>
    </div>
</div>

<link rel="stylesheet" href="../../../public/css/modalView.css">
<script src="../../../public/js/allModals.js"></script>
