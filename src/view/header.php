<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="public/images/logo-geu.png" class='logo' alt="газ та електрика в Україні">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-white"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Про компанію
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="index.php?action=teamPage">Команда</a>
          <a class="dropdown-item text-white" href="index.php?action=careerPage">Кар'єра</a>
          <a class="dropdown-item text-white" href="index.php?action=documentsPage">Документи</a>
        </div>
      </li> 
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Енергетичні продукти
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="index.php?action=gasPage">Газ</a>
          <a class="dropdown-item text-white" href="index.php?action=electricityPage">Електрика</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?action=blogPage">Новини</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?action=home#contact">Контакт</a>
      </li>
    </ul>
   
    <?php 
    if($_SESSION['user']['id']){ ?>
      <a class="btn btn-danger mr-3 my-sm-0" href="index.php?action=logout">  Відключити</a>
     <?php } else{ ?>
      <a class="btn btn-outline-success mr-3 my-sm-0" href="index.php?action=loginPage">Офіс</a>
    <?php } ?>
  </div>
</nav>
