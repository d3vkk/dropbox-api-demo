# DropBox API Demo with PHP

![DropBox Logo](https://github.com/d3vkk/dropbox-api-demo/blob/master/dropbox-logo.png)

DropBox API Demo with PHP

## Prerequisites
You should have the following installed

- [PHP 7.3 or higher](https://php.net/)

- [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

## Set up

Fork or clone this repo
```
git clone https://github.com/d3vkk/dropbox-api-demo.git
```

Install dependencies
```
composer install
```

[Sign in and Create an App at DropBox](https://www.dropbox.com/developers)

Insert your keys in `upload.php`
```php
$app = new DropboxApp("DROPBOX_API_ID", "DROPBOX_API_SECRET", "DROPBOX_API_KEY");
```

Start up php server
```
php -S localhost:5000
```

Open your browser at [localhost:5000/index.html](http://localhost:5000/index.html)

Upload a file of our choice. Included is `hello-world.txt` as an example

[For more information](https://github.com/kunalvarma05/dropbox-php-sdk/wiki/Getting%20Started)

## Contribution

To contribute, [use this guide](https://github.com/d3vkk/open-source/blob/master/CONTRIBUTING.md)

## Usage

Star this repo for future reference

[Open in browser-based Visual Studio Code](https://vscode.dev/github/d3vkk/dropbox-api-demo)

Fork or clone this repo
```
git clone https://github.com/d3vkk/dropbox-api-demo.git
```

© 2020-present Donald K • Under MIT License
