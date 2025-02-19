<x-layout>
    <div class="details container flex justify-center content-center mx-auto my-0 py-8">
        <h1 class="text-2xl font-bold mb-4">{{ $vinyle['titre'] }}</h1>
        <div>
            <img src="{{ $vinyle['image'] }}" alt="">
            <p class="text-gray-700"><b>Artiste</b> : {{ $vinyle['artiste'] }}</p>
            <p class="text-gray-700"><b>Année</b> : {{ $vinyle['annee'] }}</p>
            <p class="text-gray-700"> <b>Description</b> : {{ $vinyle['description'] }}</p>
        </div>
    </div>
</x-layout>
