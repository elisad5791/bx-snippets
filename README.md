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
[migrations](https://github.com/elisad5791/bx-snippets/tree/main/local/php_interface/migrations)

ORM для инфоблоков (списков), получение и добавление данных, разные типы полей списка (файл, привязка к элементам другого списка), IblockTable, PropertyTable, работа с запросом, кнопки из библиотеки интерфейсов битрикса, создание нового пункта в главном меню через js, миграции

Врачи и  процедуры, привязанные к врачам. Добавление врачей, процедур. Сделано на списках.

### Песочница CRM

Сниппеты кода для работы с сущностями CRM

#### Справочники

[Все справочники](https://github.com/elisad5791/bx-snippets/blob/main/crm_sandbox/all-refs.php)

[Все значения справочника (полная форма)](https://github.com/elisad5791/bx-snippets/blob/main/crm_sandbox/ref-all-values.php)

[Все значения справочника (краткая форма)](https://github.com/elisad5791/bx-snippets/blob/main/crm_sandbox/ref-all-values-short.php)

[Первое значение справочника](https://github.com/elisad5791/bx-snippets/blob/main/crm_sandbox/ref-first-value.php)

### Работа с событиями

#### Абстрактная фабрика для обработчиков события создания сделки

[events.php](https://github.com/elisad5791/bx-snippets/blob/main/local/php_interface/include/events.php)
[AbstractEventHandler.php](https://github.com/elisad5791/bx-snippets/blob/main/local/classes/DealAddHandlers/AbstractEventHandler.php)
[EventHandlerFactory.php](https://github.com/elisad5791/bx-snippets/blob/main/local/classes/DealAddHandlers/EventHandlerFactory.php)
[CommentEventHandler.php](https://github.com/elisad5791/bx-snippets/blob/main/local/classes/DealAddHandlers/CommentEventHandler.php)
[InvoiceEventHandler.php](https://github.com/elisad5791/bx-snippets/blob/main/local/classes/DealAddHandlers/InvoiceEventHandler.php)
[QuoteEventHandler.php](https://github.com/elisad5791/bx-snippets/blob/main/local/classes/DealAddHandlers/QuoteEventHandler.php)

При создании сделки вызывается диспетчер из фабрики, который запускает нужный обработчик в зависимости от типа сделки - для типа Продажа в таймлайне создается комментарий с типом сделки, для типа Комплексная продажа - создается привязанный к сделке счет, для типа Продажа товара - создается привязанное к сделке Коммерческое предложение. 

CCrmStatus, CommentEntry, CCrmQuote, создание новых счетов

