<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Email Title</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
    }

    p {
      color: #666;
    }

    a {
      color: #007bff;
      text-decoration: none;
    }

    /* Responsive Styles */
    @media only screen and (max-width: 600px) {
      .container {
        width: 100%;
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>New User Data</h1>
    Name: {{ $user['name'] }}
    <br>
    Email: {{ $user['email'] }}
    <br>
    Birthdate: {{ $user['birthdate'] }}
    <br>
    Birth Year: {{ $user['birth_year'] }}
    <br>
    Birth Time Known: {{ $user['birth_time_know'] }}
    <br>
    Birth Time: {{ $user['birth_time'] }}
    <br>
  </div>
</body>
</html>