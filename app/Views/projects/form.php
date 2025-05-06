<h1>Créer un nouveau projet</h1>

<form action="index.php?controller=project&action=form" method="post">
    <div>
        <label for="title">Titre :</label><br>
        <input type="text" id="title" name="title" required maxlength="50">
    </div>

    <div>
        <label for="description">Description :</label><br>
        <textarea id="description" name="description" rows="4" maxlength="500"></textarea>
    </div>

    <div>
        <label for="start_date">Date de début :</label><br>
        <input type="date" id="start_date" name="start_date">
    </div>

    <div>
        <label for="end_date">Date de fin :</label><br>
        <input type="date" id="end_date" name="end_date">
    </div>

    <button type="submit">Créer</button>
</form>

<p><a href="index.php?controller=project&action=list">← Retour à la liste</a></p>
