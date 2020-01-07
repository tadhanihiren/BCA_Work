<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <asp:MultiView ID="MultiView1" runat="server">
            <asp:View ID="view1" runat="server">
               
               <center>
                Name:<asp:TextBox ID="txtname" runat="server"></asp:TextBox><br />
                   
                   Age:<asp:TextBox ID="txtage" runat="server"></asp:TextBox> <br />
                   City:<asp:TextBox ID="txtcity" runat="server"></asp:TextBox><br />
                   Salary:<asp:TextBox ID="txtsalary" runat="server"></asp:TextBox><br />
                   
                   
                   <asp:Button runat="server" OnClick="Unnamed1_Click" Text="Submit" />
                   
                   <br />
                
               </center>
            </asp:View>
            <asp:View ID="view2" runat="server">
                    Name:<asp:Label ID="Label1" runat="server" Text="Label"></asp:Label><br />
                    Age:<asp:Label ID="Label2" runat="server" Text="Label"></asp:Label><br />
                    City:<asp:Label ID="Label3" runat="server" Text="Label"></asp:Label><br />
                    Salary:<asp:Label ID="Label4" runat="server" Text="Label"></asp:Label><br />
            </asp:View>
            
        </asp:MultiView>

    </div>
    </form>
</body>
</html>
