<?php 
$page_title = "Design & Arredo – TEMA";
include 'partials/header.php'; ?>

        <!-- HERO -->
        <header class="py-5 mt-4">
            <div class="container text-center">
                <h1 class="fw-bold text-uppercase">Design & Arredo</h1>
                <p class="lead">Arredi e complementi in metallo su misura,
                    combinati con materiali pregiati.</p>
            </div>
        </header>
        <section class="py-4 bg-light border-bottom">
            <div class="container">
                <div
                    class="d-flex flex-wrap gap-3 justify-content-center service-menu">

                    <a href="infissi.php" class="service-link">
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

                    <a href="design-arredo.php" class="service-link active-service">
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
            <img src="img/Foto_Design_Arredo/design-arredo-hero.webp"
                class="img-fluid rounded shadow-sm" alt="Design e Arredo">
        </div>

        <!-- DESCRIZIONE TECNICA -->
        <section class="py-4">
            <div class="container">
                <h2 class="mb-3">Descrizione tecnica</h2>
                <p class="lead">
                    Il design su misura permette di creare arredi unici,
                    combinando metallo, legno, vetro e materiali
                    pregiati. Ogni elemento viene progettato per integrarsi
                    perfettamente negli ambienti, valorizzando
                    linee, volumi e funzionalità.
                </p>
            </div>
        </section>

        <!-- MATERIALI E COMBINAZIONI -->
        <section class="py-4 bg-light">
            <div class="container">
                <h2 class="mb-4">Materiali e combinazioni</h2>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="p-4 border rounded shadow-sm h-100">
                            <h5 class="text-uppercase">Metallo + Legno</h5>
                            <p>Perfetto per arredi moderni con un tocco caldo e
                                naturale.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-4 border rounded shadow-sm h-100">
                            <h5 class="text-uppercase">Metallo + Vetro</h5>
                            <p>Ideale per complementi eleganti e
                                minimalisti.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-4 border rounded shadow-sm h-100">
                            <h5 class="text-uppercase">Metallo + Materiali
                                Pregiati</h5>
                            <p>Soluzioni esclusive per ambienti di alto
                                livello.</p>
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
                        <img src="img/Foto_Design_Arredo/arredo1.png"
                            class="img-fluid rounded shadow-sm lavori-img"
                            alt="Arredo 1">
                    </div>
                    <div class="col-md-4">
                        <img src="img/Foto_Design_Arredo/arredo2.png"
                            class="img-fluid rounded shadow-sm lavori-img"
                            alt="Arredo 2">
                    </div>
                    <div class="col-md-4">
                        <img src="img/Foto_Design_Arredo/arredo3.png"
                            class="img-fluid rounded shadow-sm lavori-img"
                            alt="Arredo 3">
                    </div>
                </div>
            </div>
        </section>

        <!-- VANTAGGI -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="mb-4">Perché scegliere TEMA</h2>

                <ul class="list-group list-group-flush fs-5">
                    <li class="list-group-item">✔ Progetti su misura</li>
                    <li class="list-group-item">✔ Combinazioni di materiali
                        pregiate</li>
                    <li class="list-group-item">✔ Design moderno e
                        funzionale</li>
                    <li class="list-group-item">✔ Lavorazioni artigianali</li>
                    <li class="list-group-item">✔ Finiture di alto livello</li>
                </ul>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-final text-center text-white py-5">
            <div class="container">
                <h2 class="fw-bold">Vuoi realizzare un arredo su misura?</h2>
                <p class="lead">Progettiamo e realizziamo complementi unici per
                    i tuoi ambienti.</p>
                <a href="contatti.php"
                    class="btn btn-light btn-lg">Contattaci</a>
            </div>
        </section>

        <?php include 'partials/footer.php'; ?>
