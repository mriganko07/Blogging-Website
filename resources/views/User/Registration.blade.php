<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration & Login</title>
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
</head>

<body>

    <div class="main-div">
        <div class="left-div">
            <div class="left-div-img">
                <!-- Left side logo -->
                <img src="/Pictures/logo.png" alt="">
            </div>

            <div class="left-div-button">
                <button id="registerBtn" onclick="showDiv('register')" class="selection-button">Register</button>
                <button id="loginBtn" onclick="showDiv('login')" class="selection-button">Login</button>
            </div>
            
            <div class="left-main-work">
                <!-- Registration Part -->
                <div id="register" class="register visible">
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf 
                        <div class="register-ele">
                            <input type="text" name="name" placeholder="Name" value="{{old("name")}}">
                            <span class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="register-ele">
                            <input type="email" name="email" placeholder="Email" value="{{old("email")}}" >
                            <span class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="register-ele">
                            <input type="password" name="password" placeholder="Password" >
                            <span class="text-danger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="submit-button register-button">Join for free</button>
                    </form>
                </div>

                <!-- Login Part -->
                <div id="login" class="login">
                    <form action="" method="get">
                        <div class="login-ele">
                            <input type="email" name="" id="" placeholder="Email" required>
                        </div>
                        <div class="login-ele">
                            <input type="password" name="" id="" placeholder="Password" required>
                        </div>
                        <div class="login-ele">
                            <a href="/forgot"><button class="forget-pass" type="button">Forget Password?</button></a>
                        </div>
                        <button type="submit" class="submit-button login-button">Login</button>
                    </form>

                </div>

            </div>
        </div>

        <div class="right-div">
            <!-- Right side picture -->
            <img src="/Pictures/image copy.png" alt="">
        </div>
    </div>

    <script src="{{asset('js/registration.js')}}"></script>
</body>

</html>