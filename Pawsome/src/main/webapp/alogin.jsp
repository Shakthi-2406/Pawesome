<%@page import="java.sql.DriverManager"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>REGISTERATION</title>
</head>
<body>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.*"%>
<%
String uname = request.getParameter("username");
String password = request.getParameter("password");



// out.println("<h1>User "+email+" logged in! </h1>");

try {
 Class.forName("com.mysql.jdbc.Driver");
 Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/project", "root", "root123");
 String query = "select * from user where uname = '" +uname+ "' and password = '" + password + "';";
 PreparedStatement stmt = conn.prepareStatement(query);
 ResultSet rs = stmt.executeQuery();

 
 if(rs.next() == true){
	 session = request.getSession(true);
	 Cookie cookie = new Cookie("uname", rs.getString("uname"));
	 cookie.setMaxAge(1000);
	 response.addCookie(cookie);
	 response.sendRedirect("http://localhost/Pawsome/src/main/webapp/index.php");
 }
 else{
	out.println("<h1>Invalid username or password! </h1>");
 }
 
 
} catch (Exception e) {
 System.out.print(e);
 e.printStackTrace();
}

%>

</body>
</html>