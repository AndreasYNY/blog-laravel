@extends('layouts.defhome')

@section('content')
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col">
                <div class="h-1 bg-gray-800 rounded overflow-hidden">
                    <div class="w-24 h-full bg-indigo-500"></div>
                </div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                @if ($data->count() > 0)
                    @foreach ($data as $item)
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6 text-center">
                            <a href="{{ url('/show', $item->id) }}">
                                <h1 class="text-2xl font-medium title-font text-white mt-5">{{ $item->title }}</h1>
                            </a>
                            <p class="text-base leading-relaxed mt-2">{!! Str::limit($item->stuff, 100) !!}</p>
                            <p class="text-sm">by: {{ $item->author }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="p-4 md:w-1/3 mx-auto text-center">
                        <h1>Such Empty!</h1>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
