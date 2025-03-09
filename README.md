# Kirby Inherit

Get the field of the parent pages if it's empty or not exists. It goes all up till the site.

## Installation

**Manually**

[Download](https://github.com/youngcut/kirby-inherit) and copy the plugin into your plugin folder: `/site/plugins/`

**With Composer**

`composer require plain/kirby-inherit`

## How to use

Let's say you want to get a hero image. The editor can set it on each page. But he don't have an image for every page. Use this code to look if the parent page has a image set:

```
    $page->hero_image()->inherit()
```

It goes all way up. At the end it will take the imgae from the main site.

## Inherit form another page

You can also use it for another page:

```
    $page->hero_image()->inherit( page('another_site') )
```

## License

This plugin is free to use and is published under the MIT license. If you use this plugin for commercial purposes or wish to show your appreciation, [support me with a donation](https://www.paypal.com/donate/?hosted_button_id=BHXBDRWYPUPCG).