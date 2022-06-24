SHELL := /bin/bash

analyze:
	docker run --rm -v $(PWD):/app punit:latest  ./vendor/bin/phpstan analyze -c ./phpstan.neon

dev:
	docker run -it -v $(PWD):/app punit:latest /bin/sh

composer-update:
	docker run --rm -v $(PWD):/app punit:latest  composer update

composer-dump:
	docker run --rm -v $(PWD):/app punit:latest  composer dump-autoload

test:
	docker run -it --rm -v $(PWD):/app punit:latest  ./vendor/bin/phpunit --coverage-html ./app/ 

coverage:
	open ./app/index.html

dbg:
	docker run -it --rm -v $(PWD):/app punit:latest php -i | grep

build:
	docker build -t punit:latest -f .docker/console.Dockerfile .docker/
