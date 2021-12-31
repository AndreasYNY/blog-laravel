@extends('layouts.defhome')

@section('content')
    
<section class="max-w-4xl p-6 mx-auto my-10 bg-white rounded-md shadow-md dark:bg-gray-300">
    <div class="">
        <div class="">
            <h1 class="text-2xl text-center font-semibold text-gray-800 ">
                {{ $data->title }}
            </h1>
            <div class="text-right">
                <span class="text-sm text-center text-gray-600">
                    Created at: {{ $data->first_created }} <br>
                    @if ($data->last_updated == NULL)
                         <span>Edited at: {{ $data->updated_at }}</span>
                    @else
                        <span>hehe</span>
                    @endif
                </span>
            </div>

            <p class="text-white-600 dark:text-gray-400 pt-20" style="color:#ffffff">
                {!! $data->stuff !!}
            </p>
        </div>
    </div>
</section>
@endsection
