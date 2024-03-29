<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url();?></loc>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <?php foreach($pages as $page) { ?>
      <url>
          <loc><?php echo base_url().$page['slug'] ?></loc>
          <priority>0.5</priority>
          <changefreq>daily</changefreq>
      </url>
    <?php } ?>
    <?php foreach ($blogs as $b): ?>
      <url>
        <loc><?php echo base_url()?>blog/<?=$p['slug']?> </loc>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
      </url>
    <?php endforeach; ?>
</urlset>