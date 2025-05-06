<h1>Liste des projets</h1>

<a href="index.php?controller=project&action=form">+ Nouveau projet</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($projects)): ?>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= htmlspecialchars($project['id']) ?></td>
                    <td><?= htmlspecialchars($project['title']) ?></td>
                    <td><?= htmlspecialchars($project['start_date']) ?></td>
                    <td><?= htmlspecialchars($project['end_date']) ?></td>
                    <td>
                        <a href="index.php?controller=project&action=detail&id=<?= $project['id'] ?>">Voir</a>
                        <!-- Pour simplifier, pas encore d'édition ou suppression -->
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Aucun projet trouvé.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
