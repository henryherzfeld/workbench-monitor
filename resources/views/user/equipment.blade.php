<php> 

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Equipment Condition</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
    <a class="title">Does your bench look like this?</a>
        <br>;
        
        <div class="content">
            
        <input type="radio" name="choice"
            <?php if (isset($choice) && $choice=="yes") echo "checked";?>
               value="yes">Yes
            <br>;
<input type="radio" name="choice"
<?php if (isset($choice) && $choice=="no") echo "checked";?>
value="no">No
            <br>;
  If you answered 'No', Please upload a photo(s) of the workbench, and any damaged equipment

        </div>
        
        <div class="content">
       <button type="submit">Next</button>
        </div>
        
        
   
    </div>
    </body>
    
</php>