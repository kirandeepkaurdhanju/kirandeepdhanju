<%@ Page Title="" Language="C#" MasterPageFile="~/Usermaster.master" AutoEventWireup="true" CodeFile="userfeedback.aspx.cs" Inherits="userfeedback" %>

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
   .txt2
   {
       font-variant:small-caps;
   }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
    <div style="width:960px; height:300px; margin:auto; margin-top:10px;">
   <div style="text-align:center; font-size:50px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:Purple;">user feedback</span></div>  
  <div style="width:960px; height:20px; background-color:White;"></div>
   <div style="width:390px; height:auto; margin:auto; margin-top:10px;">
    <table >
        <tr>
            <td class="txt2">
                Name</td>
            <td>
                <asp:TextBox ID="TextBox1" runat="server" placeholder="Name" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="Txt">
                E-mail Id</td>
            <td>
                <asp:TextBox ID="TextBox2" runat="server" placeholder="E-mail ID" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="txt2">
                Mobile No.</td>
            <td>
                <asp:TextBox ID="TextBox3" runat="server" placeholder="Mobile No." class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="txt2">
                Subject</td>
            <td>
                <asp:TextBox ID="TextBox4" runat="server" placeholder="Subject" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="txt2">
                Feedback</td>
            <td>
                <asp:TextBox ID="TextBox5" runat="server" TextMode="MultiLine" placeholder="Feedback" class="txt1"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
            <td>
                <asp:Button ID="Button1" runat="server" onclick="Button1_Click" Text="Submit" font-variant="small-caps" class="btn"/>
            </td>
        </tr>
    </table>
 </div>
 </div>
   <div style="width:960px; height:30px; margin:auto; background-color:White;"></div>
      
</asp:Content>

