.PHONY: all dependency-install file-permission drop_database drop-database create-database generate-migration run-migration

all: dependency-install file-permission drop_database drop-database create-database generate-migration run-migration

dependency-install:
	composer install

file-permission:
	chmod -R 777 var/logs var/cache

drop-database:
	php bin/console doctrine:database:drop --force --if-exists

create-database:
	php bin/console doctrine:database:create

generate-migration:
	php bin/console doctrine:migrations:diff

run-migration:
	php bin/console doctrine:migrations:migrate
