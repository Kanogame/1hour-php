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
  <?php
    if (isset($_POST['question'])) {
      $question = $_POST['question'];
      $responses = array(
        "Бесспорно",
        "Предрешено",
        "Никаких сомнений",
        "Определённо да",
        "Можешь быть уверен в этом",
        "Мне кажется — «да»",
        "Вероятнее всего",
        "Хорошие перспективы",
        "Знаки говорят — «да»",
        "Да",
        "Пока не ясно, попробуй снова",
        "Спроси позже",
        "Лучше не рассказывать",
        "Сейчас нельзя предсказать",
        "Сконцентрируйся и спроси опять",
        "Даже не думай",
        "Мой ответ — «нет»",
        "По моим данным — «нет»",
        "Перспективы не очень хорошие", 
        "Весьма сомнительно"
      );
      $response = $responses[array_rand($responses)];
      echo "<p>Шар говорит: </p>
      <div class=ball><div class=ball-center><div>$response</div></div></div>";
    }
  ?>
  <form action="index.php" method="post">
    <label for="question">Твой вопрос:</label><br>
    <input class="question" type="text" id="question" name="question">
    <input class="button" type="submit" value="Спросить">
  </form>
</body>
</html>