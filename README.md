# Monstra.R CMS (Форк из Monstra CMS 3.0.4)
Monstra.R это современная и легкая система управления контентом, которая работает на XML файлах

### Операционная система
Unix, Linux, Windows or Mac OS
### Системные требования
PHP 5.3 с PHP модулями [SimpleXML](http://php.net/simplexml) и [Multibyte String](http://php.net/mbstring)
### Веб сервер
Apache с [Mod Rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) или Ngnix с [Rewrite Module](http://wiki.nginx.org/HttpRewriteModule)
   
### Установка
1. Скачайте [последнюю версию](https://github.com/ravilrrr/Monstra.R-CMS/releases)
2. Распакуйте архив на локальный компьютер.
3. Загрузите все директории и файлы через ФТП на ваш хост.
4. Установите права на директории `/storage/`, `/tmp/`, `/backups/` и `/public/`<br/>  755 (или 777) если соответствующие права автоматически не установлены.
5. Установите права на файлы `/install.php`, `/.htaccess` и `/sitemap.xml`<br/> 755 (или 777) если соответствующие права автоматически не установлены.
6. Перейти по адресу http://example.org/install.php для начала установки.

### Изначальные отличия от Monstra 3
Новый шаблон переделанный полностью под двиг https://blackrockdigital.github.io/startbootstrap-clean-blog/
По умолчанию редактор http://simplemde.com/
Обновил библиотеку Markdown и добавил Markdown Extendet (для любителей писать на чистом Markdown т.е по минимуму html)
Обновил CodeMirror до последней версии и поправил стили в редакторе
Обновил Bootsrap до версии 3.3.7
Обновил Jquery 2.2.4
Плагин контакты по умолчанию
И другие изменения, которые видны в истории на гитхабе


## ====== Translate to English =======

# Monstra.R CMS (Fork from Monstra 3.0.4)
Monstra.R is a modern and lightweight Content Management System.

## System Requirements
Operation system: Unix, Linux, Windows, Mac OS   
Middleware: PHP 5.2.3 or higher with PHP's [SimpleXML module](http://php.net/simplexml) and [Multibyte String module](http://php.net/mbstring)   
Webserver: Apache with [Mod Rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) or Ngnix with [Rewrite Module](http://wiki.nginx.org/HttpRewriteModule)   

## Steps to Install
1. [Download the latest version.](https://github.com/ravilrrr/Monstra.R-CMS/releases)
2. Unzip the contents to a new folder on your local computer.
3. Upload that whole folder with an FTP client to your host.
4. You may also need to recursively CHMOD the folder /storage/, /tmp/, /backups/ and /public/ to 755(or 777) if your host doesn't set it implicitly.
5. Also you may also need to recursively CHMOD the /install.php, /.htaccess and /sitemap.xml to 755(or 777) if your host doesn't set it implicitly.
6. Type http://example.org/install.php in the browser.

### The initial differences from Monstra 3
A new template has been completely revised under the engine https://blackrockdigital.github.io/startbootstrap-clean-blog/
By default, the editor http://simplemde.com/
Updated the library and added Markdown Markdown Extendet (for those who like to write in pure Markdown, ie at least html)
Updated CodeMirror to the latest version and adjusted the styles in the editor
Bootsrap updated to version 3.3.7
Updated Jquery 2.2.4
Plugin default contacts
Other changes that are visible in the history on github
