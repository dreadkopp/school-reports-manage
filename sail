#!/bin/bash

if [[ $1 == 'up' ]]; then
  shift 1
  docker-compose up $@
fi


if [[ $1 == 'shell' ]]; then
  shift 1
  docker-compose exec -it app ash
fi

if [[ $1 == 'root-shell' ]]; then
  shift 1
  docker-compose exec -it -u root app ash
fi


docker-compose exec -it app $@
