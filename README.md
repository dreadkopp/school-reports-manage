a small web app to create / edit and manage school reports

Get started:

- requirements:
  - docker
  - docker-compose

run 

```
./sail build
```

after successful build run

```
./sail init
```

now you are ready to start it up

```
./sail up
```

in a second terminal setup the database using

```
./sail artisan migrate:fresh --seed
```

you should now be able to login via 

https://school-reports.localhost/reports/login

user: test@example.com
passwd: secret

