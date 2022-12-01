<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khanas - Order</title>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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

<body class="bg-[#282421] overflow-x-hidden text-white">
    <?php require "nav-component.php" ?>
    <div class="h-screen w-screen flex flex-col">
        <div class="flex justify-between items-center py-14 px-64">
            <div class="flex flex-col justify-center items-center">
                <p class="text-2xl font-bold">ORDER</p>
                <p class="text-xs">Food List</p>
            </div>
            <div class="search">
                <input class="text-black w-[500px] rounded-full h-[50px] px-10 py-2" type="search" name="search"
                    id="search" autocomplete="off" />
                <div class="absolute w-[500px] flex flex-col justify-center items-center text-center" id="searchresult">
                </div>
            </div>
            <button class="cart p-3 rounded-full bg-white relative">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="
                        stroke: none;
                        stroke-width: 0;
                        stroke-dasharray: none;
                        stroke-linecap: butt;
                        stroke-linejoin: miter;
                        stroke-miterlimit: 10;
                        fill: none;
                        fill-rule: nonzero;
                        opacity: 1;
                     " transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 73.713 65.44 H 27.689 c -3.566 0 -6.377 -2.578 -6.686 -6.13 c -0.21 -2.426 0.807 -4.605 2.592 -5.939 L 16.381 21.07 c -0.199 -0.889 0.017 -1.819 0.586 -2.53 s 1.431 -1.124 2.341 -1.124 H 87 c 0.972 0 1.884 0.471 2.446 1.263 c 0.563 0.792 0.706 1.808 0.386 2.725 l -7.798 22.344 c -1.091 3.13 -3.798 5.429 -7.063 5.999 l -47.389 8.281 c -0.011 0.001 -0.021 0.003 -0.032 0.005 c -0.228 0.04 -0.623 0.126 -0.568 0.759 c 0.056 0.648 0.48 0.648 0.708 0.648 h 46.024 c 1.657 0 3 1.343 3 3 S 75.37 65.44 73.713 65.44 z"
                            style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <circle cx="28.25" cy="75.8" r="6.5" style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform="  matrix(1 0 0 1 0 0) " />
                        <circle cx="68.28999999999999" cy="75.8" r="6.5" style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform="  matrix(1 0 0 1 0 0) " />
                        <path
                            d="M 19.306 23.417 c -1.374 0 -2.613 -0.95 -2.925 -2.347 l -1.375 -6.155 c -0.554 -2.48 -2.716 -4.212 -5.258 -4.212 H 3 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 6.749 c 5.372 0 9.942 3.662 11.113 8.904 l 1.375 6.155 c 0.361 1.617 -0.657 3.221 -2.274 3.582 C 19.742 23.393 19.522 23.417 19.306 23.417 z"
                            style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
                <div class="absolute -bottom-1 -right-1 bg-green-600 text-xs px-2 py-1 rounded-full">0</div>
            </button>
        </div>

        <div class="px-64 flex justify-between items-center mt-12 mb-12">
            <div class="font-medium">Find Your Desired Food</div>
            <div class="text-black">
                <select class="w-[200px] rounded-full px-5" name="sortby" id="sortby">
                    <option value="recently">Recently added</option>
                    <option value="h2l">Higher to lower</option>
                    <option value="l2h">Lower to higher</option>
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
        </div>

        <div class="itemList px-64 mb-20">
            <ul class="flex items-center gap-16 transition-all">
                <li>
                    <button
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/meal.png" alt="" />
                        <p class="font-medium">Every</p>
                    </button>
                </li>
                <li>
                    <button
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/pizza.png" alt="" />
                        <p class="font-medium">Pizza</p>
                    </button>
                </li>
                <li>
                    <button
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/wrap.png" alt="" />
                        <p class="font-medium">Wraps</p>
                    </button>
                </li>
                <li>
                    <button
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/burger.png" alt="" />
                        <p class="font-medium">Burger</p>
                    </button>
                </li>
                <li>
                    <button
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/coffee.png" alt="" />
                        <p class="font-medium">Drinks</p>
                    </button>
                </li>
            </ul>
        </div>

        <div class="foodItems grid grid-cols-4 gap-8 px-64 pb-44">

            <?php

            include("config.php");

            $sql = "SELECT * FROM `food_items`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo '<div
                    class="rounded overflow-hidden bg-[#322d29] w-[300px] h-[400px] hover:scale-[1.02] transition-all duration-200">
                    <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg" alt=""
                            style="object-position: 20% 75%" />
                        <div class="p-5">
                            <p class="font-medium text-center">' . $row["name"] . '</p>
                            <hr class="mt-5" />
                            <div class="flex text-sm justify-between items-center mt-5 font-bold">
                                <p>Price: ' . $row["price"] . '</p>
                                <p>Ordered: ' . $row["ordered"] . '</p>
                            </div>
                            <div class="flex justify-center items-center">
                                <button class="px-4 py-2 mt-7 bg-green-600 w-full rounded">Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>';
                }

            } else {
                echo "0 results";
            }

            $conn->close();
            ?>


        </div>
        <?php require "footer.php" ?>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#search").keyup(function() {
            var input = $(this).val();
            if (input != "") {
                $.ajax({

                    url: "livesearch.php",
                    method: "POST",
                    data: {
                        input: input
                    },
                    success: function(data) {
                        $("#searchresult").html(data);
                    }
                })
            } else {
                $("searchresult").css("display", "none");
            }
        })
    })
    </script>
</body>

</html>