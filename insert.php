<html>

<head>
    <title>Insert Details</title>

    <style>
        h1 {
            text-align: center;
            color: black;
            font-family: verdana;
            font-size: 2em;
        }

        h4 {
            text-align: center;
            color: black;
            font-family: verdana;
            font-size: 1em;
        }

        /* .btn{
            background-color: gray;
            height: 40px;
            width: 110px;
            text-decoration-color: white;
        } */
    </style>
</head>

<body>

    <?php

    $con = mysqli_connect('localhost', 'root');

    mysqli_select_db($con, 'softmedics');


    if (isset($_POST['done'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobno = $_POST['mobno'];
        $message = $_POST['message'];
        $q_insert = " INSERT INTO `contactinfo1`(`name`, `email`, `mobno`, `message`) VALUES ('$name','$email','$mobno','$message') ";
        $query = mysqli_query($con, $q_insert);

        //Checking inserted data
        if ($query) {
            //  echo "<h1>Thanks for contacting us!</h1>";
            //  echo "<h4>We'll contact you soon</h4>";

        }
    }

    ?>

    <br>
    <h1>Thanks for contacting us!</h1>
    <br>
    <h4>We'll contact you soon..<br>


        <br><br>
        <a href="contactform.html" class="text-white"><button type="button" class="btn btn-primary"> Go to website </button></a>
    </h4>


</body>

</html>