<!DOCTYPE html>
<html>
<head>
  <title>FIT Dashboard</title>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d10d9f719425f26ffabb', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind("App\\Events\\GiveThank", function(data) {

      // convert > to JSON
      data.msg = JSON.parse(data.msg);

      // add > new thank to thanklist
      let list = document.querySelector('.thankslist');
      let thank = document.createElement('li');
      thank.innerHTML = "<b>" + data.msg.from + "</b>: " + data.msg.msg;
      list.appendChild(thank);

    });
  </script>

    <style>
        * {
            box-sizing: border-box;
            font-family: Montserrat;
        }
        body {
            background: rgb(240, 242, 245);
            margin: 0;
            padding: 30px;
        }
        .title {
            margin-bottom: 0;
            color: #3185E7;
        }
        .subtitle {
            margin-top: 10px;
        }
        .thankslist {
            display: block;
            width: 100%; max-width: 900px;
            margin-top: 50px;
            list-style-type: none;
            padding: 0;
        }
        .thankslist li {
            
            width: 100%;
            margin: 0; 
            margin-bottom: 15px;
            border-radius: 5px;
            background: #fff;
            padding: 20px 25px;
            font-size: 18px;
            color: rgb(135, 140, 160);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.04);
            cursor: pointer;
            transition: background 0.15s;
        }
        .thankslist li:hover {
            background: rgb(250, 252, 253);
        }
    </style>
</head>
<body>
  <h1 class = 'title'>FIT Dashboard</h1>
  <p class = 'subtitle'>
    listening for thanks ...
  </p>

  <ul class='thankslist'>

  </ul>
</body>
</html>