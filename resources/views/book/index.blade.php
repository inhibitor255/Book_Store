@extends('layouts.app')

@section('content')
    <!-- component -->
    <!-- component -->
    <div class=" container mx-auto mt-5">
        <div class=" grid grid-cols-4 gap-3">

            @foreach ($booksData as $b)
                <div class="relative flex w-84 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div
                        class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                        @if (Str::startsWith($b->cover_photo, ['http://', 'https://']))
                            <img src="{{ $b->cover_photo }}" alt="{{ $b->book_name }}" />
                        @else
                            <img src="{{ asset('images/' . $b->cover_photo) }}" alt="{{ $b->book_name }}" />
                        @endif
                    </div>
                    <div class="p-6 text-center">
                        <h4
                            class="mb-2 block font-sans text-md font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            {{ $b->book_uniq_id }} - {{ $b->book_name }}
                        </h4>
                        <h4
                            class="mb-2 block font-sans text-md font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            စာ‌‌ရေးသူ - {{ $b->contentOwner->name }}
                        </h4>
                        <h4
                            class="mb-2 block font-sans text-md font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            ထုတ်‌ဝေသူ - {{ $b->publisher->name }}
                        </h4>
                        <h4
                            class="mb-2 block font-sans text-md font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            စတင်ထုတ်လုပ်သည့်အချိန် - {{ \Carbon\Carbon::parse($b->created_timetick)->format('d-m-y') }}


                        </h4>

                    </div>

                    @if (Auth::user()->name === $b->contentOwner->name)
                        <div class=" pb-4 ps-4 flex">
                            <a href="{{ route('books.edit', $b->id) }}"
                                class=" me-4 bg-black text-white px-2 py-1 rounded-lg">Edit</a>
                            <form action="{{ route('books.destroy', $b->id) }}" method="POST"
                                onsubmit="return confirm(`Are you sure to delete?`)">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="DELETE" class=" bg-red-500 text-white px-2 py-1 rounded-lg">
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        <div class="m-2">
            {{ $booksData->links() }}
        </div>
    </div>


    <!-- stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
@endsection
