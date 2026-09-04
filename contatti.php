<?php 
$page_title = "Contatti – TEMA";
include 'partials/header.php'; ?>

        <!-- HERO -->
        <header class="py-5 mt-4 text-center">
            <div class="container">
                <h1 class="fw-bold text-uppercase">Contatti</h1>
                <p class="lead text-muted">Siamo a tua disposizione per
                    consulenze, preventivi e informazioni tecniche.</p>
            </div>
        </header>

        <!-- SEZIONE CONTATTI PREMIUM -->
        <section class="py-5">
            <div class="container">
                <div class="row g-5">

                    <!-- COLONNA SINISTRA: BOX CONTATTI PREMIUM -->
                    <div class="col-lg-4">
                        <div class="contact-box-thin p-4">
                            <h2>TEMA</h2>
                            <p class="text-muted mb-3">P.I. 01234567890</p>

                            <!-- INDIRIZZO -->
                            <div
                                class="contact-line mb-4 d-flex align-items-start">
                                <i
                                    class="bi bi-geo-alt contact-icon-thin me-3"></i>
                                <div>
                                    <h5 class="fw-bold mb-1">Sede</h5>
                                    <p class="text-muted mb-0">Zona
                                        Artigianale,</p>
                                    <p class="text-muted mb-0">72020 - Erchie
                                        (BRINDISI)</p>
                                    <p class="text-muted mb-0">Italia</p>
                                </div>
                            </div>

                            <!-- TELEFONO -->
                            <div
                                class="contact-line mb-4 d-flex align-items-start">
                                <i
                                    class="bi bi-telephone contact-icon-thin me-3"></i>
                                <div>
                                    <h5 class="fw-bold mb-1">Telefono</h5>
                                    <p class="text-muted mb-0">+39 339
                                        3904686</p>
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div
                                class="contact-line mb-4 d-flex align-items-start">
                                <i
                                    class="bi bi-envelope contact-icon-thin me-3"></i>
                                <div>
                                    <h5 class="fw-bold mb-1">Email</h5>
                                    <p
                                        class="text-muted mb-0">infotema.ap@gmail.com</p>
                                </div>
                            </div>

                            <!-- SOCIAL -->
                            <div class="mt-4">
                                <a href="#" class="social-icon-thin me-3"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="social-icon-thin"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="social-icon-thin ms-3"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>

                        </div>
                    </div>

                    <!-- COLONNA DESTRA: FORM PREMIUM -->
                    <div class="col-lg-8">
                        <div class="contact-box p-4 rounded border-0 shadow-sm">
                            <h3 class="fw-bold mb-3">Richiedi informazioni</h3>
                            <p class="text-muted mb-4">Compila il form per
                                ricevere assistenza tecnica o commerciale.</p>

                            <form id="contattiForm" novalidate>

                                <div class="mb-3">
                                    <label class="form-label">Nome e Cognome
                                        *</label>
                                    <input type="text"
                                        class="form-control elegant-input"
                                        id="nome" required>
                                    <div class="invalid-feedback">Inserisci il
                                        tuo nome.</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email *</label>
                                    <input type="email"
                                        class="form-control elegant-input"
                                        id="email" required>
                                    <div class="invalid-feedback">Inserisci una
                                        email valida.</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Telefono *</label>
                                    <input type="tel"
                                        class="form-control elegant-input"
                                        id="telefono" required>
                                    <div class="invalid-feedback">Inserisci un
                                        numero di telefono valido.</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Messaggio
                                        *</label>
                                    <textarea class="form-control elegant-input"
                                        id="messaggio" rows="4"
                                        required></textarea>
                                    <div class="invalid-feedback">Il messaggio
                                        deve contenere almeno 10
                                        caratteri.</div>
                                </div>

                                <button type="submit"
                                    class="btn btn-dark px-4 py-2 rounded-3">
                                    <i class="bi bi-send me-2"></i> Invia
                                </button>

                            </form>
                            <div id="formSuccess"
                                class="alert-success-tema d-none mt-4">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Messaggio inviato correttamente! Ti risponderemo
                                entro 24 ore.
                            </div>

                        </div>
                    </div>

                </div>

                <!-- MAPPA SOTTO -->
                <div class="mt-5">
                    <h3 class="fw-bold mb-3">Dove siamo</h3>
                    <div class="ratio ratio-16x9 rounded shadow-sm"
                        style="overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps?q=Erchie+Zona+Artigianale&output=embed"
                            style="border:0;" allowfullscreen
                            loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </section>

<?php include 'partials/footer.php'; ?>
