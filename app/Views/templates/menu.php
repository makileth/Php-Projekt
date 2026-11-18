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
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Tasks</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Boards</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('spalten') ?>">Spalten</a></li>
            </ul>
        </div>
    </div>
</nav>