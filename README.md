# scrumban

Small project to let me learn API platform / Symfony 

This project will help me to automate my Scrum master hat.

`/etc/hosts`
```
10.10.66.2	scrumban.local
```

```bash
docker compose run --rm  php-cli composer create-project symfony/skeleton:"6.2.*" scrumban
docker compose run --rm  php-cli composer require api

docker compose run --rm  php-cli php bin/console doctrine:database:create
```



https://api-platform.com/docs/core/state-providers/


https://api-platform.com/docs/core/state-processors/