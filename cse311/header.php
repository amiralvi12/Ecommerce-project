<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>

        * {
            margin: 0;
            padding: 0;
        }

        .navigation {
            margin-bottom: 40px;
            width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }

        .dashboard-nav {
            background-color: #2c3e50;
            padding: 10px 0;
        }

        .dashboard-link {
            text-decoration: none;
            color: white;
            /*font-size: 15px;*/
        }

        .form {
            width: 300px;
            margin: 0 auto;
        }

        .display {
            display: none;
        }

        /*login and registration form styling start*/

        .login-box, .signup-box {
            width: 400px;
            margin: 50px auto;
            background-color: #333;
            border-radius: 8px;
            color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        }

        .login-title {
            text-align: center;
            padding-top: 10px;
        }

        .login-form {
            width: 300px;
            margin: auto;
        }

        .label {
            display: block;
            margin-top: 18px;
            font-size: 16px;
        }

        #email {
            width: calc(100% - 20px);
            margin: 8px 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            outline: none;
        }

        #password {
            width: calc(100% - 20px);
            margin: 8px 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            outline: none;
        }

        #fname {
            width: calc(100% - 20px);
            margin: 8px 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            outline: none;
        }

        #lname {
            width: calc(100% - 20px);
            margin: 8px 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            outline: none;
        }

        #gender {
            width: calc(100% - 20px);
            margin: 8px 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            outline: none;
        }


        #dob {
            width: calc(100% - 20px);
            margin: 8px 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            outline: none;
        }

        #cfpassword {
            width: calc(100% - 20px);
            margin: 8px 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            outline: none;
        }

        .form-button {
            width: calc(100% - 20px);
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #555;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .form-button:hover {
            background-color: #444;
        }

        .terms_and_condition {
            text-align: center;
            padding-top: 20px;
            font-size: 15px;
        }

        .para-2, .para-5 {
            text-align: center;
            color: #fff;
            font-size: 15px;
            margin-top: 10px;
        }

        .para-5 a {
            color: #ff0;
        }

        .para-2 a {
            color: #ff0;
        }
        /*login and registration form styling end*/

        /*product style start*/
        .feat{
            max-width: 1900px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
            text-align: center;
            padding-top: 5%;
            background-color: rgb(255, 255, 255);
        }

        .feat h2{
            padding-bottom: 50px;
            font-size: 30px;
        }

        .prod-row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .prod-col{
            flex-basis: 15%;
            padding: 10px;
            min-width: 300px;
            margin-bottom: 50px;
            margin-right: 5px;
            margin-left: 5px;
            position: relative;
        }

        .prod-col img{
            width: 100%;

        }

        .overlay{
            position: absolute;
            bottom:0;
            left:0;
            right:0;
            background-color: rgba(7, 23, 114, 0.904);
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }


        .prod-col:hover .overlay{
            height: 100%;

        }

        .prod-col h1{
            width: 100%;
            margin-top: 5%;
            color: rgb(255, 255, 255);
            font-size: 22px;
            position: absolute;
            text-align: center;
        }

        .prod-col h2{
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-size: 13px;
            margin-left: 20px;
            margin-top: 70px;
            line-height: 30px;

        }

        /*product style end*/
    </style>
</head>

<body>