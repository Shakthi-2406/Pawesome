<%@ page language="java" contentType="text/html"%>
<%@page import="java.awt.Desktop.Action"%>
<%@ page import="java.text.*, java.util.*, javax.servlet.http.Cookie"%>
<%
	String uname = "";
	String password = "";
	Cookie arr[] = request.getCookies();
	if(arr != null){
		for(Cookie c: arr){
			if(c.getName().equals("uname")) uname = c.getValue();
			else if(c.getName().equals("password")) password = c.getValue();
		}
		if(uname.equals("no")) uname = "";
		if(password.equals("no")) password = "";	
	}
%>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="glass.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Form</title>
</head>
<body>
    <section>
		<%@include file="FormDesign.jsp" %>
                <div class="g-container">
                    <div class="g-form">
                        <h2>User Login</h2>
                        <form action="alogin.jsp">
                            <div class="g-input">
                                <input name="username" type="text" placeholder="Username" value=<%= uname %>></div>
                            <div class="g-input">
                                <input name="password" type="password" placeholder="Password" value=<%= password %>></div>
                            <div class="g-input">
                                <input type="submit" value="Login"></div>
                            <p class="g-forgot">Don't have an account ? <a href="register.jsp">Sign up now</a></p>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</body>
</html>