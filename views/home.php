<?php include __DIR__ . '/partials/header.php'; ?>

<div class="container">
    <div class="columns">
        <?php foreach ($articles as $article); ?>
        <div class="column is-3">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <?= $article->title ?>
                        Component
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>