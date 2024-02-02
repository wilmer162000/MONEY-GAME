<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.button{
            margin: 10px auto;
            padding: 0px;
            width: 600px
        }
        form{
            display: inline-block;
            text-align: center;
            margin: 0px auto;
        }
        div.scroll{
            width: 560px;
            height: 100px;
            overflow: scroll; 
            margin: 10px auto;
            border: 1px solid black;
            padding: 0px 20px;
        }

        nav > h3, input.reset{
            position: relative;
        }

        input.reset{
            text-align: right;
            color: white;
            background-color: red;
            top: -35px;
            left: 490px;
            
        }
        form.button{
            padding: 0px 0px;
            border: 1px solid black;
            width: 145px;
            height: 150px;
        }
        div.card{
            border:1px solid black;
            margin: 10px auto;
            width: 600px;
            padding: 50px;
        }
        input.bet{
            color:white;
            background-color: green;
        }

        p.green{
            color: green;
        }

        p.red{
            color: red;
        }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <form action="process.php" method="post">
            <h3>Your money: <?=$_SESSION['counter']?></h3>
            <input type="submit" value="Reset Game!" class="reset" name="reset"/>
            </form>
        </nav>
        <div class="button">
            <form action="process.php" method="post" class="button">
            <h4>Low Risk</h4>
            <input type="hidden" name="button" value="farm"/>
            <input type="submit" name="one" value="BET1" class="bet"/>
            <h5>by -25 up to 100</h5>
            </form>
            <form action="process.php" method="post" class="button">
            <h4>Moderate Risk</h4>
            <input type="hidden" name="button" value="farm"/>
            <input type="submit" name="two" value="BET2" class="bet"/>
            <h5>by -100 up to 1000</h5>
            </form>
            <form action="process.php" method="post" class="button"> 
            <h4>High Risk</h4>
            <input type="hidden" name="button" value="farm" />
            <input type="submit" name="three" value="BET2" class="bet"/>
            <h5>by -500 up to 2500</h5>
            </form>
            <form action="process.php" method="post" class="button">
            <h4>Severe Risk</h4>
            <input type="hidden" name="button" value="farm" />
            <input type="submit" name="four" value="BET4" class="bet"/>
            <h5>by -3000 to 5000</h5>
            </form>
        </div>
        <h5>Game Host:</h5>
        <div class="scroll">
        <?php
        foreach ($_SESSION['messages'] as $message) {
            echo "<p class='{$message['color']}'>{$message['message']}</p>";
        }
        ?>
        </div>

    </div>
</body>
</html>