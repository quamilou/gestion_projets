<h1>Inscription</h1>

<form action="index.php?controller=user&action=register" method="post">
    <div>
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required maxlength="50">
    </div>

    <div>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required maxlength="50">
    </div>

    <div>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">S'inscrire</button>
</form>

<p><a href="index.php?controller=user&action=login">Déjà un compte ? Connexion</a></p>
