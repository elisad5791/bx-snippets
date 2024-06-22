# Сниппеты Битрикс

### Кастомный шаблон для страницы Сервисы - Списки - Все списки

[result_modifier.php](https://github.com/elisad5791/bx-snippets/blob/main/local/templates/.default/components/bitrix/lists.lists/.default/result_modifier.php)
[template.php](https://github.com/elisad5791/bx-snippets/blob/main/local/templates/.default/components/bitrix/lists.lists/.default/template.php)

PropertyTable, IblockTable, ORM, run-time поле, грид

Получены названия, символьные коды и польз. свойства всех списков и выведены с помощью грида

### Кастомизация шаблона для страницы Сервисы - Списки - Список

[result_modifier.php](https://github.com/elisad5791/bx-snippets/blob/main/local/templates/.default/components/bitrix/lists.list/.default/result_modifier.php)
[template.php](https://github.com/elisad5791/bx-snippets/blob/main/local/templates/.default/components/bitrix/lists.list/.default/template.php)
[changes.php](https://github.com/elisad5791/bx-snippets/blob/main/local/templates/.default/components/bitrix/lists.list/.default/include/changes.php)

Названия элементов выведены курсивом. Данные модифицированы через result_modifier.php (можно также подключить свои стили и скрипты) с дальнейшим подключением системного шаблона, который обновляется.

### Кастомный шаблон для экспорта Списка в формате Excel

[template.php](https://github.com/elisad5791/bx-snippets/blob/main/local/templates/.default/components/bitrix/lists.export.excel/.default/template.php)
[composer.json](https://github.com/elisad5791/bx-snippets/blob/main/local/composer.json)

Использован пакет phpoffice/phpspreadsheet, который поставлен через composer. 

### Раздел Медицина

[index.php](https://github.com/elisad5791/bx-snippets/blob/main/medicine/index.php)
[doctor.php](https://github.com/elisad5791/bx-snippets/blob/main/medicine/doctor.php)
[procedure.php](https://github.com/elisad5791/bx-snippets/blob/main/medicine/procedure.php)
[add-doctor.php](https://github.com/elisad5791/bx-snippets/blob/main/medicine/add-doctor.php)
[add-procedure.php](https://github.com/elisad5791/bx-snippets/blob/main/medicine/add-procedure.php)
[Events.php](https://github.com/elisad5791/bx-snippets/blob/main/local/classes/Events.php)
[events.php](https://github.com/elisad5791/bx-snippets/blob/main/local/php_interface/include/events.php)

ORM для инфоблоков (списков), получение и добавление данных, разные типы полей списка (файл, привязка к элементам другого списка), IblockTable, PropertyTable, работа с запросом, кнопки из библиотеки интерфейсов битрикса, создание нового пункта в главном меню через js

Врачи и  процедуры, привязанные к врачам. Добавление врачей, процедур. Сделано на списках.