#!/bin/sh

_term() {
  # on shutdown
  pm2 stop all
  pm2 kill
}

# shellcheck disable=SC2039
trap _term SIGTERM
# shellcheck disable=SC2039
trap _term SIGINT

export CONTAINER_ID="$(cat /etc/hostname)"

echo "VERSION: $APP_VERSION"

echo '
______  _____  _____ _____ _____ _   _ _____
| ___ \|  _  ||  _  |_   _|_   _| \ | |  __ \
| |_/ /| | | || | | | | |   | | |  \| | |  \/
| ___ \| | | || | | | | |   | | | . ` | | __
| |_/ /\ \_/ /\ \_/ / | |  _| |_| |\  | |_\ \
\____/  \___/  \___/  \_/  \___/\_| \_/\____/
                                                   '

# dispatch process manager daemon and start it
if [[ $APP_ENV =~ "production" || $APP_ENV =~ "testing" ]]; then
    composer dump-autoload -a
else
    if [[ -f package-lock.json ]]; then
      npm ci --legacy-peer-deps
    fi
    composer install
fi

ECOSYSTEM=$(echo $APP_ENV | tr '[:upper:]' '[:lower:]')

echo "ecosystem: $ECOSYSTEM"

echo ""
echo ""

if [[ ! -d ecosystems ]]; then
   echo 'no ecosystems directory found';
   echo '';
   echo 'please provide a `ecosystems` directory containing ecosystem.<lowercase_app_env>.json files';
   exit 1
fi

pm2 start ecosystems/ecosystem.${ECOSYSTEM}.json
pm2 logs