<x-layout>
    <h1 class="font-semibold text-xl">{{ $recipe['title'] }}</h1>

    @foreach ($recipe['ingredients'] as $ingredient)
        <p>{{ $ingredient }}</p>
    @endforeach
</x-layout>