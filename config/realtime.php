<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Realtime Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور realtime — همهٔ کلیدهای مستندشده در `docs/03-engines/realtime.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/realtime.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('REALTIME_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('REALTIME_PREFIX', 'realtime:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('REALTIME_LOG_CHANNEL', 'realtime'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];