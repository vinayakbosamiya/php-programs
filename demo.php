<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post Method Demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 600;
        }

        input[type="email"],
        input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="text"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.5);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        button[type="submit"] {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
        }

        input[type="reset"] {
            background: linear-gradient(135deg, #ddd, #bbb);
            color: #333;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        input[type="reset"]:hover {
            transform: translateY(-2px);
        }

        .alert {
            margin-top: 20px;
            padding: 1rem;
            border-radius: 5px;
            font-weight: bold;
        }

        .alert-primary {
            background-color: #d1e7ff;
            color: #084298;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #842029;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="POST" id="userForm">
            <div class="form-group">
                <label for="fname1">First Name:</label>
                <input type="text" id="fname1" name="fname1" required placeholder="Enter your first name">
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required placeholder="Enter your last name">
            </div>
            <div class="button-group">
                <button type="submit">Submit</button>
                <input type="reset" value="Reset">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nm = $_POST['fname1'];
            $ln = $_POST['lname']; 

            $servername = "localhost";
            $username = "root";
            $pas = "";
            $database = "V";

            $conn = mysqli_connect($servername, $username, $pas, $database);

            if (!$conn) {
                echo '<div class="alert alert-danger">Connection failed: ' . mysqli_connect_error() . '</div>';
            } else {
                $sql = "INSERT INTO `vinay`(`firstname`, `lastname`) VALUES ('$nm','$ln')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo '<div class="alert alert-primary">Data inserted successfully!</div>';
                } else {
                    echo '<div class="alert alert-danger">Error inserting data: ' . mysqli_error($conn) . '</div>';
                }
            }
        }
        ?>
    </div>
</body>
</html>
