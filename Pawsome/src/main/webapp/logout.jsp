
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>LOGOUT</title>
</head>
<body>
<%
	Cookie cookie = new Cookie("uname", "no");
	cookie.setMaxAge(1000);
	response.addCookie(cookie);
	cookie = new Cookie("password", "no");
	cookie.setMaxAge(1000);
	response.addCookie(cookie);
	response.sendRedirect("http://localhost/Pawsome/src/main/webapp/index.php");
%>

</body>
</html>