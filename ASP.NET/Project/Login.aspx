<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Login.aspx.cs" Inherits="Login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div style="width: 100%; height: 180px;">
            <asp:Image ID="Image1" runat="server" ImageUrl="~/img/header.jpg" Width="100%" Height="180px" />
        </div>
        <div style="width: 450px; margin: auto; margin-top:20px; border-radius:5px; padding: 15px; background-color:gainsboro; height: 350px; text-align: center;">
            <h3><center>Login</center></h3>
            <hr />
            <div class="form-group">
                <label for="username">Username:</label>
                <asp:TextBox ID="txtusername" runat="server" class="form-control"></asp:TextBox>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <asp:TextBox ID="txtpassword" runat="server" class="form-control"></asp:TextBox>
            </div>
            <asp:Button ID="Button1" runat="server" Text="Login" Class="btn btn-primary" OnClick="Button1_Click" />
        </div>

    </form>
</body>
</html>
