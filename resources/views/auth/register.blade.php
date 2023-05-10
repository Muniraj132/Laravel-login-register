@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
  <style>
    /* Background white */
:root {
  --bg1: #e8eaec;
  --text-color: #979797;
  --color: #000;
  --tcolor: rgb(119 119 119);

  --boxShadow: 7px 7px 15px #45566754, -8px -8px 15px rgb(81 101 121 / 4%),
    inset -5px -4px 13px 0px rgb(81 101 121 / 35%),
    inset 6px 7px 12px 0px rgb(255 255 255 / 94%);

  --boxShadow2: inset 4px 4px 8px rgb(189 200 213),
    inset -4px -4px 8px rgb(255 255 255);

  --boxShadow3: inset 4px 4px 8px rgb(189 200 213),
    inset -4px -4px 8px rgb(255 255 255);

  --sbShadow: 5px 5px 7px rgb(0 0 0 /25%),
    inset 2px 2px 5px rgb(255 255 255 / 25%),
    inset -3px -3px 5px rgb(0 0 0 / 12%);
}

/* Background dark */
body.dark {
  --bg1: #2f363e;
  --text-color: rgb(255 208 0);
  --color: #fff;
  --tcolor: rgb(36, 6, 6);

  --boxShadow: 5px 5px 15px rgb(0, 0, 0, 0.25), 5px 15px 15px rgb(0, 0, 0, 0.25),
    inset 5px 5px 10px rgb(0, 0, 0, 0.5),
    inset 5px 5px 20px rgb(255, 255, 255, 0.2),
    inset -5px -5px 15px rgb(0, 0, 0, 0.75);

  --boxShadow2: inset -3px -3px 6px rgb(73, 78, 83),
    inset 3px 3px 6px rgb(32, 28, 28);

  --boxShadow2: -3px -3px 6px rgb(73, 78, 83), 3px 3px 6px rgb(32, 28, 28);

  --sbShadow: 5px 5px 7px rgb(0 0 0 /25%),
    inset 2px 2px 5px rgb(255 255 255 / 25%),
    inset -3px -3px 5px rgb(0 0 0 / 12%);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: serif;
}

html,
body {
  height: 100%;
}

body {
  display: grid;
  place-items: center;
  text-align: center;
  background: var(--bg1);
}

.content {
  width: 385px;
  background: var(--bg1);
  box-shadow: var(--boxShadow);
  border-radius: 20px;
  padding: 60px 40px;
  margin-top: 45px;
}

.content .text {
  font-size: 33px;
  font-size: 600;
  margin-bottom: 35px;
  color: var(--color);
}

.content .field {
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input {
  height: 40px;
  width: 100%;
  padding-left: 50px;
  font-size: 15px;
  outline: none !important;
  border: none;
  background: var(bg1);
  box-shadow: var(--boxShadow2);
  border-radius: 25px;
}

input:focus {
  box-shadow: var(--boxShadow);
}
::placeholder {
  color: var(--tcolor);
}

.field:nth-child(2) {
  margin-top: 20px;
}

.field:nth-child(3) {
  margin-top: 20px;
}

.field span {
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: var(--tcolor);
  font-size: 22px;
}

button {
  margin: 25px 0;
  width: 80px;
  height: 40px;
  color: var(--color);
  font-size: 18px;
  font-weight: 600;
  background: var(--bg1);
  border: none;
  outline: none;
  cursor: pointer;
  box-shadow: var(--boxShadow);
  border-radius: 25px;
}

button:focus {
  color: #ff6100;
  box-shadow: var(--boxShadow2);
}

h4 {
  font-size: 14px;
  color: rgb(119 119 119);
  margin: 0 0 16px 0;
}

.social_icons {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}

.social_icons i {
  line-height: 50px;
  height: 50px;
  width: 50px;
  color: #fff;
  border-radius: 50%;
  box-shadow: var(--sbShadow);
  font-size: 28px;
}

.foot {
  margin: 20px auto;
  color: rgb(119 119 119);
}

.in {
  color: #ff6100;
  text-decoration: none;
}

.in:hover {
  text-decoration: underline;
}

.social_icons i:nth-child(1) {
  /* background-image: linear-gradient(315deg,#0078ff -7.64,#00c6ff 104.5%); */
  background-image: linear-gradient(315deg, #0078ff, #00c6ff);
}

.social_icons i:nth-child(1):hover {
  color: #0078ff;
  background-image: linear-gradient(
    to bottom,
    #e8eaec,
    rgba(189, 200, 213, 0.795)
  );
  text-shadow: 2px 2px 3px #b8b9be, -2px -2px -2px #fff;
}

.social_icons i:nth-child(2) {
  /* background-image: linear-gradient(315deg,#4949e7 -6.1,#5eb2fc 101.5%); */
  background-image: linear-gradient(315deg, #4949e7, #5eb2fc);
}

.social_icons i:nth-child(2):hover {
  color: #5662e9;
  background-image: linear-gradient(
    to bottom,
    #e8eaec,
    rgba(189, 200, 213, 0.795)
  );
  text-shadow: 2px 2px 3px #b8b9be, -2px -2px -2px #fff;
}

.social_icons i:nth-child(3) {
  /* background-image: linear-gradient(315deg,#02b7ff -7.64,#92cdfa 104.5%); */
  background-image: linear-gradient(315deg, #02b7ff, #92cdfa);
}

.social_icons i:nth-child(3):hover {
  color: #00acee;
  background-image: linear-gradient(
    to bottom,
    #e8eaec,
    rgba(189, 200, 213, 0.795)
  );
  text-shadow: 2px 2px 3px #b8b9be, -2px -2px -2px #fff;
}

.social_icons i:nth-child(4) {
  /* background-image: linear-gradient(315deg,#02b7ff -7.64,#92cdfa 104.5%); */
  background-image: linear-gradient(315deg, #b9215c, #de4882);
}

.social_icons i:nth-child(4):hover {
  color: #de4882;
  background-image: linear-gradient(
    to bottom,
    #e8eaec,
    rgba(189, 200, 213, 0.795)
  );
  text-shadow: 2px 2px 3px #b8b9be, -2px -2px -2px #fff;
}

.dark-light {
  left: 50px;
  display: flex;
  position: absolute;
  justify-content: center;
  align-items: center;
  top: 50px;
  width: 60px;
  height: 60px;
  box-shadow: var(--boxShadow);
  border-radius: 50px;
}

.dark-light i {
  position: absolute;
  color: var(--tcolor);
  font-size: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.dark-light i.sun {
  opacity: 0;
  pointer-events: none;
}

.dark-light.active i.sun {
  opacity: 1;
  pointer-events: auto;
}

.dark-light.active i.moon {
  opacity: 0;
  pointer-events: none;
}

  </style>
</head>

<body>
  <div class="content">
    <div class="text">Register</div>
    <form method="POST" action="{{ route('register') }}">
         @csrf
         <div class="field">
        <span class="bx bxs-user"></span>
        <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      </div>
      @error('name')
      <Div>
         {{ $message }}
      </Div>
      @enderror
      <div class="field" style="margin-top: 7px;">
        <span class="bx bxs-envelope"></span>
        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>
       </div>
      @error('email')
      <Div>
         {{ $message }}
      </Div>
      @enderror
      <div class="field">
        <span class="bx bxs-lock-alt"></span>
        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" required>
        </div>
        @error('password')
      <Div>
         {{ $message }}
      </Div>
      @enderror
        <div class="field">
        <span class="bx bxs-lock-alt"></span>
        <input id="password-confirm" placeholder="confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
      <button type="submit">Register</button>
      <div class="foot">
        <a>already have an account?</a>
        <a href="/login" class="in">Login</a>
      </div>
    </form>

    <div class="dark-light" onclick="myFunction()">
      <i class="bx bx-moon moon"></i>
      <i class="bx bx-sun sun"></i>
    </div>
  </div>
  <script>
    const body = document.querySelector("body"),
      modeToggle = document.querySelector(".dark-light");
    modeToggle.addEventListener("click", () => {
      modeToggle.classList.toggle("active");
      body.classList.toggle("dark");
      if (!body.classList.contains("dark")) {
        localStorage.setItem("mode", "light-mode");
      } else {
        localStorage.setItem("mode", "dark-mode");
      }
    })
  </script>
</body>

</html>
@endsection
