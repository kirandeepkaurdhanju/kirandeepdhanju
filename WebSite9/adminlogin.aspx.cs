using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Configuration;

public partial class adminlogin : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString);
    protected void Page_Load(object sender, EventArgs e)
    {
        con.Open();
        Label1.Visible = false;
    }
    protected void Button1_Click(object sender, EventArgs e)
    {

        SqlCommand cmd = new SqlCommand("select * from admin where email='" + TextBox1.Text + "' and pass='" + TextBox2.Text + "'", con);
        SqlDataReader dr = cmd.ExecuteReader();
        if (dr.HasRows)
        {
            //admindb = dr[2].Tostring();
            //passindb = dr[3].Tostring();
            Response.Redirect("Adminhome.aspx");
        }
        else
        {
            Label1.Visible = true;
            Label1.Text = "Invaild adminname and Password";
        }
    }
}