<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDP - Gruppen Management</title>
    <link rel="icon" href="images/u-fr-icon-76x76.png">
    <link rel="stylesheet" href="layout/layout.css">
    <style>
        .title-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .title-container h1 {
            margin: 0;
            flex-grow: 1;
        }

        .title-container .edit-buttons {
            display: flex;
            gap: 10px;
        }

        .title-container .edit-buttons button {
            background: none;
            border: none;
            cursor: pointer;
        }

        .title-container .edit-buttons img {
            width: 24px;
            height: 24px;
        }

        .list-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .list-item button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
        }

        .list-item button img {
            width: 16px;
            height: 16px;
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
    <button id="homeButton" onclick="window.location.href='dashboard.php'">
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
      <div class="title-container">
          <h1 id="groupName">Gruppe 1</h1>
          <div class="edit-buttons" id="editButtons">
              <button class="edit-button" onclick="editGroupName()">
                  <img src="images/edit-icon.png" alt="Edit">
              </button>
          </div>
      </div>
      <p id="membersStatus">2 von 4 Plätzen belegt</p>
      <h2>Mitglieder</h2>
      <div id="requestsList">
          <!-- Beispielhafte Anfragen -->
          <div class="list-item">
              <span>Max Musterfrau</span>
          </div>
          <div class="list-item">
              <span>Erika Musterfrau</span>
          </div>
      </div>
      <h2>Anfragen</h2>
      <div id="requestsList">
          <!-- Beispielhafte Anfragen -->
          <div class="list-item">
              <span>Max Mustermann</span>
              <div>
                  <button onclick="acceptRequest('Max Mustermann')"><img src="images/check-icon.png" alt="Accept"></button>
                  <button onclick="rejectRequest('Max Mustermann')"><img src="images/x-icon.png" alt="Reject"></button>
              </div>
          </div>
          <div class="list-item">
              <span>Erika Mustermann</span>
              <div>
                  <button onclick="acceptRequest('Erika Mustermann')"><img src="images/check-icon.png" alt="Accept"></button>
                  <button onclick="rejectRequest('Erika Mustermann')"><img src="images/x-icon.png" alt="Reject"></button>
              </div>
          </div>
      </div>
      <div class="button-container">
          <button onclick="window.location.href='invitation.php'">Kommilitonen in Gruppe einladen</button>
          <button onclick="window.location.href='change.php'">Gruppe wechseln</button>
          <button>Bild ändern</button>
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

      function editGroupName() {
          const groupNameElement = document.getElementById('groupName');
          const currentName = groupNameElement.innerText;
          groupNameElement.innerHTML = `<input type="text" id="groupNameInput" value="${currentName}" onblur="saveGroupName()">`;
          document.getElementById('groupNameInput').focus();

          const editButtons = document.getElementById('editButtons');
          editButtons.innerHTML = `
              <button class="save-button" onclick="saveGroupName()">
                  <img src="images/check-icon.png" alt="Save">
              </button>
              <button class="cancel-button" onclick="cancelEditGroupName()">
                  <img src="images/x-icon.png" alt="Cancel">
              </button>
          `;
      }

      function saveGroupName() {
          const input = document.getElementById('groupNameInput');
          const newName = input.value;
          const groupNameElement = document.getElementById('groupName');
          groupNameElement.innerText = newName;

          const editButtons = document.getElementById('editButtons');
          editButtons.innerHTML = `
              <button class="edit-button" onclick="editGroupName()">
                  <img src="images/edit-icon.png" alt="Edit">
              </button>
          `;
      }

      function cancelEditGroupName() {
          const groupNameElement = document.getElementById('groupName');
          const currentName = groupNameElement.querySelector('input').value;
          groupNameElement.innerText = currentName;

          const editButtons = document.getElementById('editButtons');
          editButtons.innerHTML = `
              <button class="edit-button" onclick="editGroupName()">
                  <img src="images/edit-icon.png" alt="Edit">
              </button>
          `;
      }

      function acceptRequest(name) {
          alert(`Anfrage von ${name} angenommen.`);
          // Hier können Sie den Code hinzufügen, um die Anfrage zu akzeptieren
      }

      function rejectRequest(name) {
          alert(`Anfrage von ${name} abgelehnt.`);
          // Hier können Sie den Code hinzufügen, um die Anfrage abzulehnen
      }
  </script>
</body>
</html>
