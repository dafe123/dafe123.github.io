<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Design Projekt</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/u-fr-icon-76x76.png">
    <link rel="stylesheet" href="layout/layout.css">
</head>
<body>

<!-- Hintergrundbilder -->
<div class="background">
    <div class="parallax parallax-city"></div>
    <div class="parallax parallax-mountains"></div>
</div>

<!-- Navigation -->
<nav class="nav-buttons">
    <button id="homeButton" onclick="showPage('home', this)">
        <img src="images/pictogram-home.png" alt="Home">
        Home
    </button>
    <button id="timelineButton" onclick="showPage('timeline', this)">
        <img src="images/pictogram-timeline.png" alt="Timeline">
        Timeline
    </button>
    <button id="materialienButton" onclick="showPage('materialien', this)">
        <img src="images/pictogram-materialien.png" alt="Materialien">
        Materialien
    </button>
    <button id="wettbewerbButton" onclick="showPage('wettbewerb', this)">
        <img src="images/pictogram-wettbewerb.png" alt="Wettbewerb">
        Wettbewerb
    </button>
</nav>

<!-- Inhalt -->
<div class="content" id="content">
    <!-- Header -->
    <header>
        <img class="logo" src="https://uni-freiburg.de/en/wp-content/themes/unifreiburg-theme/img/ufr-logo-white.svg" alt="University of Freiburg">
        <div class="profile-button" onclick="toggleProfileMenu()">
            <img src="images/pictogram-profil.png" alt="Profil">
        </div>
        <div class="profile-menu" id="profileMenu">
            <a href="#">Logout</a>
            <a href="groupmgr.php">Gruppe</a>
        </div>
    </header>
    <div id="home" class="page active">
        <h1>Home</h1>
        <p>Willkommen auf der Startseite des System Design Projekts.</p>
        <div class="msg-box">
            Willkommen zu der Veranstaltung System Design Projekt. Am 10.10. findet in den Hörsälen bla und bla die Einstiegsvorlesung statt.
        </div>
    </div>

    <div id="timeline" class="page">
        <h1>Timeline</h1>
        <p>Für weitere Infos auf die Einträge klicken</p>
        <div class="timeline">
            <div class="timeline-item" onclick="showDetails('17.10. 18:00', 'Einführungsveranstaltung', 'Details zur Einführungsveranstaltung')">
                <div class="time">17.10. 18:00</div>
                <div class="title">Einführungsveranstaltung</div>
            </div>
            <div class="timeline-item" onclick="showDetails('23.10. 18:10', 'Kastenausgabe', 'Details zur Kastenausgabe')">
                <div class="time">23.10. 18:10</div>
                <div class="title">Kastenausgabe</div>
            </div>
            <div class="timeline-item" onclick="showDetails('18.12. 23:59', 'Codeabgabe Meilenstein', 'Details zur Codeabgabe Meilenstein')">
                <div class="time">18.12. 23:59</div>
                <div class="title">Codeabgabe Meilenstein</div>
            </div>
            <div class="timeline-item" onclick="showDetails('20.12. 17:35', 'Meilenstein', 'Details zum Meilenstein', true)">
                <div class="time">20.12. 17:35 <span class="change-date">Termin ändern</span></div>
                <div class="title">Meilenstein</div>
            </div>
            <div class="timeline-item" onclick="showDetails('19.1. 23:59', 'Abgabe Zwischenbericht', 'Details zur Abgabe des Zwischenberichts')">
                <div class="time">19.1. 23:59</div>
                <div class="title">Abgabe Zwischenbericht</div>
            </div>
            <div class="timeline-item" onclick="showDetails('12.2. 23:59', 'Abgabe Designpreis', 'Details zur Abgabe des Designpreises')">
                <div class="time">12.2. 23:59</div>
                <div class="title">Abgabe Designpreis</div>
            </div>
            <div class="timeline-item" onclick="showDetails('14.2. geschätzt 12:35', 'Wettbewerb', 'Details zum Wettbewerb')">
                <div class="time">14.2. geschätzt 12:35</div>
                <div class="title">Wettbewerb</div>
            </div>
            <div class="timeline-item" onclick="showDetails('17.2. 23:59', 'Abgabe Code', 'Details zur Abgabe des Codes')">
                <div class="time">17.2. 23:59</div>
                <div class="title">Abgabe Code</div>
            </div>
        </div>
    </div>

    <div id="materialien" class="page">
        <h1>Materialien</h1>
        <p>Hier sind einige Materialien für das Projekt.</p>
    </div>

    <div id="wettbewerb" class="page">
        <h1>Wettbewerb</h1>
        <p>Informationen zum Wettbewerb.</p>
    </div>

    <footer>
        <a href="impressum.php">Impressum</a>
    </footer>
</div>

<script>
    let startX = null;

    function toggleProfileMenu() {
        const menu = document.getElementById('profileMenu');
        menu.classList.toggle('active');
    }

    function showPage(pageId, button) {
        const pages = document.querySelectorAll('.page');
        pages.forEach(page => page.classList.remove('active'));
        document.getElementById(pageId).classList.add('active');

        const navButtons = document.querySelectorAll('.nav-buttons button');
        navButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        
        // Update Parallax-Effekte beim Seitenwechsel
        updateParallax(pageId);
    }

    function updateParallax(pageId) {
        const parallaxMountains = document.querySelector('.parallax-mountains');
        const parallaxCity = document.querySelector('.parallax-city');

        // Setze die Hintergrund-Positionen basierend auf der aktuellen Seite
        const pageIndex = Array.from(document.querySelectorAll('.page')).indexOf(document.getElementById(pageId));
        const totalPages = document.querySelectorAll('.page').length;

        // Berechne die Offset-Position für die Parallax-Hintergründe
        const offsetMountains = (pageIndex / totalPages) * 50; // Weniger Offset für langsame Bewegung
        const offsetCity = (pageIndex / totalPages) * 200;    // Mehr Offset für schnellere Bewegung

        // Update der Hintergrundpositionen
        parallaxMountains.style.backgroundPositionX = `-${offsetMountains}px`;
        parallaxCity.style.backgroundPositionX = `-${offsetCity}px`;
    }

    function showDetails(time, title, details, active = false) {
        let detailString = "Zeit: " + time + "\nTitel: " + title + "\n" + details;
        if (active) {
            detailString += "\nStatus: Aktiv";
        }
        alert(detailString);
    }

    function handleTouchStart(event) {
        startX = event.touches[0].clientX;
    }

    function handleTouchMove(event) {
        if (!startX) return;

        const xDiff = startX - event.touches[0].clientX;
        const minSwipeDistance = 100; // Erhöhtes Mindest-Swipe-Distanz

        if (Math.abs(xDiff) > minSwipeDistance) {
            const activeButton = document.querySelector('.nav-buttons button.active');
            let newActiveButton;

            if (xDiff > 0) {
                newActiveButton = activeButton.nextElementSibling;
            } else {
                newActiveButton = activeButton.previousElementSibling;
            }

            if (newActiveButton) {
                newActiveButton.click();
                startX = null; // Reset startX
            }
        }
    }

    document.addEventListener('touchstart', handleTouchStart, false);
    document.addEventListener('touchmove', handleTouchMove, false);

    // Initialisierung
    document.getElementById('homeButton').classList.add('active');
</script>

</body>
</html>
