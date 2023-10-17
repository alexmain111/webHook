<?php
// Получение входящих данных в формате JSON
$input = file_get_contents("php://input");
$data = json_decode($input);

if ($data) {
    // Обработка данных из вебхука
    // Ваша логика обработки данных здесь
    // Например, можно записать данные в файл или базу данных, отправить уведомление и т. д.

    // Возвращение успешного HTTP-ответа
    http_response_code(200);
} else {
    // В случае ошибки или неправильных данных можно вернуть ошибку
    http_response_code(400);
}
?>
