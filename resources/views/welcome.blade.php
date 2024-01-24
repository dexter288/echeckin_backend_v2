<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-checkin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="w-full">
        <x-welcome-header/>
    </div>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8 ">
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="#"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-white-50  flex items-center justify-center rounded-full">
                                <svg fill="#6d6969" width="135px" height="135px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#6d6969">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M2,8V3A1,1,0,0,1,3,2H8A1,1,0,0,1,8,4H4V8A1,1,0,0,1,2,8ZM3,22H8a1,1,0,0,0,0-2H4V16a1,1,0,0,0-2,0v5A1,1,0,0,0,3,22Zm18-7a1,1,0,0,0-1,1v4H16a1,1,0,0,0,0,2h5a1,1,0,0,0,1-1V16A1,1,0,0,0,21,15ZM21,2H16a1,1,0,0,0,0,2h4V8a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM12,12A3,3,0,1,0,9,9,3,3,0,0,0,12,12Zm-1,2a4,4,0,0,0-4,4H17a4,4,0,0,0-4-4Z">
                                        </path>
                                    </g>
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Visitor ID Smart
                                Scanner</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Welcome to our website! Our Visitor ID Smart Scanner is a cutting-edge solution designed
                                to enhance your visitor management process. Whether you're a facility manager, event
                                organizer, or business owner, our smart scanner ensures a seamless and secure
                                identification experience for your visitors.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="#"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-white-50  flex items-center justify-center rounded-full">
                                <svg fill="#545454" width="64px" height="64px" viewBox="0 0 32 32" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#545454">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>users</title>
                                        <path
                                            d="M16 21.916c-4.797 0.020-8.806 3.369-9.837 7.856l-0.013 0.068c-0.011 0.048-0.017 0.103-0.017 0.16 0 0.414 0.336 0.75 0.75 0.75 0.357 0 0.656-0.25 0.731-0.585l0.001-0.005c0.875-3.885 4.297-6.744 8.386-6.744s7.511 2.859 8.375 6.687l0.011 0.057c0.076 0.34 0.374 0.59 0.732 0.59 0 0 0.001 0 0.001 0h-0c0.057-0 0.112-0.007 0.165-0.019l-0.005 0.001c0.34-0.076 0.59-0.375 0.59-0.733 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005c-1.045-4.554-5.055-7.903-9.849-7.924h-0.002zM9.164 10.602c0 0 0 0 0 0 2.582 0 4.676-2.093 4.676-4.676s-2.093-4.676-4.676-4.676c-2.582 0-4.676 2.093-4.676 4.676v0c0.003 2.581 2.095 4.673 4.675 4.676h0zM9.164 2.75c0 0 0 0 0 0 1.754 0 3.176 1.422 3.176 3.176s-1.422 3.176-3.176 3.176c-1.754 0-3.176-1.422-3.176-3.176v0c0.002-1.753 1.423-3.174 3.175-3.176h0zM22.926 10.602c2.582 0 4.676-2.093 4.676-4.676s-2.093-4.676-4.676-4.676c-2.582 0-4.676 2.093-4.676 4.676v0c0.003 2.581 2.095 4.673 4.675 4.676h0zM22.926 2.75c1.754 0 3.176 1.422 3.176 3.176s-1.422 3.176-3.176 3.176c-1.754 0-3.176-1.422-3.176-3.176v0c0.002-1.753 1.423-3.174 3.176-3.176h0zM30.822 19.84c-0.878-3.894-4.308-6.759-8.406-6.759-0.423 0-0.839 0.031-1.246 0.089l0.046-0.006c-0.049 0.012-0.092 0.028-0.133 0.047l0.004-0.002c-0.751-2.129-2.745-3.627-5.089-3.627-2.334 0-4.321 1.485-5.068 3.561l-0.012 0.038c-0.017-0.004-0.030-0.014-0.047-0.017-0.359-0.053-0.773-0.084-1.195-0.084-0.002 0-0.005 0-0.007 0h0c-4.092 0.018-7.511 2.874-8.392 6.701l-0.011 0.058c-0.011 0.048-0.017 0.103-0.017 0.16 0 0.414 0.336 0.75 0.75 0.75 0.357 0 0.656-0.25 0.731-0.585l0.001-0.005c0.737-3.207 3.56-5.565 6.937-5.579h0.002c0.335 0 0.664 0.024 0.985 0.070l-0.037-0.004c-0.008 0.119-0.036 0.232-0.036 0.354 0.006 2.987 2.429 5.406 5.417 5.406s5.411-2.419 5.416-5.406v-0.001c0-0.12-0.028-0.233-0.036-0.352 0.016-0.002 0.031 0.005 0.047 0.001 0.294-0.044 0.634-0.068 0.98-0.068 0.004 0 0.007 0 0.011 0h-0.001c3.379 0.013 6.203 2.371 6.93 5.531l0.009 0.048c0.076 0.34 0.375 0.589 0.732 0.59h0c0.057-0 0.112-0.007 0.165-0.019l-0.005 0.001c0.34-0.076 0.59-0.375 0.59-0.733 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005zM16 18.916c-0 0-0 0-0.001 0-2.163 0-3.917-1.753-3.917-3.917s1.754-3.917 3.917-3.917c2.163 0 3.917 1.754 3.917 3.917 0 0 0 0 0 0.001v-0c-0.003 2.162-1.754 3.913-3.916 3.916h-0z">
                                        </path>
                                    </g>
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Visitor Management</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Explore the features and benefits of our Visitor ID Smart Scanner to revolutionize the
                                way you manage and track visitors. From advanced identification technologies to
                                real-time analytics, our solution is tailored to meet your unique needs.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="#"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-white-50  flex items-center justify-center rounded-full">
                                <svg height="75px" width="75px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 508.4 508.4" xml:space="preserve" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <circle style="fill:#54C0EB;" cx="254" cy="254" r="254"></circle>
                                        <path style="fill:#FFFFFF;"
                                            d="M473.2,382.4c22-37.6,34.8-81.6,34.8-128.4C508,113.6,394.4,0,254,0c-43.6,0-84.8,11.2-120.8,30.4 V382h340V382.4z">
                                        </path>
                                        <path style="fill:#E6E9EE;"
                                            d="M254,0c-32.8,0-64,6.4-92.8,17.6v336.8h295.6h30.8c13.2-30.8,20.8-64.8,20.8-100.4 C508,113.6,394.4,0,254,0z">
                                        </path>
                                        <g>
                                            <path style="fill:#F1543F;"
                                                d="M226.4,214.4l17.2,16.4c-2.4,1.2-4.4,3.2-5.6,5.6l-12.8-12l0,0C226,221.2,226.4,218,226.4,214.4z">
                                            </path>
                                            <path style="fill:#F1543F;"
                                                d="M300,171.2l-38.8,62.4c-1.6-2-4-3.6-6.8-4.4l39.6-62.8C295.2,168.8,297.2,170.4,300,171.2z">
                                            </path>
                                            <path style="fill:#F1543F;"
                                                d="M360.4,206.4c-2.4,1.2-4.4,3.2-5.6,5.6l-42-42.4c2-1.6,4-3.6,4.8-6.4L360.4,206.4z">
                                            </path>
                                            <path style="fill:#F1543F;"
                                                d="M422.8,118.4l-46.4,90c-2-2-4.4-3.2-7.2-3.6l46.4-90L422.8,118.4z">
                                            </path>
                                        </g>
                                        <g>
                                            <circle style="fill:#FF7058;" cx="419.2" cy="120" r="14"></circle>
                                            <circle style="fill:#FF7058;" cx="366.8" cy="218.4" r="14"></circle>
                                            <circle style="fill:#FF7058;" cx="304.8" cy="158.4" r="14">
                                            </circle>
                                            <circle style="fill:#FF7058;" cx="250.4" cy="242.8" r="14">
                                            </circle>
                                        </g>
                                        <g>
                                            <path style="fill:#2C9984;"
                                                d="M243.6,115.6l77.6,147.2c-2.8,0.4-5.2,2-7.2,3.6l-74-140.8l-35.2,14c-2-2.4-3.6-4.4-5.6-6.4 L243.6,115.6z">
                                            </path>
                                            <path style="fill:#2C9984;"
                                                d="M361.6,144.4l-30.4,120c-2-1.2-4.4-2-7.2-2h-0.4l30.4-120c2,1.2,4.4,2,7.2,2 C361.2,144.4,361.2,144.4,361.6,144.4z">
                                            </path>
                                            <path style="fill:#2C9984;"
                                                d="M440.4,202.8c-2.4,1.2-4.4,3.2-5.6,5.6l-67.2-65.6c2.4-1.2,4.4-3.2,5.6-5.6L440.4,202.8z">
                                            </path>
                                        </g>
                                        <g>
                                            <circle style="fill:#4CDBC4;" cx="447.2" cy="214.8" r="14">
                                            </circle>
                                            <circle style="fill:#4CDBC4;" cx="360.8" cy="130.4" r="14">
                                            </circle>
                                            <circle style="fill:#4CDBC4;" cx="324" cy="276.4" r="14">
                                            </circle>
                                            <circle style="fill:#4CDBC4;" cx="242" cy="120.8" r="14">
                                            </circle>
                                        </g>
                                        <g>
                                            <path style="fill:#E6E9EE;"
                                                d="M66.8,425.6c1.2,1.2,2.4,2.8,3.6,4C69.2,428,68,426.8,66.8,425.6L66.8,425.6z">
                                            </path>
                                            <path style="fill:#E6E9EE;"
                                                d="M201.6,314.8c0,29.2-2,97.2-29.2,180c-24.8-8.4-48-20.4-68.8-35.6l0,0 c-17.2-66.4-18.4-119.2-18.4-144l58-28L201.6,314.8z">
                                            </path>
                                        </g>
                                        <path style="fill:#F9B54C;"
                                            d="M143.6,356h-0.4c-54-26.4-47.6-60.4-47.6-60.4l0,0c0-0.4,0-1.2,0.4-1.6c13.2,16,30,26.8,48,26.8 s34.4-10.8,48-26.8c0,0.4,0.4,1.2,0.4,1.6l0,0C191.6,295.6,197.6,329.6,143.6,356z">
                                        </path>
                                        <polygon style="fill:#F1543F;"
                                            points="164.4,356 122.4,356 130.8,379.6 156,379.6 "></polygon>
                                        <path style="fill:#FF7058;"
                                            d="M172.4,494.4L156,379.6h-25.6L118,468.4C134.8,479.2,153.2,488,172.4,494.4z">
                                        </path>
                                        <g>
                                            <path style="fill:#2B3B4E;"
                                                d="M104,458.8c-17.2-66.4-18.4-119.2-18.4-144l-68,32.4C35.6,392,65.6,430.8,104,458.8z">
                                            </path>
                                            <path style="fill:#2B3B4E;"
                                                d="M103.6,458.8L103.6,458.8c-0.4,0-0.4-0.4-0.8-0.4C103.2,458.4,103.6,458.4,103.6,458.8z">
                                            </path>
                                        </g>
                                        <path style="fill:#FFFFFF;"
                                            d="M95.6,295.6c0,0-6,34,48,60.4c0,0-40.4,3.2-52,40.8C90.8,398.4,68.8,315.6,95.6,295.6z">
                                        </path>
                                        <path style="fill:#FFD05B;"
                                            d="M223.6,203.6c0,52.4-36,117.2-80,117.2c-44.4,0-80-64.8-80-117.2s36-73.2,80-73.2 C187.6,130.8,223.6,151.2,223.6,203.6z">
                                        </path>
                                        <path style="fill:#324A5E;"
                                            d="M115.6,119.6c0,0,64.8-26,98,32.8c35.2,62.8-9.2,130.8-18,136.4c0,0,2.4-10.8,9.2-31.6 c0,0,16-46.4-32-53.6c0,0-46.4-6.4-49.6-16.4c0,0,3.2,16.8,24,20c0,0-47.6-1.2-62.4-18c0,0-20.4,66.8,9.2,102.8 c0,0-50.8-40.8-44.8-104C49.6,188.4,46.8,102,115.6,119.6z">
                                        </path>
                                        <path style="fill:#2B3B4E;"
                                            d="M298.4,361.2l-96.8-46.4c0,29.2-2,97.2-29.2,180c25.6,8.8,52.8,13.6,81.6,13.6c31.6,0,62-6,90-16.4 L298.4,361.2z">
                                        </path>
                                        <path style="fill:#F9B54C;"
                                            d="M410.4,327.2c-4.4-0.4-8,1.6-8.4,5.6V330c0.4-4.4-3.2-6.4-7.6-6.8c-4.4-0.4-8,1.6-8.4,5.6V326 c0.4-4.4-3.2-6.4-7.6-6.8c-2,0-4,0.4-5.6,1.2c-1.6,0.8-2.4,2.4-2.4,4.8l2-38.4c0.4-4.4-3.2-8-7.2-8.4c-4.4-0.4-8.4,3.2-8.4,7.6 l-2.4,56c-3.2-8-7.6-15.2-13.6-18.8c-3.2-2-7.2,0.8-8,4.4c-0.4,1.6-0.4,3.6,0.4,6c0,0,7.6,7.6,6,24c-2,16,16.8,35.2,16.8,35.2 l51.6,2.8l3.2-10.4c3.6-12,5.6-24.8,6.4-37.6L418,334C418,329.2,414.8,327.2,410.4,327.2z">
                                        </path>
                                        <path style="fill:#2B3B4E;"
                                            d="M334.8,494.8c28.8-9.6,55.2-24,78-42.8l6-57.6l-72.8-7.6L334.8,494.8z">
                                        </path>
                                        <path style="fill:#FFFFFF;"
                                            d="M191.6,295.6c0,0,6,34-48,60.4c0,0,40.4,3.2,52,40.8C196,398.4,218,315.6,191.6,295.6z">
                                        </path>
                                    </g>
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Reports and Analytics
                            </h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Automating the visitor registration process produces automated reporting on KPI to aid
                                administrative decision making. This not only saves time but also increases overall
                                efficiency. Management can focus on their core responsibilities rather than spending
                                time on compilations of visitor information
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-white-50  flex items-center justify-center rounded-full">
                                <svg width="75px" height="75px" viewBox="0 0 72 72" id="emoji"
                                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="color">
                                            <polyline fill="#9b9b9a"
                                                points="23.389 53.859 23.389 56.988 19.487 59.95 12.884 59.95 12.884 10.322 58.982 10.322 58.982 59.75 44.726 59.75 48.237 56.329 48.237 15.214 23.389 15.214 23.389 43.468">
                                            </polyline>
                                        </g>
                                        <g id="skin">
                                            <path fill="#fcea2b"
                                                d="M35.3,36.7914v2.214L39.4612,44.13a6.6228,6.6228,0,0,1,.7557,2.7049l.4056,9.1511c.0862,1.7805-.8241,2.72-1.7359,2.72-.97,0-1.7205-.9125-1.8839-2.6318L35.95,47.4148l-6.9159-5.8937a3.2164,3.2164,0,0,1-1.1132-2.3658,5.417,5.417,0,0,1,.7648-2.5812l3.2934-5.9464c1.141-2.2818,2.2558-3.092,3.7619-3.092a2.7144,2.7144,0,0,1,2.681,2.7675Z">
                                            </path>
                                            <path fill="#fcea2b"
                                                d="M26.1488,43.3406,23.92,46.7116,17.5885,49.78a1.42,1.42,0,0,0-.8361,1.7419,1.2361,1.2361,0,0,0,1.6025.8177l6.0345-1.85a5.3711,5.3711,0,0,0,2.1873-1.3919l5.1124-5.1746Z">
                                            </path>
                                            <circle cx="40.9582" cy="23.6777" r="3.2656" fill="#fcea2b"></circle>
                                        </g>
                                        <g id="skin-shadow">
                                            <path fill="#f1b31c"
                                                d="M16.7524,51.5216a1.2361,1.2361,0,0,0,1.6025.8177l6.0346-1.85a5.3735,5.3735,0,0,0,2.1872-1.3919l5.1124-5.1747L29.58,43.7358l-3.9931,4.0417A5.3718,5.3718,0,0,1,23.4,49.1694l-3.7532,1.402Z">
                                            </path>
                                        </g>
                                        <g id="line">
                                            <polyline fill="none" stroke="#000000" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                points="48.237 56.329 48.237 15.214 23.389 15.214 23.389 28.304">
                                            </polyline>
                                            <polyline fill="none" stroke="#000000" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                points="45.386 59.75 58.982 59.75 58.982 10.322 12.884 10.322 12.884 59.95 19.487 59.95 23.389 56.988 23.389 54.201">
                                            </polyline>
                                            <polyline fill="none" stroke="#000000" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                points="45.268 36.922 39.97 36.922 35.323 31.59"></polyline>
                                            <path fill="none" stroke="#000000" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M35.0768,27.5948s-5.7852,1.3531-7.0881,2.2862c-1.6642,1.1919-5.6737,7.1624-5.6737,7.1624">
                                            </path>
                                            <g>
                                                <path fill="none" stroke="#000000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M16.7524,51.5216a1.2361,1.2361,0,0,0,1.6025.8177l6.0345-1.85a5.3711,5.3711,0,0,0,2.1873-1.3919l5.1124-5.1746">
                                                </path>
                                                <path fill="none" stroke="#000000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M26.1488,43.3406,23.92,46.7116,17.5885,49.78a1.42,1.42,0,0,0-.8361,1.7419">
                                                </path>
                                            </g>
                                            <path fill="none" stroke="#000000" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M35.3,36.7914v2.214L39.4612,44.13a6.6228,6.6228,0,0,1,.7557,2.7049l.4056,9.1511c.0862,1.7805-.8241,2.72-1.7359,2.72-.97,0-1.7205-.9125-1.8839-2.6318L35.95,47.4148l-6.9159-5.8937a3.2164,3.2164,0,0,1-1.1132-2.3658,5.417,5.417,0,0,1,.7648-2.5812l3.2934-5.9464c1.141-2.2818,2.2558-3.092,3.7619-3.092a2.7144,2.7144,0,0,1,2.681,2.7675">
                                            </path>
                                            <path fill="none" stroke="#000000" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M37.6925,23.6777a3.2657,3.2657,0,1,1,3.2657,3.2656"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Emergency Preparedness
                            </h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                In case of emergencies, having an accurate record of visitors on-site is crucial for
                                safety and security. A visitor management system provides real-time data on who is
                                present in the facility, enabling quick and efficient evacuation procedures if
                                necessary. This contributes to a safer environment for both employees and visitors </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-start">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell"
                            class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px me-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            &copy; {{ date('Y') }} e-checkin
                        </a>
                    </div>
                </div>

                <div class="ms-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                    Terms of Service | Privacy Policy
                </div>
            </div>
        </div>
    </div>
</body>

</html>
