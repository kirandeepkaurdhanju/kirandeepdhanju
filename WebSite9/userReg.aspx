<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="userReg.aspx.cs" Inherits="userReg" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
     .dsg
     {
         width:350px; height:20px; 
     }
     .eml
     {
         width:351px; height:40px; resize:none;
     }
     .drp
     {
         width:357px; height:28px;
     }
     .btn
     {
       width:357px; height:25px;  
         }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   <div style="width:960px; height:500px;  background-color:Transparent; margin:auto; margin-top:10px;">
   <div style="text-align:center; font-size:80px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:White;">Registration</span></div> 
   <div style=" width:400px; height:400px;; background-color:Blue; float:left">
       <img src="images/reg.jpg" width="400" height="400"/>
    </div>
    <div style="width:550px; height:auto;  float:right;">
        
    <table>
        <tr>
            <td style="color:White;">
                Name</td>
            <td>
                <asp:TextBox ID="TextBox1" runat="server" placeholder="Name" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Father&#39;s Name</td>
            <td>
                <asp:TextBox ID="TextBox2" runat="server" placeholder="Father's Name" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Mother&#39;s Name</td>
            <td>
                <asp:TextBox ID="TextBox3" runat="server" placeholder="Mother's Name" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Date Of Birth</td>
            <td style="margin-left: 80px">
                <asp:TextBox ID="TextBox4" runat="server" placeholder="Date of Birth" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Gender</td>
            <td>
                <asp:DropDownList ID="DropDownList1" runat="server" class="drp">
                    <asp:ListItem>Male</asp:ListItem>
                    <asp:ListItem>Female</asp:ListItem>
                    <asp:ListItem>Transgender</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Address</td>
            <td>
                <asp:TextBox ID="TextBox5" runat="server" TextMode="MultiLine" placeholder="Address" class="eml"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Mobile Number</td>
            <td>
                <asp:TextBox ID="TextBox6" runat="server" Placeholder="Mobile Number" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                E-mail ID</td>
            <td>
                <asp:TextBox ID="TextBox7" runat="server" Placeholder="E-mail Id" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Password</td>
            <td>
                <asp:TextBox ID="TextBox8" runat="server" TextMode="Password" Placeholder="Password" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Confirm Password</td>
            <td>
                <asp:TextBox ID="TextBox9" runat="server" TextMode="Password" placeholder="Confirm Password" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Security Password</td>
            <td>
                <asp:DropDownList ID="DropDownList2" runat="server" class="drp">
                    <asp:ListItem>Your nickname?</asp:ListItem>
                    <asp:ListItem>What is your date of birth?</asp:ListItem>
                    <asp:ListItem>Your favourite colour?</asp:ListItem>
                    <asp:ListItem>Your bad habit?</asp:ListItem>
                </asp:DropDownList>
                <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                    ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
                    SelectCommand="SELECT * FROM [userreg]"></asp:SqlDataSource>
            </td>
        </tr>
        <tr>
            <td style="color:White;">
                Answer</td>
            <td>
                <asp:TextBox ID="TextBox10" runat="server" Placeholder="Answer" class="dsg"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
            <td>
                <asp:Button ID="Button1" runat="server" Text="Register Here!!!" class="btn" 
                    onclick="Button1_Click"/>
                <asp:Label ID="Label1" runat="server" Text="Label"></asp:Label>
            </td>
        </tr>
    </table>

</div>
</div>
</asp:Content>


