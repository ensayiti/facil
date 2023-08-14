@extends('layouts.default')

@section('content')
    <section class="bg-foreground border-b flex justify-center items-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center md:py-32 lg:py-36 lg:px-12">
            <h1 class="mb-4 text-8xl font-extrabold tracking-tight leading-none text-primary-foreground md:text-9xl lg:text-9xl">fácil</h1>
            <p class="mb-8 text-lg font-normal text-primary-foreground lg:text-xl sm:px-16 xl:px-48"><span class="underline">fácil</span> is a web application built on top of Laravel, TailwindCSS, and Vite.</p>

            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/admin" class="inline-flex justify-center items-center align-middle py-2.5 px-2.5 text-base font-medium text-center bg-primary-foreground text-foreground rounded-lg hover:bg-transparent hover:text-primary-foreground hover:outline-dashed transition-all duration-300">
                    Demo
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mouse-pointer-click ml-1 w-5 h-5"><path d="m9 9 5 12 1.774-5.226L21 14 9 9z"/><path d="m16.071 16.071 4.243 4.243"/><path d="m7.188 2.239.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656-2.12 2.122"/></svg>
                </a>
            </div>
        </div>
    </section>
@stop
