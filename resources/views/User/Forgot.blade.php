<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
    <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">

</head>
<body>
    <div class="main-div">
        <div class="left-div">
            <div class="left-div-img">
                <!-- Left side logo -->
                <img src="/Pictures/inkspire.png" alt="">
            </div>

            <div class="left-div-mid">
                <p style="font-size: 17px;" class="forget-pass">Forget Password?</p>
            </div>

            <div class="left-main-work">
                <!-- Forgot Part -->
                <div id="forgot" class="forgot">

                    <!-- <button class="forget-pass" id="backButton" type="button">Back</button> -->
                    <form action="" method="post">
                        <div class="forgot-ele">
                            <input type="email" name="" id="" placeholder="Email" required>
                        </div>
                        <div class="forgot-ele">
                            <input type="password" name="" id="" placeholder="Password" required>
                        </div>
                        <div class="forgot-ele">
                            <input type="password" name="" id="" placeholder="Confirm Password" required>
                        </div>
                        <button class="submit-button forgot-button" id="showButton">Continue</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="right-div">
            <!-- Right side picture -->
            <img src="/Pictures/image copy.png" alt="">
        </div>
    </div>

</body>
</html>