<?php 

return [
    'title' => 'مثبت Laravel',
    'next' => 'الخطوة التالية',
    'back' => 'السابق',
    'finish' => 'تثبيت',
    'forms' => [
        'errorTitle' => 'حدثت اﻷخطاء التالية:',
    ],
    'welcome' => [
        'templateTitle' => 'مرحبا',
        'title' => 'Laravel مثبت',
        'message' => 'معالج التثبيت والإعداد السهل.',
        'next' => 'تحقق من المتطلبات',
    ],
    'requirements' => [
        'templateTitle' => 'الخطوة 1 | متطلبات الخادم',
        'title' => 'متطلبات الخادم',
        'next' => 'تحقق من الأذونات',
    ],
    'permissions' => [
        'templateTitle' => 'الخطوة 2 | أذونات',
        'title' => 'الأذونات',
        'next' => 'تكوين البيئة',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'الخطوة 3 | إعدادات البيئة',
            'title' => 'إعدادات البيئة',
            'desc' => 'الرجاء تحديد كيف تريد تكوين التطبيقات <code>.env</code> file.',
            'wizard-button' => 'إعداد معالج النماذج',
            'classic-button' => 'محرر نص كلاسيكي',
        ],
        'wizard' => [
            'templateTitle' => 'الخطوة 3 | إعدادات البيئة | معالج موجه',
            'title' => 'الموجهة <code>.env</code> معالج',
            'tabs' => [
                'environment' => 'بيئة',
                'database' => 'قاعدة بيانات',
                'application' => 'تطبيق',
            ],
            'form' => [
                'name_required' => 'مطلوب اسم البيئة.',
                'app_name_label' => 'اسم التطبيق',
                'app_name_placeholder' => 'اسم التطبيق',
                'app_environment_label' => 'بيئة التطبيق',
                'app_environment_label_local' => 'محلي',
                'app_environment_label_developement' => 'تطوير',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'إنتاج',
                'app_environment_label_other' => 'أخري',
                'app_environment_placeholder_other' => 'أدخل بيئتك...',
                'app_debug_label' => 'تصحيح التطبيق',
                'app_debug_label_true' => 'True',
                'app_debug_label_false' => 'False',
                'app_log_level_label' => 'مستوى سجل التطبيق',
                'app_log_level_label_debug' => 'التصحيح',
                'app_log_level_label_info' => 'معلومات',
                'app_log_level_label_notice' => 'تنويه',
                'app_log_level_label_warning' => 'تحذير',
                'app_log_level_label_error' => 'خطأ',
                'app_log_level_label_critical' => 'حرج',
                'app_log_level_label_alert' => 'إنذار',
                'app_log_level_label_emergency' => 'حالة طوارئ',
                'app_url_label' => 'رابط التطبيق',
                'app_url_placeholder' => 'رابط التطبيق',
                'db_connection_failed' => 'لا يمكن الاتصال بقاعدة البيانات.',
                'db_connection_label' => 'اتصال قاعدة البيانات',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'مضيف قاعدة البيانات',
                'db_host_placeholder' => 'مضيف قاعدة البيانات',
                'db_port_label' => 'منفذ قاعدة البيانات',
                'db_port_placeholder' => 'منفذ قاعدة البيانات',
                'db_name_label' => 'اسم قاعدة البيانات',
                'db_name_placeholder' => 'اسم قاعدة البيانات',
                'db_username_label' => 'اسم مستخدم قاعدة البيانات',
                'db_username_placeholder' => 'اسم مستخدم قاعدة البيانات',
                'db_password_label' => 'كلمة مرور قاعدة البيانات',
                'db_password_placeholder' => 'كلمة مرور قاعدة البيانات',
                'app_tabs' => [
                    'more_info' => 'معلومات أكثر',
                    'broadcasting_title' => 'البث والتخزين المؤقت والجلسة & amp؛ طابور',
                    'broadcasting_label' => 'سائق البث',
                    'broadcasting_placeholder' => 'سائق البث',
                    'cache_label' => 'سائق ذاكرة التخزين المؤقت',
                    'cache_placeholder' => 'سائق ذاكرة التخزين المؤقت',
                    'session_label' => 'سائق الجلسة',
                    'session_placeholder' => 'سائق الجلسة',
                    'queue_label' => 'سائق طابور',
                    'queue_placeholder' => 'سائق طابور',
                    'redis_label' => 'سائق ريديس',
                    'redis_host' => 'مضيف Redis',
                    'redis_password' => 'كلمة مرور Redis',
                    'redis_port' => 'Redis منفذ',
                    'mail_label' => 'بريد',
                    'mail_driver_label' => 'متحكم البريد',
                    'mail_driver_placeholder' => 'متحكم البريد',
                    'mail_host_label' => 'مضيف البريد',
                    'mail_host_placeholder' => 'مضيف البريد',
                    'mail_port_label' => 'منفذ البريد',
                    'mail_port_placeholder' => 'منفذ البريد',
                    'mail_username_label' => 'أسم مستخدم البريد',
                    'mail_username_placeholder' => 'أسم مستخدم البريد',
                    'mail_password_label' => 'كلمة مرور البريد',
                    'mail_password_placeholder' => 'كلمة مرور البريد',
                    'mail_encryption_label' => 'تشفير البريد',
                    'mail_encryption_placeholder' => 'تشفير البريد',
                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'معرف التطبيق Pusher',
                    'pusher_app_id_palceholder' => 'معرف التطبيق Pusher',
                    'pusher_app_key_label' => 'مفتاح تطبيق Pusher',
                    'pusher_app_key_palceholder' => 'مفتاح تطبيق Pusher',
                    'pusher_app_secret_label' => 'سر تطبيق Pusher',
                    'pusher_app_secret_palceholder' => 'سر تطبيق Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'تثبيت قاعدة البيانات',
                    'setup_application' => 'تثبيت التطبيق',
                    'install' => 'تثبيت',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'الخطوة 3 | إعدادات البيئة | محرر كلاسيكي',
            'title' => 'محرر البيئة الكلاسيكي',
            'save' => 'حفظ .env',
            'back' => 'استخدم معالج النماذج',
            'install' => 'حفظ وتثبيت',
        ],
        'success' => 'تم حفظ إعدادات ملف .env الخاص بك.',
        'errors' => 'تعذر حفظ ملف .env ، يرجى إنشائه يدويًا.',
        'title' => '',
        'save' => '',
    ],
    'install' => 'تثبيت',
    'installed' => [
        'success_log_message' => 'تم تثبيت Laravel Installer بنجاح على ',
    ],
    'final' => [
        'title' => 'انتهى التثبيت',
        'templateTitle' => 'انتهى التثبيت',
        'finished' => 'تم تثبيت التطبيق بنجاح.',
        'migration' => 'الهجرة وأمبير. وحدة تحكم البذور انتاج:',
        'console' => 'إخراج وحدة التحكم التطبيق:',
        'log' => 'إدخال سجل التثبيت:',
        'env' => 'ملف env النهائي:',
        'exit' => 'انقر هنا للخروج',
    ],
    'updater' => [
        'title' => 'محدث Laravel',
        'welcome' => [
            'title' => 'مرحبا بكم في المحدث',
            'message' => 'مرحبًا بك في معالج التحديث.',
        ],
        'overview' => [
            'title' => 'نظرة عامة',
            'message' => 'يوجد تحديث واحد | يوجد: عدد التحديثات.',
            'install_updates' => 'تثبيت التحديثات',
        ],
        'final' => [
            'title' => 'أنتهي',
            'finished' => 'تم تحديث قاعدة بيانات التطبيق بنجاح.',
            'exit' => 'انقر هنا للخروج',
        ],
        'log' => [
            'success_message' => 'تم تحديث برنامج Laravel Installer بنجاح في ',
        ],
    ],
];