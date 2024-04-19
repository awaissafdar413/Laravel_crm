<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>
    <div class="container">
      <div class="container__form">
        <div class="container__top">
          <h1>Welcome To Ma Tech Solution BPO CRM </h1>
          <div class="container__image"></div>
        </div>
        <div class="container__botton">
          <h2>USER LOGIN</h2>
          <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="email">
              Email
              <input class="email" type="email" value="" name="email" id="email">
            </label>
            <label for="password">
              Password
              <input class="password" type="password" value="" name="password" id="password">
            </label>
            <input type="submit" class="button" value="Confirm">
            {{-- <button type="submit">Confirm</button> --}}
          </form>
        </div>
        <div>
        </div>
  </body>
<script src="script.js"></script>
</html>
