<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Astra Phalanx</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img id="logo" class="w-auto text-white lg:text-[#FF2D20]" src="https://i.ibb.co.com/27w5HDm/Astra-Phalanx.png" alt="AstraPhalanx Logo" />
                        </div>

                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ Auth::user()->type === 'admin'
                                        ? route('adminHome')
                                        : (Auth::user()->type === 'manager'
                                            ? route('manager.home')
                                            : route('home')) }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                    Go to Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="min-h-screen bg-red-500 py-8 px-4 sm:px-8">
                        <!-- Content Section -->
                        <!-- Sidebar (optional) -->
                        <nav class="bg-white shadow-md">
                            <ul class="flex justify-center space-x-6 p-4">
                                <li><a href="#about" class="text-gray-800 hover:text-red-500 font-medium">About Us</a></li>
                                <li><a href="#services" class="text-gray-800 hover:text-red-500  font-medium">Services</a></li>
                                <li><a href="#team" class="text-gray-800 hover:text-red-500  font-medium">Tim</a></li>
                                <li><a href="#faq" class="text-gray-800 hover:text-red-500  font-medium">FAQ</a></li>
                            </ul>
                        </nav>

                        <!-- Main Content -->
                        <section class="lg:col-span-10 bg-white rounded-lg shadow-md p-6">
                            <div class="text-center mb-6">
                                <h2 class="text-3xl sm:text-4xl font-bold text-red-500 mb-4">Welcome To Information System for IT Risk Management By AstraPhalanx</h2>
                                <p class="text-lg sm:text-xl text-gray-600 max-w-4xl mx-auto">Discover the powerful tools and strategies for IT Risk Management with AstraPhalanx. This system is designed to simplify risk assessment, enhance decision-making, and ensure robust protection for your IT infrastructure.</p>
                            </div>

                            <hr/>

                            <!-- About Us Section -->
                            <section id="about" class="py-12 bg-gray-100">
                                <div class="container mx-auto px-6 lg:px-12">
                                  <div class="text-center mb-10">
                                    <h3 class="text-3xl font-bold text-gray-800 mb-4">About Us</h3>
                                    <p class="text-lg text-gray-600">Discover everything about AstraPhalanx Corp.</p>
                                  </div>
                                  <div class="flex flex-wrap items-center">
                                    <!-- Image Section -->
                                    <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0" data-aos="fade-right">
                                      <div class="relative">
                                        <img src="{{ asset('img') }}/mrdiv.gif" alt="AstraPhalanx Animation" class="rounded-lg shadow-lg ">
                                      </div>
                                    </div>
                                    <!-- Content Section -->
                                    <div class="w-full lg:w-1/2 px-4" data-aos="fade-left">
                                      <div class="bg-white rounded-lg shadow-lg p-6 lg:p-10">
                                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">AstraPhalanx</h3>
                                        <p class="text-gray-600 mb-6">
                                          AstraPhalanx is a company founded with the primary mission to protect clients' data and infrastructure through robust and innovative security solutions.
                                        </p>
                                        <ul class="space-y-4">
                                          <li class="flex items-center">
                                            <i class="bx bx-check-double text-blue-600 text-2xl mr-3"></i>
                                            <span class="text-gray-600">
                                              <strong class="text-gray-800">Precision:</strong> Applying protection strategies precisely.
                                            </span>
                                          </li>
                                          <li class="flex items-center">
                                            <i class="bx bx-check-double text-blue-600 text-2xl mr-3"></i>
                                            <span class="text-gray-600">
                                              <strong class="text-gray-800">Protection:</strong> Monitor and detect potential attacks in real-time with rapid response.
                                            </span>
                                          </li>
                                          <li class="flex items-center">
                                            <i class="bx bx-check-double text-blue-600 text-2xl mr-3"></i>
                                            <span class="text-gray-600">
                                              <strong class="text-gray-800">Phalanx:</strong> Develop a sturdy and solid security system like an interlocking shield.
                                            </span>
                                          </li>
                                        </ul>
                                        <p class="text-gray-600 mt-6">
                                          Each of these aspects is at the core of AstraPhalanx's commitment to providing precise, robust, and resilient security solutions. By combining deep technical expertise and a strategic approach, AstraPhalanx helps your business meet modern cybersecurity challenges, strengthen defenses, and maintain privacy and trust in a dynamic digital ecosystem.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                              <!-- End About Us Section -->


                            <!-- Services Section -->
                           <!-- ======= Services Section ======= -->
                            <section id="featured" class="py-12 bg-gray-100">
                                <div class="container mx-auto px-6 lg:px-12">
                                <!-- Section Title -->
                                <div class="text-center mb-12" data-aos="fade-up">
                                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Services</h2>
                                    <p class="text-lg text-gray-600">Services based on Precision. Protection. Phalanx</p>
                                </div>

                                <!-- Featured Section -->
                                <div class="items-center">
                                    <!-- Content Tab Section -->
                                    <div class="w-full px-4">
                                    <ul class="bg-white rounded-lg shadow-lg p-6 lg:p-10">
                                        <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                            <h4 class="text-xl font-semibold text-gray-800 mb-4">Information System for IT Risk Management</h4>
                                            <p class="text-gray-600">Helps identify, assess, and manage potential risks within your IT systems. It provides tools to analyze and mitigate security risks, ensuring that your organization is better prepared to handle potential threats.</p>
                                        </a>
                                        </li>
                                        <li class="nav-item mt-6">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                            <h4 class="text-xl font-semibold text-gray-800 mb-4">Penetration Testing</h4>
                                            <p class="text-gray-600">Also known as "pen testing," this is a simulated cyberattack to test your systems defenses. Our experts attempt to find vulnerabilities just as a hacker would, so you can fix weak spots before an actual threat occurs.</p>
                                        </a>
                                        </li>
                                        <li class="nav-item mt-6">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                            <h4 class="text-xl font-semibold text-gray-800 mb-4">Information Security Training and Consultant</h4>
                                            <p class="text-gray-600">Includes educating your team on best practices for cybersecurity and offering advice on securing your systems. With expert guidance, your team learns how to protect sensitive information and respond effectively to cyber threats.</p>
                                        </a>
                                        </li>
                                        <li class="nav-item mt-6">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                            <h4 class="text-xl font-semibold text-gray-800 mb-4">Real-Time Security Protection</h4>
                                            <p class="text-gray-600">This is continuous, live monitoring of your network and systems to detect and respond to threats as they happen. It ensures you're always guarded against attacks, with instant alerts and proactive responses to maintain security.</p>
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </section>

                            <!-- Team Section -->
                            <!-- ======= Team Section ======= -->
                            <section id="team" class="py-12 bg-gray-50">
                                <div class="container mx-auto px-6 lg:px-12">
                                <!-- Section Title -->
                                <div class="text-center mb-12" data-aos="fade-up">
                                    <h3 class="text-3xl font-semibold text-gray-800 mb-4">Meet Our Team</h3>
                                    <p class="text-lg text-gray-600">Introduction of our dedicated team members.</p>
                                </div>

                                <!-- Team Members -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
                                    <!-- Member 1 -->
                                    <div class="team-member text-center bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105" data-aos="fade-up">
                                    <img src="{{ asset('img') }}/chief1.png" alt="Team Member 1" class="rounded-full w-32 h-32 mx-auto mb-4 border-4 border-gray-200">
                                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Febryanto</h4>
                                    <p class="text-gray-600 mb-4">Chief 1</p>
                                    <p class="text-gray-500">Febry the team with a vision to provide cutting-edge solutions for the security industry. His passion for innovation drives AstraPhalanx to greater heights.</p>
                                    </div>

                                    <!-- Member 2 -->
                                    <div class="team-member text-center bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ asset('img') }}/chief2.png" alt="Team Member 2" class="rounded-full w-32 h-32 mx-auto mb-4 border-4 border-gray-200">
                                    <h4 class="text-xl font-semibold text-gray-800 mb-2">M. Rhagil Setiawan</h4>
                                    <p class="text-gray-600 mb-4">Chief 2</p>
                                    <p class="text-gray-500">Rhagil is responsible for shaping the technological direction of the company. Her expertise in cybersecurity ensures the team's solutions are always at the forefront of the industry.</p>
                                    </div>

                                    <!-- Member 3 -->
                                    <div class="team-member text-center bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                                    <img src="{{ asset('img') }}/chief3.png" alt="Team Member 3" class="rounded-full w-32 h-32 mx-auto mb-4 border-4 border-gray-200">
                                    <h4 class="text-xl font-semibold text-gray-800 mb-2">M. Raya Bilfikri</h4>
                                    <p class="text-gray-600 mb-4">Chief 3</p>
                                    <p class="text-gray-500">Raya plays a key role in designing and implementing advanced security systems. His technical skills and attention to detail ensure the protection of our clients' data and infrastructure.</p>
                                    </div>

                                    <!-- Member 4 -->
                                    <div class="team-member text-center bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                                    <img src="{{ asset('img') }}/chief4.png" alt="Team Member 4" class="rounded-full w-32 h-32 mx-auto mb-4 border-4 border-gray-200">
                                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Gisela jelia</h4>
                                    <p class="text-gray-600 mb-4">Chief 4</p>
                                    <p class="text-gray-500">Gisela expertise in threat detection and response ensures that AstraPhalanx's clients are always one step ahead of potential threats in an ever-evolving digital landscape.</p>
                                    </div>
                                </div>
                                </div>
                            </section>


                            <!-- FAQ Section -->
                            <!-- FAQ Section -->
                            <div id="faq" class="mt-8">
                                <h3 class="text-xl font-semibold text-gray-800">FAQ</h3>
                                <p class="text-gray-600 mt-2">Answers to frequently asked questions.</p>

                                <div class="space-y-4 mt-6">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                    <button class="faq-question text-left w-full py-2 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none rounded-lg">
                                    <span class="font-semibold">What are the main services offered by AstraPhalanx?</span>
                                    <i class="bx bx-chevron-down icon-show float-right"></i>
                                    </button>
                                    <div class="faq-answer hidden px-4 py-2 mt-2 bg-gray-50 rounded-lg">
                                    <p>
                                        AstraPhalanx offers a wide range of cybersecurity services, including Information Technology Risk Management, Penetration Testing, Real-Time Security Protection, and Information Security Training and Consulting.
                                    </p>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                    <button class="faq-question text-left w-full py-2 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none rounded-lg">
                                    <span class="font-semibold">How does AstraPhalanx protect client data and privacy?</span>
                                    <i class="bx bx-chevron-down icon-show float-right"></i>
                                    </button>
                                    <div class="faq-answer hidden px-4 py-2 mt-2 bg-gray-50 rounded-lg">
                                    <p>
                                        We use advanced encryption techniques, strict authentication and real-time monitoring to protect client data. All data is processed with high confidentiality in accordance with international security standards.
                                    </p>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                    <button class="faq-question text-left w-full py-2 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none rounded-lg">
                                    <span class="font-semibold">What is Penetration Testing and why is it important?</span>
                                    <i class="bx bx-chevron-down icon-show float-right"></i>
                                    </button>
                                    <div class="faq-answer hidden px-4 py-2 mt-2 bg-gray-50 rounded-lg">
                                    <p>
                                        Penetration Testing is a simulated attack conducted to identify vulnerabilities in a system before they are discovered by real attackers. It helps clients to fix weaknesses and strengthen their security defenses.
                                    </p>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                    <button class="faq-question text-left w-full py-2 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none rounded-lg">
                                    <span class="font-semibold">How does AstraPhalanx's real-time monitoring system work?</span>
                                    <i class="bx bx-chevron-down icon-show float-right"></i>
                                    </button>
                                    <div class="faq-answer hidden px-4 py-2 mt-2 bg-gray-50 rounded-lg">
                                    <p>
                                        Our system monitors live network activity 24/7, detects threats quickly, and responds to potential attacks before they cause damage. This ensures the security of client data and systems at all times.
                                    </p>
                                    </div>
                                </div>

                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                    <button class="faq-question text-left w-full py-2 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none rounded-lg">
                                    <span class="font-semibold">Does AstraPhalanx provide security training for client employees?</span>
                                    <i class="bx bx-chevron-down icon-show float-right"></i>
                                    </button>
                                    <div class="faq-answer hidden px-4 py-2 mt-2 bg-gray-50 rounded-lg">
                                    <p>
                                        Yes, we provide information security training to increase client employees' awareness and knowledge of security best practices, including how to respond to threats and maintain data confidentiality.
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </main>


                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        <p>Information System for IT Risk Management VER 1.0
                            <br> Develop By <b>AstraPhalanx Corp.</b>
                        </p>
                    </footer>
                </div>
            </div>
        </div>

<!-- JavaScript untuk toggle jawaban FAQ -->
<script>
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      question.addEventListener('click', () => {
        const answer = item.querySelector('.faq-answer');
        const icon = question.querySelector('.icon-show');
        answer.classList.toggle('hidden');
        icon.classList.toggle('bx-chevron-down');
        icon.classList.toggle('bx-chevron-up');
      });
    });
</script>
    </body>
</html>
