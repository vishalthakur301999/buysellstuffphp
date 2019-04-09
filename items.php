<?php
error_reporting(0);
session_start();
$_SESSION['type']=$_POST['type'];
?>
<html><head><title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .outer {
            display: table;
            position: absolute;
            top: 0;
            left: 0;
            height: 95%;
            width: 100%;
            z-index: 1;
            padding-top: 10%;
        }

        .middle {
            display: table-cell;
            vertical-align: middle;
        }

        .inner {
            font-weight: bold;
            margin-left: auto;
            margin-right: auto;
            width:1000px;
            background-color: lightyellow;
        }
        body{
            background-color: lightsalmon;
        }
        .navbar{
            z-index: 2;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" style="color: azure" href="ui.php">Sell And Buy Stuff!</a>
    <div style="color:white">
        <?php
        session_start();
        echo "Welcome ".$_SESSION['uname'];
        ?>
    </div>
    <form class="form-inline">
        <button class="btn btn-outline-light" formaction="sell.html">Sell Something!</button>
        <button class="btn btn-outline-light" formaction="index.html">Sign Out</button>
    </form>
</nav>
<div class="outer">

    <div class="middle">

        <div id="ui" class="inner">

            <?php
            error_reporting(0);
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "ospda_vt";

            $conn = new mysqli($servername, $username, $password);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $type = $_SESSION['type'];
            mysqli_select_db($conn,$db);
            $opt = $_GET['Sort'];
            $sql = "select * from selling where itype= '$type'";
            $sqlpa = "select * from selling where itype= '$type' order by price asc";
            $sqlpb =  "select * from selling where itype= '$type' order by price desc";

            if(strcmp($opt,"Price High to Low")==0){
                $result = mysqli_query($conn, $sqlpb);
            }
            else if(strcmp($opt,"Price Low to High")==0){
                $result = mysqli_query($conn, $sqlpa);
            }
            else{
                $result = mysqli_query($conn,$sql);
            }

            if (mysqli_num_rows($result) > 0) {
                echo "<div class='outer'>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='card rdata inner'><div class='card-header'>";
                    echo "Item Name - " . $row["iname"]. "<br> Brand -  " . $row["ibrand"]. "";
                    echo "</div><div class='card-body'><blockquote class='blockquote mb-0'>";
                    echo "<p id='rbg'>Price : ".$row["price"]."</p><p id='lcl'>Condition : ".$row["icond"]."</p><form method='post' action='contact.php'>";
                    echo "<input type='hidden' name='id' value='$row[id] '>";
                    echo "<input type='submit' class='btn btn-outline-dark' value='Contact Seller'>";
                    echo "</blockquote> </div></div><br>";
                }
                echo "</div>";
            } else {
                echo "0 results";
            }
            if (!$result) {
                die('Invalid query: ' . mysqli_error($conn));
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>
