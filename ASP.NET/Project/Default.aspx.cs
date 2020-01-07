using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        MultiView1.ActiveViewIndex = 0;
    }

    protected void Unnamed1_Click(object sender, EventArgs e)
    {
        Response.Write("Add successfuly");
        MultiView1.ActiveViewIndex = 1;
        
        Label1.Text = txtname.Text;
        Label2.Text = txtage.Text;
        Label3.Text = txtcity.Text;
        Label4.Text = txtsalary.Text;
    }
}