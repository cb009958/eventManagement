<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="grid grid-cols-4 gap-3">
                    @livewire('event-card', [
                        'event' => [
                            'image' => 'https://www.jordanwinery.com/wp-content/uploads/2021/01/Jordan-Winery-Release-Day_2016-Cabernet-Sauvignon-Magnum-0Y1A3004-e1673977159794-1024x410.jpg',
                            'title' => 'Winery Event',
                            'description' => 'Join us for a delightful winery event with a selection of fine wines and exquisite food.',
                            'link' => '#',
                            'buttonText' => 'Read more',
                        ],
                    ])

                    @livewire('event-card', [
                        'event' => [],
                    ])

                    @livewire('event-card', [
                        'event' => [],
                    ])

                    @livewire('event-card', [
                        'event' => [],
                    ])
                </div>
             </div>
        </div>
    </div>
</x-app-layout>
