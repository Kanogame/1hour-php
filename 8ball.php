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