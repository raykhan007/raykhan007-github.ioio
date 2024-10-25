<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Ambil nama pengguna dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Casino Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        .game-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            margin: 10px 0;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
        .game-card img {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }
        .game-card h3 {
            flex: 1;
            margin: 0 10px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Dashboard</h1>
    </header>

    <div class="container">
        <h2>Halo, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>Anda telah berhasil login ke akun Anda. Pilih game untuk bermain:</p>

        <div class="game-card">
            <img src="path/to/game1.jpg" alt="Game 1">
            <h3>Game 1</h3>
            <button onclick="window.location.href='game1.php'">Mainkan</button>
        </div>

        <div class="game-card">
            <img src="path/to/game2.jpg" alt="Game 2">
            <h3>Game 2</h3>
            <button onclick="window.location.href='game2.php'">Mainkan</button>
        </div>

        <div class="game-card">
            <img src="path/to/game3.jpg" alt="Game 3">
            <h3>Game 3</h3>
            <button onclick="window.location.href='game3.php'">Mainkan</button>
        </div>

        <div class="game-card">
            <img src="path/to/game4.jpg" alt="Game 4">
            <h3>Game 4</h3>
            <button onclick="window.location.href='game4.php'">Mainkan</button>
        </div>

        <button onclick="window.location.href='logout.php'" style="margin-top: 20px;">Logout</button>
    </div>
</body>
</html>
