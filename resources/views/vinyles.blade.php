<x-layout>
    <div class="content-wrapper">
    @foreach($vinyles as $vinyle)
        <x-card :vinyle="$vinyle"></x-card>
    @endforeach
    </div>
</x-layout>
