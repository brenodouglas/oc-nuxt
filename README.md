## OctoberCMS + NuxtJS

### Get started

- For initialize install frontend dependencies using:

```shell
  cd frontend && npm install #or yarn
```

- And install backend dependencies:

```shell
  cd october && composer install
```

#### Start server

The recomendations is use one reverse proxy for responding route '/*' with node and reponding october routes with php server. For that i have using [Caddyserver](http://caddyserver.com) (but nginx is one better option).

This project have Caddyfile example used in docker.

#### Start using docker

- Only run command:

```shell
docker-compose up -d
```

And access http://localhost in your browser and http://localhost/admin for october admin panel.
