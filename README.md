# lamp-for-21-school-mac
Шаблон для разворачивания lamp на docker-машине в условиях 21 school

Установки для докер машины:
- `export MACHINE_STORAGE_PATH=/tmp`
- `docker-machine create default`
- `eval $(docker-machine env default)`

Установки для 21 школьного мака:
- `cd ~ && rm -rf Library/com.docker.docker`
- `mkdir /goinfre/docker`
- `ln -s /goinfre/docker Library/com.docker.docker`

Поднимаем сервер:
- `git clone https://github.com/efremzhenya/lamp-for-21-school-mac.git`
- `docker-compose up -d`

PhpMyAdmin [http://localhost:8000](http://localhost:8000)
Php site [http://localhost:8001](http://localhost:8001)

Run mysql client:
- `docker-compose exec db mysql -u root -p`
