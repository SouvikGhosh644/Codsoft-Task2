<?php

$connect = mysqli_connect("localhost", "root", "", "ir");



if(!$connect){
    echo "error!";
}
else{

$name = $_POST['name'];
$email = $_POST['email'];
$from = $_POST['from'];
$to = $_POST['to'];
$nop = $_POST['nop'];
$date = $_POST['date'];

$sql = "INSERT INTO `book`(`id`, `name`, `email`, `from`,`to`,`nop`,`date`) VALUES ('','$name','$email','$from','$to','$nop','$date')";
if (mysqli_query($connect , $sql)) {
    # code...
    echo "Ticket Booked Successfully";
}
else{
    echo "Error encountered!!!";
}
}

function generateRandomNumber() {
    $randomNumber = rand(10000, 99999);
    return $randomNumber;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Ticket Invoice</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .invoice {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .invoice-header {
            text-align: center;
            background-color: rgb(144, 66, 6);
        }

        .invoice-header h1 {
            padding: 10px;
            color: #fff;
            text-align: center;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 20px;
            background-image: url("images.png");
            background-repeat: no-repeat;
            background-position: center;
            background-;
        }

        .invoice-details .left {
            width: 50%;
        }

        .invoice-details .right {
            text-align: right;
            width: 50%;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .invoice-total {
            font-weight: bold;
            text-align: right;
        }

        button {
            color: white;
            background-color: rgb(39, 197, 39);
            border: none;
            border-radius: 3px;
            padding: 5px;
        }

        @media screen and (max-width: 600px) {
            .invoice-details {
                flex-direction: column;
            }

            .invoice-header h1 {
                font-size: 20px;
            }

            .invoice-details .right {
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="invoice">
        <div class="invoice-header">
            <h1>Railway Ticket Invoice</h1>
            <!-- <p style="text-align: center; color: #fff;">Wish you a happy and comfortable journey</p> -->
        </div>

        <div class="invoice-details">
            <div class="left">
                <p><strong>Passenger Name:</strong><?php echo  $name;?></p>
                <p><strong>From Station:</strong><?php echo  $from;?></p>
                <p><strong>To &nbsp;&nbsp; Station:</strong><?php echo  $to;?></p>
            </div>
            <div class="right">
                <p><strong>Invoice Date:</strong><?php echo date("Y-m-d");?></p>
                <p><strong>Journey Date:</strong><?php echo $date;?></p>
                <p><strong>Invoice Number:</strong><?php echo generateRandomNumber(); ?></p>
            </div>
        </div>

        <table class="invoice-table">
            <thead>
                <tr style="text-align:center;">
                    <th>PNR No</th>
                    <th>No of Passenger</th>
                    <th>Fare</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align:center;">
                    <td><?php echo generateRandomNumber(); ?></td>
                    <td><?php echo $nop;?></td>
                    <td>100.00</td>
                    <td><?php echo $nop;?>100.00</td>
                </tr>
                <!-- <tr>
                    <td colspan="3" class="invoice-total">Total</td>
                    <td>150.00</td>
                </tr> -->
            </tbody>
        </table>
        <center><button id="printButton">Print</button></center>
    </div>
    <center><button id="gohome" style="margin:20px;"><a style="text-decoration:none; color: white;" href="home1.php">Go Home</a></button></center>
</body>

<script>
    document.getElementById("printButton").addEventListener("click", function () {
        window.print();
    });
</script>

</html>