# SIGIE - Sistema de Informações para Gestão de Instituição de Ensino

View [Usage](#Usage) to know how to run the application. 

## Demo

TODO

## Entities

- Users
- Institutions
- Courses
- Students

## Rules

- [X] Entities cannot be duplicated. To achieve this, the fields being consided as unique indexes are CNPJ of Institution, CPF of Student and Name of Course.
- [X] One Institution can have one or more courses.
- [X] All Students must have a Course.
- [X] A Course can be related to zero or one Institution.
- [X] A Student cannot be registered in a Course that is not associated with a Institution.
- [X] Inativated Courses cannot be used to register new Students.
- [X] Institutions, Students and Courses that have associated entities cannot be deleted, just inactivated.

## Features

- [X] Institutions CRUD
- [X] Students CRUD
- [X] Courses CRUD
- [X] List Students by Course
- [X] List Courses by Institution
- [X] List Students by Institution
- [X] Auth (with disabled Register)
- [X] Database seed
- [ ] Batch apply Courses to Students
- [ ] Batch apply Courses to Institutions

## Future Improvements

- [X] Validate unique and exists constraints on request
- [X] CPF and CNPJ validation and sanitization
- [X] Success messages
- [ ] Build and Deploy
- [ ] Date format and validation on inputs
- [ ] Mobile Number sanitization
- [ ] Store users's Id on created_by and updated_by columns for all entities
- [ ] Globalization
- [ ] CPF, CNPJ and Mobile Number formatation on views (for input and display)
- [ ] Datatables
- [ ] Add FKs on database?
- [ ] Performance optimization


## Usage

To get started, clone this repository in your local computer.
Copy the file `.env.example` located inside `src` folder to `.env` on the same location. 


### Running locally with Docker

Make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system.

If you want to change the default user and password of the MySQL connection, you need to change both `.env` and `docker-compose.yml` file.

Open a terminal and from this cloned respository's root run `docker-compose up -d --build`. 

By default, the build will generate a application key, migrate and seed the database.

Open up your browser of choice to [http://localhost:8080](http://localhost:8080) and you should see the app running as intended.

#### Running composer, npm and artisan without installing them

Three new containers have been added that handle Composer, NPM, and Artisan commands without having to have these platforms installed on your local computer. Use the following command templates from your project root, modifiying them to fit your particular use case:

- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

Containers created and their ports (if used) are as follows:

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`
- **npm**
- **composer**
- **artisan**

#### Persistent MySQL Storage

By default, whenever you bring down the docker-compose network, your MySQL data will be removed after the containers are destroyed. If you would like to have persistent data that remains after bringing containers down and back up, do the following:

1. Create a `mysql` folder in the project root, alongside the `nginx` and `src` folders.
2. Under the mysql service in your `docker-compose.yml` file, add the following lines:

```
volumes:
  - ./mysql:/var/lib/mysql
```

### Running locally without Docker

If you have all requiremente of Laravel in your local computer, change the MySQL connection parameters on the `.env` to match the parameters in your MySQL server.

Run the following commands:

- `php artisan key:generate`
- `php artisan migrate` (if you want to migrate the database)
- `php artisan db:seed` (if you want to seed sample data)
- `php artisan serve`