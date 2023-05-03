

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class donation
 */
@WebServlet("/donation")
public class donation extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public donation() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		out.println("<br><br><center>");
		out.println("<h2>Thank you From Servlet</h2>");
		out.println("<h1>Donation Successful !!</h1>");
		out.println("<a href=\"http://localhost/Pawsome/src/main/webapp/donation.php#donations\"> <button style=\"padding: 10px; background-color: lightgreen; color: white; border-color: lightgreen; font-size: 1.6em; cursor:pointer; border-radius: 5px;\">See entry</button></a><br><br>");
		out.println("<a href=\"http://localhost/Pawsome/src/main/webapp/index.php#donations\"> <button style=\"padding: 5px; background-color: lightblue; color: black; border-color: lightblue; font-size: 1.6em; cursor:pointer; border-radius: 5px;\">See if you are one of our top donators...</button></a>");
	}
}
