# Symfony Recipes Yaml to PHP Converter

This is a wrapper around the [symplify/config-transformer](https://github.com/symplify/config-transformer)
used to convert Symfony core recipes which uses `.yaml` config files to `.php` config files.

It is used in:

 - [https://github.com/alexander-schranz/symfony-recipes-php/](https://github.com/alexander-schranz/symfony-recipes-php/)
 - [https://github.com/alexander-schranz/symfony-recipes-php-contrib/](https://github.com/alexander-schranz/symfony-recipes-php-contrib/)

To convert the official symfony recipes.

```php
vendor/bin/yaml-to-php git@github.com:symfony/recipes.git
vendor/bin/yaml-to-php git@github.com:symfony/recipes-contrib.git
```

If you are not converting a recipes repository you should use the [symplify/config-transformer](https://github.com/symplify/config-transformer)
directly instead of using this package.

## Skeletons

There are currently also 2 skeletons shipped which can be used to create new symfony projects:

**symfony/skeleton clone:**

[schranz/symfony-php-skeleton](https://github.com/alexander-schranz/symfony-php-skeleton):

```bash
composer create-project schranz/symfony-php-skeleton
```

**symfony/website-skeleton clone:**

[schranz/symfony-php-website-skeleton](https://github.com/alexander-schranz/symfony-php-website-skeleton):

```bash
composer create-project schranz/symfony-php-website-skeleton
```

## Using in exist projects

First convert your project with [symplify/config-transformer](https://github.com/symplify/config-transformer) from `.yaml` to `.php` configs
after add the following to the `composer` `extra.symfony.endpoint` configuration:

```json
    "extra": {
        "symfony": {
            "allow-contrib": false,
            "require": "6.1.*",
            "endpoint": [
                "https://raw.githubusercontent.com/alexander-schranz/symfony-recipes-php/flex/main/index.json",
                "https://raw.githubusercontent.com/alexander-schranz/symfony-recipes-php-contrib/flex/main/index.json",
                "flex://defaults"
            ]
        }
    }
```
