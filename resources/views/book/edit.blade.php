@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="container mx-auto px-40 mt-5">
        <form class="w-full max-w-lgaction " action=" {{ route('books.update', $book->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="book_uniq_id" value="{{ $book->book_uniq_id }}">
            <input type="hidden" name="created_timetick" value="{{ $book->created_timetick }}">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Book Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" name="book_name" type="text" placeholder="your book"
                        value="{{ $book->book_name }}">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Publisher Name
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state" name="publisher_id">
                            @foreach ($publishers as $p)
                                <option value="{{ $p->id }}" @if ($p->id === $book->publisher_id) selected @endif>
                                    {{ $p->name }}</option>
                            @endforeach

                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Content Owner Name
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state" name="co_id">
                            @foreach ($co_owners as $c)
                                <option value="{{ $c->id }}" @if ($c->id === $book->co_id) selected @endif>
                                    {{ $c->name }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>

                    </div>
                    <small class=" text-sm  text-yellow-300 p-2 bg-gray-100 mt-3">warning: if you choose another
                        owner, you
                        wiil no longer
                        access this book</small>
                </div>
            </div>
            <div class="flex flex-wrap  -mx-3 mb-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Cover Photo Link
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="file" name="cover_photo" placeholder="https://www....com....png">

                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Price (MMK)
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="number" name="price" placeholder="5000, ...." value="{{ $book->price }}">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">


            </div>
            <div class="flex justify-center">
                <div class="mt-4 px-3 py-2 rounded-md bg-blue-500 text-white">
                    <button type="submit">Create your book</button>
                </div>
            </div>
        </form>
    </div>
@endsection
