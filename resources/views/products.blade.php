<x-main-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $products->links() }}
                    <div class="mb-4 pt-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">

                        @forelse ($products as $product)
                            <div
                                class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                                <div class="h-56 w-full">
                                    <a href="/product/{{ $product->slug }}">
                                        <img class="mx-auto h-full dark:hidden"
                                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                            alt="" />
                                        <img class="mx-auto hidden h-full dark:block"
                                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="pt-6">
                                    <div class="mb-4 flex items-center justify-between gap-4">
                                        <span
                                            class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                            {{ $product->category->name }} </span>

                                        <div class="flex items-center justify-end gap-1">
                                            <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                                class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <span class="sr-only"> Add to Favorites </span>
                                                <svg class="h-5 w-5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                                </svg>
                                            </button>
                                            <div id="tooltip-add-to-favorites" role="tooltip"
                                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                                data-popper-placement="top">
                                                Add to favorites
                                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="/product/{{ $product->slug }}"
                                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $product->name }}</a>

                                    <div class="mt-2 flex items-center gap-2">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>

                                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>

                                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>

                                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>

                                            <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>
                                        </div>

                                        <p class="text-sm font-medium text-gray-900 dark:text-white">5.0</p>
                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(455)</p>
                                    </div>

                                    <ul class="mt-2 flex items-center gap-4">
                                        <li class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                            </svg>
                                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast
                                                Delivery
                                            </p>
                                        </li>

                                        <li class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                    d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                            </svg>
                                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price
                                            </p>
                                        </li>
                                    </ul>

                                    <p class="text-2xl py-3 font-extrabold leading-tight text-gray-900 dark:text-white">
                                        Rp{{ number_format($product->price, 0, ',', '.') }}
                                    </p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                        </svg>
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        @empty
                            <div>
                                <p class="font-semibold text-xl my-4">Products not found!</p>
                                <a href="/posts" class="block text-blue-600 hover:underline">&laquo; Back to
                                    posts</a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-main-layout>
