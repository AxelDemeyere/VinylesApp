@props(['vinyle'])

<div class="card relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
    <div class="mx-3 mb-0 border-b border-slate-200 pt-3 pb-2 px-1">
    <span class="text-sm text-slate-600 font-medium">
      {{ $vinyle['titre'] ?? 'Titre manquant' }} | {{ $vinyle['artiste'] }} | {{ $vinyle['annee'] }}
    </span>
    </div>
    <div class="p-4">
        <img class="cover" src="{{ $vinyle['image'] }}" alt="">
        <p class="text-slate-600 leading-normal font-light">
            {{ $vinyle['description'] }}
        </p>
    </div>
    <a class="btn-voir" href="/vinyles/{{ $vinyle['id'] }}">Voir plus</a>
</div>
