
Agency Theme
============
Yii 2  Agency Theme base on [Agency - One Page Bootstrap Theme](http://startbootstrap.com/template-overviews/agency/)

This package contains an Asset Bundle for Yii 2.0 Framework which registers the CSS files for the Agency - One Page Bootstrap Theme

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require dixonsatit/yii2-agency-theme
```

or add

```
"dixonsatit/yii2-agency-theme": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you can have a preview by reconfiguring the path mappings of the view component:

```php
        'view'=>[
            'theme'=>[
                'pathMap'=>[
                    '@app/views'=>'@dixonsatit/agencyTheme/views'
                ]
            ]
        ],
```

Customization
-------------
- create folder /themes/agency you application
- copy file from  `vendor/dixonsatit/yii2-agency-theme/views`  to /themes/agency/
- edit config/main.php  to:

```
 'view'=>[
            'theme'=>[
                'pathMap'=>[
                    '@app/views'=>'@app/themes/agency'
                ]
            ]
        ],
```


Agency Theme
============
เป็น theme ที่สร้างมาจาก [Agency - One Page Bootstrap Theme](http://startbootstrap.com/template-overviews/agency/) โดยใช้ [Asset Bundle for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html)


การใช้งาน
---------
หลังจากติดตั้งเสร็จ ให้ทำการตั้งค่าที่ config/main.php 

```php
        'view'=>[
            'theme'=>[
                'pathMap'=>[
                    '@app/views'=>'@dixonsatit/agencyTheme/views'
                ]
            ]
        ],
```

ในการใช้งานจริงเราไม่ควรแก้ไขไฟล์ที่ `vendor/dixonsatit/yii2-agency-theme/views` เราควร copy ไฟล์ view มาไว้ที่ application ของเรา

- สร้างโฟลเดอร์ /themes/agency ที่ application ของคุณ
- copy ไฟล์ทั้งหมดที่อยู่ใน view จาก `vendor/dixonsatit/yii2-agency-theme/views` ไปไว้ที่ `/themes/agency` ใน application ของคุณ
- ตั้งค่า view ใหม่ เป็น

```php
 'view'=>[
            'theme'=>[
                'pathMap'=>[
                    '@app/views'=>'@app/themes/agency'
                ]
            ]
        ],
```

จากนั้นคุณสามารถปรับเปลี่ยน view ต่างๆ ได้ตามต้องการ ^^

![](/dist/img/screencapture-yii2-agency-theme.png)


