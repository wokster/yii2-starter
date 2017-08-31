My Yii 2 Advanced Project Template With some addons
===============================

Please do not use yet, still under development
Пожалуйста пока не пользуйтесь, еще на стадии разработки

used for educational purposes on my youtube channel:[Yii2 for Blondes and Dummies: lessons, notes, guides](https://www.youtube.com/channel/UC3jTSXXgSvQI2WJ5fX6oIwA)
используется в образовательных целях на моем канале в youtube: [Yii2 для Блондинок и Чайников: уроки, заметки, гайды](https://www.youtube.com/channel/UC3jTSXXgSvQI2WJ5fX6oIwA)

INSTALL
-------------------
create project
```
composer create-project wokster/yii2-starter myproject.com
```
go to project folder
```
cd myproject.com
```
init project
```
php init
```
create db and add params in ...myproject.com\common\config\main-local.php
run yii2 migrations to create user table and other:
```
php yii migrate
```

it's all

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
