<?php 
  $navigation = array(
    "#" => "Home",
    "#services" => "Dienstleistungen",
    "#angebote" => "Angebote",
    "#aboutus" => "Über uns",
    "#team" => "Team",
    "#contact" => "Kontakt",
  );
?>
<nav class="mobile-nav list-group">
  <?php foreach($navigation AS $key => $value):  ?>
      <a class="mobile-nav-link list-group-item list-group-item-action" href="<?php echo e($key); ?>">
        <?php echo str_replace(" ", "&nbsp;", e($value)); ?>
        <?php if ($key == "#"): ?>
          <span class="sr-only">(current)</span>
        <?php endif; ?>
      </a>
  <?php endforeach ?>
    </nav>
    <header class="page-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Gassi</a>
            <button id="toggle-mobile-nav" class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
              <?php foreach($navigation AS $key => $value):  ?>
                <a class="nav-item nav-link<?php if($key == "#"): ?> active <?php endif ?>" href="<?php echo e($key); ?>">
                  <?php echo str_replace(" ", "&nbsp;", e($value)); ?>
                  <?php if ($key == "#"): ?>
                    <span class="sr-only">(current)</span>
                  <?php endif; ?>
              </a>
              <?php endforeach ?>
              </div>
            </div>
          </div>
        </nav>
        <div
          class="jumbotron header-jumbotron text-center d-flex flex-column justify-content-center align-items-center">
          <h1 class="display-6">Willkommen Tierfreunde!</h1>
          <h2 class="lead display-4">Wir kümmern uns um Ihre besten Freunde.</h2>
          <a class="btn btn-primary btn-sm" href="#angebote" role="button">Weitere Informationen</a>
        </div>
      </div>
    </header>