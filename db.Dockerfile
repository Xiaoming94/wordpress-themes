# Dockfile for creating a database and Seeding it

FROM mariadb:latest

COPY ./wordpress.sql /docker-entrypoint-initdb.d/

CMD ["mysqld"]
