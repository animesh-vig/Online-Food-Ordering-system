<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Snack Hack | Onlne Food Ordering System</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <section class="order container" id="order">

        <h3 class="sub-heading"> order now </h3>
        <h1 class="heading"> free and fast </h1>

        <form method ="post" action="connect.php">

            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name" name="firstName">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number" name="number">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input type="text" placeholder="enter food name" name="food">
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input type="text" placeholder="extra with food" name="extra">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>how much</span>
                    <input type="number" placeholder="how many orders" name="order">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <!-- <input type="text" name="address" placeholder="enter your address" id="" cols="30" rows="10"></textarea> -->
                    <input type="text" name="address">
                </div>
                <div class="input">
                    <span>your message</span>
                    <!-- <input type="text" name="message" placeholder="enter your message" id="" cols="30" rows="10"></textarea> -->
                    <input type="text" name="message">
                </div>
            </div>
            <div class="buttons">
                <input type="SUBMIT" class="btn" value="SUBMIT">
                <input type="RESET" class="btn" value="RESET">
            </div>
        </form>

    </section>

</body>

</html>