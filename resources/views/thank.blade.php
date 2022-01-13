
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank team</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Montserrat;
        }
        body {
            background: rgb(240, 242, 245);
            margin: 0;
        }
        form {
            position: fixed;
            left: 0; top: 0; right: 0; bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form input {
            margin: 10px;
            width: 480px;
            height: 45px;
            outline: none;
            border: 2px solid rgb(180, 182, 185);
            padding: 15px 20px;
            color: #777;
            font-size: 15px;
        }
        form .submit {
            font-family: Montserrat;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;        
            width: 480px;
            height: 45px;
            outline: none;
            border: none;
            padding: 15px 10px;
            color: #eee;
            font-size: 15px;
            background: #3185E7;
            cursor: pointer;
            transition: opacity: 0.25s;
        }
        form .submit:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    
    <form action="/thank" method="POST">

        @csrf

        <input type="text"   name="msg"  id="msg"  placeholder = 'message for FIT team ...' />
        <input type="hidden" name="from" id="from" />
        <a class = 'submit' onclick='getFrom()'>THANK FIT TEAM</a>

    </form>

    <script>
        function getFrom() {
            let get  = window.location.search;
            let from = get.slice(get.indexOf('=') + 1, get.length);
            let form = document.querySelector('form');
            form.from.value = from;
            //alert(form.from.value);
            form.submit();
        }
    </script>

</body>
</html>