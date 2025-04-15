<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    <nav>
        <ul>
            <x-link_item href="/" :active="Route::currentRouteName() === 'homepage' ? true : false" >Homepage</x-link_item>
            <x-link_item href="/projects" :active="Route::currentRouteName() === 'projects' ? true : false">Projects</x-link_item>
            <x-link_item href="/recipes" :active="Route::currentRouteName() === 'recipes.index' ? true : false">Recipes</x-link_item>
        </ul>
    </nav>

   {{ $slot }}

</body>

</html>