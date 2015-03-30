<?php include('header.inc'); ?>

<header role="banner" id="hero">
  <div class="container">
    <div class="intro">
      <?php if (!empty($site_slogan)): ?>
        <h1><?php print $site_slogan; ?></h1>
      <?php endif; ?>
    </div>
    <div class="photocredit">
      <small><a href="https://creativecommons.org/licenses/by-nc/2.0/">Creative Commons</a> Photo by <a href="https://www.flickr.com/photos/elysepatten/">elysepatten</a> @ Flickr</small>
    </div>
  </div>
</header>

<div class="main-container container">

  <?php /*
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->
  */ ?>

  <div class="row">
    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
    </section>
  </div>

  <div class="row">
    <?php if (!empty($page['column_one'])): ?>
      <aside class="col-md-4" role="complementary">
        <?php print render($page['column_one']); ?>
      </aside>  <!-- /#column_one -->
    <?php endif; ?>
    <?php if (!empty($page['column_two'])): ?>
      <aside class="col-md-4" role="complementary">
        <?php print render($page['column_two']); ?>
      </aside>  <!-- /#column_two -->
    <?php endif; ?>
    <?php if (!empty($page['column_three'])): ?>
      <aside class="col-md-4" role="complementary">
        <?php print render($page['column_three']); ?>
      </aside>  <!-- /#column_three -->
    <?php endif; ?>
  </div>

  <div class="row">
    <?php print render($page['content']); ?>
  </div>

</div>

<?php include('footer.inc'); ?>