<?php
$page_title = "Centinatura Profili – TEMA";
include 'partials/header.php'; ?>

    <!-- HERO TITOLO -->
    <header class="py-5 mt-4">
        <div class="container text-center">
            <h1 class="fw-bold text-uppercase">Centinatura Profili</h1>
            <p class="lead">Curve perfette, precisione millimetrica e
                lavorazioni professionali su acciaio, inox e corten.</p>
        </div>
    </header>
    <section class="py-4 bg-light border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap gap-3 justify-content-center service-menu">

                <a href="infissi.php" class="service-link">
                    <i class="bi bi-door-closed me-2"></i> Infissi
                </a>

                <a href="centinatura-profili.php" class="service-link active-service">
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
        <img src="img/Foto_Centinature_Profili/centinatura-hero1.png" class="img-fluid rounded shadow-sm"
            alt="Centinatura profili">
    </div>

    <!-- INTRODUZIONE -->
    <section class="py-4">
        <div class="container">
            <h2 class="mb-3">Cos’è la centinatura profili</h2>
            <p class="lead">
                La centinatura è una lavorazione tecnica che permette di
                curvare profili metallici mantenendo resistenza,
                continuità e pulizia estetica. TEMA realizza centinature su
                acciaio, inox e corten con macchinari professionali,
                garantendo risultati perfetti anche su grandi raggi e su
                profili tubolari, piatti e strutturali.
            </p>
        </div>
    </section>

    <!-- PUNTI DI FORZA -->
    <section class="py-4 bg-light">
        <div class="container">
            <h2 class="mb-4">Punti di forza</h2>
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item">✔ Curve uniformi e senza
                    deformazioni</li>
                <li class="list-group-item">✔ Raggi personalizzati in base
                    al progetto</li>
                <li class="list-group-item">✔ Centinatura di profili
                    tubolari, piatti e strutturali</li>
                <li class="list-group-item">✔ Lavorazioni su acciaio, inox e
                    corten</li>
                <li class="list-group-item">✔ Precisione per infissi,
                    pergolati, archi e strutture</li>
                <li class="list-group-item">✔ Finiture pulite pronte per
                    verniciatura o montaggio</li>
            </ul>
        </div>
    </section>

    <!-- GALLERIA -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Lavorazioni realizzate</h2>
                <p class="lead mb-4">Tecnologia, esperienza e attenzione ai dettagli per trasformare ogni progetto in una struttura solida e precisa.</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <img src="img/Foto_Centinature_Profili/centinatura1.jpeg"
                        class="img-fluid rounded shadow-sm lavori-img" alt="Centinatura profili acciaio">
                        <title class="d-block mt-2 text-center fw-bold">PROFILI CURVATI</title>
                        <label class="d-block mt-2 text-center">Cura artigianale e macchinari avanzati
                            <br>per curvature perfette e costanti.
                        </label>
                </div>
                <div class="col-md-4">
                    <img src="img/Foto_Centinature_Profili/centinatura2_1.jpg"
                        class="img-fluid rounded shadow-sm lavori-img" alt="Profilo curvato inox">
                </div>
                <div class="col-md-4">
                    <img src="img/Foto_Centinature_Profili/centinatura3.jpeg"
                        class="img-fluid rounded shadow-sm lavori-img" alt="Curvatura profili tubolari">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-final text-center text-white py-5 bg-dark">
        <div class="container">
            <h2 class="fw-bold">Hai bisogno di profili curvati su
                misura?</h2>
            <p class="lead">Contattaci per una centinatura professionale e
                precisa.</p>
            <a href="contatti.php" class="btn btn-light btn-lg">Contattaci</a>
        </div>
    </section>

<?php include 'partials/footer.php'; ?>