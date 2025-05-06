<h1>Connexion</h1>

<form action="index.php?controller=user&action=login" method="post">
    <div>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required maxlength="50">
    </div>

    <div>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Se connecter</button>
</form>

<p><a href="index.php?controller=user&action=register">Pas encore de compte ? S'inscrire</a></p>
