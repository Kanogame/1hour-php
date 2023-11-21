<!DOCTYPE html>
<html>
<head>
  <title>Магического шара 🎱</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
  <h1>Спроси у магического шара 🎱</h1>
  <form action="8ball.php" method="post">
    <label for="question">Твой вопрос:</label><br>
    <input class="question" type="text" id="question" name="question">
    <input class="button" type="submit" value="Спросить">
  </form>
  <div id="response"></div>
</body>
</html>