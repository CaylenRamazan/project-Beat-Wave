<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beat Wave</title>
    <link rel="stylesheet" href="beatwavecss/p2beatwave.css?v=<?php echo time(); ?>">
</head>
<body>
<h1>Ervaring</h1>
   <?php include 'menubeatwaveincl.html' ?>
   <div class="ervaringDiv">
    <h2>Kies je favoriete optredens:</h2>
    <div id="schedule">
    </div>
    <button id="toonOptredens">Toon Optredens</button>
    <h2>Je festivalervaring:</h2>
    <div id="selectedEvents">
    </div>
</div>
<script>
    const optredens = [
        { id: 1, naam: 'J Hus - Main Stage', tijd: '11:00 - 11:45' },
        { id: 2, naam: 'Frans Duijts - 2de Stage', tijd: '11:30 - 12:00' },
        { id: 3, naam: 'Knucks - Main Stage', tijd: '12:15 - 13:00' },
        { id: 4, naam: 'YG Marley - 2de Stage', tijd: '12:45 - 13:30' },
        { id: 5, naam: 'Ronnie Flez - Main Stage', tijd: '13:45 - 14:45' },
        { id: 6, naam: 'Boef - 2de Stage', tijd: '14:30 - 15:30' },
        { id: 7, naam: 'Central Cee - Main Stage', tijd: '15:45 - 16:30' },
        { id: 8, naam: 'ADF Samski - 2de Stage', tijd: '15:45 - 16:30' },
        { id: 9, naam: 'Polo G - Main Stage', tijd: '17:15 - 18:00' },
        { id: 10, naam: 'Joey AK - 2de Stage', tijd: '17:45 - 18:15' },
        { id: 11, naam: 'lil Tjay - Main Stage', tijd: '20:00 - 20:45' },
        { id: 12, naam: 'Yssi SB - 2de Stage', tijd: '21:00 - 21:30' },
        { id: 13, naam: 'Dave - Main Stage', tijd: '21:45 - 22:30' },
        { id: 14, naam: 'Usher - Main stage', tijd: '23:00 - 23:45' }
    ];

    
    const toonOptredensBtn = document.getElementById('toonOptredens');

 
    toonOptredensBtn.addEventListener('click', toonOptredens);

    
    function toonOptredens() {
        const scheduleContainer = document.getElementById('schedule');
        scheduleContainer.innerHTML = '';
        optredens.forEach(optreden => {
            const optredenElement = document.createElement('div');
            optredenElement.classList.add('schedule-item');
            optredenElement.innerHTML = `<p class="festivalervaring-naam">${optreden.naam}</p>  <p class="festivalervaring-tijd">${optreden.tijd}</p>
                                          <button class="optreden-knop" onclick="selectOptreden(${optreden.id})">Selecteer</button>`;
            scheduleContainer.appendChild(optredenElement);
        });
    }

   
    function selectOptreden(optredenId) {
        const selectedEventsContainer = document.getElementById('selectedEvents');
        const selectedOptreden = optredens.find(optreden => optreden.id === optredenId);
        const optredenElement = document.createElement('div');
        optredenElement.innerHTML = `<strong>${selectedOptreden.naam}</strong> - ${selectedOptreden.tijd}`;
        selectedEventsContainer.appendChild(optredenElement);
    }
</script>
   <?php include 'beatwavefooter.html'?>
</body>
</html>