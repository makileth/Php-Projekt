

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

