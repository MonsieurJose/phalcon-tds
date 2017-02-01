<div class="page-header">
    <h1>Congratulations!</h1>
</div>

<p>affichage des utilisateurs </p>

<ul>
 {% for user in users %}
    <li> {{ user.getLogin() }} </li>
 {% endfor %}

 </ul>