<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(donation.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
            background-position: center;
            white-space: nowrap;
            line-height: 30px;

        }

        p {
            line-height: 22px;
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 17px;

        }

        h1 {
            font-family: cursive;
            font-style: oblique;
            text-align: center;

        }

        ul {
            margin: 0 10%;
            padding: 10px 0px 10px 80px;
            display: flex;
            background: indianred;
        }

        ul li {
            list-style: none;
            padding: 10px 20px;

        }

        ul li a {
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            color: black;
            position: relative;

        }

        ul li a::before {
            content: "";
            width: 0px;
            height: 10px;
            background: black;
            position: absolute;
            top: 100%;
            left: 0;
            transition: .5s;
        }

        ul li a:hover::before {
            width: 50%;
            transform: translateX(100%);
        }
    </style>
</head>

<body>

    <div class="container">
        <ul class="nav nav-tabs">
            <li><a data-toggle="tab" href="#Requested Medicines">Requested Medicines</a></li>
            <li><a data-toggle="tab" href="#RegisteredNGO">Registered NGO's</a></li>
            <li><a data-toggle="tab" href="#DonateMedicines">Donate Medicines</a></li>
            <li><a data-toggle="tab" href="#MyDonations">My Donations</a></li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <div class="tab-content">
            <div id="Requested Medicines" class="tab-pane fade in active">
                <table border="10">
                    <tr>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Generic</th>
                        <th>Quantity</th>
                    </tr>
                    <?php
                            include "oumds_connect.php"; // Using database connection file here
                            $records = mysqli_query($db,"select * from medrequest"); // fetch data from database
                            while($data = mysqli_fetch_array($records))
                            {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $data['User-Name']; ?>
                                </td>
                                <td>
                                    <?php echo $data['Med-Brand']; ?>
                                </td>
                                <td>
                                    <?php echo $data['Med-Gen']; ?>
                                </td>
                                <td>
                                    <?php echo $data['Med-Qnt']; ?>
                                </td>
                    </tr>
                    <?php
                            }
                            ?>
                    
                </table>
                <button onclick="window.location='../aj request module/request_page.html';">Make a request</button>


            </div>

            <div id="RegisteredNGO" class="tab-pane fade">
                <div class="column">
                    <table border="5">
                        <tr>
                            <td>ID</td>
                            <td>NGO Name</td>
                            <td>Email ID</td>
                            <td>Address</td>
                            <td>Contact</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>NGO 1</td>
                            <td>ngo1@gmail.com</td>
                            <td>Anderi west, Mumbai</td>
                            <td>7896543210</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>NGO 2</td>
                            <td>ngo2@gmail.com</td>
                            <td>Thane, Mumbai, MH, 400087</td>
                            <td>+91 9876543217</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>NGO 3</td>
                            <td>ngo3@gmail.com</td>
                            <td>Ghatkopar, Mumbai, MH, 400087</td>
                            <td>+91 786954320</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Old Age Home</td>
                            <td>oldhomes@gmail.com</td>
                            <td>Anderi, Mumbai, MH, 400065</td>
                            <td>+91 987654532</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="DonateMedicines" class="tab-pane fade">



            </div>
            <div id="MyDonations" class="tab-pane fade">
                <table border="5">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>EmailID</td>
                        <td>Medicine Brand Name</td>
                        <td>Medicine Generic Name</td>
                        <td>Quantity</td>
                        <td>Expiry date</td>
                        <td>Medicine Type</td>
                        <td>Donation Type</td>
                        <td>Reciever's email ID</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Samira Shaikh</td>
                        <td>samirashaikh487@gmail.com</td>
                        <td>xyz</td>
                        <td>abcd</td>
                        <td>50</td>
                        <td>2023-07-27</td>
                        <td>Tablet</td>
                        <td>NGO</td>
                        <td>oldhomes@gmail.com</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        function requestedmed_view()
        {

        }
    </script>
</body>

</html>