 
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDP - Gruppe wechseln</title>
    <link rel="icon" href="images/u-fr-icon-76x76.png">
    <link rel="stylesheet" href="layout/layout.css">
</head>
<body>

  <!-- Hintergrundbilder -->
  <div class="background">
    <div class="parallax parallax-city"></div>
    <div class="parallax parallax-mountains"></div>
  </div>

  <!-- Zurück Button -->
  <nav class="nav-buttons">
    <button id="homeButton" onclick="window.location.href='groupmgr.php'">
        <img src="images/pictogram-home.png" alt="Home">
        Abbrechen
    </button>
  </nav>

  <!-- Inhalt -->
  <div class="content" id="content">
    <!-- Header -->
    <header>
      <img class="logo" src="https://uni-freiburg.de/en/wp-content/themes/unifreiburg-theme/img/ufr-logo-white.svg" alt="University of Freiburg">

    </header>

    <div id="home" class="page active">
        <div class="content-container">
            <p>Du kannst eine neue Gruppe gründen oder einer bestehenden Gruppe eine Beitrittsanfrage senden</p>
            <div class="button-container">
                <button onclick="window.location.href='groupmgr.php'">Neue Gruppe erstellen</button>
                <button onclick="window.location.href='join.php'">Bestehender Gruppe beitreten</button>
            </div>
        </div>
    </div>
    
    <footer>
        <a href="impressum.php">Impressum</a>
    </footer>
  </div>

  <script>
      function toggleProfileMenu() {
          const menu = document.getElementById('profileMenu');
          menu.classList.toggle('active');
      }
  </script>
</body>
</html>
