<?php $pageTitle = 'Courses'; require 'includes/header.php'; $rows = fetch_all('courses'); ?>
<section class="wrap block"><h1>Training courses</h1>
  <div class="grid">
  <?php foreach ($rows as $r): ?>
    <article class="card"><?= img($r['image'], $r['title']) ?><h3><?= e($r['title']) ?></h3>
      <p class="meta"><?= e($r['duration']) ?><?= $r['fees'] !== '' ? ' &middot; Fee: ' . e($r['fees']) : '' ?></p>
      <p><?= e($r['description']) ?></p>
      <a class="btn small" href="enquiry.php?type=course&amp;ref=<?= urlencode($r['title']) ?>">Enquire about this course</a>
    </article>
  <?php endforeach; if (!$rows) echo '<p>No courses open right now.</p>'; ?>
  </div>
</section>
<?php require 'includes/footer.php'; ?>
