<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table p-4 bg-b shadow rounded-lg">
                        <thead>
                            <tr>
                                <th
                                    class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                                    id
                                </th>
                                <th
                                    class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                                    title
                                </th>
                                <th
                                    class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                                    Created at
                                </th>
                                <th
                                    class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                                    author
                                </th>
                                <th
                                    class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="text-gray-700">
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        {{ $item->id }}
                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        {{ $item->title }}
                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        {{ $item->first_created }}
                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        {{ $item->author }}
                                    </td>
                                    <td>
                                        <div class="flex">
                                            <a href="{{ route('edit', $item->id) }}"
                                                class="bg-black hover:bg-slate-900 text-white font-bold py-2 px-4 mx-2 rounded">
                                                Edit
                                            </a>
                                            <form action="{{ route('destroy', $item->id) }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="bg-black hover:bg-slate-900 text-white font-bold py-2 px-4 rounded">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
