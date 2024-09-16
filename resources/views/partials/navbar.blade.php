<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/resources/views/home.blade.php">Francescosommella</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index') }}">Tutti i fumetti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
            </li>
        </ul>
    </div>
</nav>
