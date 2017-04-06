<?php
defined('_JEXEC') or die;

 if ($this->countModules('grid5 or grid6 or grid7 or grid8')) : ?>
  <div id="grid2wrap" class="clearfix">
    <div class="internal-container">
    <?php if ($this->countModules('grid5')) : ?>
      <div id="grid5">
        <jdoc:include type="modules" name="grid5" style="xhtml" />
      </div>
    <?php endif;?>

    <?php if ($this->countModules('grid6')) : ?>
      <div id="grid6">
        <jdoc:include type="modules" name="grid6" style="xhtml" />
      </div>
    <?php endif;?>

    <?php if ($this->countModules('grid7')) : ?>
      <div id="grid7">
        <jdoc:include type="modules" name="grid7" style="xhtml" />
      </div>
    <?php endif;?>

    <?php if ($this->countModules('grid8')) : ?>
      <div id="grid8">
        <jdoc:include type="modules" name="grid8" style="xhtml" />
      </div>
    <?php endif;?>
  </div>
  </div>
<?php endif; ?>