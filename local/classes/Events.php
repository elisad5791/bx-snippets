<?php

use Bitrix\Main\Context;
use Bitrix\Main\Page\Asset;

class Events
{
    static function addMenuItems()
    {
        if (Context::getCurrent()->getRequest()->isAdminSection()) {
            return;
        }

        $js = <<<JS
            <script>
            BX.ready(function () {                
                const menuBox = document.querySelector('.menu-items');
                
                const menuItem1 = document.createElement('li');
                const linkItem1 = document.createElement('a');
                linkItem1.id = 'medicine';
                linkItem1.href = 'http://bx-snippets.local/medicine/';
                linkItem1.style.color = '#eaeff8';
                linkItem1.style.cursor = 'pointer';
                linkItem1.classList.add('menu-item-link');
                linkItem1.innerHTML = '<span class="menu-item-link-text">Медицина</a>';
                menuItem1.append(linkItem1);
                menuBox.append(menuItem1);
                
                const menuItem2 = document.createElement('li');
                const linkItem2 = document.createElement('a');
                linkItem2.id = 'crm_sandbox';
                linkItem2.href = 'http://bx-snippets.local/crm_sandbox/';
                linkItem2.style.color = '#eaeff8';
                linkItem2.style.cursor = 'pointer';
                linkItem2.classList.add('menu-item-link');
                linkItem2.innerHTML = '<span class="menu-item-link-text">Песочница CRM</a>';
                menuItem2.append(linkItem2);
                menuBox.append(menuItem2);
            });
            </script>
JS;
        Asset::getInstance()->addString($js);
    }
}