<?php
$page_title = "Admin – Gestione Foto Portfolio";
include "partials/header.php";

// Categorie del portfolio
$categories = [
    "infissi"   => "Infissi",
    "arredo"    => "Design & Arredo",
    "scala"     => "Scale",
    "progetto"  => "Progettazione Tecnica"
];

// Categoria selezionata
$selected = $_GET['cat'] ?? 'infissi';
?>

<div class="container py-4">

<?php if (isset($_GET['limit']) && $_GET['limit'] == 1): ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = new bootstrap.Modal(document.getElementById('limitModal'));
        modal.show();
    });
    </script>
<?php endif; ?>


    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="admin-title">Gestione Foto Portfolio</h2>
    </div>

    <!-- Selezione categoria -->
    <div class="admin-card">
        <h5 class="mb-3">Seleziona una categoria</h5>

        <?php foreach ($categories as $key => $label): ?>
            <a href="admin.php?cat=<?= $key ?>"
               class="admin-cat-btn m-1 <?= ($selected === $key) ? 'active' : '' ?>">
                <?= $label ?>
            </a>
        <?php endforeach; ?>

        <!-- Box Consiglio per le immagini -->
        <div class="admin-tip-box d-flex align-items-start mb-4">
            <i class="bi bi-lightbulb me-3"></i>

            <div>
                <h5 class="fw-bold mb-1">Consiglio</h5>

                <p class="text-muted mb-0">
                    Per garantire prestazioni ottimali del sito, carica immagini leggere e già ottimizzate.
                </p>
                <p class="text-muted mb-0">
                    Dimensione consigliata: <strong>max 1600×1200 px</strong> – <strong>max 2MB</strong>.
                </p>
                <p class="text-muted mb-0">
                    Formati supportati: <strong>JPG, JPEG, PNG, GIF, WEBP</strong>.
                </p>
                <p class="text-muted mb-0">
                    Per il miglior equilibrio tra qualità e velocità, preferire <strong>WEBP</strong>;
                    in alternativa, <strong>JPG ottimizzato</strong>.
                </p>
            </div>
        </div>

        <!-- Aggiungi Foto -->
        <form action="upload.php" method="POST" enctype="multipart/form-data" class="mt-4">
            <input type="hidden" name="category" value="<?= $selected ?>">

            <input type="file" name="newfile" class="real-file-input d-none" onchange="this.form.submit()">

            <button type="button"
                    class="btn btn-replace"
                    onclick="triggerFileInput(this)">
                Aggiungi Foto
            </button>
        </form>

        <!-- Titolo sezione foto -->
        <h4 class="admin-category-title">
            Foto nella categoria: <?= $categories[$selected] ?>
        </h4>

        <div class="row justify-center">

            <?php
            // PNG FIX – scandir() funziona sempre su Windows
            $allFiles = scandir("../img/Portfolio/");
            $files = [];

            foreach ($allFiles as $filename) {

                if ($filename === "." || $filename === "..") continue;

                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

                if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) continue;

                if (stripos($filename, $selected) !== false) {
                    $files[] = "../img/Portfolio/" . $filename;
                }
            }

            foreach ($files as $file):
                $filename = basename($file);
            ?>

                <div class="col-md-4 admin-item text-center">

                    <!-- Immagine -->
                    <img src="../img/Portfolio/<?= $filename ?>?v=<?= time() ?>"
                         class="admin-img mb-3">

                    <form action="replace.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="oldfile" value="<?= $filename ?>">
                        <input type="hidden" name="category" value="<?= $selected ?>">

                        <input type="file" name="newfile"
                               class="real-file-input d-none"
                               onchange="this.form.submit()">

                        <div class="admin-btn-group">

                            <button type="button"
                                    class="admin-btn-small admin-btn-replace"
                                    onclick="triggerFileInput(this)">
                                Sostituisci
                            </button>

                            <button type="button"
                                    class="admin-btn-small admin-btn-delete"
                                    data-file="<?= $filename ?>"
                                    data-category="<?= $selected ?>"
                                    onclick="openDeleteModal(this)">
                                Elimina
                            </button>


                        </div>
                    </form>

                </div>

            <?php endforeach; ?>

        </div>
    </div>

</div>

<!-- MODAL LIMITE FOTO -->
<div class="modal fade" id="limitModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px;">

            <div class="modal-header" style="border-bottom: none;">
                <h5 class="modal-title">Limite raggiunto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p class="mb-2">
                    Hai raggiunto il limite di <strong>9 foto</strong> per questa categoria.
                </p>
                <p class="text-muted">
                    Passa alla <strong>Versione Premium</strong> per avere:
                </p>

                <ul>
                    <li>Foto illimitate</li>
                    <li>Database professionale</li>
                    <li>Ordinamento drag & drop</li>
                    <li>Descrizioni e tag</li>
                </ul>
            </div>

            <div class="modal-footer" style="border-top: none;">
                <button class="btn btn-dark" data-bs-dismiss="modal">Chiudi</button>
            </div>

        </div>
    </div>
</div>

<!-- MODAL ELIMINA FOTO -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px;">

            <div class="modal-header" style="border-bottom: none;">
                <h5 class="modal-title">Conferma eliminazione</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Vuoi davvero eliminare questa foto?</p>
            </div>

            <div class="modal-footer" style="border-top: none;">
                <form id="deleteForm" action="delete.php" method="POST">
                    <input type="hidden" name="file" id="deleteFile">
                    <input type="hidden" name="category" id="deleteCategory">
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>

                <button class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            </div>

        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>
