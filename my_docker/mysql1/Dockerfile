# Используем официальный образ MySQL в качестве базового образа
FROM mysql:latest

# Устанавливаем переменные окружения
ENV MYSQL_ROOT_PASSWORD=my-secret-pw
ENV MYSQL_DATABASE=mydatabase
ENV MYSQL_USER=myuser
ENV MYSQL_PASSWORD=mypassword

# Копируем скрипт инициализации базы данных внутрь контейнера
COPY init.sql /docker-entrypoint-initdb.d/