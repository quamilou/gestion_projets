<h1>Détail de la tâche</h1>

<?php if (!empty($task)): ?>
    <ul>
        <li><strong>ID :</strong> <?= htmlspecialchars($task['id']) ?></li>
        <li><strong>ID Projet :</strong> <?= htmlspecialchars($task['project_id']) ?></li>
        <li><strong>Titre :</strong> <?= htmlspecialchars($task['title']) ?></li>
        <li><strong>Description :</strong> <?= htmlspecialchars($task['description']) ?></li>
        <li><strong>Statut :</strong> <?= htmlspecialchars($task['status']) ?></li>
        <li><strong>Date limite :</strong> <?= htmlspecialchars($task['due_date']) ?></li>
    </ul>

    <a href="index.php?controller=task&action=list">← Retour à la liste</a>
<?php else: ?>
    <p>Tâche introuvable.</p>
<?php endif; ?>
