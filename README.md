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