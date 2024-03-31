#!/bin/bash

if [[ $1 == 'up' ]]; then
  shift 1
  docker-compose up "$@"
  exit 0
fi


if [[ $1 == 'shell' ]]; then
  shift 1
  docker-compose exec -it app ash
  exit 0
fi

if [[ $1 == 'root-shell' ]]; then
  shift 1
  docker-compose exec -it -u root app ash
  exit 0
fi


if [[ $1 == 'artisan' ]]; then
  shift 1
  docker-compose exec -it app php artisan "$@"
  exit 0
fi

docker-compose "$@"
