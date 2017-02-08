<div class="page-header">
    <h1>Congratulations!</h1>
</div>
<script src="public/js/semantic.min.js"></script>
<script src="public/css/semantic.min.css"></script>
<p>affichage des utilisateurs </p>

<ul>
 {% for user in users %}
    <li> {{ user.getLogin() }} </li>
 {% endfor %}

 </ul>