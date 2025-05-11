<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Terkirim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b08968;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
        }
        h1 {
            color: #333;
        }
        .success-icon {
            color: #4CAF50;
            font-size: 64px;
            margin-bottom: 20px;
        }
        .back-button {
            background-color: #aec09a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .back-button:hover {
            background-color: #8fa67e;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <div class="success-icon">✓</div>
        <h1>Pesan Terkirim!</h1>
        <p>Terima kasih atas pesan Anda. Kami akan segera menghubungi Anda.</p>
        <a href="index.php" class="back-button">Kembali ke Beranda</a>
    </div>
</body>
</html>