<?php

use Bitrix\Main\Context;
use Bitrix\Main\Page\Asset;

class Events
{
    static function addMedicineItem()
    {
        if (Context::getCurrent()->getRequest()->isAdminSection()) {
            return;
        }

        $js = <<<JS
            <script>
            BX.ready(function () {                
                const menuBox = document.querySelector('.menu-items');
                const menuItem = document.createElement('li');
                const linkItem = document.createElement('a');
                linkItem.id = 'medicine';
                linkItem.href = 'http://bx-snippets.local/medicine/';
                linkItem.style.color = '#eaeff8';
                linkItem.style.cursor = 'pointer';
                linkItem.classList.add('menu-item-link');
                linkItem.innerHTML = '<span class="menu-item-link-text">Медицина</a>';
                menuItem.append(linkItem);
                menuBox.append(menuItem);
            });
            </script>
JS;
        Asset::getInstance()->addString($js);
    }
}