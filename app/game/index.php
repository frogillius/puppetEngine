<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<head>
  <meta charset="UTF-8">
  <title>Game Test 1</title>
  <link rel="stylesheet" href="game/themes/cobolt.css">
  <link rel="icon" href="resources/favicon.ico" type="image/x-icon">

</head>
<body>
  <div id="gameWindow">
    <!-- Section 1: Encounter Area -->
    <div id="encounter" class="section">
      <div class="portrait" id="encounterPortrait">
        <iframe id="encounterIframe" src="game/doll.html?animation=fallbackAnim.json&bonesUrl=fallback.json&scale=0.5" width="100%" height="300px" scrolling="no" style="border-radius: 10px; border: none;"></iframe>
      </div>
      <div class="stats" id="encounterStats"></div>
    </div>

    <!-- Section 2: Stage Area (includes stage and dialog) -->
    <div id="stage" class="section">
      <div id="stageArea">
        <iframe id="stageIframe" src="game/doll.html?bonesUrl=assets/rooms/test/test-room.json" width="100%" height="100%" scrolling="no" style="border-radius: 10px; border: none;"></iframe>
      </div>
      <div id="dialog"></div>
    </div>

    <!-- Section 3: Player Area -->
    <div id="player" class="section">
      <div class="portrait" id="playerPortrait">
        <iframe id="playerIframe" src="game/doll.html?bonesUrl=fallback.json&scale=0.5" width="100%" height="300px" scrolling="no" style="border-radius: 10px; border: none;"></iframe>
      </div>
      <div class="stats" id="playerStats"></div>
    </div>
  </div>

  <!-- Include Split.js from a CDN -->
  <script src="https://unpkg.com/split.js/dist/split.min.js"></script>
  <script>
    // JSON configuration for modding (could be replaced with an external JSON fetch)
    const jsonData = {
      "encounter": {
        "stats": {
          "health": 100,
          "attack": 20,
          "defense": 15,
          "icon": "https://via.placeholder.com/30?text=Icon"
        }
      },
      "player": {
        "stats": {
          "health": 120,
          "attack": 25,
          "defense": 20,
          "icon": "https://via.placeholder.com/30?text=Icon"
        }
      },
      "dialog": {
        "text": "Welcome to the game! Choose your action:",
        "buttons": [
          {"text": "Attack", "action": "attack()"},
          {"text": "Defend", "action": "defend()"}
        ]
      }
    };


    // Build the encounter area based on JSON data
    function initEncounter() {

      const encounterStatsDiv = document.getElementById('encounterStats');
      const stats = jsonData.encounter.stats;
      for (let key in stats) {
        const statDiv = document.createElement('div');
        if (key === "icon") {
          const iconImg = document.createElement('img');
          iconImg.src = stats[key];
          iconImg.alt = "Icon";
          statDiv.appendChild(iconImg);
        } else {
          statDiv.textContent = key + ": " + stats[key];
        }
        encounterStatsDiv.appendChild(statDiv);
      }
    }

    // Build the player area based on JSON data
    function initPlayer() {

      const playerStatsDiv = document.getElementById('playerStats');
      const stats = jsonData.player.stats;
      for (let key in stats) {
        const statDiv = document.createElement('div');
        if (key === "icon") {
          const iconImg = document.createElement('img');
          iconImg.src = stats[key];
          iconImg.alt = "Icon";
          statDiv.appendChild(iconImg);
        } else {
          statDiv.textContent = key + ": " + stats[key];
        }
        playerStatsDiv.appendChild(statDiv);
      }
    }
    // Build the dialog area based on JSON data
    function initDialog() {
      const dialogDiv = document.getElementById('dialog');
      const p = document.createElement('p');
      p.textContent = jsonData.dialog.text;
      dialogDiv.appendChild(p);

      jsonData.dialog.buttons.forEach(buttonData => {
        const btn = document.createElement('button');
        btn.textContent = buttonData.text;
        btn.addEventListener('click', function() {
          eval(buttonData.action);
        });
        dialogDiv.appendChild(btn);
      });
    }

    // Example action functions
    function attack() {
      alert("Attack action triggered!");
    }
    function defend() {
      alert("Defend action triggered!");
    }

    window.onload = function() {
      initEncounter();
      initPlayer();
      initDialog();

// Fixed sidebar width
const sidebarWidth = 325;
// Fixed text area height
const textAreaHeight = 250;

// Initialize horizontal Split.js for side sections
const splitInstance = Split(['#encounter', '#stage', '#player'], {
  gutterSize: 5,
  minSize: [sidebarWidth, 0, sidebarWidth], // Lock sidebars at 325px
  sizes: [
    (sidebarWidth / window.innerWidth) * 100, 
    ((window.innerWidth - 2 * sidebarWidth) / window.innerWidth) * 100, 
    (sidebarWidth / window.innerWidth) * 100
  ],
});

// Function to lock side sections at exactly 325px
function enforceFixedSidebarWidths() {
  const totalWidth = window.innerWidth;
  const stageWidth = Math.max(totalWidth - (2 * sidebarWidth), 0); // Ensure stage always gets remaining space

  // Apply new sizes, keeping sidebars locked
  splitInstance.setSizes([
    (sidebarWidth / totalWidth) * 100, 
    (stageWidth / totalWidth) * 100, 
    (sidebarWidth / totalWidth) * 100
  ]);
}

// Set up vertical Split.js for text area and stage
const verticalSplit = Split(['#stageArea', '#dialog'], {
  gutterSize: 5,
  direction: 'vertical',
  minSize: [0, textAreaHeight], // Ensure dialog area stays exactly 300px
  sizes: [
    ((window.innerHeight - textAreaHeight) / window.innerHeight) * 100, // Remaining height for stage
    (textAreaHeight / window.innerHeight) * 100
  ]
});

// Function to lock text area height at exactly 300px
function enforceFixedTextAreaHeight() {
  const totalHeight = window.innerHeight;
  const stageHeight = Math.max(totalHeight - textAreaHeight, 0); // Ensure stage gets remaining height

  // Apply new sizes, keeping text area locked
  verticalSplit.setSizes([
    (stageHeight / totalHeight) * 100, 
    (textAreaHeight / totalHeight) * 100
  ]);
}

// Listen for window resizing
window.addEventListener('resize', () => {
  enforceFixedSidebarWidths();
  enforceFixedTextAreaHeight();
});


      const iframe = document.getElementById('stageIframe');
      setInterval(keepIframeFocused, 100);

    // Function to keep the iframe focused
    function keepIframeFocused() {
      if (document.activeElement !== iframe) {
        iframe.focus();
      }
    }
    }
  </script>
</body>
</html>
