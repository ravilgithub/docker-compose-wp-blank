# docker-compose-wp-blank
Сборка Wordpress с помощью Docker Compose.

1. Для удобства пользования консоли, не из под root'a,
можно поменять владельца файлов директории.
Решение:
    sudo chown -R <username>:<username> .

2. Изменение владельца директории .server/wp может привести
к не возможности загрузки файлов в медиа библиотеку,
обновления плагинов, тем, переводов и тд.
Решение:
    sudo chown -R www-data:www-data .server/wp

3. Изменение владельца директории может привести к
потери доступа к Git.
Решение:
    git config --global --add safe.directory <абсолютный путь до дирeктории проекта включительно>
