# Kirby Google Tag Manager snippet

Plugin which adds the Google Tag Manager snippets to your Kirby CMS website.

## Installation

Put the `kirby-gtm` folder in your `site/plugins` folder.

## Usage

Add the snippet as close to the opening `<head>` tag as possible:

```php
<?php snippet('google-tag-manager') ?>
```

Add the snippet immediately after the `<body>` tag as possible:

```php
<?php snippet('google-tag-manager-noscript') ?>
```

💡 Don't forget to [set your property ID](#kirby-configurable-options).
If you don't set a property ID (or if it's empty), the snippet won't have any output.

## Kirby configurable options

Set your Google Tag Manager property ID, e.g. `GTM-XXXX` in the config file:

```php
c::set('gtm.propId', 'GTM-XXXX');
```