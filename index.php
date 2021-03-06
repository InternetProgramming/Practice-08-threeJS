<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>The Aviator: Claudia Andrea Rojas Márquez</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/game.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/87/three.js"></script>
  <script type="text/javascript" src="js/TweenMax.min.js"></script>
  <script type="text/javascript" src="js/index.js"/></script>
</head>
<body>
  <div class="game-holder" id="gameHolder">
    <div class="header">
      <h1><span>the</span>Aviator</h1>
      <h2>fly it to the end</h2>
      <h2>Claudia Andrea Rojas Márquez</h2>
      <div class="score" id="score">
        <div class="score__content" id="level">
          <div class="score__label">level</div>
          <div class="score__value score__value--level" id="levelValue">1</div>
          <svg class="level-circle" id="levelCircle" viewbox="0 0 200 200">
            <circle id="levelCircleBgr" r="80" cx="100" cy="100" fill="none" stroke="#fffaf4" stroke-width="24px" />
            <circle id="levelCircleStroke" r="80" cx="100" cy="100" fill="none" #f25346 stroke="#68c3c0" stroke-width="14px" stroke-dasharray="502" />
          </svg>
        </div>
        <div class="score__content" id="dist">
          <div class="score__label">distance</div>
          <div class="score__value score__value--dist" id="distValue">000</div>
        </div>
        <div class="score__content" id="energy">
          <div class="score__label">energy</div>
          <div class="score__value score__value--energy" id="energyValue">
            <div class="energy-bar" id="energyBar"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="world" id="world"></div>
    <div class="message message--replay" id="replayMessage">Click to Replay</div>
    <div class="message message--instructions" id="instructions">Grab the green pills<span>avoid the trash</span></div>
</body>
</html>
