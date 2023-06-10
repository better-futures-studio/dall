@extends('layouts.app')

@section('content')

    <style>
        @media(prefers-color-scheme: dark){ .bg-dots{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(200,200,255,0.15)'/%3E%3C/svg%3E");}}@media(prefers-color-scheme: light){.bg-dots{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,50,0.10)'/%3E%3C/svg%3E")}}
    </style>

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">
        
        @if (Route::has('login'))
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                @auth
                    <a href="{{ route('home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex justify-center">
                <svg class="w-auto h-16 text-indigo-600 bg-gray-100 dark:bg-gray-900" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/>
                </svg>
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:gap-8">
                    <a href="https://daisyui.com/docs" target="_blank" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                        <div>
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50 dark:bg-indigo-900/20">
                                <svg class="text-indigo-400 fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><path d="M115,103.2c-7.3-15.4-15-34.6-15-47.2a28,28,0,0,1,56,0c0,12.6-7.7,31.8-15,47.2a28,28,0,0,0-26,0Zm26,0Zm-41,23.6Zm13-22.4ZM51.6,116.2c10.9,6.3,31.4,9.3,48.4,10.6a27.8,27.8,0,0,1,3.8-12.8,26.5,26.5,0,0,1,9.2-9.6C103.3,90.3,90.5,74,79.6,67.8a28,28,0,0,0-28,48.4ZM103.8,142a27.8,27.8,0,0,1-3.8-12.8c-17,1.3-37.5,4.3-48.4,10.6a28,28,0,1,0,28,48.4c10.9-6.2,23.7-22.5,33.4-36.6A26.5,26.5,0,0,1,103.8,142ZM115,152.8Zm26,0ZM128,156a27.2,27.2,0,0,1-13-3.2c-7.3,15.4-15,34.6-15,47.2a28,28,0,0,0,56,0c0-12.6-7.7-31.8-15-47.2A27.2,27.2,0,0,1,128,156Zm76.4-16.2c-10.9-6.3-31.4-9.3-48.4-10.6a27.8,27.8,0,0,1-3.8,12.8,26.5,26.5,0,0,1-9.2,9.6c9.7,14.1,22.5,30.4,33.4,36.6a28,28,0,0,0,28-48.4Zm-48.4-13Zm-13-22.4Zm9.2,9.6a27.8,27.8,0,0,1,3.8,12.8c17-1.3,37.5-4.3,48.4-10.6a28,28,0,0,0-28-48.4C165.5,74,152.7,90.3,143,104.4A26.5,26.5,0,0,1,152.2,114Z" opacity="0.2"></path><path d="M208.4,132.8a56.9,56.9,0,0,0-11.5-4.8,56.9,56.9,0,0,0,11.5-4.8,36,36,0,0,0-36-62.4,58.7,58.7,0,0,0-9.9,7.5A58.6,58.6,0,0,0,164,56a36,36,0,0,0-72,0,58.6,58.6,0,0,0,1.5,12.3,58.7,58.7,0,0,0-9.9-7.5,36,36,0,0,0-36,62.4A56.9,56.9,0,0,0,59.1,128a56.9,56.9,0,0,0-11.5,4.8,36,36,0,0,0,36,62.4,58.7,58.7,0,0,0,9.9-7.5A58.6,58.6,0,0,0,92,200a36,36,0,0,0,72,0,58.6,58.6,0,0,0-1.5-12.3,58.7,58.7,0,0,0,9.9,7.5,36,36,0,0,0,36-62.4ZM108,128a20,20,0,1,1,20,20A20.1,20.1,0,0,1,108,128Zm72.4-53.3a20,20,0,0,1,20,34.6c-6.8,3.9-20.1,7-37.8,8.9a36.2,36.2,0,0,0-8.8-15.3C164.3,88.5,173.6,78.6,180.4,74.7ZM128,36a20.1,20.1,0,0,1,20,20c0,7.8-3.9,20.9-11.2,37.1a35.8,35.8,0,0,0-17.6,0C111.9,76.9,108,63.8,108,56A20.1,20.1,0,0,1,128,36ZM48.3,82a20,20,0,0,1,27.3-7.3c6.8,3.9,16.1,13.8,26.6,28.2a36.2,36.2,0,0,0-8.8,15.3c-17.7-1.9-31-5-37.8-8.9A20,20,0,0,1,48.3,82Zm27.3,99.3a20,20,0,0,1-20-34.6c6.8-3.9,20.1-7,37.8-8.9a36.2,36.2,0,0,0,8.8,15.3C91.7,167.5,82.4,177.4,75.6,181.3ZM128,220a20.1,20.1,0,0,1-20-20c0-7.8,3.9-20.9,11.2-37.1a35.8,35.8,0,0,0,17.6,0c7.3,16.2,11.2,29.3,11.2,37.1A20.1,20.1,0,0,1,128,220Zm79.7-46a20.1,20.1,0,0,1-27.3,7.3c-6.8-3.9-16.1-13.8-26.6-28.2a36.2,36.2,0,0,0,8.8-15.3c17.7,1.9,31,5,37.8,8.9A20,20,0,0,1,207.7,174Z"></path></svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">daisyUI</h2>

                            <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                daisyUI adds component class names to Tailwind CSS so you can make beautiful websites faster than ever.
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center w-6 h-6 mx-6 shrink-0 stroke-indigo-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                    <a href="https://alpinejs.dev/docs" target="_blank" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                        <div>
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50 dark:bg-indigo-900/20">
                                <svg class="text-indigo-400 fill-current w-7 h-7" viewBox="0 0 55 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m42.753 0 12.112 12.06-12.112 12.058L30.641 12.06 42.753 0Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="m12.473 0 25.11 25H13.358L.36 12.06 12.473 0Z" fill="currentColor"/></svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">AlpineJS</h2>

                            <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                AlpineJS is a lightweight JavaScript framework that allows you to add interactivity to your HTML using simple declarative syntax.
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center w-6 h-6 mx-6 shrink-0 stroke-indigo-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                    <a href="https://laravel.com/docs" target="_blank" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                        <div>
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50 dark:bg-indigo-900/20">
                                <svg class="text-indigo-400 translate-x-px translate-y-px fill-current w-7 h-7" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                                
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel</h2>

                            <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                Laravel is a free and open-source PHP web framework that allows developers to build web applications quickly and easily.
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center w-6 h-6 mx-6 shrink-0 stroke-indigo-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                    <a href="https://laravel-livewire.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                        <div>
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50 dark:bg-indigo-900/20">
                                <svg class="text-indigo-400 translate-x-px translate-y-px fill-current w-7 h-7" viewBox="0 0 40 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M37.47 29.484c-.717 1.084-1.262 2.42-2.72 2.42-2.455 0-2.588-3.784-5.044-3.784-2.456 0-2.323 3.785-4.777 3.785-2.455 0-2.588-3.785-5.043-3.785-2.456 0-2.324 3.785-4.778 3.785-2.455 0-2.587-3.785-5.043-3.785s-2.323 3.785-4.778 3.785c-.771 0-1.313-.374-1.77-.887C1.76 27.962.75 24.38.75 20.55.75 9.34 9.41.25 20.095.25c10.683 0 19.344 9.089 19.344 20.3 0 3.206-.708 6.238-1.969 8.934Z" fill="currentColor"/><mask id="a-livewire" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="23" width="27" height="22"><path d="M12.37 27.48v8.408a2.732 2.732 0 0 1-5.465 0v-10.15c.51-.937 1.093-1.747 2.143-1.747 1.71 0 2.307 2.148 3.321 3.489Zm10.32.438v13.296a3.036 3.036 0 0 1-6.07 0V26.165c.57-1.102 1.16-2.174 2.368-2.174 1.912 0 2.433 2.687 3.703 3.927Zm9.715-.244v9.653a2.732 2.732 0 1 1-5.465 0V25.462c.476-.814 1.043-1.471 1.988-1.471 1.795 0 2.364 2.367 3.477 3.683Z" fill="white"/></mask><g mask="url(#a-livewire)"><path d="M12.37 27.48v8.408a2.732 2.732 0 0 1-5.465 0v-10.15c.51-.937 1.093-1.747 2.143-1.747 1.71 0 2.307 2.148 3.321 3.489Zm10.32.438v13.296a3.036 3.036 0 0 1-6.07 0V26.165c.57-1.102 1.16-2.174 2.368-2.174 1.912 0 2.433 2.687 3.703 3.927Zm9.715-.244v9.653a2.732 2.732 0 1 1-5.465 0V25.462c.476-.814 1.043-1.471 1.988-1.471 1.795 0 2.364 2.367 3.477 3.683Z" fill="currentColor"/></g><mask id="b-livewire" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="19" width="27" height="14"><path d="M12.37 30.057c-.485-.594-1.059-1.034-1.889-1.034-1.97 0-2.332 2.483-3.576 3.602v-10.71a2.732 2.732 0 1 1 5.464 0v8.142Zm10.32.191c-.516-.687-1.12-1.225-2.037-1.225-2.192 0-2.393 3.073-4.034 3.923V28.21a3.036 3.036 0 0 1 6.072 0v2.038Zm9.715-.531c-.42-.414-.92-.694-1.58-.694-2.124 0-2.38 2.884-3.884 3.837v-9.613a2.732 2.732 0 1 1 5.464 0v6.47Z" fill="white"/></mask><g mask="url(#b-livewire)"><path d="M12.37 30.057c-.485-.594-1.059-1.034-1.889-1.034-1.97 0-2.332 2.483-3.576 3.602v-10.71a2.732 2.732 0 1 1 5.464 0v8.142Zm10.32.191c-.516-.687-1.12-1.225-2.037-1.225-2.192 0-2.393 3.073-4.034 3.923V28.21a3.036 3.036 0 0 1 6.072 0v2.038Zm9.715-.531c-.42-.414-.92-.694-1.58-.694-2.124 0-2.38 2.884-3.884 3.837v-9.613a2.732 2.732 0 1 1 5.464 0v6.47Z" fill="black" fill-opacity="0.298514"/></g><path fill-rule="evenodd" clip-rule="evenodd" d="M37.47 29.484c-.717 1.084-1.262 2.42-2.72 2.42-2.455 0-2.588-3.784-5.044-3.784-2.456 0-2.323 3.785-4.777 3.785-2.455 0-2.588-3.785-5.043-3.785-2.456 0-2.324 3.785-4.778 3.785-2.455 0-2.587-3.785-5.043-3.785s-2.323 3.785-4.778 3.785c-.771 0-1.313-.374-1.77-.887C1.76 27.962.75 24.38.75 20.55.75 9.34 9.41.25 20.095.25c10.683 0 19.344 9.089 19.344 20.3 0 3.206-.708 6.238-1.969 8.934Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M33.284 31.5c5.07-7.541 5.2-15.906.393-25.095a20.248 20.248 0 0 1 5.762 14.188c0 3.194-.734 6.214-2.04 8.9-.744 1.08-1.31 2.412-2.821 2.412-.517 0-.935-.156-1.294-.405Z" fill="black" fill-opacity="0.15"/><path fill-rule="evenodd" clip-rule="evenodd" d="M19.057 25.614c6.728 0 9.56-3.902 9.56-9.445 0-5.542-4.28-10.643-9.56-10.643s-9.56 5.101-9.56 10.643c0 5.543 2.833 9.445 9.56 9.445Z" fill="white"/><path d="M16.487 16.483c1.98 0 3.585-1.771 3.585-3.957 0-2.185-1.605-3.956-3.585-3.956s-3.585 1.771-3.585 3.956c0 2.186 1.605 3.957 3.585 3.957Z" fill="currentColor"/><path d="M15.89 13.44c.99 0 1.792-.818 1.792-1.827 0-1.008-.802-1.826-1.792-1.826s-1.793.818-1.793 1.826c0 1.009.803 1.827 1.793 1.827Z" fill="white"/></svg> 
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Livewire</h2>

                            <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                Livewire is a tool that simplifies the process of creating interactive and dynamic user interfaces using PHP and Laravel.
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center w-6 h-6 mx-6 shrink-0 stroke-indigo-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-center px-0 mt-16 sm:items-center sm:justify-between">
                <div class="text-sm text-center text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell" class="inline-flex items-center group hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 mr-1 -mt-px stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>
                <div class="ml-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
@endsection
