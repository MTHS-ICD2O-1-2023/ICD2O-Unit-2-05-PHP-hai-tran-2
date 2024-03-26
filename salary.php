<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="salary program, in JS" />
  <meta name="keywords" content="mths, ICD2O" />
  <meta name="author" content="Hai Tran" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-green.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Salary webpage, in JS</title>
</head>
<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Salary program, in JavaScript</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="image">
        <img src="./images/income_tax.jpg" alt="income tax image">
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $TAX_RATE = 0.18;
          // input
          $numberOfHour = $_POST["number-of-hour"];
          $payRate = $_POST["pay-rate"];

          // process
          $payBeforeTax = $numberOfHour * $payRate;
          $tax = $payBeforeTax * $TAX_RATE;
          $payAfterTax = $payBeforeTax - $tax;

          // output
          echo "The salary is: $" . $payAfterTax;
          echo "<br />";
          echo "The goverment will take: $" . $tax;
          ?>
        </div>
      </div>
      <br />
    </main>
  </div>
</body>
</html>