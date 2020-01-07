using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Data;

public partial class Books : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=E:\TSEE Supplied Folder\16scsca11023\App_Data\Bookstore.mdf;Integrated Security=True");
    static string Path="";
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["username"]!=null)
        {
            //HttpCookie mycook = Request.Cookieszz"date");
            lblusername.Text = Session["username"].ToString() + " " + Request.Cookies["date"].Value.ToString();
        }
       
    }




    protected void btnupload_Click(object sender, EventArgs e)
    {
        if(FileUpload1.HasFile)
        {
            if (FileUpload1.PostedFile.ContentType=="image/jpeg")
            {
                FileUpload1.SaveAs(Server.MapPath("~/img/") + FileUpload1.FileName);
                Path = ("~/img/") + FileUpload1.FileName;
                Image1.ImageUrl = "~/img/" + FileUpload1.FileName;

            }
            else
            {
                Response.Write("upload jpg image only");
            }

        }
    }

    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        con.Open();
        SqlCommand cmd = new SqlCommand("Insert into Book(BookName,Cover,AuthorName,Description,Price,Category)values('" + txtbookname.Text + "','" + Path + "','" + txtauthor.Text + "','" + txtdesc.Text + "','" + txtprice.Text + "','" + ddlcat.ToString() + "')", con);
        
        cmd.ExecuteNonQuery();
        con.Close();

        

    }
}