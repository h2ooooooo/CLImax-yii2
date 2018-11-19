# Yii2 integration for CLImax

## Information

This package adds yii2 integration to CLImax.

## Installation

### Through command line

    # Add the github repository to our list of repos to fetch composer packages from
    composer config repositories.CLImax-yii2 git git@github.com:h2ooooooo/CLImax-yii2.git
    
    # Require the dependency in composer
    composer require-dev jalsoedesign/climax-yii2
    
    # Update composer
    composer update

### Through `composer.json`

First set up your `composer.json` file as you always do.

Then specify the requirement `jalsoedesign/climax-yii2` in `require` or `require-dev` and include the github repository URL in the `repositories` key like so:

    {
        "require": {
            "jalsoedesign/climax-yii2": "master-dev"
        }
    }

## Development

For development simply update composer:

    composer update
    
Please note that the following packages are specified in `replace`, so that they won't download with `composer update`.

| Composer package        | Required by    |
| ----------------------- | -------------- |
| `bower-asset/punycode`  | `yiisoft\yii2` |
| `bower-asset/jquery`    | `yiisoft\yii2` |
| `bower-asset/inputmask` | `yiisoft\yii2` |
| `bower-asset/yii2-pjax` | `yiisoft\yii2` |
| `cebe/markdown`         | `yiisoft\yii2` |
| `ezyang/htmlpurifier`   | `yiisoft\yii2` |
| `yiisoft/yii2-composer` | `yiisoft\yii2` |

The real reason we even load dependencies is to aid with PHPDoc.