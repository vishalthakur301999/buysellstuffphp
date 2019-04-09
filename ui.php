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
        }

        .middle {
            display: table-cell;
            vertical-align: middle;
        }

        .inner {
            font-weight: bold;
            margin-left: auto;
            margin-right: auto;
            padding: 2% 3%;
            width:500px;
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
    ?>
        <a href="usersell.php" class="btn" style="color: white;"> <?php echo "Welcome ".$_SESSION['uname'];?>, Your Submissions</a>
    </div>
    <form class="form-inline">
        <button class="btn btn-outline-light" formaction="sell.html">Sell Something!</button>
        <button class="btn btn-outline-light" formaction="index.html">Sign Out</button>
    </form>
</nav>

<div class="outer">
    <div class="middle">
        <div id="ui" class="inner">
            <form action="items.php" method="POST">
                <h1>What do you want to buy Today?</h1><br>
                <select class="form-control" name="type" id="type">
                    <option value="General Electronics">General Electronics</option>
                    <option value="Mobiles">Mobiles</option>
                    <option value="Audio">Audio</option>
                    <option value="Sports">Sports</option>
                    <option value="Stationary">Stationary</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Accessories">Accessories</option>
                </select><br>
                <input  class="form-control"  type="submit" value="Browse Category">
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>
