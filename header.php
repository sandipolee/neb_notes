<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <title>sandipolee</title>
    <link rel="stylesheet" href="./scss/custom.css" >
    <link rel="stylesheet" href="./bootstrap/bootstrap.css" >
</head>

<body>
    <header>
        <nav>
            <div class="containerr">
                <div class="header">
                    <div class="logoname"><a href="index.php">NEB</a></div>
                    <div class="logolast"><a href="">NOTES</a></div>
                </div>
                <div class="links">
                    <div class="tab" onclick="toggle();">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <ul id="nav-links" class="navLinks">
                        <li>
                            <a href="index.php">HOME</a>
                        </li>
                        <li>
                            <a href="notes.php">NOTES</a>
                        </li>
                        <li>
                            <a href="#">VIDEO</a>
                        </li>
                        <li>
                            <a href="#">ABOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
