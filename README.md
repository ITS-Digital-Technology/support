# Northeastern Support

Package of support classes for Northeastern University websites

## Installation

You can install the package via composer:

```bash
composer require northeastern-web/support
```

## Usage

### Meta tags

The package includes the Meta class for any meta related tags.

Add the following code to inside your `<head>` tag.

```php
<?php echo Northeastern\Support\Meta::head() ?>
```

If your project is using Laravel Blade's templating engine, you can add the following code.

```blade
{!! Northeastern\Support\Meta::head() !!}
```

### Analytics scripts

The package includes the Analytics class for the Northeastern analytics scripts.

Add the following code to inside your `<head>` tag.

```php
<?php echo Northeastern\Support\Analytics::googleTagManagerScript() ?>
```

And add the following code just after your opening `<body>` tag.

```php
<?php echo Northeastern\Support\Analytics::googleTagManagerNoScript() ?>
```

If your project is using Laravel Blade's templating engine, you can add the following code inside your `<head>` tag.

```blade
{!! Northeastern\Support\Analytics::googleTagManagerScript() !!}
```

And add the following code just after your opening `<body>` tag.

```blade
{!! Northeastern\Support\Analytics::googleTagManagerNoScript() !!}
```