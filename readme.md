##Процесс клонирования Github-проекта (CPA)

1\. Копирование репозитория


    git clone -b dev https://github.com/InterProFront/cpa

---
2\. Обновление composer


    composer update

---
3\. Установка пакетов движка interpro


    composer require interpro/quickstorage 1.0.x-dev

    composer require interpro/imagefilelogic 1.0.x-dev

    composer require interpro/fidback 1.0.x-dev

    composer require interpro/admingenerator 1.0.x-dev

    composer require interpro/placeholder 1.0.x-dev

---
4\. Создание базы данных

---
5\. Создатние недостающих файлов и папок


    Создать файл .env

    В папке /public создать дерево каталогов
    - images  
        - crops  
        - features  
        - placeholders  

---
6\. Добавление стилей и скриптов админ-панели


    Перейти в папку /public и выполнить команду
    
    git clone https://github.com/interprofront/admin.git
    
    
    Перейти в папку /public/admin и выполнить команду 
    
    sudo bower install --allow-root



