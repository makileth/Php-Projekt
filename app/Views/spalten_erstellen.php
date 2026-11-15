<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spalten erstellen | Web-Entwicklung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="d-flex flex-column">
<nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= site_url('/') ?>">
            <img src="<?= base_url('images/logo.svg') ?>" alt="WEB Entwicklung">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hauptnavigation" aria-controls="hauptnavigation" aria-expanded="false" aria-label="Navigation umschalten">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="hauptnavigation">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= site_url('/') ?>">Tasks</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Boards</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= site_url('spalten') ?>">Spalten</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h2 class="h4 mb-0">Spalten erstellen</h2>
            </div>
            <div class="card-body">

                <!-- Bisher funktioniert das Formular noch nicht. Die Post funktion fehlt noch 
                 und der Button "Speichern" ist bisher nur ein button Element und nicht vom Typ "submit" -->
                <form>

                    <div class="row mb-3">
                        <label for="spaltenbezeichnung" class="col-sm-2 col-form-label">Spaltenbezeichnung</label>
                        <div class="col-sm-10">
                            <input type="text" class="forµm-control" id="spaltenbezeichnung" name="spaltenbezeichnung" placeholder="Bezeichnung für die Spalte">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="spaltenbeschreibung" class="col-sm-2 col-form-label">Spaltenbeschreibung</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="spaltenbeschreibung" name="spaltenbeschreibung" rows="4" placeholder="Beschreibung für die Spalte"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="sortid" class="col-sm-2 col-form-label">Sortid</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sortid" name="sortid" placeholder="Sortid angeben">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="board" class="col-sm-2 col-form-label">Board auswählen</label>
                        <div class="col-sm-4"> <!-- Ich persönlich finde, dass es besser aussieht, wenn hier das sm- auf 4 gesetzt ist. 
                                                Wenn es ihr denk ess soll auch den ganzen Container ausfüllen, dann setze ich es ruhig auf 10. -->
                            <select class="form-select" id="board" name="board">
                                <option value="1" selected>Allgemeine Todos</option>
                                <option value="2">Privat</option>
                                <option value="3">Arbeit</option>
                            </select>
                        </div>
                    </div>

                    <button type="button" class="btn btn-success">Speichern</button>
                    <a href="<?= site_url('spalten') ?>" class="btn btn-secondary">Abbrechen</a>

                </form>

            </div>
        </div>
    </div>
</main>

<footer class="footer text-white py-4">
    <div class="container-fluid d-flex flex-wrap justify-content-between gap-2">
        <span>&copy;Web-Entwicklung Team 14</span>
        <ul class="list-inline mb-0">
            <li class="list-inline-item"><a href="#">Impressum</a></li>
            <li class="list-inline-item"><a href="#">Datenschutz</a></li>
            <li class="list-inline-item"><a href="#">Kontakt</a></li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>