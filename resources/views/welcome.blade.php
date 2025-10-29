<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #84fab0, #8fd3f4);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeIn 0.6s ease;
        }

        .welcome-box h1 {
            color: #00796b;
            margin-bottom: 10px;
        }

        .welcome-box p {
            color: #444;
            font-size: 18px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="welcome-box">
        <h1>🎉 Welcome, {{ $name ?? 'Guest' }}!</h1>
        <p>We’re happy to see you here.</p>
    </div>
</body>
</html>
