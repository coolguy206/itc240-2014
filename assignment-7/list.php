<div class="list">
<div class="left">
<img src="<?= htmlentities($result['cover']); ?>" alt="<?= htmlentities($result['title']); ?>">
</div>

<div class="right">
<h2><?= htmlentities($result['title']); ?></h2>
<h3>Author</h3>
<p><?= htmlentities($result['author']); ?></p>
<h3>Description</h3>
<p><?= htmlentities($result['description']); ?></p>
<button>Check Out</button>
</div>
</div>