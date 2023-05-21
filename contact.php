<?php
ob_start();
//--Nav-Bar--//
include("sidenavcustomer.php");
?>

<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="bearblast.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
        .getInTouch {
            text-align: center;
            padding-top: 50px;
            margin-bottom: 20px;
            margin-left: 200px;
        }

        .getInForm {
            padding-left: 22%;
            padding-right: 10%;
            align-self: center;
        }

        .fieldForm {
            background-color: white;
            padding: 55px;
            width: 650px;
            height: 750px;
        }


        .grid-container-element {
            display: grid;
            grid-template-columns: auto auto;
            grid-gap: 20px;
            width: 100%;
            height: auto;
        }

        .grid-child-element {
            margin: 0px;
            height: auto;
            width: auto;
        }

        .grid-child-element2 {
            margin: 0px;
            background-color: #013a5e;
            color: white;
            padding: 50px;
            height: 750px;
            width: 650px;
        }

        p {
            font-size: 15px;
        }
        
    </style>

</head>

<div>
    <h1 class="getInTouch" style="font-size: 50px">Get In Touch With Us!</h1>
    <div class="getInForm">
        <div class="grid-container-element">
            <div class="grid-child-element">
                <form class="fieldForm">
                    <h1>Send a Message</h1><br><br>

                    <label for="fname">
                        <h3>First name</h3>
                    </label>
                    <label for="lname" style="text-indent: 157px">
                        <h3>Last name</h3>
                    </label><br>

                    <input type="text" id="fname" name="fname" placeholder="Enter your first name" style="width: 230px; height: 35px;" readonly>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name" style="width: 230px; height: 35px;" readonly><br><br>

                    <label for="fname">
                        <h3>Email</h3>
                    </label>
                    <label for="lname" style="text-indent: 220px">
                        <h3>Mobile Number</h3>
                    </label><br>

                    <input type="text" id="fname" name="fname" placeholder="Enter your email" style="width: 230px; height: 35px;" readonly>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="lname" name="lname" placeholder="Enter your mobile number" style="width: 230px; height: 35px;" readonly><br><br><br>

                    <label for="lname">
                        <h3>Message</h3>
                    </label><br>
                    <textarea placeholder="Write your message here" style="width: 530px; height: 150px; resize: none;" readonly></textarea>
                    <!-- <input type="text" id="fname" name="fname" placeholder="Write your message here" style="width: 685px; height: 250px; resize: none;">-->
                    <br><br><br>
                    <button style="width: 530px; height: 50px; background-color: #010b61; color: white;">Send</button>
                </form>
            </div>

            <div class="grid-child-element2">
                <h1>Contact Info</h1><br>
                <p>Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line so we can talk further about that.<br><br>
                    For more info or inquiry about our products project, and pricing. Feel free to get in touch with us.</p><br>
                <p><img src="images/location.png" width="30" height="30">&nbsp;&nbsp;Mandaue City, Cebu, Philippines</p>
                <p><img src="images/email.png" width="30" height="30">&nbsp;&nbsp;<u>michaeljohn.bacalso2@gmail.com</u></p>
                <p><img src="images/bluephone.png" width="30" height="30">&nbsp;&nbsp;<u>0977 022 8436</u></p><br>
                <img src="images/handles.png" width="100" height="30"><br><br>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d981.762344989377!2d123.7208826!3d10.1766418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a979445dd1d3c5%3A0xcb922f4c684dd0e5!2sBREGGETTE%20CARENDERIA!5e0!3m2!1sen!2sph!4v1683829613166!5m2!1sen!2sph" width="550" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>

            </div>
        </div>
    </div>
</div>

<body>

</body>

</html>