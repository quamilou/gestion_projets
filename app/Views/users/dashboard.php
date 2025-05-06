<h1>Bienvenue <?= htmlspecialchars($user['username']) ?> 👋</h1>

<p>Rôle : <strong><?= htmlspecialchars($user['role']) ?></strong></p>

<ul>
    <li><a href="index.php?controller=project&action=list">Voir les projets</a></li>
    <li><a href="index.php?controller=task&action=list">Voir les tâches</a></li>
    <li><a href="index.php?controller=user&action=logout">Se déconnecter</a></li>
</ul>
