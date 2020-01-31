<!DOCTYPE html>
<html>
    <head>
        <title>Page Not Found.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            .back {
                font-size: 20px;
                color: #B0BEC5;
                text-decoration: none
            }
            .text-grey-darkest {
                color: #3d4852;
                letter-spacing: .05em;
                text-transform: uppercase;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                padding-top: .75rem;
                padding-bottom: .75rem;
                font-weight: 700;
                border-width: 2px;
                border-radius: .5rem;
                border-color: #dae1e7;
                background-color: transparent;
            }
            button:focus {
                outline: 1px dotted;
                outline: 5px auto -webkit-focus-ring-color;
            }
    
            *,
            *::before,
            *::after {
                border-width: 0;
                border-style: solid;
                border-color: #dae1e7;
            }
            .hover\:border-grey:hover {
                border-color: #b8c2cc;
            }
           
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Sorry, the page could not be found.</div>
                <?php
                    if(Request::segment(1) == 'en' || Request::segment(1) == 'kh' || Request::segment(1) == 'cn'){
                        $back_url = url('/en/home');
                    }else{
                        $back_url = url('admin');
                    }
                ?>
                <a href="{{$back_url}}">
                    <button class="text-grey-darkest hover:border-grey">
                        Back Home
                    </button>
                </a>
            </div>
        </div>
    </body>
</html>
