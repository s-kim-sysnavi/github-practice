<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
</head>
<body>
    <h1>QR Code Generator</h1>
    <form action="{{ route('generate.qr') }}" method="POST">
        @csrf
        <label for="text">Enter text to generate QR code:</label>
        <input type="text" id="text" name="text" required>
        <button type="submit">Generate QR Code</button>
    </form>

    @if (isset($qrCode))
        <div>
            <h2>Generated QR Code:</h2>
            {!! $qrCode !!}
        </div>
    @endif
</body>
</html>
