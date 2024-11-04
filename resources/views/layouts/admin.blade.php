<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/img/LOGO.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Foody</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @stack('style')
</head>

<body class="scroll-smooth">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 ">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <svg viewBox="240.258 83.63 106.038 32.5524" width="106.038" height="32.5524" xmlns="http://www.w3.org/2000/svg">
                            <path d="M 254.314 87.487 L 254.314 91.701 L 245.516 91.701 L 245.516 96.254 L 252.1 96.254 L 252.1 100.345 L 245.516 100.345 L 245.516 109.078 L 240.258 109.078 L 240.258 87.487 L 254.314 87.487 Z M 267.291 109.293 C 265.259 109.293 263.394 108.823 261.691 107.879 C 260.01 106.936 258.667 105.624 257.663 103.943 C 256.678 102.24 256.187 100.333 256.187 98.221 C 256.187 96.109 256.678 94.213 257.663 92.531 C 258.667 90.851 260.01 89.538 261.691 88.595 C 263.394 87.653 265.259 87.181 267.291 87.181 C 269.319 87.181 271.176 87.653 272.856 88.595 C 274.557 89.538 275.89 90.851 276.853 92.531 C 277.839 94.213 278.331 96.109 278.331 98.221 C 278.331 100.333 277.839 102.24 276.853 103.943 C 275.87 105.624 274.537 106.936 272.856 107.879 C 271.176 108.823 269.319 109.293 267.291 109.293 Z M 267.291 104.497 C 269.013 104.497 270.386 103.923 271.41 102.774 C 272.457 101.625 272.979 100.108 272.979 98.221 C 272.979 96.315 272.457 94.798 271.41 93.669 C 270.386 92.521 269.013 91.946 267.291 91.946 C 265.547 91.946 264.152 92.511 263.106 93.639 C 262.082 94.765 261.568 96.294 261.568 98.221 C 261.568 100.128 262.082 101.655 263.106 102.804 C 264.152 103.931 265.547 104.497 267.291 104.497 Z M 291.467 109.293 C 289.438 109.293 287.571 108.823 285.869 107.879 C 284.189 106.936 282.845 105.624 281.841 103.943 C 280.856 102.24 280.365 100.333 280.365 98.221 C 280.365 96.109 280.856 94.213 281.841 92.531 C 282.845 90.851 284.189 89.538 285.869 88.595 C 287.571 87.653 289.438 87.181 291.467 87.181 C 293.497 87.181 295.353 87.653 297.034 88.595 C 298.737 89.538 300.067 90.851 301.033 92.531 C 302.016 94.213 302.509 96.109 302.509 98.221 C 302.509 100.333 302.016 102.24 301.033 103.943 C 300.049 105.624 298.716 106.936 297.034 107.879 C 295.353 108.823 293.497 109.293 291.467 109.293 Z M 291.467 104.497 C 293.19 104.497 294.564 103.923 295.588 102.774 C 296.633 101.625 297.158 100.108 297.158 98.221 C 297.158 96.315 296.633 94.798 295.588 93.669 C 294.564 92.521 293.19 91.946 291.467 91.946 C 289.725 91.946 288.33 92.511 287.285 93.639 C 286.259 94.765 285.746 96.294 285.746 98.221 C 285.746 100.128 286.259 101.655 287.285 102.804 C 288.33 103.931 289.725 104.497 291.467 104.497 Z M 313.524 87.487 C 315.799 87.487 317.788 87.939 319.49 88.841 C 321.193 89.744 322.503 91.014 323.428 92.655 C 324.37 94.275 324.842 96.152 324.842 98.282 C 324.842 100.394 324.37 102.271 323.428 103.912 C 322.503 105.552 321.182 106.822 319.459 107.725 C 317.758 108.627 315.778 109.078 313.524 109.078 L 305.436 109.078 L 305.436 87.487 L 313.524 87.487 Z M 313.185 104.526 C 315.174 104.526 316.721 103.984 317.83 102.896 C 318.936 101.809 319.49 100.273 319.49 98.282 C 319.49 96.294 318.936 94.745 317.83 93.639 C 316.721 92.531 315.174 91.979 313.185 91.979 L 310.694 91.979 L 310.694 104.526 L 313.185 104.526 Z M 346.296 87.487 L 338.823 101.943 L 338.823 109.078 L 333.563 109.078 L 333.563 101.943 L 326.09 87.487 L 332.056 87.487 L 336.239 96.53 L 340.391 87.487 L 346.296 87.487 Z" fill="#131049" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M 294.166 94.99 C 294.196 95.031 294.217 95.078 294.228 95.128 C 294.24 95.177 294.241 95.227 294.233 95.277 C 294.225 95.329 294.206 95.376 294.18 95.418 C 294.153 95.462 294.118 95.499 294.077 95.527 L 293.266 96.107 C 293.14 96.196 293.047 96.32 292.994 96.464 C 292.942 96.608 292.935 96.765 292.973 96.913 L 294.262 95.624 C 294.298 95.587 294.34 95.557 294.387 95.537 C 294.434 95.517 294.485 95.506 294.536 95.506 C 294.588 95.506 294.638 95.514 294.684 95.534 C 294.733 95.553 294.776 95.582 294.812 95.619 C 294.849 95.655 294.876 95.699 294.895 95.745 C 294.915 95.794 294.925 95.845 294.925 95.894 C 294.924 95.947 294.914 95.996 294.894 96.043 C 294.873 96.091 294.843 96.133 294.806 96.169 L 293.517 97.459 C 293.666 97.496 293.823 97.489 293.966 97.435 C 294.111 97.383 294.234 97.288 294.323 97.165 L 294.901 96.353 C 294.963 96.274 295.053 96.22 295.15 96.204 C 295.252 96.19 295.353 96.214 295.434 96.272 C 295.516 96.33 295.571 96.42 295.59 96.517 C 295.608 96.617 295.585 96.719 295.53 96.802 L 294.952 97.612 C 294.728 97.923 294.398 98.141 294.026 98.22 C 293.652 98.299 293.262 98.237 292.932 98.043 L 292.047 98.928 L 293.65 100.533 C 293.721 100.605 293.759 100.703 293.759 100.804 C 293.758 100.904 293.717 101.002 293.646 101.074 C 293.574 101.145 293.478 101.186 293.377 101.188 C 293.274 101.188 293.177 101.149 293.105 101.077 L 291.501 99.474 L 289.898 101.077 C 289.863 101.115 289.82 101.145 289.772 101.165 C 289.727 101.185 289.674 101.195 289.625 101.196 C 289.572 101.196 289.521 101.188 289.474 101.168 C 289.426 101.148 289.384 101.12 289.347 101.083 C 289.31 101.046 289.283 101.003 289.263 100.957 C 289.245 100.909 289.234 100.859 289.234 100.808 C 289.234 100.756 289.245 100.705 289.266 100.658 C 289.287 100.611 289.316 100.569 289.353 100.533 L 290.956 98.928 L 290.336 98.308 C 290.156 98.404 289.942 98.478 289.715 98.505 C 289.484 98.533 289.251 98.509 289.031 98.431 C 288.812 98.355 288.613 98.229 288.45 98.061 C 288.093 97.703 287.888 97.251 287.837 96.819 C 287.787 96.391 287.884 95.935 288.195 95.624 C 288.507 95.311 288.963 95.216 289.389 95.264 C 289.823 95.315 290.275 95.522 290.633 95.879 C 290.799 96.041 290.928 96.238 291.004 96.459 C 291.081 96.679 291.105 96.913 291.077 97.143 C 291.05 97.36 290.984 97.57 290.88 97.762 L 291.501 98.383 L 292.388 97.498 C 292.194 97.168 292.132 96.779 292.211 96.405 C 292.29 96.032 292.507 95.701 292.817 95.479 L 293.628 94.9 C 293.711 94.84 293.816 94.818 293.917 94.835 C 294.017 94.852 294.106 94.907 294.166 94.99 Z M 288.602 96.728 C 288.634 96.99 288.762 97.282 288.996 97.516 C 289.197 97.716 289.421 97.762 289.626 97.738 C 289.848 97.713 290.033 97.604 290.105 97.533 C 290.176 97.461 290.283 97.278 290.31 97.053 C 290.336 96.847 290.289 96.625 290.088 96.424 C 289.853 96.19 289.562 96.061 289.3 96.03 C 289.031 96 288.837 96.071 288.741 96.169 C 288.644 96.267 288.572 96.459 288.602 96.728 Z" fill="#131049" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 266.503 98.469 L 266.503 93.169 C 266.503 92.985 266.567 92.826 266.694 92.698 C 266.82 92.572 266.98 92.507 267.163 92.507 C 267.347 92.507 267.504 92.572 267.633 92.698 C 267.759 92.826 267.825 92.985 267.825 93.169 L 267.825 97.313 L 270.036 96.066 C 270.194 95.969 270.362 95.947 270.537 95.993 C 270.713 96.041 270.847 96.153 270.935 96.319 C 271.03 96.479 271.046 96.646 270.999 96.822 C 270.951 96.996 270.847 97.138 270.687 97.227 L 267.601 98.954 C 267.48 99.067 267.32 99.129 267.156 99.129 C 267.068 99.129 266.983 99.114 266.901 99.081 C 266.82 99.047 266.749 98.999 266.687 98.938 C 266.626 98.876 266.58 98.802 266.547 98.723 C 266.514 98.642 266.5 98.554 266.503 98.469 Z" fill="#131049" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 292.295 108.956 C 291.248 108.998 289.67 108.706 289.67 108.706 C 289.67 108.706 288.646 110.201 287.827 111.112 C 287.483 111.494 283.851 113.204 284.386 115.143 C 285.076 117.633 290.438 115.096 292.295 113.299 C 294.233 111.425 295.108 108.518 295.108 108.518 C 295.108 108.518 293.463 108.909 292.295 108.956 Z" fill="#131049" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 258.685 85.527 L 261.989 89.588" stroke="#131049" stroke-width="3.67321" stroke-linecap="round" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 275.873 85.527 L 272.573 89.588" stroke="#131049" stroke-width="3.67321" stroke-linecap="round" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 267.102 83.63 L 267.452 88.85" stroke="#131049" stroke-width="3.67321" stroke-linecap="round" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 282.968 85.527 L 286.268 89.588" stroke="#131049" stroke-width="3.67321" stroke-linecap="round" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 300.155 85.527 L 296.853 89.588" stroke="#131049" stroke-width="3.67321" stroke-linecap="round" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                            <path d="M 291.384 83.63 L 291.732 88.85" stroke="#131049" stroke-width="3.67321" stroke-linecap="round" style="" transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 "
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow "
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 " role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate " role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <form action="/admin/logout" method="post" class="w-full">
                                        @csrf
                                        <button type="submit" class="block text-start w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                            role="menuitem">Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                        <span
                            class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full ">3</span>
                    </a>
                </li> --}}
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                    </a>
                </li> 
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </aside>

    <div class="p-4 pt-20 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg ">

            @yield('content')
            
        </div>
    </div>



        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Poppins', 'sans-serif'],
                        },
                        colors: {
                            'birumuda': '#D9F4FF',
                            'biru': '#131049',
                            'ping': '#FDCED0',
                            'hijau': '#03543F',
                            'merah': '#CD224C',
                        },
                    },
                },

            };
        </script>
</body>

</html>
