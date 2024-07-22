using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Configuration;

public partial class userlogin : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString);
    protected void Page_Load(object sender, EventArgs e)
    {
        con.Open();
        Label1.Visible = false;
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
       

        SqlCommand cmd = new SqlCommand("select * from userreg where email='"+TextBox1.Text+"' and pass='"+TextBox2.Text+"'", con);
        SqlDataReader dr = cmd.ExecuteReader();
        if (dr.HasRows)
        {
           // usrindb = dr[8].ToString();
            //passindb = dr[9].ToString();
            Response.Redirect("Userhome.aspx");
        }
        else
        {
            Label1.Visible = true;
            Label1.Text = "Invalid Username or Password";
        }

    }
}