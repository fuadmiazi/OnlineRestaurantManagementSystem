<?php
session_start();

//   if (!isset($_SESSION['name'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: login.php');
//   }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khanas</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
               content-visibility: auto;
            }
         }
      </style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Montserrat";
        }

        .bg-main {
            background-image: url(images/bg-img.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .title {
            font-family: "Sofia", cursive;
        }

        .scroll-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        .scroll-child {
            scroll-snap-align: start;
            flex: none;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="bg-[#E8C07D] overflow-x-hidden">



    <div class="scroll-container h-screen w-screen flex flex-col">
        <section class="scroll-child w-screen h-screen">
            <nav class="text-white h-[84.5px] font-medium absolute w-screen z-10 mt-10">
                <div class="logo-nav absolute left-[50%] translate-x-[-50%]"></div>
                <div
                    class="menu flex gap-[250px] justify-center items-center h-full absolute left-[50%] translate-x-[-50%]">
                    <div class="left-menu">
                        <ul class="flex gap-10 text-sm">
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="#aboutUs">ABOUT</a>
                            </li>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="#contact">CONTACT</a>
                            </li>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a
                                    href="order-page.php">ORDER</a></li>
                        </ul>
                    </div>

                    <div class="right-menu">
                        <ul class="flex gap-10 text-sm">
                            <?php if (!isset($_SESSION['name'])): ?>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="login.php">SIGN IN</a>
                                <?php endif ?>
                            </li>
                            <?php if (isset($_SESSION['name'])): ?>
                            <li class="hover:text-yellow-500 transition-all duration-75 uppercase"><a
                                    href="profile-page.php">
                                    <?php echo $_SESSION['name']; ?>
                                </a>
                            </li>
                            <?php endif ?>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="">FEEDBACK</a></li>

                            <?php if (isset($_SESSION['name'])): ?>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a
                                    href="index.php?logout='1'">LOGOUT</a>
                            </li>
                            <?php endif ?>

                            <?php if (!isset($_SESSION['name'])): ?>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="register.php">JOIN
                                    US</a>
                            </li>
                            <?php endif ?>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="bg-main h-screen w-screen absolute -z-50">
                <div class="main-filter h-screen bg-black opacity-40 w-screen absolute top-0"></div>
            </div>
            <main
                class="absolute z-10 top-[50%] left-[50%] translate-x-[-50%] translate-y-[-45%] flex flex-col justify-center items-center">
                <div class="title title-main text-white text-9xl z-50 my-2 text-center border-2 w-fit">Khanas</div>
                <div class="text-gray-200 text-center text-lg border-t-white uppercase font-medium">Bet You Can't Eat
                    Less
                </div>
                <div class="text-justify border-t-white w-[435px] mt-5 text-neutral-100"
                    style="text-align-last: center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis est labore natus?
                </div>
                <div class="btns flex gap-12 my-16">
                    <div class="btn">
                        <a href="order-page.php"><button
                                class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                Delivery
                            </button></a>

                    </div>
                    <div class="btn">
                        <a href="order-page.php">
                            <button
                                class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                Pre-order
                            </button>
                        </a>
                    </div>
                </div>
            </main>

            <div
                class="social-main absolute left-7 top-[50%] translate-y-[-50%] flex flex-col justify-center items-center">
                <div class="cursor-vertical-text text-gray-200 rotate-180 text-xs uppercase"
                    style="writing-mode: vertical-rl">
                    Stay Connected
                </div>
                <div class="h-20 w-[1px] bg-gray-300 my-6 rounded"></div>
                <a href="https://www.facebook.com/khanaseat/" target="_blank"><img
                        class="w-[30px] mb-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-facebook.svg" alt="" /></a>
                <a href="https://www.instagram.com/khanas_eat/" target="_blank"><img
                        class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-instagram.svg" alt="" /></a>
                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-twitter.svg" alt="" /></a>
                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-github.svg" alt="" /></a>
                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-youtube.svg" alt="" /></a>
            </div>

            <a href="#aboutUs"
                class="scroll-down-btn absolute right-7 top-[50%] translate-y-[-50%] flex flex-col justify-center items-center animate-pulse">
                <div class="cursor-pointer text-gray-200 rotate-180 text-xs uppercase"
                    style="writing-mode: vertical-rl">
                    Scroll Down</div>
                <div class="h-20 w-[1px] bg-gray-300 my-6 rounded"></div>
                <img class="w-[40px] animate-bounce mt-2" src="images/scrolling.png" alt="" />
            </a>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative z-50" id="aboutUs">
            <div class="grid grid-cols-2 overflow-hidden">
                <div class="flex justify-center items-center flex-col h-[83%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">About Us</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">The Story Behind Our Success</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[450px] text-justify text-white mb-10" style="text-align-last: center">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum ex officiis quos quas fugit
                        vero
                        quibusdam est id
                        adipisci. A? Lorem ipsum dolor sit amet.
                    </div>
                    <a href="about-page.php"><button
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Read More
                        </button></a>

                </div>
                <div class="about-us-home-pic h-screen">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 right-0 z-50"></div>

                    <img class="w-[50vw]" src="images/aboutus-home.jpg" alt="" />
                </div>
            </div>
        </section>
        <section class="scroll-child contact-us h-screen bg-[#282421] w-screen relative z-50" id="contact">
            <div class="grid grid-cols-2 overflow-hidden">
                <div class="about-us-home-pic h-screen relative">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 left-0 z-50"></div>
                    <img class="w-[50vw] -translate-y-36" src="images/contact-us-img.jpg" alt="" />
                </div>
                <form class="flex justify-center items-center flex-col h-[90%]" action="send.php" method="post">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Contact Us</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">let us know your thoughts</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div
                        class="w-[400px] text-justify text-white mb-12 flex flex-col justify-center items-center gap-6">
                        <input
                            class="w-full text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            type="text" name="name" placeholder="NAME" style="--tw-ring-shadow: none" />

                        <input
                            class="w-full text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            type="email" name="email" placeholder="EMAIL" style="--tw-ring-shadow: none" />
                        <textarea
                            class="resize-none w-full h-[45px] text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            name="message" id="" cols="30" rows="10" placeholder="MESSAGE"
                            style="--tw-ring-shadow: none"></textarea>
                    </div>
                    <div class="btns flex gap-5">
                        <button type="submit" name="send"
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Submit
                        </button>

                        <a href="contact-us.php"><button
                                class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                Learn More
                            </button></a>

                    </div>
                </form>
            </div>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative z-50" id="popular">
            <div class="grid grid-cols-2 overflow-hidden">
                <div class="flex justify-center items-center flex-col h-[83%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Popular</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase text-center">
                        Favorite Items Of Our<br />Beloved Customers
                    </div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[450px] text-justify text-white mb-2 uppercase font-semibold"
                        style="text-align-last: center">
                        <p>DualShock Burger</p>
                    </div>
                    <div class="w-[450px] text-justify text-white mb-2 uppercase">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolore asperiores impedit nisi
                            quam
                            neque!</p>
                    </div>
                    <div class="text-white mb-10 w-[450px]">
                        <p class="uppercase font-medium text-center mb-2">Ingredients</p>
                        <ol class="text-center grid grid-cols-5 gap-3">
                            <li class="py-2 bg-green-600 rounded">Beef</li>
                            <li class="py-2 bg-green-600 rounded">Lettuce</li>
                            <li class="py-2 bg-green-600 rounded">Tomato</li>
                            <li class="py-2 bg-green-600 rounded">Cheese</li>
                            <li class="py-2 bg-green-600 rounded">Ketchup</li>
                        </ol>
                    </div>
                    <a href="order-page.php"><button
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Order now
                        </button></a>

                </div>
                <div class="about-us-home-pic h-screen">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 right-0 z-50"></div>

                    <img class="w-[50vw]" src="images/bg-img-alt.jpg" alt="" />
                </div>
            </div>
        </section>
        <footer
            class="footer scroll-child w-screen h-[50vh] text-white z-50 border-t-[1px] border-t-neutral-500 bg-[#282421] relative">
            <div class="footer-containter absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <div class="flex justify-between items-start w-[80vw]">
                    <div class="footer-left">
                        <div class="title text-white text-6xl z-50 mb-5 text-center border-2 w-fit">Khanas</div>
                        <div class="nav-links-footer">
                            <p class="w-[250px] mb-7">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero soluta illum voluptas
                                fugit
                                repudiandae dicta
                                architecto temporibus est delectus aperiam.
                            </p>
                            <div class="social-footer flex justify-between items-center w-[220px]">
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-facebook.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-instagram.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-twitter.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-github.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-youtube.svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-center">
                        <div class="nav-links-footer">
                            <div class="text-white text-2xl z-50 w-fit font-medium">Navigations</div>
                            <div class="h-[2px] w-[100px] bg-white my-4 rounded"></div>

                            <ul class="flex flex-col gap-2 justify-center">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="about-page.php">ABOUT</a></li>
                                <li><a href="contact-us.php">CONTACT</a></li>
                                <li><a href="profile-page.php">PROFILE</a></li>
                                <li><a href="">ORDER</a></li>
                                <li><a href="">FEEDBACK</a></li>
                                <li><a href="">RESERVATION</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="text-white text-2xl z-50 w-fit font-medium">Location</div>
                        <div class="h-[2px] w-[100px] bg-white my-4 rounded"></div>

                        <div class="nav-links-footer">
                            <p class="w-[250px] mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Quisquam, rem?
                            </p>
                            <p class="my-2"><span class="underline">Phone:</span> +8801423542132</p>
                            <p class="my-2"><span class="underline">Email:</span> <a
                                    href="">rafid.ahmmad.3@gmail.com</a></p>
                            <p class="my-2"><span class="underline">Website:</span> <a href="">www.randomwebsite.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

<!-- <nav class="text-white bg-[#614124] h-[84.5px] font-medium fixed w-screen z-50"> -->

<!-- <img
               class="hover:scale-105 origin-center transition-all duration-200 w-[107.24px] h-auto rotate-[17deg]"
               src="images/sm-logo.png"
               alt=""
            /> -->
<!-- <svg
               class="w-[250px] h-auto"
               width="5026"
               height="3071"
               viewBox="0 0 5026 3071"
               fill="none"
               xmlns="http://www.w3.org/2000/svg"
               xmlns:xlink="http://www.w3.org/1999/xlink"
            >
               <g id="LOGO">
                  <path
                     id="Union"
                     fill-rule="evenodd"
                     clip-rule="evenodd"
                     d="M