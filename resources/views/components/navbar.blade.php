<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-map"></i>{{ $title }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"><i
                            class="fa-solid fa-house-chimney"></i>Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('table') }}"><i class="fa-solid fa-table"></i>Tabel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('map') }}"><i class="fa-solid fa-layer-group"></i>Peta</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
