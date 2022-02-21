<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center {
            text-align: center;
        }
        .m-auto{
            margin: auto;
        }
        .m-2{
            margin: 2em;
        }
        .d-inline{
            display: inline-block;
        }
        table {
            border-collapse: collapse;
            
            
            width: 50%;
        }
        td, th {
            padding: 10px;
        }
        tr:nth-child(2n+1){
            background-color: #acacacac;
        }
    </style>
</head>
<body>
    <nav class="center m-2">
        <ul class="d-inline m-auto center">
            <li class="center"> <a href="/"> Home </a> </li>
            <li class="center"> <a href="/about"> About </a> </li>
            <li class="center"> <a href="/contact"> Contact </a> </li>
        </ul>
    </nav>