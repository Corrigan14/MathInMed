mathinmed
=========

A Symfony project created on April 10, 2017, 2:56 am.

Assetic:
# make a hard copy 
php bin/console assetic:dump

# listener 
php bin/console assetic:watch


Assets:
# make a hard copy of the assets in web/
$ php bin/console assets:install

# if possible, make absolute symlinks in web/ if not, make a hard copy
$ php bin/console assets:install --symlink

# if possible, make relative symlinks in web/ if not, make a hard copy
$ php bin/console assets:install --symlink --relative

php bin/console assetic:dump --env=prod --no-debug

MatModule:
mathJax


