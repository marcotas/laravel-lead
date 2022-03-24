<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-2xl font-semibold text-gray-900">Users</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button type="button" class="btn text-sm btn-primary">Add user</button>
                </div>
            </div>

            <div class="relative inline-block min-w-full align-middle mt-4">
                <!-- Selected row actions, only show when rows are selected. -->
                <div class="absolute top-0 left-12 flex h-12 items-center space-x-1 bg-gray-50 sm:left-16">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div x-data="{ opened: false }" class="relative inline-block text-left">
                        <div>
                            <button type="button" @click="opened = !opened" class="btn xs rounded" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Options
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div x-show="opened" x-transition.origin.top.left @click.outside="opened = false" class="origin-top-left absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                    <!-- Heroicon name: solid/pencil-alt -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                                    Edit
                                </a>
                                <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                    <!-- Heroicon name: solid/duplicate -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z" />
                                        <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z" />
                                    </svg>
                                    Duplicate
                                </a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">
                                    <!-- Heroicon name: solid/archive -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                                        <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    Archive
                                </a>
                                <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">
                                    <!-- Heroicon name: solid/arrow-circle-right -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    Move
                                </a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">
                                    <!-- Heroicon name: solid/user-add -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                    Share
                                </a>
                                <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-5">
                                    <!-- Heroicon name: solid/heart -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    Add to favorites
                                </a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-6">
                                    <!-- Heroicon name: solid/trash -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="min-w-full rounded-lg shadow ring-1 ring-black ring-opacity-5 overflow-hidden table-fixed divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
                                <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500 sm:left-6">
                            </th>
                            <th scope="col" class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        <!-- Selected: "bg-gray-50" -->
                        <tr>
                            <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                <!-- Selected row marker, only show when row is selected. -->
                                <div class="absolute inset-y-0 left-0 w-0.5 bg-primary-600"></div>

                                <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500 sm:left-6">
                            </td>
                            <!-- Selected: "text-primary-600", Not Selected: "text-gray-900" -->
                            <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900">Lindsay Walton</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                            <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                <a href="#" class="text-primary-600 hover:text-primary-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
