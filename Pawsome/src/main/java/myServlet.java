

import java.io.IOException;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class myServlet
 */
@WebServlet("/myServlet")
public class myServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public myServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		HttpSession session = request.getSession();
		SimpleDateFormat dateFormat = new SimpleDateFormat("h:mm:ss a 'on 'd', ' MMMM yyyy");
		long sessionCreationTime = session.getCreationTime();
		long lastLogin = session.getLastAccessedTime();
		
		Date sessionCreationDate = new Date(sessionCreationTime );
		Date lastLoginDate = new Date(lastLogin);
		String formattedSessionCreationTime = dateFormat.format(sessionCreationDate);
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		if(session.isNew()) out.println("<h1 style=\"color: red;\">You Are A New User!!<h1>");
		out.println("<h1 style=\"color: green;\">Current Session Details</h1><hr><br>");
		out.println( String.format("<table style=\"border-collapse: collapse; font-size:1.6em\">\r\n"
				+ "  <tr>\r\n"
				+ "    <td style=\"border: 1px solid black; padding: 5px 10px; background-color: lightgrey;\">Session Id</td>\r\n"
				+ "    <td style=\"border: 1px solid black; padding: 5px;\">%s</td>\r\n"
				+ "  </tr>\r\n"
				+ "  <tr>\r\n"
				+ "    <td style=\"border: 1px solid black; padding: 5px 10px; background-color: lightgrey;\">Creation Time</td>\r\n"
				+ "    <td style=\"border: 1px solid black; padding: 5px;\">%s</td>\r\n"
				+ "  </tr>\r\n"
				+ "  <tr>\r\n"
				+ "    <td style=\"border: 1px solid black; padding: 5px 10px; background-color: lightgrey;\">Last Active</td>\r\n"
				+ "    <td style=\"border: 1px solid black; padding: 5px;\">%s</td>\r\n"
				+ "  </tr>\r\n"
				+ "</table>\r\n"
				+ "\r\n"
				+ "", session.getId(), formattedSessionCreationTime, dateFormat.format(lastLoginDate)));
	
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
