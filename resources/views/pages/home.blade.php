@extends('layouts.default')

@section('content')
    <section class="bg-foreground border-b flex justify-center items-center">
        <div class="py-32 px-4 mx-auto max-w-screen-xl text-center sm:py-32 md:py-32 lg:py-28 lg:px-12">
            <h1 class="mb-4 text-8xl font-extrabold tracking-tight leading-none text-primary-foreground md:text-9xl lg:text-9xl">fácil</h1>
            <p class="mb-8 text-lg font-normal text-primary-foreground lg:text-xl sm:px-16 xl:px-48"><span class="underline">fácil</span> is a web application built on top of Laravel, TailwindCSS, and Vite.</p>

            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/admin" class="inline-flex justify-center items-center align-middle btn sm:btn-wide rounded-xl hover:btn-primary">Dashboard</a>
            </div>
        </div>
    </section>

    <section class="bg-foreground">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full rounded-xl" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="Image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-foreground">Let's build with facil!</h2>
                <p class="mb-6 font-light text-primary-foreground md:text-lg">Facil helps you to manage and work easier more than you expect.</p>
                <a href="/admin" class="btn hover:btn-primary inline-flex items-center">More Details</a>
            </div>
        </div>
    </section>

    <section class="bg-foreground">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-8">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-foreground">Designed for business teams like yours</h2>
                <p class="text-primary-foreground sm:text-xl">Here at blablablablabla</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="bg-card rounded-xl p-2">
                    <h3 class="flex justify-center items-center text-primary mb-1 text-xl font-bold">
                        Easy to Use
                    </h3>
                    <p class="text-primary tracking-tighter leading-tight">Plan it, create it, launch it. Collaborate seamlessly with all  the organization and hit your marketing goals every month with our marketing plan.</p>
                </div>

                <div class="bg-card rounded-xl p-2">
                    <h3 class="flex justify-center items-center text-primary mb-1 text-xl font-bold">
                        Customizable
                    </h3>
                    <p class="text-primary tracking-tighter leading-tight">Plan it, create it, launch it. Collaborate seamlessly with all  the organization and hit your marketing goals every month with our marketing plan.</p>
                </div>

                <div class="bg-card rounded-xl p-2">
                    <h3 class="flex justify-center items-center text-primary mb-1 text-xl font-bold">
                        Fast
                    </h3>
                    <p class="text-primary tracking-tighter leading-tight">Plan it, create it, launch it. Collaborate seamlessly with all  the organization and hit your marketing goals every month with our marketing plan.</p>
                </div>
            </div>
        </div>
    </section>
@stop
