<?php
session_start();
$user_name = $_SESSION['user'];

mysql_connect("localhost", "root", "");
mysql_select_db("blood_bank");

$id = $_REQUEST['id'];

$userQueryResult = mysql_query("select * from `users` where email='$user_name';");
$result = mysql_query("select * from `user_details` where email='$user_name' order by id desc;");

$row = mysql_fetch_array($result);
$numberOfDonations = mysql_num_rows($result);

$user = mysql_fetch_array($userQueryResult);
$name = implode(" ", [$user['first_name'], $user['last_name']]);
$bloodGroup = $user['blood_group'];
$lastDonated = date('M j Y', strtotime($row['created_at']));

?>

<html>

<head>
    <style type='text/css'>
    body,
    html {
        margin: 0;
        padding: 0;
    }

    body {
		margin-top: 50px;
        color: black;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: center;
        font-family: Georgia, serif;
        font-size: 24px;
        text-align: center;
    }

    .container {
        border: 20px solid tan;
        width: 750px;
        display: table-cell;
        vertical-align: middle;
        padding: 50px 0;
    }

    .logo {
        color: tan;
    }

    .marquee {
        color: tan;
        font-size: 48px;
        margin: 20px;
    }

    .assignment {
        margin: 20px;
    }

    .person {
        border-bottom: 2px solid black;
        font-size: 32px;
        font-style: italic;
        margin: 20px auto;
        width: 400px;
    }

    .reason {
        margin: 20px;
    }

    input[type=button] {
        width: 10%;
        background-color: black;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    </style>
    <script type="text/javascript">
    function printPage() {
        const buttons = document.querySelectorAll('#btn');
        buttons.forEach(button => {
            button.style.display = 'none';
        });
        window.print();
        buttons.forEach(button => {
            button.style.display = 'inline-block';
        });
    }
    </script>
</head>

<body>
    <div>
        <div class="container">
            <div class="logo">
                Digital Blood Bank
            </div>

            <div class="marquee">
                Certificate of Blood Donation
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                <?php echo "$name"; ?>
            </div>

            <div class="reason">
                For donating precious blood of group <b><?php echo "$bloodGroup"; ?></b> on
                "<i><?php echo "$lastDonated"; ?></i>"
                <br /> which can save lot of life. This is also to certify that above person has donated blood for
                <?php echo $numberOfDonations == 1 ? "First time" : "$numberOfDonations times so far"; ?>.
            </div>
            <div class="reason">We sincerely Thank you for the donation</div>
        </div>
    </div>
    <div style='font-weight: bold; width: 100%; margin-top: 50px;' align='center'>
        <input id="btn" type=button value='BACK' onclick='window.history.back();' />
        <input id="btn" type=button value='PRINT' onclick='printPage()' />
    </div>

</body>

</html>