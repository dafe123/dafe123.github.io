<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDP - Gruppe beitreten</title>
    <link rel="stylesheet" href="layout/layout.css">
    <style>
        .content-container {
            text-align: center;
            margin-top: 20px;
        }

        .team-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .team-table th, .team-table td {
            border: 1px solid #ddd;
            padding: 10px;
            cursor: pointer;
        }

        .team-table th {
            background-color: #344a9a;
            color: white;
        }

        .team-table tr:hover {
            background-color: #f1f1f1;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        .modal-content button {
            background-color: #344a9a;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            margin: 10px 5px;
        }

        .modal-content button:hover {
            background-color: #00997d;
        }

        .modal-content .cancel-button {
            background-color: #b4b4b4;
        }

        .modal-content .cancel-button:hover {
            background-color: #999;
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
    <button id="homeButton" onclick="window.location.href='change.php'">
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
            <p>Klicke auf das Team, dem du beitreten möchtest</p>
            <table class="team-table">
                <thead>
                    <tr>
                        <th>Teamname</th>
                        <th>Mitglieder</th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="showModal('Team A')">
                        <td>Team A</td>
                        <td>3 von 4</td>
                    </tr>
                    <tr onclick="showModal('Team B')">
                        <td>Team B</td>
                        <td>2 von 4</td>
                    </tr>
                    <tr onclick="showModal('Team C')">
                        <td>Team C</td>
                        <td>1 von 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <p id="modalText"></p>
            <button class="cancel-button" onclick="closeModal()">Abbrechen</button>
            <button onclick="changeGroup()">Wechseln</button>
        </div>
    </div>

    <footer>
        <a href="impressum.php">Impressum</a>
    </footer>
  </div>

  <script>
      let selectedTeam = '';

      function toggleProfileMenu() {
          const menu = document.getElementById('profileMenu');
          menu.classList.toggle('active');
      }

      function showModal(team) {
          selectedTeam = team;
          const modal = document.getElementById('confirmationModal');
          const modalText = document.getElementById('modalText');
          modalText.innerText = `Wollen Sie wirklich aus Gruppe 1 austreten und ${team} eine Beitrittsanfrage schicken?`;
          modal.style.display = 'block';
      }

      function closeModal() {
          const modal = document.getElementById('confirmationModal');
          modal.style.display = 'none';
      }

      function changeGroup() {
          // Logik zum Wechseln der Gruppe
          window.location.href = 'groupmgr.php-FallsAufnahmeAusstehend';
      }

      window.onclick = function(event) {
          const modal = document.getElementById('confirmationModal');
          if (event.target == modal) {
              modal.style.display = 'none';
          }
      }
  </script>
</body>
</html>
