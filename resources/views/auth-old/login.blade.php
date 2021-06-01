<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/assets/css/style.css') }}">

</head>

<body>
    <section class="section-login">
        <div class="row p-0 w-100">
            <div class="col-sm-12 col-md-6 p-0">
                <div class="login-leftSide">
                    <div class="img-leftSide position-relative">
                        <img src="{{URL::asset('resources/assets/images/right-img-auth.png')}}" class="img-fluid" alt="login-image">
                    </div>
                    <div class="position-absolute">
                        <p class="desc-text">أقرب ورد لأى مناسبة خاصة لك</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 p-0">
                <div class="container">
                    <div class="right-side">
                        <div class="logo-login">
                            <img src="{{URL::asset('resources/assets/images/logo.png')}}" class="img-fluid" alt="logo">
                        </div>
                        <form action="" method="POST">
                            <h3>تسجيل الدخول</h3>
                            <input type="email" placeholder="البريد الإلكتروني">
                            <input type="password" placeholder="كلمة المرور">
                            <a href="#" class="forget-password text-danger">هل نسيت كلمة المرور؟</a>
                            <button type="submit" class="fixed-style-btn btn">تسجيل الدخول</button>
                            <p class="dt-acc">ليس لديك حساب ! <a href="#" class="create-acc">أنشئ حساب</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('resources/assets/js/custom.js') }}"></script>

</body>

</html>
