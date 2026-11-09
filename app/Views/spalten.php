<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spalten | Web-Entwicklung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                <h2 class="h4 mb-0">Spalten</h2>
            </div>
            <div class="card-body">

                <a href="<?= site_url('spalten/erstellen') ?>" class="btn btn-primary mb-3">Erstellen</a>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Board</th>
                            <th>Sortid</th>
                            <th>Spalte</th>
                            <th>Spaltenbeschreibung</th>
                            <th>Bearbeiten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Allgemeine Todos</td>
                            <td>100</td>
                            <td>Zu besprechen</td>
                            <td>Noch zu besprechende Todos</td>
                            <td>
                                <a href="#" class="text-primary me-2" title="Bearbeiten"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="text-primary" title="Löschen"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <a href="#" class="text-primary me-2" title="Bearbeiten"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="text-primary" title="Löschen"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>

<footer class="footer text-white py-4">
    <div class="container-fluid d-flex flex-wrap justify-content-between gap-2">
        <span>&copy;Web-Entwicklung Team 14 </span>
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