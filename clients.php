<?php $pageTitle = 'Clients'; require 'includes/header.php'; $rows = fetch_all('clients'); ?>
<section class="wrap block"><h1>Our clients</h1>
  <div class="grid logos">
  <?php foreach ($rows as $r): ?>
    <div class="card logo"><?= img($r['logo'], $r['name']) ?><h3><?= e($r['name']) ?></h3></div>
  <?php endforeach; if (!$rows) echo '<p>No clients listed yet.</p>'; ?>
  </div>
</section>
<?php require 'includes/footer.php'; ?>
