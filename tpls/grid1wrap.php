<?php
defined('_JEXEC') or die;

 if ($this->countModules('grid1 or grid2 or grid3 or grid4')) : ?>
  <div id="grid1wrap" class="clearfix">
    <div class="internal-container">
    <?php if ($this->countModules('grid1')) : ?>
      <div id="grid1">
        <jdoc:include type="modules" name="grid1" style="xhtml" />        
      </div>
    <?php endif;?>

    <?php if ($this->countModules('grid2')) : ?>
      <div id="grid2">
        <jdoc:include type="modules" name="grid2" style="xhtml" />
      </div>
    <?php endif;?>

    <?php if ($this->countModules('grid3')) : ?>
      <div id="grid3">
        <jdoc:include type="modules" name="grid3" style="xhtml" />
      </div>
    <?php endif;?>

    <?php if ($this->countModules('grid4')) : ?>
      <div id="grid4">
        <jdoc:include type="modules" name="grid4" style="xhtml" />
      </div>
    <?php endif;?>
    </div>
  </div>
<?php endif; ?>