<%@ Page Title="" Language="C#" MasterPageFile="~/Usermaster.master" AutoEventWireup="true" CodeFile="userchangepassword.aspx.cs" Inherits="userchangepassword" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .Txt
   {
       width:290px; height:20px; padding:2px;
   }
   .btn
   {
       width:300px; height:30px;
   }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
<div style="width:960px; height:250px; margin:auto; margin-top:10px;">
   <div style="text-align:center; font-size:50px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:Purple;">change password</span></div>  
   <div style="width:450px; height:auto; margin:auto; margin-top:15px;">
    <table>
        <tr>
            <td>
                E-mail ID</td>
            <td>
                <asp:TextBox ID="TextBox1" runat="server" placeholder="E-mail ID" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                Old Password</td>
            <td>
                <asp:TextBox ID="TextBox2" runat="server" TextMode="Password" placeholder="Old Password" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                New Password</td>
            <td>
                <asp:TextBox ID="TextBox3" runat="server" TextMode="Password" placeholder="New Password" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                Confirm Password</td>
            <td style="margin-left: 40px">
                <asp:TextBox ID="TextBox4" runat="server" TextMode="Password" placeholder="Confirm Password" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
            <td style="margin-left: 40px">
                <asp:Button ID="Button1" runat="server" onclick="Button1_Click" Text="Change Password" class="btn"/>
            </td>
        </tr>
    </table>
    </div>
    </div>
    <div style="width:960px; height:20px; margin:auto; background-color:White";></div>
</asp:Content>

