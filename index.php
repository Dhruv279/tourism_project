<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wonder Globe</title>
    <link rel="icon" href="images/Image.png">
    <link href="styles.css" rel="stylesheet">
</head>

<body x-data="{ page: 'home', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger intent="WELCOME" chat-title="TourTalker" agent-id="19c891db-6553-429b-98bb-3777c01cf01f"
            language-code="en" chat-icon="comment.png"></df-messenger>
        <style>
            .container {
                background-repeat: no-repeat;
                min-height: 940px;
                height: 100%;
                margin: 10px 30px;
            }
            df-messenger {
                --df-messenger-bot-message: #4C720E;
                --df-messenger-bot-message-font-color:black;
                --df-messenger-button-titlebar-color: #020202;
                --df-messenger-button-titlebar-color: #4b007f;
                --df-messenger-chat-background-color: #fafafa;
                --df-messenger-font-color: white;
                --df-messenger-send-icon: #545454;
                --df-messenger-user-message: #4b007f;
                --df-messenger-chip-border-color: #4b007f;
            }
        </style>
        </df-messenger>
    <header class="fixed left-0 top-0 w-full z-9999 py-7 lg:py-0"
        :class="{ 'bg-dark/70 backdrop-blur-lg shadow !py-4 lg:!py-0 transition duration-100 before:absolute before:w-full before:h-[1px] before:bottom-0 before:left-0 before:features-row-border' : stickyMenu }"
        @scroll.window="stickyMenu = (window.scrollY > 0) ? true : false">
        <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0 lg:flex items-center justify-between relative">
            <div class="w-full lg:w-1/4 flex items-center justify-between">
                <a href="index.php">
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
                            <a href="index.php#home"
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
                                    <a href="search-box.php"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'Prompt to Image' }">By
                                        category</a>
                                </li>
                                <li>
                                    <a href="search-box.php"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'AI Colorization' }">By City</a>
                                </li>
                                <li>
                                    <a href="search-box.php"
                                        class="flex text-sm text-white/70 hover:text-white py-2 px-4 rounded-md hover:bg-white/5"
                                        :class="{ '!text-white bg-white/5': page === 'Text to Handwritten' }">By
                                        Rating</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="index.php#pricing"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Packages</a>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="index.php#features"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">About
                                Us</a>
                        </li>
                        <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
                            <a href="index.php#contact"
                                class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Contact
                                Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="flex items-center gap-6 mt-7 lg:mt-0">
                    <a href="login.php" class="text-white text-sm hover:text-opacity-75">Sign in</a>
                    <a href="sign-up.php"
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

        <section id="home" class="relative overflow-hidden z-10 pt-35 md:pt-40 xl:pt-45">

            <div class="max-w-7xl mx-auto">
                <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -mx-28">
                    <div
                        class="absolute -z-1 -top-[128%] sm:-top-[107%] xl:-top-[73%] left-1/2 -translate-x-1/2 -u-z-10 hero-circle-gradient w-full h-[1282px] rounded-full max-w-[1282px]">
                    </div>
                    <div
                        class="absolute -z-1 -top-[112%] sm:-top-[93%] xl:-top-[62%] left-1/2 -translate-x-1/2 -u-z-10 hero-circle-gradient w-full h-[1046px] rounded-full max-w-[1046px]">
                    </div>
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -u-z-10">
                        <img src="images/blur-02.svg" alt="blur" class="max-w-none">
                    </div>
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -u-z-10">
                        <img src="images/blur-01.svg" alt="blur" class="max-w-none">
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-[900px] px-4 sm:px-8 xl:px-0 relative z-1">
                <div class="text-center">
                    <a href="index.php#"
                        class="hero-subtitle-gradient hover:hero-subtitle-hover relative mb-5 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                        <img src="images/icon-title.svg" alt="icon">
                        <span class="hero-subtitle-text">
                            Your Ultimate Creative Companion!
                        </span>
                    </a>
                    <h1 class="text-white mb-6 text-3xl font-extrabold sm:text-5xl xl:text-heading-1">
                        Welcome to Wonder Globe
                    </h1>
                    <p class="max-w-[500px] mx-auto mb-9 font-medium md:text-lg">
                        When you travel, we know the way
                    </p>
                    <a href="pricing.php"
                        class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
                        Start Your Free Trial
                    </a>
                </div>
            </div>
            <div class="mt-17" data-wow-delay="0.1s">
                <img class="mx-auto" src="images/hero.svg" alt="hero" />
            </div>
        </section>
        <div class="containerpg" style="margin: 20%;">
            <div class="heading">
                <h3 style="color: white;">Photo Gallery</h3>
            </div>
            <div class="box">
                <div class="dream">
                    <img src="img/pg1.jpeg">
                    <img src="img/pg2.jpeg">
                    <img src="img/pg3.jpg">
                </div>
                <div class="dream">
                    <img src="img/pg8.jpg">
                    <img src="img/pg5.jpeg">
                </div>
                <div class="dream">
                    <img src="img/pg6.jpg">
                    <img src="img/pg7.jpeg">
                    <img src="img/pg4.jpg">
                </div>
            </div>
        </div>

        <section id="pricing" class="relative z-20 overflow-hidden pt-22.5 lg:pt-27.5 xl:pt-32.5 scroll-mt-17">
            <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">

                <div class="relative top-18">
                    <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -my-55">
                        <div class="absolute left-1/2 -translate-x-1/2 top-0">
                            <img src="images/blur-13.svg" alt="blur" class="max-w-none">
                        </div>
                        <div class="absolute left-1/2 -translate-x-1/2 top-0">
                            <img src="images/blur-14.svg" alt="blur" class="max-w-none">
                        </div>
                        <div class="absolute left-1/2 -translate-x-1/2 top-0">
                            <img src="images/blur-15.svg" alt="blur" class="max-w-none">
                        </div>
                    </div>
                    <div
                        class="max-w-[830px] w-full h-[830px] rounded-full bg-dark absolute left-1/2 -translate-x-1/2 top-0 pricing-circle">
                    </div>
                    <div
                        class="max-w-[482px] w-full h-60 overflow-hidden absolute -z-1 -top-30 left-1/2 -translate-x-1/2">
                        <div class="stars"></div>
                        <div class="stars2"></div>
                    </div>
                </div>

                <div class="flex justify-center gap-7.5 relative -z-1">
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                    <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border"></div>
                </div>

                <div class="wow fadeInUp mb-17.5 -mt-24 text-center z-10 relative">
                    <span
                        class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                        <img src="images/icon-title.svg" alt="icon">
                        <span class="hero-subtitle-text"> Get access </span>
                    </span>
                    <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
                        Our Best Packages
                    </h2>
                    <p class="max-w-[714px] mx-auto font-medium">
                        Wonder Globe project, a comprehensive tourism guide-based website.
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7.5">

                    <div
                        class="wow fadeInUp rounded-3xl bg-dark relative z-20 overflow-hidden pt-12.5 pb-10 px-8 xl:px-10 pricing-item-border">
                        <span class="absolute right-9 top-9"><img src="images/pricing-icon-02.svg" alt="icon" /></span>
                        <h3 class="font-semibold text-heading-6 text-white mb-5.5">
                            Statue of Unity
                        </h3>
                        <div class="flex items-center gap-3.5">
                            <h2 class="font-bold text-custom-1 pricing-gradient-text">
                                <img src="img/rp1.jpg" alt="">
                            </h2>
                        </div>
                        <div class="my-10 w-full h-[1px] pricing-gradient-divider"></div>
                        <ul class="flex flex-col gap-4">
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">Statue of Unity</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">Tourist Places</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">3000 Rs.</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">4.6/5 Rating</span>
                            </li>
                        </ul>
                        <a href="index.html#"
                            class="mt-11 flex items-center justify-center gap-1.5 font-medium text-white p-3 rounded-lg transition-all ease-in-out duration-300 relative pricing-button-gradient hover:shadow-button">
                            Get the package
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8992 7.5999L9.72422 2.3499C9.49922 2.1249 9.14922 2.1249 8.92422 2.3499C8.69922 2.5749 8.69922 2.9249 8.92422 3.1499L13.1242 7.4249H2.49922C2.19922 7.4249 1.94922 7.6749 1.94922 7.9749C1.94922 8.2749 2.19922 8.5499 2.49922 8.5499H13.1742L8.92422 12.8749C8.69922 13.0999 8.69922 13.4499 8.92422 13.6749C9.02422 13.7749 9.17422 13.8249 9.32422 13.8249C9.47422 13.8249 9.62422 13.7749 9.72422 13.6499L14.8992 8.3999C15.1242 8.1749 15.1242 7.8249 14.8992 7.5999Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <p class="mt-4 text-sm text-center">
                            No extra hidden charge
                        </p>

                        <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                            <span class="absolute left-0 bottom-0 -z-1">
                                <img src="images/blur-16.svg" alt="blur" class="max-w-none">
                            </span>
                            <span class="absolute left-0 top-0 -z-1">
                                <img src="images/blur-17.svg" alt="blur" class="max-w-none">
                            </span>
                        </div>
                    </div>

                    <div
                        class="wow fadeInUp rounded-3xl bg-dark relative z-20 overflow-hidden pt-12.5 pb-10 px-8 xl:px-10 pricing-item-border">
                        <span class="absolute right-9 top-9"><img src="images/pricing-icon-02.svg" alt="icon" /></span>
                        <h3 class="font-semibold text-heading-6 text-white mb-5.5">
                            Historical Place
                        </h3>
                        <div class="flex items-center gap-3.5">
                            <h2 class="font-bold text-custom-1 pricing-gradient-text">
                                <img src="img/pg6.jpg" alt="">
                            </h2>
                        </div>
                        <div class="my-10 w-full h-[1px] pricing-gradient-divider"></div>
                        <ul class="flex flex-col gap-4">
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">Rajasthan</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">Desert Safari</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">10000 Rs.</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">4.7/5 Rating</span>
                            </li>
                        </ul>
                        <a href="index.html#"
                            class="mt-11 flex items-center justify-center gap-1.5 font-medium text-white p-3 rounded-lg transition-all ease-in-out duration-300 relative pricing-button-gradient hover:shadow-button">
                            Get the package
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8992 7.5999L9.72422 2.3499C9.49922 2.1249 9.14922 2.1249 8.92422 2.3499C8.69922 2.5749 8.69922 2.9249 8.92422 3.1499L13.1242 7.4249H2.49922C2.19922 7.4249 1.94922 7.6749 1.94922 7.9749C1.94922 8.2749 2.19922 8.5499 2.49922 8.5499H13.1742L8.92422 12.8749C8.69922 13.0999 8.69922 13.4499 8.92422 13.6749C9.02422 13.7749 9.17422 13.8249 9.32422 13.8249C9.47422 13.8249 9.62422 13.7749 9.72422 13.6499L14.8992 8.3999C15.1242 8.1749 15.1242 7.8249 14.8992 7.5999Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <p class="mt-4 text-sm text-center">
                            No extra hidden charge
                        </p>

                        <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                            <span class="absolute left-0 bottom-0 -z-1">
                                <img src="images/blur-16.svg" alt="blur" class="max-w-none">
                            </span>
                            <span class="absolute left-0 top-0 -z-1">
                                <img src="images/blur-17.svg" alt="blur" class="max-w-none">
                            </span>
                        </div>
                    </div>

                    <div
                        class="wow fadeInUp rounded-3xl bg-dark relative z-20 overflow-hidden pt-12.5 pb-10 px-8 xl:px-10 pricing-item-border">
                        <span class="absolute right-9 top-9"><img src="images/pricing-icon-03.svg" alt="icon" /></span>
                        <h3 class="font-semibold text-heading-6 text-white mb-5.5">
                            Religious Places
                        </h3>
                        <div class="flex items-center gap-3.5">
                            <h2 class="font-bold text-custom-1 pricing-gradient-text">
                                <img src="img/rp5.jpg" alt="">
                            </h2>
                        </div>
                        <div class="my-10 w-full h-[1px] pricing-gradient-divider"></div>
                        <ul class="flex flex-col gap-4">
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">Somnath Trip</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">Hotel Stay</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">1500 Rs.</span>
                            </li>
                            <li class="flex items-center gap-5">
                                <img src="images/pricing-icon-04.svg" alt="icon" />
                                <span class="font-medium">4.5/5 Rating</span>
                            </li>
                        </ul>
                        <a href="index.html#"
                            class="mt-11 flex items-center justify-center gap-1.5 font-medium text-white p-3 rounded-lg transition-all ease-in-out duration-300 relative pricing-button-gradient hover:shadow-button">
                            Get the package
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8992 7.5999L9.72422 2.3499C9.49922 2.1249 9.14922 2.1249 8.92422 2.3499C8.69922 2.5749 8.69922 2.9249 8.92422 3.1499L13.1242 7.4249H2.49922C2.19922 7.4249 1.94922 7.6749 1.94922 7.9749C1.94922 8.2749 2.19922 8.5499 2.49922 8.5499H13.1742L8.92422 12.8749C8.69922 13.0999 8.69922 13.4499 8.92422 13.6749C9.02422 13.7749 9.17422 13.8249 9.32422 13.8249C9.47422 13.8249 9.62422 13.7749 9.72422 13.6499L14.8992 8.3999C15.1242 8.1749 15.1242 7.8249 14.8992 7.5999Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <p class="mt-4 text-sm text-center">
                            No extra hidden charge
                        </p>

                        <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                            <span class="absolute left-0 bottom-0 -z-1">
                                <img src="images/blur-16.svg" alt="blur" class="max-w-none">
                            </span>
                            <span class="absolute left-0 top-0 -z-1">
                                <img src="images/blur-17.svg" alt="blur" class="max-w-none">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
    </section>

        <section class="pt-12.5">
            <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
                <div class="grid sm:grid-cols-12 gap-7.5" data-highlighter>

                    <div class="sm:col-span-12">
                        <div class="relative rounded-3xl features-box-border">
                            <div class="relative overflow-hidden rounded-3xl p-10 xl:p-15 box-hover">
                                <div class="flex items-center justify-between relative z-20">
                                    <div class="max-w-[477px] w-full">
                                        <span
                                            class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                                            <img src="images/icon-title.svg" alt="icon">
                                            <span class="hero-subtitle-text">
                                                Tourism Website
                                            </span>
                                        </span>
                                        <h3 class="text-white mb-4.5 font-bold text-heading-4">
                                            Wonder Globe
                                        </h3>
                                        <p class="font-medium mb-10">
                                            Wonder Globe project, a comprehensive tourism guide-based website.
                                        </p>
                                        <a href="#"
                                            class="features-button-gradient relative inline-flex items-center gap-1.5 rounded-full py-3 px-6 text-white text-sm ease-in duration-300 hover:shadow-button">
                                            Learn more
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3992 5.60002L8.22422 0.350024C7.99922 0.125024 7.64922 0.125024 7.42422 0.350024C7.19922 0.575024 7.19922 0.925025 7.42422 1.15002L11.6242 5.42503H0.999219C0.699219 5.42503 0.449219 5.67502 0.449219 5.97502C0.449219 6.27502 0.699219 6.55003 0.999219 6.55003H11.6742L7.42422 10.875C7.19922 11.1 7.19922 11.45 7.42422 11.675C7.52422 11.775 7.67422 11.825 7.82422 11.825C7.97422 11.825 8.12422 11.775 8.22422 11.65L13.3992 6.40002C13.6242 6.17502 13.6242 5.82502 13.3992 5.60002Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="max-w-[428px] w-full hidden sm:block">
                                        <img src="images/Image.png" alt="icon" />
                                    </div>
                                </div>

                                <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -mx-28">
                                    <span class="absolute right-0 bottom-0"><img src="images/shape-01.png"
                                            alt="shape" /></span>
                                    <span class="absolute left-0 top-0"><img src="images/shape-02.svg"
                                            alt="shape" /></span>
                                    <span class="absolute left-1/2 -translate-x-1/2 bottom-0">
                                        <img src="images/blur-03.svg" alt="blur" class="max-w-none">
                                    </span>
                                    <span class="absolute left-1/2 -translate-x-1/2 bottom-0">
                                        <img src="images/blur-04.svg" alt="blur" class="max-w-none">
                                    </span>
                                    <span class="absolute left-1/2 -translate-x-1/2 bottom-0">
                                        <img src="images/blur-05.svg" alt="blur" class="max-w-none">
                                    </span>
                                    <span class="absolute right-0 top-0">
                                        <img src="images/shape-03.svg" alt="shape" class="max-w-none" />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <br>
        <br>


        <section id="contact" class="scroll-mt-17">
            <div class="max-w-[1104px] mx-auto px-4 sm:px-8 xl:px-0">
                <div class="relative z-999 overflow-hidden rounded-[30px] bg-dark pt-25 px-4 sm:px-20 lg:px-27.5">

                    <div
                        class="flex justify-center gap-7.5 absolute left-1/2 -translate-x-1/2 -top-[16%] max-w-[690px] w-full -z-1 opacity-40">
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-12">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-7">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-3">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-2">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-5">
                        </div>
                        <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-8">
                        </div>
                    </div>

                    <div
                        class="max-w-[482px] w-full h-60 overflow-hidden absolute -z-1 -top-30 left-1/2 -translate-x-1/2">
                        <div class="stars"></div>
                        <div class="stars2"></div>
                    </div>

                    <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                        <span class="absolute left-1/2 top-0 -translate-x-1/2 -z-1">
                            <img src="images/blur-19.svg" alt="blur" class="max-w-none">
                        </span>
                        <span class="absolute left-1/2 top-0 -translate-x-1/2 -z-1">
                            <img src="images/blur-20.svg" alt="blur" class="max-w-none">
                        </span>
                        <span class="absolute left-1/2 top-0 -translate-x-1/2 -z-1">
                            <img src="images/blur-21.svg" alt="blur" class="max-w-none">
                        </span>
                    </div>

                    <div class="wow fadeInUp mb-16 text-center relative z-999">
                        <span
                            class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                            <img src="images/icon-title.svg" alt="icon">
                            <span class="hero-subtitle-text"> Need Any Help? </span>
                        </span>
                        <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
                            Contact With Us
                        </h2>
                        <p class="max-w-[714px] mx-auto font-medium">
                            Image Wizard is built to boost your image-editing abilities, making the process faster, more
                            precise, and enjoyable.
                        </p>
                    </div>

                    <div class="form-box-gradient relative overflow-hidden rounded-[25px] bg-dark p-6 sm:p-8 xl:p-15">
                        <form class="relative z-10">
                            <div class="-mx-4 xl:-mx-10 flex flex-wrap">
                                <div class="w-full px-4 xl:px-5 md:w-1/2">
                                    <div class="mb-9.5">
                                        <label for="name" class="text-white mb-2.5 block font-medium">
                                            Name
                                        </label>
                                        <input id="name" type="text" name="name" placeholder="Enter your Name"
                                            class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-3 px-6 outline-none" />
                                    </div>
                                </div>
                                <div class="w-full px-4 xl:px-5 md:w-1/2">
                                    <div class="mb-9.5">
                                        <label for="email" class="text-white mb-2.5 block font-medium">
                                            Email
                                        </label>
                                        <input id="email" type="email" name="email" placeholder="Enter your Email"
                                            class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-3 px-6 outline-none" />
                                    </div>
                                </div>
                                <div class="w-full px-4 xl:px-5">
                                    <div class="mb-10">
                                        <label for="message" class="text-white mb-2.5 block font-medium">
                                            Message
                                        </label>
                                        <textarea id="message" name="message" placeholder="Type your message" rows="6"
                                            class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-5 px-6 outline-none"></textarea>
                                    </div>
                                </div>
                                <div class="w-full px-4 xl:px-5">
                                    <div class="text-center">
                                        <a href="#"
                                            class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
                                            Send Message
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-20 lg:py-25" id="blogs">
            <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">

                <div class="wow fadeInUp mb-16 text-center">
                    <span
                        class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                        <img src="images/icon-title.svg" alt="icon">
                        <span class="hero-subtitle-text"> Read Our Latest Blogs </span>
                    </span>
                    <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
                        Latest Blogs & News
                    </h2>
                    <p class="max-w-[714px] mx-auto font-medium">
                        Wonder Globe project, a comprehensive tourism guide-based website.
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7.5">

                    <div class="wow fadeInUp group">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="images/blog-01.png" alt="image"
                                class="ease-linear w-full duration-500 scale-100 group-hover:scale-125" />
                        </div>
                        <div class="flex flex-wrap gap-2.5 items-center mb-4.5">
                            <span
                                class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                                Design
                            </span>
                            <span
                                class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                                Engineering
                            </span>
                        </div>
                        <h4>
                            <a href="blog-single.php"
                                class="text-white font-semibold text-xl ease-in duration-300 hover:opacity-80">
                                Wonder Globe project, a comprehensive tourism guide-based website.
                            </a>
                        </h4>
                        <p class="font-medium mt-4">
                            We embark on a journey through the world of tourism and exploration with Wonder Globe, where
                            we delve into the latest trends, innovations, and industry insights.
                        </p>
                        <div class="flex items-center gap-4.5 flex-wrap mt-6">
                            <div
                                class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 8.75C7.65625 8.75 5.78125 6.90625 5.78125 4.65625C5.78125 2.40625 7.65625 0.5625 10 0.5625C12.3438 0.5625 14.2188 2.40625 14.2188 4.65625C14.2188 6.90625 12.3438 8.75 10 8.75ZM10 1.96875C8.4375 1.96875 7.1875 3.1875 7.1875 4.65625C7.1875 6.125 8.4375 7.34375 10 7.34375C11.5625 7.34375 12.8125 6.125 12.8125 4.65625C12.8125 3.1875 11.5625 1.96875 10 1.96875Z"
                                        fill />
                                    <path
                                        d="M16.5938 19.4688C16.2188 19.4688 15.875 19.1562 15.875 18.75V17.8438C15.875 14.5938 13.25 11.9688 10 11.9688C6.75 11.9688 4.125 14.5938 4.125 17.8438V18.75C4.125 19.125 3.8125 19.4688 3.40625 19.4688C3 19.4688 2.6875 19.1562 2.6875 18.75V17.8438C2.6875 13.8125 5.96875 10.5625 9.96875 10.5625C13.9688 10.5625 17.25 13.8437 17.25 17.8438V18.75C17.2813 19.125 16.9688 19.4688 16.5938 19.4688Z"
                                        fill />
                                </svg>
                                <span class="text-sm font-medium">Dhruv Bhatt</span>
                            </div>
                            <div
                                class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.5C1.4375 3.3125 0.53125 4.1875 0.53125 5.28125V16.1563C0.53125 17.2188 1.40625 18.125 2.5 18.125H17.5C18.5625 18.125 19.4687 17.25 19.4687 16.1563V5.25C19.4687 4.1875 18.5625 3.3125 17.5 3.3125ZM1.96875 9.125H4.625V12.2188H1.96875V9.125ZM6.03125 9.125H9.3125V12.2188H6.03125V9.125ZM9.3125 13.625V16.6875H6.03125V13.625H9.3125ZM10.7187 13.625H14V16.6875H10.7187V13.625ZM10.7187 12.2188V9.125H14V12.2188H10.7187ZM15.375 9.125H18.0312V12.2188H15.375V9.125ZM2.5 4.71875H4.125V5.375C4.125 5.75 4.4375 6.09375 4.84375 6.09375C5.25 6.09375 5.5625 5.78125 5.5625 5.375V4.71875H14.5V5.375C14.5 5.75 14.8125 6.09375 15.2187 6.09375C15.625 6.09375 15.9375 5.78125 15.9375 5.375V4.71875H17.5C17.8125 4.71875 18.0625 4.96875 18.0625 5.28125V7.71875H1.96875V5.28125C1.96875 4.96875 2.1875 4.71875 2.5 4.71875ZM1.96875 16.125V13.5938H4.625V16.6563H2.5C2.1875 16.6875 1.96875 16.4375 1.96875 16.125ZM17.5 16.6875H15.375V13.625H18.0312V16.1563C18.0625 16.4375 17.8125 16.6875 17.5 16.6875Z"
                                        fill />
                                </svg>
                                <span class="text-sm font-medium">02 Oct, 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInUp group">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="images/blog-02.png" alt="image"
                                class="ease-linear w-full duration-500 scale-100 group-hover:scale-125" />
                        </div>
                        <div class="flex flex-wrap gap-2.5 items-center mb-4.5">
                            <span
                                class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                                Development
                            </span>
                            <span
                                class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                                Security
                            </span>
                        </div>
                        <h4>
                            <a href="blog-single.php"
                                class="text-white font-semibold text-xl ease-in duration-300 hover:opacity-80">
                                Enabling Exploration and Ensuring Safety with Wonder Globe
                            </a>
                        </h4>
                        <p class="font-medium mt-4">
                            Embark on a Journey Through Adventure and Security with Wonder Globe, Unveiling Trends,
                            Innovations, and Expert Insights.
                        </p>
                        <div class="flex items-center gap-4.5 flex-wrap mt-6">
                            <div
                                class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 8.75C7.65625 8.75 5.78125 6.90625 5.78125 4.65625C5.78125 2.40625 7.65625 0.5625 10 0.5625C12.3438 0.5625 14.2188 2.40625 14.2188 4.65625C14.2188 6.90625 12.3438 8.75 10 8.75ZM10 1.96875C8.4375 1.96875 7.1875 3.1875 7.1875 4.65625C7.1875 6.125 8.4375 7.34375 10 7.34375C11.5625 7.34375 12.8125 6.125 12.8125 4.65625C12.8125 3.1875 11.5625 1.96875 10 1.96875Z"
                                        fill />
                                    <path
                                        d="M16.5938 19.4688C16.2188 19.4688 15.875 19.1562 15.875 18.75V17.8438C15.875 14.5938 13.25 11.9688 10 11.9688C6.75 11.9688 4.125 14.5938 4.125 17.8438V18.75C4.125 19.125 3.8125 19.4688 3.40625 19.4688C3 19.4688 2.6875 19.1562 2.6875 18.75V17.8438C2.6875 13.8125 5.96875 10.5625 9.96875 10.5625C13.9688 10.5625 17.25 13.8437 17.25 17.8438V18.75C17.2813 19.125 16.9688 19.4688 16.5938 19.4688Z"
                                        fill />
                                </svg>
                                <span class="text-sm font-medium">Dhruv Bhatt</span>
                            </div>
                            <div
                                class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.5C1.4375 3.3125 0.53125 4.1875 0.53125 5.28125V16.1563C0.53125 17.2188 1.40625 18.125 2.5 18.125H17.5C18.5625 18.125 19.4687 17.25 19.4687 16.1563V5.25C19.4687 4.1875 18.5625 3.3125 17.5 3.3125ZM1.96875 9.125H4.625V12.2188H1.96875V9.125ZM6.03125 9.125H9.3125V12.2188H6.03125V9.125ZM9.3125 13.625V16.6875H6.03125V13.625H9.3125ZM10.7187 13.625H14V16.6875H10.7187V13.625ZM10.7187 12.2188V9.125H14V12.2188H10.7187ZM15.375 9.125H18.0312V12.2188H15.375V9.125ZM2.5 4.71875H4.125V5.375C4.125 5.75 4.4375 6.09375 4.84375 6.09375C5.25 6.09375 5.5625 5.78125 5.5625 5.375V4.71875H14.5V5.375C14.5 5.75 14.8125 6.09375 15.2187 6.09375C15.625 6.09375 15.9375 5.78125 15.9375 5.375V4.71875H17.5C17.8125 4.71875 18.0625 4.96875 18.0625 5.28125V7.71875H1.96875V5.28125C1.96875 4.96875 2.1875 4.71875 2.5 4.71875ZM1.96875 16.125V13.5938H4.625V16.6563H2.5C2.1875 16.6875 1.96875 16.4375 1.96875 16.125ZM17.5 16.6875H15.375V13.625H18.0312V16.1563C18.0625 16.4375 17.8125 16.6875 17.5 16.6875Z"
                                        fill />
                                </svg>
                                <span class="text-sm font-medium">10 Oct, 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInUp group">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="images/blog-03.png" alt="image"
                                class="ease-linear w-full duration-500 scale-100 group-hover:scale-125" />
                        </div>
                        <div class="flex flex-wrap gap-2.5 items-center mb-4.5">
                            <span
                                class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                                Products
                            </span>
                            <span
                                class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                                Blog and articles
                            </span>
                        </div>
                        <h4>
                            <a href="blog-single.php"
                                class="text-white font-semibold text-xl ease-in duration-300 hover:opacity-80">
                                Discover Our Travelogue and Insights with Wonder Globe.
                            </a>
                        </h4>
                        <p class="font-medium mt-4">
                            Embark on a Journey to Explore Wonder Globe's Latest Features, Travel Innovations, and
                            In-Depth Insights into Destinations, Blog, and Articles."
                        </p>
                        <div class="flex items-center gap-4.5 flex-wrap mt-6">
                            <div
                                class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 8.75C7.65625 8.75 5.78125 6.90625 5.78125 4.65625C5.78125 2.40625 7.65625 0.5625 10 0.5625C12.3438 0.5625 14.2188 2.40625 14.2188 4.65625C14.2188 6.90625 12.3438 8.75 10 8.75ZM10 1.96875C8.4375 1.96875 7.1875 3.1875 7.1875 4.65625C7.1875 6.125 8.4375 7.34375 10 7.34375C11.5625 7.34375 12.8125 6.125 12.8125 4.65625C12.8125 3.1875 11.5625 1.96875 10 1.96875Z"
                                        fill />
                                    <path
                                        d="M16.5938 19.4688C16.2188 19.4688 15.875 19.1562 15.875 18.75V17.8438C15.875 14.5938 13.25 11.9688 10 11.9688C6.75 11.9688 4.125 14.5938 4.125 17.8438V18.75C4.125 19.125 3.8125 19.4688 3.40625 19.4688C3 19.4688 2.6875 19.1562 2.6875 18.75V17.8438C2.6875 13.8125 5.96875 10.5625 9.96875 10.5625C13.9688 10.5625 17.25 13.8437 17.25 17.8438V18.75C17.2813 19.125 16.9688 19.4688 16.5938 19.4688Z"
                                        fill />
                                </svg>
                                <span class="text-sm font-medium">Dhruv Bhatt</span>
                            </div>
                            <div
                                class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.5C1.4375 3.3125 0.53125 4.1875 0.53125 5.28125V16.1563C0.53125 17.2188 1.40625 18.125 2.5 18.125H17.5C18.5625 18.125 19.4687 17.25 19.4687 16.1563V5.25C19.4687 4.1875 18.5625 3.3125 17.5 3.3125ZM1.96875 9.125H4.625V12.2188H1.96875V9.125ZM6.03125 9.125H9.3125V12.2188H6.03125V9.125ZM9.3125 13.625V16.6875H6.03125V13.625H9.3125ZM10.7187 13.625H14V16.6875H10.7187V13.625ZM10.7187 12.2188V9.125H14V12.2188H10.7187ZM15.375 9.125H18.0312V12.2188H15.375V9.125ZM2.5 4.71875H4.125V5.375C4.125 5.75 4.4375 6.09375 4.84375 6.09375C5.25 6.09375 5.5625 5.78125 5.5625 5.375V4.71875H14.5V5.375C14.5 5.75 14.8125 6.09375 15.2187 6.09375C15.625 6.09375 15.9375 5.78125 15.9375 5.375V4.71875H17.5C17.8125 4.71875 18.0625 4.96875 18.0625 5.28125V7.71875H1.96875V5.28125C1.96875 4.96875 2.1875 4.71875 2.5 4.71875ZM1.96875 16.125V13.5938H4.625V16.6563H2.5C2.1875 16.6875 1.96875 16.4375 1.96875 16.125ZM17.5 16.6875H15.375V13.625H18.0312V16.1563C18.0625 16.4375 17.8125 16.6875 17.5 16.6875Z"
                                        fill />
                                </svg>
                                <span class="text-sm font-medium">15 Oct, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
                <div class="cta-box-gradient bg-dark rounded-[30px] relative overflow-hidden px-4 py-20 lg:py-25 z-999">

                    <span class="absolute bottom-0 left-0 -z-1"><img src="images/grid.svg" alt="grid" /></span>
                    <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                        <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1">
                            <img src="images/blur-22.svg" alt="blur" class="max-w-none">
                        </span>
                        <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1">
                            <img src="images/blur-23.svg" alt="blur" class="max-w-none">
                        </span>
                        <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1">
                            <img src="images/blur-24.svg" alt="blur" class="max-w-none">
                        </span>
                    </div>

                    <div
                        class="max-w-[482px] w-full h-60 overflow-hidden absolute -z-1 -bottom-25 left-1/2 -translate-x-1/2">
                        <div class="stars"></div>
                        <div class="stars2"></div>
                    </div>
                    <div class="wow fadeInUp text-center">
                        <span
                            class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                            <img src="images/icon-title.svg" alt="icon">
                            <span class="hero-subtitle-text">
                                Try our Service for Free
                            </span>
                        </span>
                        <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
                            What are you waiting for?
                        </h2>
                        <p class="max-w-[714px] mx-auto font-medium mb-9">
                            Wonder Globe project, a comprehensive tourism guide-based website.
                        </p>
                        <a href="#"
                            class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
                            Get Started for Free
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="pt-17.5 sm:pt-22.5 xl:pt-27.5 pb-11">
            <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
                <div class="flex flex-wrap items-center justify-between gap-10">
                    <div class="max-w-[352px] w-full">
                        <h3 class="font-semibold text-heading-5 text-white mb-2">
                            News & Update
                        </h3>
                        <p class="font-medium">
                            Keep up to date with everything about our tool
                        </p>
                    </div>
                    <div class="max-w-[534px] w-full">
                        <form>
                            <div class="flex items-center gap-4">
                                <div class="max-w-[395px] w-full">
                                    <input id="email" type="email" name="email" placeholder="Enter your Email"
                                        class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-3 px-6 outline-none" />
                                </div>
                                <a href="index.php#"
                                    class="button-border-gradient relative rounded-lg text-white text-sm flex items-center gap-1.5 py-3.5 px-7 shadow-button hover:button-gradient-hover hover:shadow-none">
                                    Subscribe
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
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
                    <a class="mb-8.5 inline-block" href="index.php">
                        <img style="height: 200px;" src="images/Image.png" alt="Logo" />
                    </a>
                </div>
                <div class="max-w-[571px] w-full">
                    <div class="flex flex-col sm:flex-row sm:justify-between gap-10">
                        <div>
                            <h5 class="font-semibold text-white mb-5">Products</h5>
                            <ul class="flex flex-col gap-3.5">
                                <li>
                                    <a href="location.php"
                                        class="font-medium ease-in duration-300 hover:text-white">Locations</a>
                                </li>
                                <li>
                                    <a href="pricing.php#"
                                        class="font-medium ease-in duration-300 hover:text-white">FAQ</a>
                                </li>
                                <li>
                                    <a href="index.php#pricing"
                                        class="font-medium ease-in duration-300 hover:text-white">Packages</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="font-semibold text-white mb-5">Company</h5>
                            <ul class="flex flex-col gap-3.5">
                                <li>
                                    <a href="index.php#"
                                        class="font-medium ease-in duration-300 hover:text-white">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="index.php#"
                                        class="font-medium ease-in duration-300 hover:text-white">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="index.php#contact"
                                        class="font-medium ease-in duration-300 hover:text-white">Email</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="font-semibold text-white mb-5">Contact</h5>
                            <ul class="flex flex-col gap-3.5">
                                <li>
                                    <a href="index.php#about"
                                        class="font-medium ease-in duration-300 hover:text-white">About Us</a>
                                </li>
                                <li>
                                    <a href="index.php#blogs"
                                        class="font-medium ease-in duration-300 hover:text-white">Blogs</a>
                                </li>
                                <li>
                                    <a href="index.php#contact"
                                        class="font-medium ease-in duration-300 hover:text-white">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- <button
        class="hidden items-center justify-center w-10 h-10 rounded-[4px] shadow-solid-5 bg-purple hover:opacity-70 fixed bottom-8 right-8 z-999"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ '!flex' : scrollTop }">
        <svg class="fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button> -->

    <script defer src="bundle.js"></script>
    <script>(function () { var js = "window['__CF$cv$params']={r:'817edd5aee740dba',t:'MTY5NzYxMjAxMC43ODEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/7ff8d35b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"817edd5aee740dba","version":"2023.8.0","r":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>