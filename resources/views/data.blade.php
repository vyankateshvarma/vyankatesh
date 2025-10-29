<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <style>
        /* ===== Page background ===== */
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        /* ===== Form container ===== */
        .form-container {
            background: #ffffff;
            padding: 40px 35px;
            width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        /* ===== Heading ===== */
        .form-container h2 {
            text-align: center;
            color: #2193b0;
            margin-bottom: 25px;
            font-size: 28px;
        }

        /* ===== Labels ===== */
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #444;
        }

        /* ===== Inputs ===== */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid #eee;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 15px;
            transition: all 0.2s ease;
        }

        input:focus {
            border-color: #2193b0;
            box-shadow: 0 0 8px rgba(33, 147, 176, 0.3);
            outline: none;
        }

        /* ===== Button ===== */
        button {
            background: linear-gradient(45deg, #56ab2f, #a8e063);
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(45deg, #43a047, #76c893);
            transform: scale(1.03);
        }

        /* ===== Success message ===== */
        .success {
            background: #d4edda;
            color: #155724;
            border-left: 5px solid #28a745;
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>✨ User Registration</h2>

        <!-- Success message -->
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <!-- Registration form -->
        <form action="{{ url('/submit-form') }}" method="POST">
            @csrf

            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Create a password" required>

            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>
