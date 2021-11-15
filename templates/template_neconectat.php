<!--meniu cu adaugare task, lista taskuri, vizualizare profil, deconectare
sablonare pt paginile din meniu, nu intra si deconectare aici la sablonare -->


<head>
  
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.php">my<span class="logo_colour">Organizer</span></a></h1>
          <h2>For every minute spent organizing, an hour is earned</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="index.php?page=1">Conectare</a></li>
          <li><a href="index.php?page=2">Inregistrare</a></li>
          
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner"></div>
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>10 sfaturi de organizare a timpului</h4>
            <h5>06 Noiembrie 2021</h5>
            <p>Timpul este una din cele mai prețioase resurse de care dispunem astăzi. Şi totodată una din cele mai frecvente probleme cu care ne luptăm <br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="imagini/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
          <?php
          if (isset($_GET['page'])) {
              $pagina = $_GET['page'];
              switch ($pagina) {
                  case 1:
                      require_once 'pagini/neconectat/conectare.php';
                      break;
                  case 2:
                      require_once 'pagini/neconectat/inregistrare.php';
                      break;
                  default:
                      require_once 'pagini/eroare.php';
                      break;
              }
          } else {
              require_once 'pagini/neconectat/home.php';
          }
          ?>

      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="index.php?page=1">Conectare</a> | <a href="index.php?page=2">Inregistrare</a> </p>
      <p>Copyright &copy; simplestyle_horizon | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>


<?php



