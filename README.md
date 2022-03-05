# Laravel Route Names

![the dragon code route names](https://preview.dragon-code.pro/the-dragon-code/route-names.svg?brand=laravel)

[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![Github Workflow Status][badge_build]][link_build]
[![License][badge_license]][link_license]

## Installation

To get the latest version of Laravel Actions, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require dragon-code/laravel-route-names
```

Replace `Illuminate\Foundation\Application` with `DragonCode\LaravelRouteNames\Application` in the `bootstrap/app.php` file.

## Using

This is all. Now you don't have to specify route names. Now the route names will be generated automatically based on the final URL of your project.

> Note
>
> All previously specified route names in the application will be ignored.
>
> Also, [Laravel Idea](https://laravel-idea.com) support coming soon.

For example:

```php
app('router')
    ->get('pages', [IndexController::class, 'index'])
    ->name('my_pages');

return route('my_pages');
//  \Symfony\Component\Routing\Exception\RouteNotFoundException
//  Route [my_pages] not defined.

return route('pages.index');
// Returns the result of executing the `IndexController@index` method.
```

### Base Routes

```php
app('router')->get('/', [IndexController::class, 'index']);
app('router')->post('/', [IndexController::class, 'store']);
app('router')->put('/', [IndexController::class, 'update']);
app('router')->delete('/', [IndexController::class, 'delete']);
app('router')->patch('/', [IndexController::class, 'patch']);
app('router')->options('/', [IndexController::class, 'options']);

app('router')->get('pages', [PagesController::class, 'index']);
app('router')->post('pages', [PagesController::class, 'store']);
app('router')->put('pages/{page}', [PagesController::class, 'update']);
app('router')->delete('pages/{page}', [PagesController::class, 'delete']);
app('router')->patch('pages/{page}', [PagesController::class, 'patch']);
app('router')->options('pages/{page}', [PagesController::class, 'options']);
```

| Method    | Url          | Name            | Helper                   |
|-----------|--------------|-----------------|--------------------------|
| GET, HEAD | `/`          | `index`         | `route('index')`         |
| POST      | `/`          | `store`         | `route('store')`         |
| PUT       | `/`          | `update`        | `route('update')`        |
| DELETE    | `/`          | `destroy`       | `route('destroy')`       |
| PATCH     | `/`          | `patch`         | `route('patch')`         |
| OPTIONS   | `/`          | `options`       | `route('options')`       |
| GET, HEAD | `/pages`     | `pages.index`   | `route('pages.index')`   |
| POST      | `/pages`     | `pages.store`   | `route('pages.store')`   |
| PUT       | `/pages/123` | `pages.update`  | `route('pages.update')`  |
| DELETE    | `/pages/123` | `pages.destroy` | `route('pages.destroy')` |
| PATCH     | `/pages/123` | `pages.patch`   | `route('pages.patch')`   |
| OPTIONS   | `/pages/123` | `pages.options` | `route('pages.options')` |

### Resource Routes

```php
app('router')->resource('authors/{author}/photos', Author\PhotoController::class);
```

| Method    | Url                                                  | Name                     | Helper                            |
|-----------|------------------------------------------------------|--------------------------|-----------------------------------|
| GET, HEAD | `/authors/123/photos`                                | `authors.photos.index`   | `route('authors.photos.index')`   |
| GET, HEAD | `/authors/123/photos/create`                         | `authors.photos.create`  | `route('authors.photos.create')`  |
| POST      | `/authors/123/photos`                                | `authors.photos.store`   | `route('authors.photos.store')`   |
| GET       | `/authors/123/photos/{photo}`                        | `authors.photos.show`    | `route('authors.photos.show')`    |
| GET       | `/authors/123/photos/{photo}/edit`                   | `authors.photos.edit`    | `route('authors.photos.edit')`    |
| PUT       | `/authors/123/photos/{photo}`                        | `authors.photos.update`  | `route('authors.photos.update')`  |
| PATCH     | `/authors/123/photos/{photo}`                        | `authors.photos.patch`   | `route('authors.photos.patch')`   |
| DELETE    | `/authors/123/photos/{photo}`                        | `authors.photos.destroy` | `route('authors.photos.destroy')` |

### API Resource Routes

```php
app('router')->apiResource('authors/{author}/photos', Author\PhotoController::class);
```

| Method    | Url                           | Name                     | Helper                            |
|-----------|-------------------------------|--------------------------|-----------------------------------|
| GET, HEAD | `/authors/123/photos`         | `authors.photos.index`   | `route('authors.photos.index')`   |
| POST      | `/authors/123/photos`         | `authors.photos.store`   | `route('authors.photos.store')`   |
| GET       | `/authors/123/photos/{photo}` | `authors.photos.show`    | `route('authors.photos.show')`    |
| PUT       | `/authors/123/photos/{photo}` | `authors.photos.update`  | `route('authors.photos.update')`  |
| PATCH     | `/authors/123/photos/{photo}` | `authors.photos.patch`   | `route('authors.photos.patch')`   |
| DELETE    | `/authors/123/photos/{photo}` | `authors.photos.destroy` | `route('authors.photos.destroy')` |

## License

This package is licensed under the [MIT License](LICENSE).


[badge_build]:          https://img.shields.io/github/workflow/status/TheDragonCode/laravel-route-names/phpunit?style=flat-square

[badge_downloads]:      https://img.shields.io/packagist/dt/dragon-code/laravel-route-names.svg?style=flat-square

[badge_license]:        https://img.shields.io/packagist/l/dragon-code/laravel-route-names.svg?style=flat-square

[badge_stable]:         https://img.shields.io/github/v/release/TheDragonCode/laravel-route-names?label=stable&style=flat-square

[badge_unstable]:       https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_build]:           https://github.com/TheDragonCode/laravel-route-names/actions

[link_license]:         LICENSE

[link_packagist]:       https://packagist.org/packages/dragon-code/laravel-route-names
