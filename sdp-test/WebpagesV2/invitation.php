<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDP - Kommilitonen einladen</title>
    <link rel="stylesheet" href="layout/layout.css">
    <style>
        .content-container {
            text-align: center;
            margin-top: 20px;
        }

        .qr-code {
            margin: 20px 0;
        }

        .invitation-link {
            margin: 20px 0;
            font-weight: bold;
            color: #344a9a;
            word-break: break-word;
        }

        .copy-button {
            background-color: #344a9a;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .copy-button:hover {
            background-color: #00997d;
        }
    </style>
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
        <img src="images/pictogram-back.png" alt="back">
        Zurück
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
            <p>Um Kommilitonen hinzuzufügen, kannst du diesen entweder diesen QR-Code zeigen</p>
            <div class="qr-code">
                <img src="images/qr-code.png" alt="QR Code" width="150" height="150">
            </div>
            <p>oder diesen Link vorzeigen</p>
            <div class="invitation-link" id="invitationLink">sdp.uni-freiburg.de/useInvite.html?c=3n34m25</div>
            <button class="copy-button" onclick="copyToClipboard()">Link in Zwischenablage kopieren</button>
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

      function copyToClipboard() {
          const link = document.getElementById('invitationLink').innerText;
          navigator.clipboard.writeText(link).then(function() {
              alert('Link in Zwischenablage kopiert: ' + link);
          }, function(err) {
              console.error('Fehler beim Kopieren: ', err);
          });
      }
  </script>
</body>
</html>
