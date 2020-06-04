# SIGIE - Sistema de Informações para Gestão de Instituição de Ensino



## Entities

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

## Funcionalidades

- [X] Institutions CRUD
- [X] Students CRUD
- [X] Courses CRUD
- [ ] Batch apply Courses to Students
- [ ] Batch apply Courses to Institutions
- [X] Auth (with disable Register)
- [ ] Database seed

## Future Improvements

- [X] Validate unique and exists constraints on request
- [ ] CPF and CNPJ validation and sanitization
- [ ] Datatables
- [ ] Mobile Number sanitization
- [ ] Add FKs on database
- [ ] Store users's Id on created_by and updated_by columns for all entities
- [ ] Performance optimization
- [ ] Build and Deploy

## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository.

First add your entire Laravel project to the `src` folder, then open a terminal and from this cloned respository's root run `docker-compose up -d --build`. Open up your browser of choice to [http://localhost:8080](http://localhost:8080) and you should see your Laravel app running as intended. **Your Laravel app needs to be in the src directory first before bringing the containers up, otherwise the artisan container will not build, as it's missing the appropriate file.** 

**New:** Three new containers have been added that handle Composer, NPM, and Artisan commands without having to have these platforms installed on your local computer. Use the following command templates from your project root, modifiying them to fit your particular use case:

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

## Persistent MySQL Storage

By default, whenever you bring down the docker-compose network, your MySQL data will be removed after the containers are destroyed. If you would like to have persistent data that remains after bringing containers down and back up, do the following:

1. Create a `mysql` folder in the project root, alongside the `nginx` and `src` folders.
2. Under the mysql service in your `docker-compose.yml` file, add the following lines:

```
volumes:
  - ./mysql:/var/lib/mysql
```