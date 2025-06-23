<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center" style="padding-top:61px; color: red;">Signup To Our Website</h1>
        <form action="LOGIN_SYSTEM/signup.php" method="post">
            <div style="margin-top: 100px; display: flex; align-items: center; flex-direction: column;">
            
            <div class="mb-3 col-md-6" >
                <label for="username" class="form-label">Username </label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3 col-md-6" >
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            
            <div class="mb-3 col-md-6" >
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary  col-md-5">Login</button>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>