<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Winery Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="relative">
                    <div class="mx-auto max-w-7xl bg-white">
                        <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                            <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                                viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                                <polygon points="0,0 90,0 50,100 0,100" />
                            </svg>
                            <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                                    <p class="mt-6 mb-4 text-lg leading-8 text-gray-600">Join us for a delightful winery event with a selection of fine wines and exquisite food.</p>
                                </div>
                            </div>
                        </div>

                                <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 flex items-center justify-center">
                                    <img class="max-w-1/2 h-auto" src="https://www.jordanwinery.com/wp-content/uploads/2021/01/Jordan-Winery-Release-Day_2016-Cabernet-Sauvignon-Magnum-0Y1A3004-e1673977159794-1024x410.jpg" alt="Winery Event Image">
                                </div>
                         </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white">
                    <div class="px-4 py-6 sm:px-6">
                        <h3 class="text-lg font-medium leading-7 text-gray-900">Event Details</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Learn more about the event</p>
                    </div>
                    <div class="border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">Name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Winery Event</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">Date</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">June 15, 2023</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">Time</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">6:00 PM - 9:00 PM</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">Location</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">ABC Winery, 123 Main Street, City</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">Description</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    Join us for an evening of wine tasting and culinary delights at our annual Winery Event. Immerse yourself in the world of fine wines as you indulge in a curated selection from our cellar. Our experienced sommeliers will guide you through the tasting journey, providing insights into each wine's origin, flavors, and pairings. Savor the richness and complexity of our award-winning vintages while enjoying a carefully crafted menu featuring artisanal dishes created to complement the wines perfectly.
                                    <br>
                                    <br>
                                    The event will take place at our picturesque ABC Winery, located at 123 Main Street in the heart of the city. Experience the charming ambiance of our vineyards as you mingle with fellow wine enthusiasts and delight in the enchanting atmosphere.
                                    <br>
                                    <br>
                                    Whether you are a wine connoisseur or simply appreciate the finer things in life, this Winery Event promises an unforgettable evening of gastronomic delights and sensory pleasures. Don't miss this opportunity to enhance your wine knowledge, discover new flavors, and create lasting memories.
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Location</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Backend Developer
                            </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">Category</dt>
                                <dt class="text-sm font-medium text-gray-900">Check-in \ Check-out</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    margotfoster@example.com
                                    2:00 PM - 12:00 PM
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-900">RSVP</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Please RSVP by June 10, 2023, to reserve your spot.</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Price</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">$120</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Reserve</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <a href="{{route('event.reservation', 1)}}" class="text-indigo-600 hover:text-indigo-900">Click here to
                                    reserve</a>
                            </dd>
                        </div>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-white">
                <div class="px-6 pt-6">
                    <h3 class="text-lg font-medium leading-7 text-gray-900">Reviews</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Event reviews</p>
                    <div class="mt-6 space-y-10 divide-y divide-gray-200 border-b border-t border-gray-200 pb-10">
                        <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                            <div
                                class="lg:col-span-8 lg:col-start-5 xl:col-span-9 xl:col-start-4 xl:grid xl:grid-cols-3 xl:items-start xl:gap-x-8">
                                <div class="flex items-center xl:col-span-1">
                                    <div class="flex items-center">
                                        <!-- Active: "text-yellow-400", Inactive: "text-gray-200" -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">5<span class="sr-only"> out of 5 stars</span>
                                    </p>
                                </div>

                                <div class="mt-4 lg:mt-6 xl:col-span-2 xl:mt-0">
                    <h3 class="text-sm font-medium text-gray-900">Absolutely Outstanding Winery Event!</h3>

                    <div class="mt-3 space-y-6 text-sm text-gray-500">
                        <p>The winery event exceeded all my expectations. From the moment I arrived, I was
                            impressed by the beautiful setting and the warm welcome from the staff.</p>
                        <p>The wine selection was exquisite, with a wide variety of flavors to satisfy every palate.
                            The knowledgeable sommeliers guided us through the tasting experience, providing
                            interesting insights and answering all our questions.</p>
                        <p>The event was well-organized and the atmosphere was relaxed and enjoyable. The winery
                            staff made sure that everyone felt comfortable and had a memorable time.</p>
                        <p>I also want to mention the delicious food that was served during the event. The
                            culinary team did an outstanding job pairing the wines with delectable dishes, creating
                            a perfect harmony of flavors.</p>
                        <p>Overall, I can't say enough good things about this winery event. It was a truly
                            exceptional experience that I would highly recommend to wine enthusiasts and anyone
                            looking for a delightful and memorable outing.</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center text-sm lg:col-span-4 lg:col-start-1 lg:row-start-1 lg:mt-0 lg:flex-col lg:items-start xl:col-span-3">
                <p class="font-medium text-gray-900">Risako M</p>
                <time datetime="2021-01-06"
                    class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">May
                    16, 2021</time>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <h3 class="text-lg font-medium leading-7 text-gray-900">Post A Review</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Share your experience during the winery event</p>
        <form action="#" class="relative bg-white pt-4">
            <div
                class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                <label for="title" class="sr-only">Title</label>
                <input type="text" name="title" id="title"
                    class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                    placeholder="Title">
                <label for="description" class="sr-only">Description</label>
                <textarea rows="2" name="description" id="description"
                    class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="Write a description..."></textarea>

                <!-- Spacer element to match the height of the toolbar -->
                <div aria-hidden="true">
                    <div class="py-2">
                        <div class="h-9"></div>
                    </div>
                    <div class="h-px"></div>
                    <div class="py-2">
                        <div class="py-px">
                            <div class="h-9"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex  space-x-3 border-t border-gray-200 py-2">
                <button type="button"
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium text-gray-900 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>
        </div>
    </div>
</x-app-layout>
