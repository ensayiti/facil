<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fácil | Feature</title>
    {{-- CSS --}}
    @vite('resources/css/app.css')

    {{-- AlpineJS --}}
    <script src="https://unpkg.com/alpinejs" defer></script>

    {{-- TailwindCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- Header --}}
    <section class="w-full px-3 antialiased bg-gradient-to-br from-gray-900 via-black to-gray-800 lg:px-6">
        <div class="mx-auto max-w-7xl">
            <nav class="flex items-center w-full h-24 select-none" x-data="{ showMenu: false }">
                <div
                    class="relative flex flex-wrap items-start justify-between w-full mx-auto font-medium md:items-center md:h-24 md:justify-between">
                    <a href="/" class="flex items-center w-1/4 py-4 pl-6 pr-4 font-extrabold text-white md:py-0">
                        <span class="flex items-center justify-center flex-shrink-0 w-8 h-8 text-white">
                            <svg class="lucide lucide-cup-soda w-auto h-5 -translate-y-px"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 8 1.75 12.28a2 2 0 0 0 2 1.72h4.54a2 2 0 0 0 2-1.72L18 8" />
                                <path d="M5 8h14" />
                                <path d="M7 15a6.47 6.47 0 0 1 5 0 6.47 6.47 0 0 0 5 0" />
                                <path d="m12 8 1-6h2" />
                            </svg>
                        </span>
                        <span>fácil</span>
                    </a>
                    <div :class="{ 'flex': showMenu, 'hidden md:flex': !showMenu }"
                        class="absolute z-50 flex-col items-center justify-center w-full h-auto px-2 text-center text-gray-400 -translate-x-1/2 border-0 border-gray-700 rounded-full md:border md:w-auto md:h-10 left-1/2 md:flex-row md:items-center">
                        <a href="/"
                            class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-2 lg:mx-3 md:text-center">
                            <span>Home</span>
                            <span
                                class="absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                        </a>
                        <a href="/feature"
                            class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-2 lg:mx-3 md:text-center">
                            <span>Features</span>
                            <span
                                class="absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                        </a>
                        <a href="/contact"
                            class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-2 lg:mx-3 md:text-center">
                            <span>Contact</span>
                            <span
                                class="absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                        </a>
                    </div>
                    <div class="fixed top-0 left-0 z-40 items-center hidden w-full h-full p-3 text-sm bg-gray-900 bg-opacity-50 md:w-auto md:bg-transparent md:p-0 md:relative md:flex"
                        :class="{ 'flex': showMenu, 'hidden': !showMenu }">
                        <div
                            class="flex-col items-center w-full h-full p-3 overflow-hidden bg-black bg-opacity-50 rounded-lg select-none md:p-0 backdrop-blur-lg md:h-auto md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                            <div
                                class="flex flex-col items-center justify-end w-full h-full pt-2 md:w-full md:flex-row md:py-0">
                                <a href="/admin" class="w-full py-5 mr-0 text-center text-gray-200 md:py-3 md:w-auto hover:text-white md:pl-0 md:mr-3 lg:mr-5">Sign In</a>
                                <a href="#_" class="inline-flex items-center justify-center w-full px-4 py-3 md:py-1.5 font-medium leading-6 text-center whitespace-no-wrap transition duration-150 ease-in-out border border-transparent md:mr-1 text-gray-600 md:w-auto bg-white rounded-lg md:rounded-full hover:bg-white focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div @click="showMenu = !showMenu"
                        class="absolute right-0 z-50 flex flex-col items-end translate-y-1.5 w-10 h-10 p-2 mr-4 rounded-full cursor-pointer md:hidden hover:bg-gray-200/10 hover:bg-opacity-10"
                        :class="{ 'text-gray-400': showMenu, 'text-gray-100': !showMenu }">
                        <svg class="w-6 h-6" x-show="!showMenu" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" x-cloak>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                </div>
            </nav>

            {{-- Feature --}}
            <div class="container max-w-6xl mx-auto py-10 min-h-screen">
                {{-- <h2 class="text-4xl font-bold tracking-tight text-center text-white">Features</h2> --}}
                <h2 x-data="{
                    startingAnimation: { opacity: 0, scale: 4, duration: 0.5 },
                    endingAnimation: { opacity: 1, scale: 1, stagger: 0.07, duration: 1, ease: 'expo.out' },
                    addCNDScript: true,
                    animateText() {
                        $el.classList.remove('invisible');
                        gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                    },
                    splitCharactersIntoSpans(element) {
                        text = element.innerHTML;
                        modifiedHTML = [];
                        for (var i = 0; i < text.length; i++) {
                            attributes = '';
                            if(text[i].trim()){ attributes = 'class=\'inline-block\''; }
                            modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
                        }
                        element.innerHTML = modifiedHTML.join('');
                    },
                    addScriptToHead(url) {
                        script = document.createElement('script');
                        script.src = url;
                        document.head.appendChild(script);
                    }
                }"
                x-init="
                    splitCharactersIntoSpans($el);
                    if(addCNDScript){
                        addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                    }
                    gsapInterval = setInterval(function(){
                        if(typeof gsap !== 'undefined'){
                            animateText();
                            clearInterval(gsapInterval);
                        }
                    }, 5);
                "
                class="invisible block custom-font text-4xl font-bold tracking-tight text-center text-white">Features</h2>
                <p class="mt-2 text-lg text-center text-gray-200">Check out our list of awesome features below.</p>
                <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
                    <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-transparent border border-white rounded-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-black bg-white rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
                                <circle cx="6" cy="14" r="3" />
                                <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-white">Certifications</h4>
                        <p class="text-base text-center text-gray-200">Each of our plan will provide you and your team with certifications.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-transparent border border-white rounded-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-black bg-white rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 8a3 3 0 0 1 0 6" />
                                <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                                <path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-white">Notifications</h4>
                        <p class="text-base text-center text-gray-200">Send out notifications to all your customers to keep them engaged.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-transparent border border-white rounded-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-black bg-white rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                <line x1="12" y1="12" x2="20" y2="7.5" />
                                <line x1="12" y1="12" x2="12" y2="21" />
                                <line x1="12" y1="12" x2="4" y2="7.5" />
                                <line x1="16" y1="5.25" x2="8" y2="9.75" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-white">Bundles</h4>
                        <p class="text-base text-center text-gray-200">High-quality bundles of awesome tools to help you out.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-transparent border border-white rounded-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-black bg-white rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 9l3 3l-3 3" />
                                <line x1="13" y1="15" x2="16" y2="15" />
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-white">Developer Tools</h4>
                        <p class="text-base text-center text-white">Developer tools to help grow your application and keep it up-to-date.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-transparent border border-white rounded-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-black bg-white rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="9.5" y1="11" x2="9.51" y2="11" />
                                <line x1="14.5" y1="11" x2="14.51" y2="11" />
                                <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                                <path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-white">Building Blocks</h4>
                        <p class="text-base text-center text-gray-200">The right kind of building blocks to take your company to the next level.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-transparent border border-white rounded-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-black bg-white rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="15" y1="5" x2="15" y2="7" />
                                <line x1="15" y1="11" x2="15" y2="13" />
                                <line x1="15" y1="17" x2="15" y2="19" />
                                <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-white">Coupons</h4>
                        <p class="text-base text-center text-gray-200">Coupons system to provide special offers and discounts for your app.</p>
                    </div>
                </div>
            </div>
            {{-- Feature --}}
        </div>
    </section>
    {{-- Header --}}

    {{-- Footer --}}
    <section class="antialiased bg-black border-gray-500 border-t body-font" {!! $attributes ?? '' !!}>
        <div class="container flex flex-col items-center px-8 py-4 mx-auto max-w-7xl sm:flex-row">
            <a href="#_" class="text-xl font-black leading-none text-white select-none logo">fácil</a>
            <p class="mt-4 text-sm text-white sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">&copy; 2023 <a href="https://ensayiti.com">ensayiti</a>.
            </p>
            <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
                <a href="https://facebook.com/itstaureans" class="text-gray-400 hover:text-white transition duration-300">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="https://instagram.com/ensayiti" class="text-gray-400 hover:text-white transition duration-300">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="https://twitter.com/ensayiti" class="text-gray-400 hover:text-white transition duration-300">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>

                <a href="https://github.com/ensayiti" class="text-gray-400 hover:text-white transition duration-300">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
            </span>
        </div>
    </section>
    {{-- Footer --}}
</body>

</html>
