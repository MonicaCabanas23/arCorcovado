<?php echo get_component_slot('header'); ?>

<?php echo get_component('default', 'updateCheck'); ?>

<?php echo get_component('default', 'privacyMessage'); ?>

<?php if ($sf_user->isAdministrator() && '' === (string) QubitSetting::getByName('siteBaseUrl')) { ?>
  <div class="site-warning">
    <?php echo link_to(__('Please configure your site base URL'), 'settings/siteInformation', ['rel' => 'home', 'title' => __('Home')]); ?>
  </div>
<?php } ?>

<div id="header">

  <div class="container">

    <div id="header-brand">
      <a id="header-logo" href="/">
      <?php 
      echo image_tag('/plugins/arDemoThemePlugin/images/logo.png', ['width' => '20', 'height' => '20', 'alt' => __('UCA logo')]); 
      echo "<p>Universidad Centromaericana José Simeón Cañas</p>";
      ?>
      </a>
      <div id="header-text">
        <?php 
        echo "<hr>";
        echo "<p>Archivo Histórico del Conflicto Armado Salvadoreño (Ahcas)</p>";
        ?>
      </div>

</div>

   <?php if ($sf_user->isAuthenticated()) { ?>
    <div id="top-bar">
      <nav>
       <?php echo get_component('menu', 'userMenu'); ?>
       <?php echo get_component('menu', 'quickLinksMenu'); ?>
       <?php if (sfConfig::get('app_toggleLanguageMenu')) { ?>
        <?php echo get_component('menu', 'changeLanguageMenu'); ?>
       <?php } ?>
       <?php echo get_component('menu', 'mainMenu', ['sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID()]); ?>
      </nav>
    </div>
   <?php } ?>

  </div>

</div>
