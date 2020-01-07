<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" Theme="Blue" AutoEventWireup="true" CodeFile="AddBooks.aspx.cs" Inherits="Books" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
    <center>Welcome, <asp:Label ID="lblusername" runat="server" Text="Label"></asp:Label></center>
    <center><h2>Book Entry</h2></center>
    <hr />
    <div style="width: 600px; margin: auto; float:left;">
        <table width="100%">
            <tr>
                <td style="text-align: right;">Book Name:
                </td>
                <td>
                    <asp:TextBox ID="txtbookname" runat="server" CssClass="form-control"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="enter book name" ControlToValidate="txtbookname" ForeColor="Red"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <asp:FileUpload ID="FileUpload1" runat="server" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <asp:Button ID="btnupload" runat="server" Text="Upload" OnClick="btnupload_Click"/>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">Cover Preivew:</td>
                <td>
                    <asp:Image ID="Image1" runat="server" Width="100px" Height="100px" />
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">Author Name:
                </td>
                <td>
                    <asp:TextBox ID="txtauthor" runat="server" CssClass="form-control"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">Description:
                </td>
                <td>
                    <asp:TextBox ID="txtdesc" runat="server" CssClass="form-control"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">Price:
                </td>
                <td>
                    <asp:TextBox ID="txtprice" runat="server" CssClass="form-control"></asp:TextBox>
                    <asp:RangeValidator ID="RangeValidator1" runat="server" ErrorMessage="RangeValidator" ControlToValidate="txtprice" MaximumValue="1000" MinimumValue="200" Type="Double"></asp:RangeValidator>
                  </td>
            </tr>
            <tr>
                <td style="text-align: right;">Category:
                </td>
                <td>
                    <asp:DropDownList ID="ddlcat" runat="server">
                        
                        <asp:ListItem>Technology</asp:ListItem>
                        <asp:ListItem>Novels</asp:ListItem>
                        <asp:ListItem>Journals</asp:ListItem>
                    </asp:DropDownList>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="user must select category of books" ControlToValidate="ddlcat" ForeColor="Red"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <asp:Button ID="btnsubmit" CssClass="btn btn-primary" runat="server" Text="Submit" OnClick="btnsubmit_Click"></asp:Button>
                </td>
            </tr>


        </table>
    </div>
    <div style="width:200px;float:right;margin:auto;margin-right:125px;">
        <asp:AdRotator ID="AdRotator1" runat="server" Width="250px" Height="250px" AdvertisementFile="~/XMLFile.xml"/>
    </div>
</asp:Content>

