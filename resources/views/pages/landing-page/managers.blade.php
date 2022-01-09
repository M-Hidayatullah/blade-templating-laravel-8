@extends('layouts.app')

{{-- set title --}}
{{-- show files with similar call (2) --}}
@section('title', 'Managers')

{{-- show files with similar call (2) --}}
@section('content')

    <!-- breadcumbs -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Managers
            </h1>
        </div>
    </header>

    <!-- table -->
    <div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Club</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nationality</th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Detail</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Thomas Tuchel
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                47 Years
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Chelsea FC
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Germany
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Jurgen Klopp
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                53 Years
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Liverpool
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Germany
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                </td>
                            </tr>

                        <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
