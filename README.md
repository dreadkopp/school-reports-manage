a small web app to create / edit and manage school reports

Get started:

- requirements:
  - docker
  - docker-compose

run 
<code>
sail build
</code>

after successful build run

<code>
./sail init
</code>

now you are ready to start it up

<code>
./sail up
</code>

in a second terminal setup the database using

<code>
./sail artisan migrate:fresh --seed
</code>

you should now be able to login via 

https://school-reports.localhost/reports/login

user: test@example.com
passwd: secret

