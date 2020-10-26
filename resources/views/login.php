<!Doctype html>
<html>
<head>
    <title>Login</title>
    <style>
         .container {
            width: 500px;
            border: 3px solid orange;
        }
        .form-container input[type=text], .form-container input[type=password] {
            width: 90%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        .form-container .btn {
            background-color: orange;
            color: white;
            padding: 16px 20px;
            border: none;           
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }
        .btn1{
            background-color: orange;
            color: white;
            padding: 16px 20px;
            border: none;           
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="validate" class="form-container" method="post">
        <h1 style="text-align: center;">LOGIN</h1>
        <label><b>Username</b></label>
        <input type="text" placeholder="Please enter username" name="username" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Please enter password" name="password" required>
        <input type="submit" class="btn" value="Login">
                        
    </form>
    </div>       
</body>
</html>
