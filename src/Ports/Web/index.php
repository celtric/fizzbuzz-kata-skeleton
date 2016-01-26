<html>
<head>
    <style type="text/css">
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #eee;
            font: 14px/1.2 sans-serif;
        }

        #box {
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
            margin: 15% auto 0;
            max-width: 360px;
            padding: 30px 30px 35px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .alert {
            background: #f1d7d7;
            border: 1px solid #c75d5d;
            border-radius: 4px;
            color: #ad1e1e;
            margin-bottom: 10px;
            padding: 10px 12px;
        }

        label {
            display: block;
        }

        input[type="number"] {
            display: block;
            margin: 10px 0;
            padding: 8px;
            width: 100%;
        }

        input[type="submit"] {
            background: #3c5388;
            border: none;
            border-radius: 4px;
            color: #fff;
            display: block;
            padding: 15px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="box">
        <h1>FizzBuzz</h1>
        <?php if (!empty($_POST)): ?>
            <p class="alert">Sorry, not implemented!</p>
        <?php endif; ?>
        <form method="post">
            <label>
                Please enter the number you want to test:
                <input type="number" name="number" />
            </label>
            <input type="submit" id="submit" value="Send" />
        </form>
    </div>
</body>
</html>
