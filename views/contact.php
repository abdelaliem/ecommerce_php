<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <title>Contact</title>
</head>

<body>
    <?php
    $title = "Contact";
    require('navbar.php');
    require('topbar.php');
    ?>

    <div class="container-fluid">
        <div class="pt-5 pb-5 text-center">
            <h1>Get In Touch With Us</h1>
            <p class="text-muted">For More Information About Our Product & Services. Please Feel Free To Drop Us <br>An Email. Our Staff Always Be There To Help You Out. Do Not Hesitate</p>
        </div>
        <div class="row row-cols-2 pb-5 pt-5 container m-auto">
            <div class="col ps-5">
                <div>
                    <h3>Address</h3>
                    <p>236 5th SE Avenue, New <br>york NY10000, United <br>State</p>
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>Mobile: +(84) 546-6789 <br>Hotline: +(84) 456-6789</p>
                </div>
                <div>
                    <h3>Working Time</h3>
                    <p>Monday-Friday: 9:00-<br>22:00 <br>Saturday-Sunday: 9:00-<br>21:00</p>
                </div>
            </div>
            <div class="col p-0">
                <label class="mb-3 fw-bold">Your name</label>
                <input type="text" class="form-control w-75 mb-4" placeholder="Abc">
                <label class="mb-3 fw-bold">Email address</label>
                <input type="text" class="form-control w-75 mb-4" placeholder="Abc@def.com">
                <label class="mb-3 fw-bold">Subject</label>
                <input type="text" class="form-control w-75 mb-4" placeholder="This is an optional">
                <label class="mb-3 fw-bold">Message</label>
                <textarea type="text" class="form-control w-75 mb-4" placeholder="Hi! i'd like to ask about" rows="4"></textarea>
                <button type="submit" class="btn btn-outline-dark mt-4">Submit</button>
            </div>

        </div>

        <div class="row row-cols-3 " style="background-color: rgba(250, 244, 244, 1);">
            <div class="col p-5">
                <h1 style="font-size: 32px;text-align:start" >Free Delivery</h1 >
                <p class="text-muted " style="font-size: 21px; width:75%">For all oders over $50, consectetur adipim scing elit</p>
            </div>
            <div class="col p-5">
                <h1 style="font-size: 32px;text-align:start">90 Days Return</h1 >
                <p class="text-muted " style="font-size: 21px; width:75%">If goods have problems, consectetur adipim scing elit</p>
            </div>
            <div class="col p-5">
                <h1 style="font-size: 32px;text-align:start">Secure Payment</h1 >
                <p class="text-muted " style="font-size: 21px; width:75%">100% secure payment, consectetur adipim scing elit</p>
            </div>
        </div>

        <footer class="row row-cols-4 pt-5 mt-5 w-100">
            <div class="col ">
                <p class="text-muted  mt-5">400 University Drive Suite 200 Coral <br>Gables, <br>FL 33134 USA
                </p>
            </div>

            <div class="col">
                <h5 class="pt-3 pb-3 fw-bold">Links</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 pt-3 pb-3 fw-bold"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2 pt-3 pb-3 fw-bold"><a href="#" class="nav-link p-0 text-muted">Shop</a></li>
                    <li class="nav-item mb-2 pt-3 pb-3 fw-bold"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    <li class="nav-item mb-2 pt-3 pb-3 fw-bold"><a href="#" class="nav-link p-0 text-muted">Content</a></li>
                </ul>
            </div>

            <div class="col">
                <h5 class="pt-3 pb-3 fw-bold">Help</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 pt-3 pb-3 fw-bold"><a href="#" class="nav-link p-0 text-muted">Payment Options</a></li>
                    <li class="nav-item mb-2 pt-3 pb-3 fw-bold"><a href="#" class="nav-link p-0 text-muted">Returns</a></li>
                    <li class="nav-item mb-2 pt-3 pb-3 fw-bold"><a href="#" class="nav-link p-0 text-muted">Privacy Policies</a></li>
                </ul>
            </div>

            <div class="col">
                <h5 class="pt-3 pb-5">Newsletter</h5>
                <input type="email" placeholder="Enter Your Email Address" class="form-control w-75 border-bottom">
                <input type="button" value="SUBSCRIBE" class="btn border-bottom">
            </div>

            <div class="border-top col-12 mt-4 pe-5">
                <p class="mt-5 text-muted">2022 Meubel House. All rights reverved</p>
            </div>
        </footer>
    </div>
</body>

</html>