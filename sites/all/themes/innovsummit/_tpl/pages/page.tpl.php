<!-- Main Header Starts -->
<header class="mainHeader" role="banner">    
    <?php if ($site_name || $site_slogan): ?>
    <hgroup id="site-name-slogan">
    <?php if ($site_name): ?>
        <h1 id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
        <h4 id="site-slogan"><?php print $site_slogan; ?></h4>
    <?php endif; ?>
    </hgroup>
    <?php endif; ?>
    <?php if ($page['navigation']): ?>
    <nav class="navigationMenu cf">
    <h2 class="hidden">Navigation</h2>
        <?php print render($page['navigation']); ?>  
    </nav>
    <?php endif; ?>      

</header>
<!-- Main Header Ends -->
<!-- Content Section Starts-->
<section class="contentSection cf">
    <?php print $messages; ?>
    <?php print render($page['content_top']); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($title): ?><h2 class="title hidden" id="page-title"><?php print $title; ?></h2><?php endif; ?>

    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    
    <?php print render($page['content']); ?>
</section>
<!-- Content Section ends -->
<!-- Main Footer Starts -->
<?php print render($page['footer']) ?>
<!-- Main Footer Ends -->