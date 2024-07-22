using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Configuration;


public partial class Forgetpassword : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["ConnectionString"].ConnectionString);
    protected void Page_Load(object sender, EventArgs e)
    {
        con.Open();
        Label1.Visible = false;
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        SqlCommand cmd = new SqlCommand("select * from userreg where email='"+TextBox1.Text+"' and sqsn='"+DropDownList1.Text+"' and ans='"+TextBox2.Text+"'",con);

        SqlDataReader dr = cmd.ExecuteReader();

        if (dr.HasRows)
        {
            dr.Read();
            Label1.Visible = true;
            Label1.Text = "Your Password is : "+dr[9].ToString();
        }
        else
        {
            Label1.Visible = true;
            Label1.Text = "Password Not Found";
            TextBox1.Text = "";
            TextBox2.Text = "";
            TextBox1.Focus();
        }
        cmd.Dispose();
        con.Close();
    }
}