<!DOCTYPE html>
<html>
<head>
    <title>Student Feedback System</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 450px;
            background: white;
            padding: 20px;
            margin: 60px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid gray;
            border-radius: 6px;
        }
        button {
            background: #007bff;
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 6px;
            margin-top: 10px;
            cursor: pointer;
        }
        button:hover {
            background: #0062cc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Feedback Form</h2>
    <form action="save_feedback.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Feedback:</label>
        <textarea name="feedback" rows="4" required></textarea>

        <button type="submit">Submit Feedback</button>
    </form>
</div>

</body>
</html>
