<?php 
$page_title = "Home – TEMA";
include 'partials/header.php'; ?>

        <!-- CAROSELLO HOME -->
        <div id="carouselTema" class="carousel slide" data-bs-ride="carousel"
            data-bs-interval="5000">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img/lavoro1.webp" class="d-block w-100"
                        alt="Infisso in acciaio satinato">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Infisso in acciaio satinato</h5>
                        <p>Realizzazione su misura con profili sottili.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/lavoro2.webp" class="d-block w-100"
                        alt="Pergolato corten">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pergolato in corten</h5>
                        <p>Design moderno e resistente agli agenti
                            atmosferici.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/lavoro3.webp" class="d-block w-100"
                        alt="Scala inox su misura">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Scala inox su misura</h5>
                        <p>Finitura satinata e saldature a vista.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- SERVIZI -->
        <section id="servizi" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">I nostri servizi</h2>

                <div class="servizi-row">

                    <a href="infissi.php" class="service-box">
                        <h5 class="text-uppercase">Infissi</h5>
                        <p>Soluzioni in acciaio e alluminio progettate per
                            garantire luminosità, isolamento e linee
                            essenziali.</p>
                    </a>

                    <a href="centinatura-profili.php" class="service-box">
                        <h5 class="text-uppercase">Centinatura Profili</h5>
                        <p>Lavorazioni in acciaio inox e corten per progetti che
                            richiedono resistenza, estetica e carattere.</p>
                    </a>

                    <a href="design-arredo.php" class="service-box">
                        <h5 class="text-uppercase">Designe & Arredo</h5>
                        <p>Arredi e complementi in metallo su misura, combinati
                            con materiali pregiati per interni ed esterni.</p>
                    </a>

                    <a href="materiali-speciali.php" class="service-box">
                        <h5 class="text-uppercase">Materiali Speciali</h5>
                        <p>Studio interno dedicato allo sviluppo di progetti
                            personalizzati, dal concept alla realizzazione
                            finale.</p>
                    </a>

                    <a href="progettazione-tecnica.php" class="service-box">
                        <h5 class="text-uppercase">Progettazione Tecnica</h5>
                        <p>Studio interno dedicato allo sviluppo di progetti
                            personalizzati, dal concept alla realizzazione
                            finale.</p>
                    </a>

                </div>
            </div>
        </section>

        <!-- PORTFOLIO HOME -->
        <section id="portfolio" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Lavori recenti</h2>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="portfolio-item shadow-sm">
                            <img src="img/lavoro1.webp" class="img-fluid"
                                alt="Lavoro 1">
                            <div class="p-3">
                                <h5 class="text-uppercase">Infisso in
                                    acciaio</h5>
                                <p>Struttura minimale con profili sottili.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="portfolio-item shadow-sm">
                            <img src="img/lavoro2.webp" class="img-fluid"
                                alt="Lavoro 2">
                            <div class="p-3">
                                <h5 class="text-uppercase">Pergolato in
                                    corten</h5>
                                <p>Design moderno e resistente agli agenti
                                    atmosferici.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="portfolio-item shadow-sm">
                            <img src="img/lavoro3.webp" class="img-fluid"
                                alt="Lavoro 3">
                            <div class="p-3">
                                <h5 class="text-uppercase">Struttura inox</h5>
                                <p>Finitura satinata e saldature a vista.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA FINALE -->
        <section class="cta-final text-center text-white py-5">
            <div class="container">
                <h2 class="fw-bold">Hai un progetto in mente?</h2>
                <p class="lead">Realizziamo infissi e strutture in acciaio,
                    corten e inox su misura.</p>
                <a href="contatti.php"
                    class="btn btn-light btn-lg">Contattaci</a>
            </div>
        </section>

<?php include 'partials/footer.php';?>        
