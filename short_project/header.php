<?php include "./database.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-color: brown;
    }
    
    .topnav a {
      float: left;
      color: lightblue;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .topnav a.active {
      background-color: white;
      color: black;
    }
    .new {
      padding-left: 5px;
      padding-top: 20px;
    }
    h1{
       font-size: 200%;
       font-weight: bold;
       font-family: Georgia, 'Times New Roman', Times, serif;
       align-self: flex-start;
       color: black;
    }
    .label{
      padding-right: 50px;
      align-items: center;
    }
    .heading{
      padding-top: 10px;
      align-content: flex-start;
      padding-left: 20%;
      
    }
    .heading1{
      padding-top: 10px;
      align-content: flex-start;
      padding-left: 38%;
    }
    </style>
    <body>
        <div class="topnav">
            <a onclic href="/myProjects/sample/home.php">Home</a>
            <a onclick="active" href="/myProjects/sample/feedback.php">Feedback</a>
        </div>
        <main>
        <div class="container d-flex flex-column align-items-center">