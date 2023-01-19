
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1975 Old Fashioned Burgers' Menu</title>

        <style>
            .main{
                height: 100%;
                display: grid;
                grid-template-columns: 15% auto 15%;
            }

            .left{
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
                background-color: red;
            }
            .nav{
                display: flex;
                flex-direction: column;
                height: 100%;
            }
            .nav-item{
                display: flex;
                justify-content: center;
                border: 1px black solid;
                margin-top: 10px;
            }

            .mid{
                background-color: orange;
            }
            .right{
                background-color: yellow;
            }
            
        </style>
    </head>

    <body>
        <div class="main">

            <div class="left">
                <img src="css/system images/company logo.png" height="auto" width="100%">
                <div class="nav">
                    <button class="nav-item">
                        HOME
                    </button>
                    <button class="nav-item">
                        POS
                    </button>
                    <button class="nav-item">
                        ORDERS
                    </button>
                    <button class="nav-item">
                        STOCKS
                    </button>
                </div>
                <button onclick="location.href='index.php'" class="logout nav-item">
                    LOGOUT
                </button>
            </div>

            <div class="mid">
                SELECT CATEGORY!
            </div>
            <div class="right">
                Hello!
            </div>
        </div>
    </body>
</html>