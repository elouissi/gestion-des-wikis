<div class="row mx-4" id="search_list">
        <?php foreach ($allWikis as $wiki): ?>
            <div class="col-sm-4" style="margin-bottom: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $wiki['title'] ?></h5>
                        <p class="card-text"><?= $wiki['content'] ?></p>
                        <p>Date creation: <?= $wiki['dateCreate'] ?></p>
                        <a href="<?= URL_DIR ?>Wikis/affichage_wiki/?id=<?= $wiki['id'] ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>   
    </div>
</section>
