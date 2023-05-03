<%@ page language="java" contentType="text/html"%>
<%@ page import="java.text.*, java.util.*"%>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="glass.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Form</title>
</head>
<body>
    <section>
            <div class="g-col" style="background-color: #ff0884;"></div>
            <div class="g-col" style="background-color: #fffc65;"></div>
            <div class="g-col" style="background-color: #00c3ff;"> </div>
            <div class="g-box">
                <div class="g-square" style="--i:0;"></div>
                <div class="g-square" style="--i:1;"></div>
                <div class="g-square" style="--i:2;"></div>
                <div class="g-square" style="--i:3;"></div>
                <div class="g-square" style="--i:4;"></div>
                <div class="g-container">
                    <div class="g-form">
                        <h2>User Registration</h2>
                        <form method="post" action="aregister.jsp">
                            <div class="g-input"> <input name="uname" type="text" placeholder="Username"></div>
                            <div class="g-input"> <input name="name" type="text" placeholder="Name"></div>
                            <div class="g-input"> <input name="email" type="email" placeholder="Email"></div>
                            <div class="g-input"> <input name="address" type="text" placeholder="Address"></div>
                            <div class="g-input"> <input name="phone" type="text" placeholder="Phone"></div>
                            <div class="g-input"> <input name="password1" type="password" placeholder="Password"></div>
                            <div class="g-input">
                                <input type="submit" value="Register"></div>
                            <p class="g-forgot">Already have an account ? <a href="login.jsp">Login now</a></p>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</body>
</html>