<?php 
$page_title = "Infissi – TEMA";
include 'partials/header.php'; ?>

    <!-- HERO -->
    <header class="py-5 mt-4">
        <div class="container text-center">
            <h1 class="fw-bold text-uppercase">Infissi</h1>
            <p class="lead">Soluzioni in acciaio e alluminio progettate per
                garantire luminosità, isolamento e linee essenziali.</p>
        </div>
    </header>
    <section class="py-4 bg-light border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap gap-3 justify-content-center service-menu">

                <a href="infissi.php" class="service-link active-service">
                    <i class="bi bi-door-closed me-2"></i> Infissi
                </a>

                <a href="centinatura-profili.php" class="service-link">
                    <i class="bi bi-bounding-box-circles me-2"></i> Centinatura
                    Profili
                </a>

                <a href="materiali-speciali.php" class="service-link">
                    <i class="bi bi-layers-half me-2"></i> Materiali
                    Speciali
                </a>

                <a href="design-arredo.php" class="service-link">
                    <i class="bi bi-brush me-2"></i> Design & Arredo
                </a>

                <a href="progettazione-tecnica.php" class="service-link">
                    <i class="bi bi-gear-wide-connected me-2"></i>
                    Progettazione Tecnica
                </a>

            </div>
        </div>
    </section>

    <!-- IMMAGINE HERO -->
    <div class="container mb-5">
        <img src="img/Foto_Infissi/infissi-hero.png" class="img-fluid rounded shadow-sm" alt="Infissi in acciaio">
    </div>

    <!-- DESCRIZIONE TECNICA -->
    <section class="py-4">
        <div class="container">
            <h2 class="mb-3">Descrizione tecnica</h2>
            <p class="lead">
                Gli infissi in acciaio e alluminio TEMA sono progettati per
                garantire massima luminosità,
                profili sottili, isolamento termico e acustico, resistenza
                agli agenti atmosferici e una
                durata nel tempo superiore rispetto ai materiali
                tradizionali.
            </p>
        </div>
    </section>

    <!-- MATERIALI -->
    <section class="py-4 bg-light">
        <div class="container">
            <h2 class="mb-4">Materiali disponibili</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h5 class="text-uppercase">Acciaio</h5>
                        <p>Massima resistenza, profili sottili, ideale per
                            design moderni e minimalisti.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h5 class="text-uppercase">Alluminio</h5>
                        <p>Leggero, isolante, disponibile in diverse
                            finiture e colorazioni.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h5 class="text-uppercase">Finiture</h5>
                        <p>Verniciature a polvere, satinature e trattamenti
                            anticorrosione.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERIA -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Lavori realizzati</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <img src="img/Foto_Infissi/infisso1.png" class="img-fluid rounded shadow-sm lavori-img"
                        alt="Infisso 1">
                </div>
                <div class="col-md-4">
                    <img src="img/Foto_Infissi/infisso2.png" class="img-fluid rounded shadow-sm lavori-img"
                        alt="Infisso 2">
                </div>
                <div class="col-md-4">
                    <img src="img/Foto_Infissi/infisso3.png" class="img-fluid rounded shadow-sm lavori-img"
                        alt="Infisso 3">
                </div>
            </div>
        </div>
    </section>

    <!-- VANTAGGI -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Perché scegliere TEMA</h2>

            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item">✔ Precisione artigianale</li>
                <li class="list-group-item">✔ Profili sottili e moderni</li>
                <li class="list-group-item">✔ Isolamento termico e
                    acustico</li>
                <li class="list-group-item">✔ Durata nel tempo</li>
                <li class="list-group-item">✔ Progettazione su misura</li>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-final text-center text-white py-5">
        <div class="container">
            <h2 class="fw-bold">Hai un progetto in mente?</h2>
            <p class="lead">Realizziamo infissi in acciaio e alluminio su
                misura.</p>
            <a href="contatti.php" class="btn btn-light btn-lg">Contattaci</a>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>