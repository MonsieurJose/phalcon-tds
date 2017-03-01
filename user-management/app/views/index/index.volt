
<div class="ui menu">
    <a class="ui left floated small labeled icon button" href="{{url("users/form")}}">
        <i class="add user icon"></i> Nouvel Utilisateur...
    </a>
</div>
<p>affichage des utilisateurs </p>
<table class="ui very padded striped blue table" >

    <thead class="ui celled table">
        <tr>
            <td>
            <input type="checkbox" name="toutChoisir">
            </td>
            <td> Adresse mail </td>
            <td> Prénom </td>
            <td> Nom </td>
            <td> Rôle </td>
            <td></td>
        </tr>
    </thead>
    <tbody>
 {% for user in users %}
    <tr>
        <td>
             <input type="checkbox" name="choisirUser">
        </td>
        <td> {{ user.getLogin() }} </td>
        <td> {{ user.getFirstname() }} </td>
        <td> {{ user.getLastname() }} </td>
        <td> {{ user.getRole().getName() }} </td>
        <td>
        <button class="ui icon button"><i class="edit icon"></i></button>
        <button class="ui icon button"><i class="red remove icon"></i></button>
        </td>
    </tr>
    {% endfor %}
    </tbody>
</table>