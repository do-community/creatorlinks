# CreatorLinks
_Shark-a-Hack Project, Q3 2020._

CreatorLinks is an open source, self-hosted version of Linktr.ee, with additional features to facilitate sharing text content (such as DO tutorials) on platforms like Instagram. This mobile-first application is helpful to aggregate content from different sources, allowing users to reference a single link in social media profiles. It works essentially as a hub of quick links; as an additional feature, we can include a redirection mechanism to automatically redirect to a certain page depending on the origin of the request.
 
## Installation (Dev)
 
 A Docker Compose dev environment is included. You'll need **Docker** and **Docker Compose** installed. To set these up, you can follow [this tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-docker-compose-on-ubuntu-18-04).
 
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
### Fork and Clone
 
If you are planning to contribute, you will need to:
 1) fork this repository on GitHub
 1) create a local clone of your fork.
 
If you're not familiar with this process, [click here for the really detailed version](https://help.github.com/en/github/getting-started-with-github/fork-a-repo).
 
If you're not planning to contribute and just want to play with the project in a local dev environment, you can simply clone this repo.
 
### Running the App on Docker

First, you need a `.env` file. If you have a particular need to customize your `.env` you may do so, but for most developers you can just use `.env.example`. Run this in your project root (where you cloned the repo):

```shell
cp .env.example .env
```
 
Now get your dev environment up and running by bringing up the docker containers:
 
```shell
docker-compose up -d
```

You'll need to generate an App key and run the database migrations. Both can be executed with `docker-compose exec`:

```shell
docker-compose exec app php artisan key:generate
```

```shell
docker-compose exec app php artisan migrate
```

This will create the database tables.

Next, you'll need to install the NPM assets with:

```shell
docker-compose exec app npm install && npm run dev
```

After the environment is up and running, you'll be able to access the application from your browser at `http://localhost:8000`.

Register a new user at `http://localhost:8000/register`.

To stop the environment, run:

```shell
docker-compose stop
```

This will stop the containers but won't delete allocated volumes and networks. To do so, you can run:

```shell
docker-compose down
```
