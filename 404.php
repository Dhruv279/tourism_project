<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image-Wizard</title>
    <link rel="icon" href="favicon.ico">
    <link href="style.css" rel="stylesheet">
</head>

<body x-data="{ page: '404', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">

    <header class="fixed left-0 top-0 w-full z-9999 py-7 lg:py-0"
        :class="{ 'bg-dark/70 backdrop-blur-lg shadow !py-4 lg:!py-0 transition duration-100 before:absolute before:w-full before:h-[1px] before:bottom-0 before:left-0 before:features-row-border' : stickyMenu }"
        @scroll.window="stickyMenu = (window.scrollY > 0) ? true : false">
        <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0 lg:flex items-center justify-between relative">
            <div class="w-full lg:w-1/4 flex items-center justify-between">
                <a href="index.html">
                    <img style="height: 100px;" src="images/Image.png" alt="Logo" />
                </a>

                <button class="lg:hidden block" @click="navigationOpen = !navigationOpen">
                    <span class="block relative cursor-pointer w-5.5 h-5.5">
                        <span class="du-block absolute right-0 w-full h-full">
                            <span
                                class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-[0]"
                                :class="{ '!w-full delay-300': !navigationOpen }"></span>
                            <span
                                class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-150"
                                :class="{ '!w-full delay-400': !navigationOpen }"></span>
                            <span
                                class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-200"
                                :class="{ '!w-full delay-500': !navigationOpen }"></span>
                        </span>
                        <span class="du-block absolute right-0 w-full h-full rotate-45">
                            <span
                                class="block bg-white rounded-sm ease-in-out duration-200 delay-300 absolute left-2.5 top-0 w-0.5 h-full"
                                :class="{ '!h-0 delay-[0]': !navigationOpen }"></span>
                            <span
                                class="block bg-white rounded-sm ease-in-out duration-200 delay-400 absolute left-0 top-2.5 w-full h-0.5"
                                :class="{ '!h-0 dealy-200': !navigationOpen }"></span>
                        </span>
                    </span>
                </button>

            </div>
            <div class="w-full lg:w-3/4 h-0 lg:h-auto invisible lg:visible lg:flex items-center justify-between"
                :class="{ '!visible bg-dark shadow-lgrelative !h-auto max-h-[400px] overflow-y-scroll rounded-md mt-4 p-7.5': navigationOpen }">
                <nav>
                    <ul class="flex lg:items-center flex-col lg:flex-row gap-5 lg:gap-2">
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="index.html#home"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient"
                                :class="{'!text-white nav-gradient' :page === 'home'}">Home</a>
                        </li>
                        <li class="group relative lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }"
                            x-data="{ dropdown: false }">
                            <a href="#"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient flex items-center justify-between gap-3"
                                @click.prevent="dropdown = !dropdown"
                                :class="{ '!text-white nav-gradient': page === 'about' || page === 'pricing' || page === 'blog-grid' || page === 'blog-single' || page === 'signin' || page === 'signup' || page === '404' }">
                                Locations
                                <svg class="fill-current w-3 h-3 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>
                            </a>

                            <ul class="dropdown" :class="{ 'flex': dropdown }">
                                <li>
                                    <a href="about.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'Prompt to Image' }">By
                                        category</a>
                                </li>
                                <li>
                                    <a href="ai.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'AI Colorization' }">By City</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'Text to Handwritten' }">By
                                        Rating</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="index.html#pricing"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Packages</a>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="index.html#features"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">About
                                Us</a>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="index.html#contact"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Contact
                                Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="flex items-center gap-6 mt-7 lg:mt-0">
                    <a href="signin.html" class="text-white text-sm hover:text-opacity-75">Sign in</a>
                    <a href="signup.html"
                        class="button-border-gradient relative rounded-lg text-white text-sm flex items-center gap-1.5 py-2 px-4.5 shadow-button hover:button-gradient-hover hover:shadow-none">
                        Sign up
                        <svg class="mt-0.5" width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.4002 7.60002L9.2252 2.35002C9.0002 2.12502 8.6502 2.12502 8.4252 2.35002C8.2002 2.57502 8.2002 2.92502 8.4252 3.15002L12.6252 7.42502H2.0002C1.7002 7.42502 1.4502 7.67502 1.4502 7.97502C1.4502 8.27502 1.7002 8.55003 2.0002 8.55003H12.6752L8.4252 12.875C8.2002 13.1 8.2002 13.45 8.4252 13.675C8.5252 13.775 8.6752 13.825 8.8252 13.825C8.9752 13.825 9.1252 13.775 9.2252 13.65L14.4002 8.40002C14.6252 8.17502 14.6252 7.82503 14.4002 7.60002Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section class="relative z-10 pt-30 lg:pt-35 xl:pt-40 pb-18">

            <div class="absolute top-25 left-0 w-full flex flex-col gap-3 -z-1 opacity-50">
                <div class="w-full h-[1.24px] footer-bg-gradient"></div>
                <div class="w-full h-[2.47px] footer-bg-gradient"></div>
                <div class="w-full h-[3.71px] footer-bg-gradient"></div>
                <div class="w-full h-[4.99px] footer-bg-gradient"></div>
                <div class="w-full h-[6.19px] footer-bg-gradient"></div>
                <div class="w-full h-[7.42px] footer-bg-gradient"></div>
                <div class="w-full h-[8.66px] footer-bg-gradient"></div>
                <div class="w-full h-[9.90px] footer-bg-gradient"></div>
                <div class="w-full h-[13px] footer-bg-gradient"></div>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-b from-dark/0 to-dark -z-1">
            </div>
            <div class="text-center px-4">
                <h1 class="font-extrabold text-heading-2 text-white mb-5.5">
                    Error Page
                </h1>
                <ul class="flex items-center justify-center gap-2">
                    <li class="font-medium"><a href="index.html">Home</a></li>
                    <li class="font-medium">/ Error Page</li>
                </ul>
            </div>
        </section>


        <section class="pt-17.5 lg:pt-22.5 xl:pt-27.5 pb-20 lg:pb-25 xl:pb-30 2xl:pb-[150px]">
            <div class="wow fadeInUp mx-auto w-full max-w-[597px] text-center px-4 sm:px-8 lg:px-0"
                data-wow-delay="0.1s">
                <img src="images/404.svg" alt="404" class="mx-auto mb-12.5" />
                <h2 class="mb-5.5 text-heading-3 font-bold text-white">
                    Oops! Page Not Found.
                </h2>
                <p class="font-medium mb-9">
                    The page you are looking for is not available or has been moved. Try
                    a different page or go to homepage with the button below.
                </p>
                <a href="index.html"
                    class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
                    Go To Home
                </a>
            </div>
        </section>

    </main>


    <footer class="relative z-10 pb-17.5 lg:pb-22.5 xl:pb-27.5">

        <div class="absolute bottom-0 left-0 w-full flex flex-col gap-3 -z-1 opacity-50">
            <div class="w-full h-[1.24px] footer-bg-gradient"></div>
            <div class="w-full h-[2.47px] footer-bg-gradient"></div>
            <div class="w-full h-[3.71px] footer-bg-gradient"></div>
            <div class="w-full h-[4.99px] footer-bg-gradient"></div>
            <div class="w-full h-[6.19px] footer-bg-gradient"></div>
            <div class="w-full h-[7.42px] footer-bg-gradient"></div>
            <div class="w-full h-[8.66px] footer-bg-gradient"></div>
            <div class="w-full h-[9.90px] footer-bg-gradient"></div>
            <div class="w-full h-[13px] footer-bg-gradient"></div>
        </div>
        <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0 relative pt-17.5">
            <div class="w-full h-[1px] footer-divider-gradient absolute top-0 left-0"></div>
            <div class="flex flex-wrap justify-between">
                <div class="mb-10 max-w-[571px] w-full">
                    <a class="mb-8.5 inline-block" href="index.html">
                        <img style="height: 200px;" src="images/Image.png" alt="Logo" />
                    </a>
                </div>
                <div class="max-w-[571px] w-full">
                    <div class="flex flex-col sm:flex-row sm:justify-between gap-10">
                        <div>
                            <h5 class="font-semibold text-white mb-5">Products</h5>
                            <ul class="flex flex-col gap-3.5">
                                <li>
                                    <a href="location.html"
                                        class="font-medium ease-in duration-300 hover:text-white">Locations</a>
                                </li>
                                <li>
                                    <a href="pricing.html#"
                                        class="font-medium ease-in duration-300 hover:text-white">FAQ</a>
                                </li>
                                <li>
                                    <a href="index.html#pricing"
                                        class="font-medium ease-in duration-300 hover:text-white">Packages</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="font-semibold text-white mb-5">Company</h5>
                            <ul class="flex flex-col gap-3.5">
                                <li>
                                    <a href="index.html#"
                                        class="font-medium ease-in duration-300 hover:text-white">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="index.html#"
                                        class="font-medium ease-in duration-300 hover:text-white">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="index.html#contact"
                                        class="font-medium ease-in duration-300 hover:text-white">Email</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="font-semibold text-white mb-5">Contact</h5>
                            <ul class="flex flex-col gap-3.5">
                                <li>
                                    <a href="index.html#about"
                                        class="font-medium ease-in duration-300 hover:text-white">About Us</a>
                                </li>
                                <li>
                                    <a href="index.html#blogs"
                                        class="font-medium ease-in duration-300 hover:text-white">Blogs</a>
                                </li>
                                <li>
                                    <a href="index.html#contact"
                                        class="font-medium ease-in duration-300 hover:text-white">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <button
        class="hidden items-center justify-center w-10 h-10 rounded-[4px] shadow-solid-5 bg-purple hover:opacity-70 fixed bottom-8 right-8 z-999"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ '!flex' : scrollTop }">
        <svg class="fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>

    <script defer src="bundle.js"></script>
    <script>(function () { var js = "window['__CF$cv$params']={r:'817eddc75fa80dba',t:'MTY5NzYxMjAyOC4xMTIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/7ff8d35b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"817eddc75fa80dba","version":"2023.8.0","r":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>