<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>eEasyNotifyMe</title>
    <style type="text/css">
      html, body {
        height: 100%;
      }
      body {
        background-color: #fff;
        background: radial-gradient(circle at center, #fff 0%, #f8f8f8 75%, #ebebeb 100%);
        color: #222;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 1rem;
        line-height: 1.5;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      main {
        padding: 1rem;
        text-align: center;
      }
      h1 {
        font-size: 2.5rem;
        line-height: 1.1;
        margin: 0;
      }
      @media screen and (max-width: 480px) {
        h1 {
          font-size: 1.5rem;
        }
      }
      h1::after {
        content: "";
        background-color: #ffe800;
        background: repeating-linear-gradient(45deg, #ffe800, #ffe800 0.5rem, #222 0.5rem, #222 1.0rem);
        display: block;
        height: 0.5rem;
        margin-top: 1rem;
      }
      p {
        margin: 1rem 0 0 0;
      }
      video {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        z-index:-100;
      }
    </style>
  </head>
  <body>
  <video autoplay muted loop>
  <source src="background.mp4" type="video/mp4">
  </video>
    <main>
      <h1>EasyNotifyMe</h1>
      <p>Our website is under construction.</p>
    </main>
  </body>
</html>
';
?>
