<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <a href="{{ route('index') }}">look produk</a>
    <form action="{{ route('addimg') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nameproduk" id="" placeholder="name produk">
        <div style="display: flex; align-items: center">
            <input type="password" name="password" id="password" placeholder="password produk">
            <i class='bx bx-low-vision' id="eye" style="margin-left: -23px; display: none;"></i>
        </div>
        <label for="">image produk : </label>
        <input type="file" name="image"><br>
        <br>
        <button type="submit">upload</button>
    </form>

    <script>
        const eye = document.getElementById('eye');
        const password = document.getElementById('password');

        password.addEventListener('input', function(){
            if (password.value){
                eye.style.display = 'block';
            }else{
                eye.style.display = 'none';
            }
        });

        eye.addEventListener('click', function(){
            if (password.getAttribute('type') == 'password'){
                password.setAttribute('type','text');
            }else if(password.getAttribute('type') == 'text'){
                password.setAttribute('type','password');
            }
        })

        
    </script>
</body>
</html>