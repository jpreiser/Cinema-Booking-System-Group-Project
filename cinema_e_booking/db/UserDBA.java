package cinema_e_booking.db;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;

import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import cineama_e_booking.entity.Admin;
import cineama_e_booking.entity.Customer;
import cineama_e_booking.entity.User;

public class UserDBA {
    
    // Check for email in db
    public boolean emailExists(User user)
	{
		System.out.println("Email exists method");
		Connection connect = null;
		Statement statement = null;
		ResultSet results = null;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			connect = DriverManager.getConnection("jdbc:mysql:* *?user=* *&password=* *&useSSL=false");

			// Statements allow to issue SQL queries to the database
			statement = connect.createStatement();
			// Result set get the result of the SQL query
			results = statement.executeQuery("SELECT * FROM User WHERE email = '" + user.getEmail() + "';");

			//If ResultSet is empty the email doesn't exist, otherwise it does.
			if (!results.next())
			{
				System.out.println("Email does not exist");
				//Close connection
				connect.close();
				return false;
			}
			else
			{
				System.out.println("Email exists");
				connect.close();
				return true;
			}

		} 
        catch (Exception e) {
			e.printStackTrace();
			return false;
		}
	}

}
