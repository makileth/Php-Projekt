

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

