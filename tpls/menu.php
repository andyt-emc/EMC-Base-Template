<?php
defined('_JEXEC') or die;

 if ($this->countModules('logo or menu')) : ?>
  <div id="navwrap" class="clearfix">
    <div class="internal-container">
    <?php if ($this->countModules('logo')) : ?>
      <div id="logo">
        <jdoc:include type="modules" name="logo" style="xhtml" />
      </div>
    <?php endif;?>

    <?php if ($this->countModules('menu')) : ?>
      <nav id="menu" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope" role="navigation">
        <div class="menu-inner">
          <jdoc:include type="modules" name="menu" style="xhtml" />
          <a href="#topwrap" class="close-btn" id="nav-close-btn">Close</a>
        </div>
      </nav>
    <?php endif;?>
  </div>
  </div>
<?php endif; ?>