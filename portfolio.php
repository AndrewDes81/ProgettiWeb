<?php 
$page_title = "Portfolio – TEMA";
include 'partials/header.php';

// Categorie del portfolio
$categories = [
    "infissi" => "Infissi",
    "arredo" => "Design & Arredo",
    "scala" => "Scale",
    "progetto" => "Progettazione Tecnica"
];
?>

<!-- HERO -->
<header class="py-5 mt-4 text-center">
    <div class="container">
        <h1 class="fw-bold text-uppercase">Portfolio</h1>
        <p class="lead">Una selezione dei nostri lavori realizzati.</p>
    </div>
</header>

<!-- FILTRI -->
<div class="container mb-4">
    <div class="row g-2 text-center justify-content-center">

        <!-- Bottone Tutti -->
        <div class="col-6 col-md-2">
            <button class="btn btn-outline-dark w-100 filter-btn" data-filter="all">Tutti</button>
        </div>

        <!-- Bottoni categorie -->
        <?php foreach ($categories as $key => $label): ?>
            <div class="col-6 col-md-2">
                <button class="btn btn-outline-dark w-100 filter-btn" data-filter="<?= $key ?>">
                    <?= $label ?>
                </button>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<!-- GALLERIA DINAMICA -->
<section id="portfolio-section">
    <div class="container">
        <div class="row g-4 portfolio-row">

            <?php
            $folder = "img/Portfolio/";
            $allFiles = scandir($folder);

            foreach ($allFiles as $file) {

                if ($file === "." || $file === "..") continue;

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (!in_array($ext, ['jpg','jpeg','png','gif','webp'])) continue;

                // Trova categoria dal nome file
                foreach ($categories as $key => $label) {

                    if (stripos($file, $key) !== false) {

                        echo '
                        <div class="col-md-4 portfolio-col all '.$key.'">
                            <div class="portfolio-item">
                                <img src="'.$folder.$file.'" class="img-fluid rounded shadow-sm" alt="'.$label.'">
                            </div>
                        </div>';
                    }
                }
            }
            ?>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-final text-center text-white py-5">
    <div class="container">
        <h2 class="fw-bold">Hai un progetto in mente?</h2>
        <p class="lead">Contattaci per una consulenza o un preventivo personalizzato.</p>
        <a href="contatti.php" class="btn btn-light btn-lg">Contattaci</a>
    </div>
</section>
<script src="js/portfolio.js"></script>

<?php include 'partials/footer.php'; ?>
