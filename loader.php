<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
      body {
  margin: 0;
  padding: 0;
  height: 100vh;
}

.loader {
  background: #111;
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader div {
  background: #fff;
  width: 16px;
  height: 32px;
  margin-left: 10px;
  animation: loader 1.2s infinite;
}

@keyframes loader {
  50% {
    height: 64px;
  }
}
.loader div:nth-child(1) {
  background: #FF9F1A;
  animation-delay: -0.4s;
}

.loader div:nth-child(2) {
  background: #FED330;
  animation-delay: -0.2s;
}

.loader div:nth-child(3) {
  background: #FFFA65;
  animation-delay: 0s;
}/*# sourceMappingURL=loader.css.map */
    </style>
</head>
<body>
<?php
function loader(){
    echo'
    <div class="card-body" id="loader">
    <div class="loader">
      <div></div>
      <div></div>
      <div></div>
    </div>

    </div>
    ';
}
loader();
?>
</body>
</html>