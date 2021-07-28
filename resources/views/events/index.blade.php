<x-guest-layout>
    <section class="container p-4 mx-auto text-gray-600 body-font">
        <h1 class="text-center sm:text-4xl text-3xl font-medium title-font uppercase mb-4 text-purple-700 tracking-widest">{{ __('Events') }}</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach ($events as $event)
            <x-event-card :event="$event" />
            @endforeach
        </div>
    </section>
</x-guest-layout>