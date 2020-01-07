<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="ViewOrders.aspx.cs" Inherits="ViewOrders" %>

<%@ Register Src="~/TotalOrders.ascx" TagPrefix="uc1" TagName="TotalOrders" %>


<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
    <center><h1>View Orders</h1></center>
    <hr />
    <div>

       <!-- Sort by functionality goes here -->
      Sort By: <asp:RadioButtonList ID="RadioButtonList1" runat="server">
            <asp:ListItem Text="None" ></asp:ListItem>
            <asp:ListItem Text="Dispatched"></asp:ListItem>
            <asp:ListItem Text="Not Dispatched"></asp:ListItem>

        </asp:RadioButtonList>



    </div>
    <center>
        <div style="float:left; padding-left:50px;">

            <uc1:TotalOrders runat="server" id="TotalOrders" />

        </div>
        <div style="margin:10px;">
            <asp:DataList ID="DataList1" runat="server" RepeatDirection="Horizontal" RepeatColumns="3">
                <ItemTemplate>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                             <center>Order Id:<asp:Label ID="Label1" runat="server" Text='<%# Eval("Id") %>'></asp:Label></center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                             <center>Book Id:<asp:Label ID="Label2" runat="server" Text='<%# Eval("book_id") %>'></asp:Label></center> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Order Date:<asp:Label ID="Label3" runat="server" Text='<%# Eval("or_date") %>'></asp:Label>
                            </td>
                            <td>
                                Deliver Date:<asp:Label ID="Label4" runat="server" Text='<%# Eval("delivery_dt") %>'></asp:Label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                             <center>   Dispated:<asp:Label ID="Label5" runat="server" Text='<%# Eval("dispatched") %>'></asp:Label></center>
                            </td>
                        </tr>
                    </table>
                </ItemTemplate>
            </asp:DataList>
        </div>
    </center>
</asp:Content>

