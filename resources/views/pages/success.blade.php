<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success!</title>
    {{-- CSS --}}
    @vite('resources/css/app.css')

    {{-- AlpineJS --}}
    <script src="https://unpkg.com/alpinejs" defer></script>

    {{-- TailwindCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="w-full min-h-screen antialiased bg-gradient-to-br from-gray-900 via-black to-gray-800">
        <div class="flex justify-center items-center min-h-screen">
            <div class="inline-block text-center">
                <h1 class="text-6xl text-white font-semibold">Thank you!</h1>
                <p class="mt-2 text-white">Your form was successfully submitted.</p>
                <button class="bg-white text-black mt-4 px-2 py-2 rounded-lg border border-white hover:bg-transparent hover:text-white transition duration-300">
                    <a href="/">Back to previous page</a>
                </button>
            </div>
        </div>
    </main>
</body>

</html>
