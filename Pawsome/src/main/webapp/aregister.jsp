<%@page import="java.sql.DriverManager"%>
<%@page import="java.awt.Desktop.Action"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>REGISTERATION</title>
</head>
<body>
<%@page import="java.sql.*"%>
<%
String uname = request.getParameter("uname");
String name = request.getParameter("name");
String email = request.getParameter("email");
String password1 = request.getParameter("password1");
String password2 = request.getParameter("password2");
String address  = request.getParameter("address");
String phone = request.getParameter("phone");



try {
 Class.forName("com.mysql.jdbc.Driver");
 Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/project", "root", "root123");
 Statement st = conn.createStatement();
 

 String query = "select * from user where uname = '" +uname+ "' or email = '" + email + "' or phone = '" + phone + "';";
 PreparedStatement stmt = conn.prepareStatement(query);
 ResultSet rs = stmt.executeQuery();

 
 if(rs.next() == true){
		out.println("<h1>Duplicate username or email id or phone number! </h1>");
 }

 else{
 int i = st.executeUpdate("insert into user(uname,name,email,address,phone,password) values('" + uname + "','" + name
 + "','" + email + "','" + address + "','" + phone + "','" + password1 + "')");
 
	Cookie cookie = new Cookie("uname", uname);
	cookie.setMaxAge(1000);
	response.addCookie(cookie);
	Cookie cookie1 = new Cookie("password", password1);
	cookie1.setMaxAge(10);
	response.addCookie(cookie1);
	st.executeUpdate("update admin set clients=clients+1 where 1=1");
	
 response.sendRedirect("login.jsp");
 }

} catch (Exception e) {
 System.out.print(e);
 out.println(e);
 e.printStackTrace();
}

%>

</body>
</html>