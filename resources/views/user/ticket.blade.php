<php>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CEN4010 Workbench User">
        <meta name="author" content="Romael">
        <title>CEN4010 Workbench User</title>
        <!-- Bootstrap core CSS-->
        <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                padding: 16px;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 16px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 3px solid #f1f1f1;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            input[type=text], input[type=equipment] {
                width: 20%;
                padding: 5px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                border: none;
                cursor: pointer;
                width: 15%;
                position: relative;
                bottom: -200px;




            }
        </style>
    </head>

<body>
    
    <div class="content">
        <a class="title">Work Ticket</a>
        <br>;
        Name:<br>;
        Date:<br>;
        Equipment:<br>;<br>;
        Return by:<br>;
        
       <button type="submit">Leave</button>
        
    </div>


</body>
    
</php>