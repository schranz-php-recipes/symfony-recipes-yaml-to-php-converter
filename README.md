# Symfony Recipes Yaml to PHP Converter

This is a wrapper around the [symplify/config-transformer](github.com/symplify/config-transformer)
used to convert Symfony Yaml Recipe files to PHP config files.

It is used in:

 - [https://github.com/alexander-schranz/symfony-recipes-php/](https://github.com/alexander-schranz/symfony-recipes-php/)
 - [https://github.com/alexander-schranz/symfony-recipes-php-contrib/](https://github.com/alexander-schranz/symfony-recipes-php-contrib/)

To convert the official symfony recipes.

```php
vendor/bin/yaml-to-php git@github.com:symfony/recipes.git
vendor/bin/yaml-to-php git@github.com:symfony/recipes-contrib.git
```

If you are not converting a recipes repository you should use the [symplify/config-transformer](github.com/symplify/config-transformer)
directly instead of using this package.
