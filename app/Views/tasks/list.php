<h1>Liste des tâches</h1>

<a href="index.php?controller=task&action=form">+ Nouvelle tâche</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Projet</th>
            <th>Titre</th>
            <th>Statut</th>
            <th>Date limite</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= htmlspecialchars($task['id']) ?></td>
                    <td><?= htmlspecialchars($task['project_id']) ?></td>
                    <td><?= htmlspecialchars($task['title']) ?></td>
                    <td><?= htmlspecialchars($task['status']) ?></td>
                    <td><?= htmlspecialchars($task['due_date']) ?></td>
                    <td>
                        <a href="index.php?controller=task&action=detail&id=<?= $task['id'] ?>">Voir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">Aucune tâche trouvée.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
