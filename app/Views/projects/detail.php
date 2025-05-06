<h1>Détail du projet</h1>

<?php if (!empty($project)): ?>
    <ul>
        <li><strong>ID :</strong> <?= htmlspecialchars($project['id']) ?></li>
        <li><strong>Titre :</strong> <?= htmlspecialchars($project['title']) ?></li>
        <li><strong>Description :</strong> <?= htmlspecialchars($project['description']) ?></li>
        <li><strong>Début :</strong> <?= htmlspecialchars($project['start_date']) ?></li>
        <li><strong>Fin :</strong> <?= htmlspecialchars($project['end_date']) ?></li>
    </ul>

    <a href="index.php?controller=project&action=list">← Retour à la liste</a>
<?php else: ?>
    <p>Projet introuvable.</p>
<?php endif; ?>
