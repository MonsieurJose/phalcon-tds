<div class="ui menu">
    <a class="ui left floated small labeled icon button" href="{{ url("index") }}">
        <i class="sign out icon"></i> Retour à la liste
    </a>
</div>
<form class="ui form" action="{{url("Users/update")}}" method="post">
    <div class="two fields">
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" placeholder="Votre nom...">
        </div>
        <div class="field">
            <label>Prenom</label>
            <input type="text" name="prenom" placeholder="Votre prénom...">
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>Login *</label>
            <input type="text" name="login" placeholder="Votre identifiant...">
        </div>
        <div class="field">
            <label>Mot de passe *</label>
            <input type="password" name="mdp" placeholder="Votre mot de passe...">
        </div>
    </div>
    <div class="field">
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="Votre email...">
        </div>
    </div>
    <div class="field">
        <label>Rôle</label>
        <select name="role">
            <option value="non-choisi">veuillez choisir un rôle</option>
            <option value="user">user</option>
            <option value="admin">admin</option>
            <option value="superadmin">superadmin</option>
        </select>
    </div>
    <div class="two fields">
        <div class="field">
            <button class="fluid green ui button">Valider</button>
        </div>
        <div class="field">
            <button class="fluid grey ui button">Reinitialiser</button>
        </div>
    </div>
</form>