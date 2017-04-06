<?php
defined('_JEXEC') or die;
?>

<div id="mainwrap" class="clearfix">
  <div class="internal-container">
    <?php if ($this->countModules('left')) : ?>
      <div id="left">
        <jdoc:include type="modules" name="left" style="xhtml" />
      </div>
    <?php endif;?>
    
    <div id="main">
      <?php if ($this->countModules('main')) : ?>
        <jdoc:include type="modules" name="main" style="xhtml" />
      <?php endif; ?>
      <jdoc:include type="component" />
    </div>

    <?php if ($this->countModules('right')) : ?>
      <div id="right">
        <jdoc:include type="modules" name="right" style="xhtml" />
      </div>
    <?php endif;?>
  </div>
</div>