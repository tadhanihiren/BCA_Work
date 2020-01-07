using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Login : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        if (txtusername.Text=="admin" && txtpassword.Text == "admin")
        {
            Session["username"] = txtusername.Text;
            //set cookie here
            Response.Cookies["date"].Value = DateTime.Now.ToString("yyyy-MM-dd");
            Response.Redirect("AddBooks.aspx");
        }
    }
}