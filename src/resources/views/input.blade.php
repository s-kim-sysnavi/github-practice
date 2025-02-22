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

        .button-link {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            font-size: 11px;
            border: none;
        }

        .button-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <header> ヘッダー </header>
        <main>

            <form action="{{ route('show') }}" method="get">
                @csrf
                <input type="text" id="input" name="url" placeholder="QRコードに変換したいURLを入力してください">
                <button type="submit" class="button-link">送信</button>
            </form>


        </main>
        <footer> フッター</footer>
    </div>
</body>

</html>