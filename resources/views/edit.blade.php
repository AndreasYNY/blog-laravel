<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('/update/' . $data->id) }}" method="POST">
                        @csrf
                        <div class="relative w-25">
                            <input type="text" id="rounded-email" name="author"
                                class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-3 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-grey-300 focus:border-transparent"
                                value="{{ Auth::user()->name }}" />
                        </div>
                        <div class="relative w-25 pt-5">
                            <input type="text" id="rounded-email" name="title"
                                class=" rounded-lg flex-1 appearance-none border border-gray-300 w-full py-3 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-grey-300 focus:border-transparent"
                                placeholder="Title" value="{{ $data->title }}" />
                        </div>
                        <div class="relative pt-5">
                            <textarea name="stuff"
                            id="test_editor"
                                class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">{{ $data->stuff }}</textarea>
                        </div>

                        <div class="flex justify-end pt-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                update
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
        CKEDITOR.replace( 'test_editor' );
</script>