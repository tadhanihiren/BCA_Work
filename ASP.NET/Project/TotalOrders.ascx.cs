using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

public partial class TotalBooks : System.Web.UI.UserControl
{
    SqlConnection con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=D:\Study\16scsca11023\App_Data\Bookstore.mdf;Integrated Security=True");
    protected void Page_Load(object sender, EventArgs e)
    {
            gettotalbooks();
        
    }
    public void gettotalbooks()
    {
        SqlDataAdapter adpt = new SqlDataAdapter("select count(Id) total from orders", con);
        DataSet ds = new DataSet();
        adpt.Fill(ds);
        Label1.Text = ds.Tables[0].Rows[0]["total"].ToString();
    }
}