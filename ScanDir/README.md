# Получение файлов в (под)директориях

```php
№ Использование
$path = $_SERVER["DOCUMENT_ROOT"].'/img/projects/camp/ready/';
$path =  substr($path, 0, strlen($path)-1);
$files = scanDir::scan($path, 'jpg', true);

foreach ($files as $img) {
}
```
