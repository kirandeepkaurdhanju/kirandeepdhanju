<%@ Page Title="" Language="C#" MasterPageFile="~/Usermaster.master" AutoEventWireup="true" CodeFile="userenquiry.aspx.cs" Inherits="userenquiry" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
   .Txt
   {
       width:290px; height:20px; padding:3px; 
   }
   .txt1
   {
       width:292px; height:40px; padding:3px; resize:none;
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
   <div style="width:960px; height:270px; margin:auto; margin-top:10px;">
   <div style="text-align:center; font-size:50px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:Purple;">user enquiry</span></div>  
   <div style="width:390px; height:200px; margin:auto; margin-top:20px;">
   <table >
    <tr>
        <td>
            Name</td>
        <td>
            <asp:TextBox ID="TextBox1" runat="server" placeholder="Name" class="Txt"></asp:TextBox>
        </td>
    </tr>
    <tr>
        <td>
            Mobile No.</td>
        <td>
            <asp:TextBox ID="TextBox2" runat="server" placeholder="Mobile no." class="Txt"></asp:TextBox>
        </td>
    </tr>
    <tr>
        <td>
            E-mail ID</td>
        <td>
            <asp:TextBox ID="TextBox3" runat="server" placeholder="E-mail ID" class="Txt"></asp:TextBox>
        </td>
    </tr>
    <tr>
        <td>
            Message</td>
        <td>
            <asp:TextBox ID="TextBox4" runat="server" TextMode="MultiLine" placeholder="Message" class="txt1"></asp:TextBox>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;</td>
        <td>
            <asp:Button ID="Button1" runat="server" Text="Submit" onclick="Button1_Click" class="btn"/>
        </td>
    </tr>
</table>

</div>
</div>
<div style="width:960px; height:20px; margin:auto; background-color:White";></div>
</asp:Content>

