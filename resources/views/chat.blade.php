<!DOCTYPE html>
<html>

<head>
    <title>Chat App</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            background: linear-gradient(135deg, #044f48, #2a7561);
            background-size: cover;
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
            line-height: 1.3;
            overflow: hidden;
        }

    </style>
</head>

<body>
    <div id="app">
        <chat-app></chat-app>
    </div>
</body>
<script src="http://localhost:6001/socket.io/socket.io.js"></script>
<script src="/js/app.js"></script>

</html>
