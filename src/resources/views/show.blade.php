<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRコード変換</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        header {
            height: 10%;
            background-color: rgb(0, 200, 255);
            color: white;
            text-align: center;
            line-height: 50px;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 1;
            padding: 20px;
            background-color: #f5f5f5;
            box-sizing: border-box;
        }

        footer {
            height: 10%;
            background-color: rgb(0, 200, 255);
            color: white;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header> ヘッダー </header>
        <main>

            <h1>QRコード変換</h1>
            <p>{{ $url }}</p>
            <p>{{ $qrcode }}</p>
        </main>
        <footer> フッター</footer>
    </div>
</body>

</html>