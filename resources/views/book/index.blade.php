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
                        <img src="https://www.material-tailwind.com/img/team-3.jpg" alt="profile-picture" />
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

                </div>
            @endforeach
        </div>
    </div>


    <!-- stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
@endsection
