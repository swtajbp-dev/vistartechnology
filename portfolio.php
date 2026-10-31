<?php $pageTitle = 'Portfolio'; require 'includes/header.php'; $rows = fetch_all('projects'); ?>
<section class="wrap block"><h1>Portfolio</h1>
  <div class="grid">
  <?php foreach ($rows as $r): ?>
    <article class="card"><?= img($r['image'], $r['title']) ?><h3><?= e($r['title']) ?></h3>
      <p class="meta"><?= e($r['category']) ?><?= $r['client_name'] ? ' for ' . e($r['client_name']) : '' ?></p>
      <p><?= e($r['description']) ?></p>
      <?php if ($r['url']): ?><a href="<?= e($r['url']) ?>" target="_blank" rel="noopener">Visit site</a><?php endif; ?>
    </article>
  <?php endforeach; if (!$rows) echo '<p>No projects yet.</p>'; ?>
  </div>
</section>
<?php require 'includes/footer.php'; ?>
