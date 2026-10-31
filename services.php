<?php $pageTitle = 'Services'; require 'includes/header.php'; $rows = fetch_all('services', "status='active'", 'id ASC'); ?>
<section class="wrap block"><h1>Services</h1>
  <div class="grid">
  <?php foreach ($rows as $r): ?>
    <article class="card"><?= img($r['image'], $r['title']) ?><h3><?= e($r['title']) ?></h3><p><?= e($r['description']) ?></p></article>
  <?php endforeach; if (!$rows) echo '<p>No services listed yet.</p>'; ?>
  </div>
</section>
<?php require 'includes/footer.php'; ?>
