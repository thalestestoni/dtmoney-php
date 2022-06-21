<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">

    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/png">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">

    <title>dtmoney | signup</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="vh-100 d-flex p-4 justify-content-center align-items-center signup">
        <h1 class="pr-2">Criar sua conta do dtmoney</h1>

        <div class="d-flex flex-column singup-form-container">
            <img src="{{asset('logo-black.svg')}}" alt="logo dt money"/>
            <form action="{{ url('/transactions') }}">
                <input type="text" placeholder="Nome" value="">
                <input type="text" placeholder="Email" value="">
                <input type="password" placeholder="Senha" value="">
                <input type="password" placeholder="Confirmar senha" value="">

                <button type="submit">Criar</button>
            </form>
        </div>
    </div>
</body>
</html>
