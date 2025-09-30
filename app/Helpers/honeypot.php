<?php
session_start();

// Массив привлекательных названий (можно вынести в отдельный конфигурационный файл)
$attractiveFieldNames = [
  'email',
  'email_address',
  'contact_email',
  'user_email',
  'customer_email',
  'phone',
  'telephone',
  'contact_phone',
  'user_phone',
  'mobile_phone',
  'fax',
  'contact_fax',
  'website',
  'url',
  'homepage',
  'site_url',
  'profile_url',
  'name',
  'fullname',
  'user_name',
  'first_name',
  'last_name',
  'nickname',
  'username',
  'login',
  'address',
  'street_address',
  'address_line_1',
  'address_line_2',
  'city',
  'state',
  'province',
  'zip_code',
  'postal_code',
  'country',
  'comment',
  'message',
  'your_message',
  'enquiry',
  'inquiry',
  'text',
  'details',
  'subject',
  'topic',
  'feedback',
  'review',
  'question',
  'notes',
  'additional_info',
  'author',
  'company',
  'job_title',
  'position',
  'user_id'
];

// Определяем, сколько полей-ловушек мы хотим создать
$numberOfHoneypots = 3;

// Выбираем случайные КЛЮЧИ из нашего массива
// Важно: проверяем, что названий в массиве достаточно
if (count($attractiveFieldNames) >= $numberOfHoneypots) {
  $randomKeys = array_rand($attractiveFieldNames, $numberOfHoneypots);
} else {
  // Если по какой-то причине названий меньше, чем нужно, используем все, что есть
  $randomKeys = array_keys($attractiveFieldNames);
}

// Создаем массив для сессии, где ключи - это стабильные имена,
// которые мы будем использовать в HTML и при проверке,
// а значения - случайно выбранные привлекательные имена.
$honeypots = [
  // Стабильные внутренние имена => Случайные внешние имена
  'hp_main_contact' => $attractiveFieldNames[$randomKeys[0]],
  'hp_secondary_info' => $attractiveFieldNames[$randomKeys[1]],
  'hp_message_field' => $attractiveFieldNames[$randomKeys[2]]
  // При необходимости можно добавить еще
];

// Сохраняем сгенерированные имена в сессию для последующей проверки
$_SESSION['honeypots'] = $honeypots;

/**
 * Касательно вашего вопроса о сбросе:
 * Данный скрипт, выполняемый в начале каждой загрузки страницы с формой,
 * автоматически ПЕРЕЗАПИСЫВАЕТ значения в $_SESSION['honeypots'].
 * Никаких дополнительных действий для "сброса" перед следующей сессией не требуется.
 * Сессия сама по себе будет сброшена сервером по истечении ее времени жизни.
 */
