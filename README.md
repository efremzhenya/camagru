Шаблон для разворачивания lamp на docker-машине в условиях 21 school


Установки для 21 школьного мака:
- `export MACHINE_STORAGE_PATH=/tmp`
- `cd ~ && rm -rf Library/com.docker.docker`
- `mkdir /goinfre/docker`
- `ln -s /goinfre/docker Library/com.docker.docker`

Создаем докер-машину:
- `docker-machine create default`
- `eval $(docker-machine env default)`

Разворачиваем сервер:
- `git clone https://github.com/efremzhenya/lamp-for-21-school-mac.git`
- `docker-compose up -d`

PhpMyAdmin [http://docker-machine-ip:8000](http://docker-machine-ip:8000)
WWW [http://docker-machine-ip:8001](http://docker-machine-ip:8001)

Run mysql client:
- `docker-compose exec db mysql -u root -p`
