<?php
defined('_JEXEC') or die;

 if ($this->countModules('bottom1 or bottom2 or bottom3 or bottom4')) : ?>
  <div id="bottomwrap" class="clearfix">
    <div class="internal-container">
      <?php if ($this->countModules('bottom1')) : ?>
        <div id="bottom1">
          <jdoc:include type="modules" name="bottom1" style="xhtml" />
        </div>
      <?php endif;?>

      <?php if ($this->countModules('bottom2')) : ?>
        <div id="bottom2">
          <jdoc:include type="modules" name="bottom2" style="xhtml" />
        </div>
      <?php endif;?>

      <?php if ($this->countModules('bottom3')) : ?>
        <div id="bottom3">
          <jdoc:include type="modules" name="bottom3" style="xhtml" />
        </div>
      <?php endif;?>

      <?php if ($this->countModules('bottom4')) : ?>
        <div id="bottom4">
          <jdoc:include type="modules" name="bottom4" style="xhtml" />
        </div>
      <?php endif;?>
    </div>
  </div>
<?php endif; ?>