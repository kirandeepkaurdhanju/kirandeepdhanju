<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="contactus.aspx.cs" Inherits="contactus" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
     html
     {
         background-image:url('images/bg1.png');
     } 
     .txt
     {
     font-variant:small-caps; font-weight:bold; font-size:20px; padding:5px;
     }
     .txbx
     {
         width:360px; padding:10px; border:none; border-bottom:solid maroon 1px;
     }
     .txbxar
     {
         width:360px; padding:10px; height:60px; resize:none; border:none; border-bottom:solid maroon 1px;
     }
     .btn
     {
         width:150px; font-variant:small-caps; padding:10px; background-color:Maroon;
         color:White; border:none; font-size:20px; border:dashed 2px white;
     }
        .btn:hover
        {
            background-color:Purple;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div style="background-color:White;">

<div style="height:20px;"></div>

<div style="text-align:center; font-size:80px; font-variant:small-caps; font-weight:bold; text-decoration:underline;">Contact Us</div> 
<div style="height:20px;"></div>
<div style="width:960px;">
<div style="width:435px; height:auto; margin:auto; float:left;">
    <table width="400" align="center">
        <tr >
            <td class="txt">
                Name: </td>
            <td class="txt">
               Miss. Kirandeep Kaur</td>
        </tr>
        <tr>
            <td class="txt">
                Address:</td>
            <td class="txt">
                Sultanpur Lodhi distt. Kapurthala</td>
        </tr>
        <tr>
            <td class="txt">
                Mobile No.:</td>
            <td class="txt">
                9876543210</td>
        </tr>
        <tr>
            <td class="txt">
                E-mail ID:</td>
            <td class="txt">
                Kirandeepdhanju@gmail.com</td>
        </tr>
        <tr>
            <td class="txt">
                Website:</td>
            <td class="txt">
                Guru Ramdas Transport.com</td>
        </tr>
        <tr>
            <td class="txt">
                Postal code:</td>
            <td class="txt">
                144626</td>
        </tr>
    </table>
    </div>
<div style="width:515px; height:auto; float:right;">
    <table cellpadding="5">
        <tr>
            <td class="txt">
                Name:</td>
            <td >
                <asp:TextBox ID="TextBox1" runat="server" class="txbx" placeholder="Name*" ></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="txt">
                Address:</td>
            <td >
                <asp:TextBox ID="TextBox2" runat="server" TextMode="MultiLine" class="txbxar" placeholder="Address*"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="txt">
                Mobile No.:</td>
            <td>
                <asp:TextBox ID="TextBox3" runat="server" class="txbx" placeholder="Mobile No.*"></asp:TextBox>
            </td >
        </tr>
        <tr>
            <td class="txt">
                E-Mail ID:</td>
            <td >
                <asp:TextBox ID="TextBox4" runat="server" class="txbx"  placeholder="Email ID*"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="txt">
                Feedback:</td>
            <td >
                <asp:TextBox ID="TextBox5" runat="server" TextMode="MultiLine" class="txbxar" placeholder="Your Valuable Feedback*"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td >
                <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                    ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
                    SelectCommand="SELECT * FROM [feedback]"></asp:SqlDataSource>
            </td>
            <td align="right">
                <asp:Button ID="Button1" runat="server" Text="Submit" class="btn" 
                    onclick="Button1_Click"/>
            </td>
        </tr>
    </table>
    </div>
<div style="clear:both;"></div>
</div>

</div>
<div style="height:20px;"></div>
</asp:Content>

