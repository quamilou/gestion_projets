<h1>Créer une nouvelle tâche</h1>

<form action="index.php?controller=task&action=form" method="post">
    <div>
        <label for="project_id">Projet associé :</label><br>
        <select name="project_id" id="project_id" required>
            <option value="">-- Choisir un projet --</option>
            <?php foreach ($projects as $project): ?>
                <option value="<?= $project['id'] ?>"><?= htmlspecialchars($project['title']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label for="title">Titre :</label><br>
        <input type="text" id="title" name="title" required maxlength="50">
    </div>

    <div>
        <label for="description">Description :</label><br>
        <textarea id="description" name="description" rows="4" maxlength="500"></textarea>
    </div>

    <div>
        <label for="status">Statut :</label><br>
        <select name="status" id="status">
            <option value="A faire">A faire</option>
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
        </select>
    </div>

    <div>
        <label for="due_date">Date limite :</label><br>
        <input type="date" id="due_date" name="due_date">
    </div>

    <button type="submit">Créer</button>
</form>

<p><a href="index.php?controller=task&action=list">← Retour à la liste</a></p>
