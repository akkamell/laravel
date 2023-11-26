<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container-login">
    <h1 style="text-align:center">Welcome to Log In Page:</h1>
        <div class="item">
                <form method="Post" action="showpizza">
                @csrf
                    Username:<input type="text" name="manage"  required style="padding:10px;border-radius:20px;margin-bottom:10px;text-align:center"><br>
                    Password: <input type="password" name="password" required style="padding:10px;border-radius:20px;margin-bottom:10px;text-align:center"><br>
                   <div style="text-align:center">
                        <button style="padding:10px 50px; background-color:aqua;color:black;border-radius:20px" name="submit">Submit</button>
                    </div>
                </form>
        </div>
        <a href="/">Back to Main</a>
    </div>
  
</body>
</html>