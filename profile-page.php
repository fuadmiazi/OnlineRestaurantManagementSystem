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
    <title>Khanas - Profile</title>
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
            scroll-snap-type: y proximity;
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
    <?php require "nav-component.php" ?>

    <div class="scroll-container h-screen w-screen flex flex-col">
        <section class="scroll-child contact-us h-fit bg-[#282421] w-screen relative">
            <div class="profile flex flex-col justify-center items-center mt-[100px] mb-[150px]">
                <div class="pic-name-profile flex justify-center items-center gap-14 mb-32">
                    <div class="profile-pic">
                        <img class="rounded-full w-[250px] h-[250px] object-cover object-top" src="images/propic.jpg"
                            alt="" />
                    </div>
                    <div class="profile-name text-white">
                        <div class="mb-4 flex items-center gap-6">
                            <p class="title text-4xl border-white border-2 w-fit">
                                <?php if (isset($_SESSION['name'])): ?>
                                <?php echo $_SESSION['name']; ?>
                                <?php endif ?></p>
                            <div class="btn">
                                <a href="edit-profile.php"><button
                                        class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900" disabled>
                                        Edit Profile
                                    </button></a>


                            </div>
                        </div>

                        <p class="mb-4">

                            <?php if (isset($_SESSION['name'])): ?>
                            <?php echo $_SESSION['phone']; ?>
                            <?php endif ?> / <span class="text-blue-500"><a href="">

                                    <?php if (isset($_SESSION['name'])): ?>
                                    <?php echo $_SESSION['email']; ?>
                                    <?php endif ?></a></span>
                        </p>
                        <p class="text-blue-500"></p>
                        <div class="profile-bio text-white">
                            <p class="text-2xl">Biography</p>
                            <p class="w-[500px]">
                                Hi, I am <?php echo $_SESSION['name'] ?>.<br>I am a software developer.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="prev-card text-white scroll-child pt-10 mb-20">
                    <p class="text-2xl mb-12 text-center font-medium">Previous Delivery Orders</p>
                    <div class="order-cards grid grid-cols-4 gap-8">
                        <?php

                        include("config.php");

                        $sql = "SELECT * FROM `transaction_info` WHERE customer_id = '{$_SESSION['id']}' AND order_type = 'delivery' ORDER BY `date` DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '<div
                        class="rounded overflow-hidden bg-[#322d29] w-[300px] h-[400px] hover:scale-[1.02] transition-all duration-200">
                        <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/purchase.jpg"
                                alt="" style="object-position: 20% 75%" />
                            <div class="p-5">
                                <p class="font-medium text-center uppercase truncate">' . $row["transaction_id"] . '</p>
                                <hr class="mt-5" />
                                <div class="flex text-sm justify-between items-center mt-5 font-medium">
                                    <p>Amount: ' . $row["amount"] . '$</p>
                                </div>
                                <div class="flex text-sm justify-between items-center mt-3 font-medium">
                                    <p>Date: ' . $row["date"] . '</p>
                                </div>
                                <div class="flex text-sm justify-between items-center mt-3 font-medium capitalize">
                                    <p>Payment Method: ' . $row["payment_method"] . '</p>
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
                </div>


                <div class="prev-card text-white scroll-child  pt-10 mb-20">
                    <p class="text-2xl mb-12 text-center font-medium">Previous Pre-Orders</p>
                    <div class="order-cards grid grid-cols-4 gap-8">

                        <?php

                        include("config.php");

                        $sql = "SELECT * FROM `transaction_info` WHERE customer_id = '{$_SESSION['id']}' AND order_type = 'pre-order' ORDER BY `date` DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '<div
                        class="rounded overflow-hidden bg-[#322d29] w-[300px] h-[400px] hover:scale-[1.02] transition-all duration-200">
                        <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/purchase.jpg"
                                alt="" style="object-position: 20% 75%" />
                            <div class="p-5">
                                <p class="font-medium text-center uppercase truncate">' . $row["transaction_id"] . '</p>
                                <hr class="mt-5" />
                                <div class="flex text-sm justify-between items-center mt-5 font-medium">
                                    <p>Amount: ' . $row["amount"] . '$</p>
                                </div>
                                <div class="flex text-sm justify-between items-center mt-3 font-medium">
                                    <p>Date: ' . $row["date"] . '</p>
                                </div>
                                <div class="flex text-sm justify-between items-center mt-3 font-medium capitalize">
                                    <p>Payment Method: ' . $row["payment_method"] . '</p>
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
                </div>







            </div>
        </section>

        <?php require "footer.php" ?>
    </div>
</body>

</html>