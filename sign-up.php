<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $fName=$_POST['Fname'];
        $lName=$_POST['Lname'];
        $email=$_POST['Email'];
        $pwd=password_hash($_POST['Password'],PASSWORD_DEFAULT);
        
        $existsql="select * from tourism_user_details where Email='$email'";
        $result=mysqli_query($con,$existsql);
        $numExistRows=mysqli_num_rows($result);
        if(!empty($fName) && !empty($lName) && !empty($email) && !empty($pwd) && !is_numeric($fName) && !is_numeric($lName))
        {
            if($numExistRows>0)
            {
                echo "Username Already Exists";
            }
        else
        {
            $user_id=random_num(3);
            $query="insert into tourism_user_details (User_Id, First_Name, Last_Name, Email, Password) values ('$user_id','$fName','$lName','$email','$pwd')";
            mysqli_query($con,$query);
            header("Location: login.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign up</title>
</head>


<body x-data="{ page: 'signup', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">
<form method="POST">
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger intent="WELCOME" chat-title="TourTalker" agent-id="19c891db-6553-429b-98bb-3777c01cf01f"
            language-code="en" chat-icon="comment.png"></df-messenger>
        <style>
            .container {
                background-repeat: no-repeat;
                min-height: 700px;
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
                    Sign up
                </h1>
                <ul class="flex items-center justify-center gap-2">
                    <li class="font-medium"><a href="index.php">Home</a></li>
                    <li class="font-medium">/ Sign up</li>
                </ul>
            </div>
        </section>


        <section class="pt-17.5 pb-17.5 lg:pb-22.5 xl:pb-27.5">
            <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
                <div class="wow fadeInUp rounded-3xl bg-white/[0.05]">
                    <div class="flex">
                        <div class="hidden lg:block w-full lg:w-1/2">
                            <div class="relative py-20 pl-17.5 pr-22">
                                <div
                                    class="absolute top-0 right-0 w-[1px] h-full bg-gradient-to-b from-white/0 via-white/20 to-white/0">
                                </div>
                                <h2 class="max-w-[292px] font-bold text-white text-heading-4 mb-10">
                                    Unlock the Power of Travel with Wonder Globe
                                </h2>
                                <img src="images/sigin.svg" alt="signin" />
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="py-8 sm:py-20 pl-8 sm:pl-21 pr-8 sm:pr-20">
                                <form>
                                    <button
                                        class="w-full flex items-center justify-center gap-3 p-3.5 font-medium text-white rounded-lg border border-white/[0.12] ease-in duration-300 hover:border-purple">
                                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_132_14584)">
                                                <path
                                                    d="M22.5001 11.2438C22.5134 10.4876 22.4338 9.73256 22.2629 8.995H11.7246V13.0771H17.9105C17.7933 13.7929 17.5296 14.478 17.1352 15.0914C16.7409 15.7047 16.224 16.2335 15.6158 16.646L15.5942 16.7827L18.9264 19.3124L19.1571 19.335C21.2772 17.4161 22.4997 14.5926 22.4997 11.2438"
                                                    fill="#4285F4" />
                                                <path
                                                    d="M11.7245 22C14.755 22 17.2992 21.0221 19.1577 19.3355L15.6156 16.6464C14.6679 17.2944 13.3958 17.7467 11.7245 17.7467C10.3051 17.7385 8.92433 17.2926 7.77814 16.472C6.63195 15.6515 5.77851 14.4981 5.33892 13.1755L5.20737 13.1865L1.74255 15.8142L1.69727 15.9376C2.63043 17.7602 4.06252 19.2925 5.83341 20.3631C7.60429 21.4337 9.64416 22.0005 11.7249 22"
                                                    fill="#34A853" />
                                                <path
                                                    d="M5.33889 13.1755C5.09338 12.4753 4.96669 11.7404 4.96388 11C4.9684 10.2608 5.09041 9.52685 5.32552 8.8245L5.31927 8.67868L1.81196 6.00867L1.69724 6.06214C0.910039 7.5938 0.5 9.28491 0.5 10.9999C0.5 12.7148 0.910039 14.406 1.69724 15.9376L5.33889 13.1755Z"
                                                    fill="#FBBC05" />
                                                <path
                                                    d="M11.7249 4.25337C13.3333 4.22889 14.8888 4.8159 16.065 5.89121L19.2329 2.86003C17.2011 0.992106 14.5106 -0.0328008 11.7249 3.27798e-05C9.64418 -0.000452376 7.60433 0.566279 5.83345 1.63686C4.06256 2.70743 2.63046 4.23965 1.69727 6.06218L5.32684 8.82455C5.77077 7.50213 6.62703 6.34962 7.77491 5.5295C8.9228 4.70938 10.3044 4.26302 11.7249 4.25337Z"
                                                    fill="#EB4335" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_132_14584">
                                                    <rect width="22" height="22" fill="white"
                                                        transform="translate(0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Sign in with Google
                                    </button>
                                    <button
                                        class="mt-4 w-full flex items-center justify-center gap-3 p-3.5 font-medium text-white rounded-lg border border-white/[0.12] ease-in duration-300 hover:border-purple">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.1223 7.66195C18.9986 7.75638 16.816 8.9673 16.816 11.6599C16.816 14.7743 19.5933 15.8761 19.6764 15.9034C19.6636 15.9706 19.2352 17.4124 18.2121 18.8814C17.2999 20.1742 16.3471 21.4649 14.8977 21.4649C13.4483 21.4649 13.0753 20.6359 11.4021 20.6359C9.77152 20.6359 9.19179 21.4922 7.86601 21.4922C6.54024 21.4922 5.61517 20.2959 4.55157 18.8269C3.31961 17.1018 2.32422 14.4218 2.32422 11.8782C2.32422 7.79838 5.01839 5.63461 7.6699 5.63461C9.0788 5.63461 10.2533 6.54545 11.1378 6.54545C11.9797 6.54545 13.2927 5.58006 14.8956 5.58006C15.503 5.58006 17.6856 5.63461 19.1223 7.66195ZM14.1346 3.85285C14.7975 3.07844 15.2664 2.00392 15.2664 0.929401C15.2664 0.780396 15.2536 0.629294 15.2259 0.507568C14.1474 0.547443 12.8643 1.21482 12.0906 2.09836C11.4831 2.77833 10.9161 3.85285 10.9161 4.94206C10.9161 5.10579 10.9438 5.26945 10.9566 5.3219C11.0248 5.33452 11.1357 5.3492 11.2465 5.3492C12.2142 5.3492 13.4313 4.7112 14.1346 3.85285Z"
                                                fill="white" />
                                        </svg>
                                        Sign in with Apple
                                    </button>
                                    <span class="relative block font-medium text-sm text-center my-7.5">
                                        <span
                                            class="block absolute left-0 top-1/2 h-[1px] w-22.5 bg-white/[0.12]"></span>
                                        <span
                                            class="block absolute right-0 top-1/2 h-[1px] w-22.5 bg-white/[0.12]"></span>
                                        Or sign up with email
                                    </span>
                                    <div class="mb-4 relative">
                                        <span class="absolute top-1/2 -translate-y-1/2 left-6">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.00039 6.92499C9.85039 6.92499 11.3504 5.47499 11.3504 3.67499C11.3504 1.87499 9.85039 0.424988 8.00039 0.424988C6.15039 0.424988 4.65039 1.87499 4.65039 3.67499C4.65039 5.47499 6.15039 6.92499 8.00039 6.92499ZM8.00039 1.57499C9.22539 1.57499 10.2254 2.52499 10.2254 3.69999C10.2254 4.87499 9.22539 5.82499 8.00039 5.82499C6.77539 5.82499 5.77539 4.87499 5.77539 3.69999C5.77539 2.52499 6.77539 1.57499 8.00039 1.57499Z"
                                                    fill="#918EA0" />
                                                <path
                                                    d="M9.62539 8.04999H6.37539C3.70039 8.04999 1.52539 10.25 1.52539 12.925V15C1.52539 15.3 1.77539 15.575 2.10039 15.575C2.42539 15.575 2.67539 15.325 2.67539 15V12.925C2.67539 10.875 4.35039 9.17499 6.42539 9.17499H9.65039C11.7004 9.17499 13.4004 10.85 13.4004 12.925V15C13.4004 15.3 13.6504 15.575 13.9754 15.575C14.3004 15.575 14.5504 15.325 14.5504 15V12.925C14.4754 10.25 12.3004 8.04999 9.62539 8.04999Z"
                                                    fill="#918EA0" />
                                            </svg>
                                        </span>
                                        <input type="name" name="Fname" placeholder="Enter your First name"
                                            class="w-full border border-white/[0.12] bg-transparent rounded-lg focus:border-purple pl-14.5 pr-4 py-3.5 font-medium outline-none focus-visible:shadow-none" />
                                    </div>
                                    <div class="mb-4 relative">
                                        <span class="absolute top-1/2 -translate-y-1/2 left-6">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.00039 6.92499C9.85039 6.92499 11.3504 5.47499 11.3504 3.67499C11.3504 1.87499 9.85039 0.424988 8.00039 0.424988C6.15039 0.424988 4.65039 1.87499 4.65039 3.67499C4.65039 5.47499 6.15039 6.92499 8.00039 6.92499ZM8.00039 1.57499C9.22539 1.57499 10.2254 2.52499 10.2254 3.69999C10.2254 4.87499 9.22539 5.82499 8.00039 5.82499C6.77539 5.82499 5.77539 4.87499 5.77539 3.69999C5.77539 2.52499 6.77539 1.57499 8.00039 1.57499Z"
                                                    fill="#918EA0" />
                                                <path
                                                    d="M9.62539 8.04999H6.37539C3.70039 8.04999 1.52539 10.25 1.52539 12.925V15C1.52539 15.3 1.77539 15.575 2.10039 15.575C2.42539 15.575 2.67539 15.325 2.67539 15V12.925C2.67539 10.875 4.35039 9.17499 6.42539 9.17499H9.65039C11.7004 9.17499 13.4004 10.85 13.4004 12.925V15C13.4004 15.3 13.6504 15.575 13.9754 15.575C14.3004 15.575 14.5504 15.325 14.5504 15V12.925C14.4754 10.25 12.3004 8.04999 9.62539 8.04999Z"
                                                    fill="#918EA0" />
                                            </svg>
                                        </span>
                                        <input type="name" name="Lname" placeholder="Enter your Last name"
                                            class="w-full border border-white/[0.12] bg-transparent rounded-lg focus:border-purple pl-14.5 pr-4 py-3.5 font-medium outline-none focus-visible:shadow-none" />
                                    </div>
                                    <div class="mb-4 relative">
                                        <span class="absolute top-1/2 -translate-y-1/2 left-6">
                                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.9998 0.399994H1.9998C1.1498 0.399994 0.424805 1.09999 0.424805 1.97499V10.075C0.424805 10.925 1.1248 11.65 1.9998 11.65H13.9998C14.8498 11.65 15.5748 10.95 15.5748 10.075V1.94999C15.5748 1.09999 14.8498 0.399994 13.9998 0.399994ZM13.9998 1.52499C14.0248 1.52499 14.0498 1.52499 14.0748 1.52499L7.9998 5.42499L1.9248 1.52499C1.9498 1.52499 1.9748 1.52499 1.9998 1.52499H13.9998ZM13.9998 10.475H1.9998C1.7498 10.475 1.5498 10.275 1.5498 10.025V2.62499L7.3998 6.37499C7.5748 6.49999 7.7748 6.54999 7.9748 6.54999C8.1748 6.54999 8.3748 6.49999 8.5498 6.37499L14.3998 2.62499V10.05C14.4498 10.3 14.2498 10.475 13.9998 10.475Z"
                                                    fill="#918EA0" />
                                            </svg>
                                        </span>
                                        <input type="email" name="Email" placeholder="Enter your email"
                                            class="w-full border border-white/[0.12] bg-transparent rounded-lg focus:border-purple pl-14.5 pr-4 py-3.5 font-medium outline-none focus-visible:shadow-none" />
                                    </div>
                                    <div class="mb-5 relative">
                                        <span class="absolute top-1/2 -translate-y-1/2 left-6">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_368_6544)">
                                                    <path
                                                        d="M14.0752 1.92501C13.1252 0.975012 11.8502 0.450012 10.5002 0.450012C9.1502 0.450012 7.8502 0.975012 6.9002 1.92501C5.6252 3.20001 5.1252 5.00001 5.5752 6.75001L0.725195 11.575C0.550195 11.75 0.450195 12 0.450195 12.275V14.6C0.450195 15.125 0.875195 15.575 1.4252 15.575H3.7502C4.0002 15.575 4.2502 15.475 4.4502 15.3L5.0252 14.725C5.2252 14.525 5.3502 14.225 5.3002 13.925V13.875L5.6002 13.85C6.0752 13.8 6.4252 13.45 6.4752 12.975L6.5002 12.675H6.5502C6.8252 12.7 7.1002 12.625 7.3252 12.425C7.5252 12.25 7.6502 11.975 7.6502 11.7V11.5H7.8252C8.0752 11.5 8.3252 11.4 8.5002 11.225L9.3252 10.425C11.0502 10.85 12.8502 10.375 14.1002 9.12501C16.0502 7.12501 16.0502 3.90001 14.0752 1.92501ZM13.2752 8.30001C12.2502 9.32501 10.7252 9.70001 9.3002 9.22501C9.1002 9.15001 8.8752 9.20001 8.7252 9.35001L7.7252 10.35H7.0502C6.7502 10.35 6.4752 10.6 6.4752 10.925V11.525L6.0252 11.475C5.8752 11.45 5.7252 11.5 5.6002 11.6C5.4752 11.7 5.4002 11.825 5.4002 11.975L5.3252 12.725L4.5752 12.8C4.4252 12.825 4.2752 12.9 4.2002 13C4.1002 13.125 4.0502 13.275 4.0752 13.425L4.1502 13.975L3.6752 14.45H1.5752V12.35L6.6002 7.32501C6.7502 7.17501 6.8002 6.95001 6.7252 6.75001C6.2752 5.32501 6.6252 3.80001 7.6752 2.75001C8.4252 2.00001 9.4002 1.60001 10.4752 1.60001C11.5252 1.60001 12.5252 2.00001 13.2752 2.75001C14.8252 4.25001 14.8252 6.75001 13.2752 8.30001Z"
                                                        fill="#918EA0" />
                                                    <path
                                                        d="M11.3498 2.875C10.8748 2.875 10.4248 3.05 10.0748 3.4C9.3748 4.1 9.3748 5.225 10.0748 5.925C10.4248 6.275 10.8748 6.45 11.3498 6.45C11.8248 6.45 12.2748 6.275 12.6248 5.925C12.9748 5.575 13.1498 5.125 13.1498 4.65C13.1498 4.175 12.9748 3.725 12.6248 3.375C12.2748 3.05 11.8248 2.875 11.3498 2.875ZM11.8248 5.125C11.5748 5.375 11.1248 5.375 10.8748 5.125C10.6248 4.875 10.6248 4.45 10.8748 4.175C10.9998 4.05 11.1748 3.975 11.3498 3.975C11.5248 3.975 11.6998 4.05 11.8248 4.175C11.9498 4.3 12.0248 4.475 12.0248 4.65C12.0248 4.825 11.9498 5 11.8248 5.125Z"
                                                        fill="#918EA0" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_368_6544">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <input type="password" name="Password" placeholder="Confirm password"
                                            class="w-full border border-white/[0.12] bg-transparent rounded-lg focus:border-purple pl-14.5 pr-4 py-3.5 font-medium outline-none focus-visible:shadow-none" />
                                    </div>
                                    <button type="submit"
                                        class="hero-button-gradient flex justify-center w-full rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
                                        Sign up 
                                    </button>
                                    <p class="text-center font-medium text-white mt-5">
                                        Already have an account?
                                        <a href="signin.php" class="text-purple">Sign in Here</a>
                                    </p>
                                </form>
                            </div>
                        </div>
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
    <script>(function () { var js = "window['__CF$cv$params']={r:'817eddba8d930dba',t:'MTY5NzYxMjAyNi4wOTkwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/7ff8d35b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"817eddba8d930dba","version":"2023.8.0","r":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>
</html>