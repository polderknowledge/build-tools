# Build-tools
This package contains a default set of phing targets used by our php-projects. We are aiming to cover all tools required for php builds. You can enable and disable targets by adding a build.properties file to your project. But only do this by purpose! It is not recommended to disable or override any of the targets!

## Installation
Add our private package repository to your project's composer.json
```json
"repositories": [
    {
        "type": "composer",
        "url": "http://packages.youngguns.nl"
    }
]
```
Run

`composer require polderknowledge/build-tools`

### Initalize your build script
execute `php vendor/bin/init-build.php` in your projects root. This will create a default build.xml.