ctags:
	ctags -R --fields=+aimS --languages=php --php-kinds=cidf --exclude=tests --exclude=composer.phar --exclude=storage

requirements:
	composer install
	npm install
	bower install

production: requirements
	gulp clean
	gulp production


develop: requirements
	gulp clean
	gulp develop

clean:
	rm -rf .sass-cache
	gulp clean
