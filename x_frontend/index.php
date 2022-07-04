<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body>
  <form name=form_bacteria method="GET">
    <h3>Форма</h3>
    <input id="tact" placeholder="такт" type="number" name="tact" /><br>
    <input id="red" placeholder="red" type="text" name="red" disabled /><br>
    <input id="green" placeholder="green" type="text" name="green" disabled /><br>
    <input id="js_tab" class="btn btn-success" type="button" value="Отправить" /><br>
  </form>
  <script type="module" src="js/index.js"></script>
</body>

</html>