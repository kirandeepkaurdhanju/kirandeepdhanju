<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Forgetpassword.aspx.cs" Inherits="Forgetpassword" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        html
        {
            background-image:url('images/bckgrd.jpg');
        }
     .tble
     {
        width:420px; padding:10px; border:none; border-bottom:solid 1px black;
     }
     .drpdwn
     {
         width:440px; padding:10px; border:none; border-bottom:solid 1px black;
     } 
   .bbtn
     {
         width:440px; padding:10px; border:none; border-bottom:solid 1px black; background-color:green; font-weight:bold; color:White;
     }
    </style>
</head>
<body>
    <form id="form1" runat="server">
   
       <div style="height:120px;"></div>
       <div style="width:460px; border:dashed 2px black; box-shadow:0 0 50px black; border-top-left-radius:100px; border-bottom-right-radius:100px; padding:20px; height:auto; margin:auto; background-color:rgba(255,255,255,0.75);">
       <div style="text-align:center; font-size:40px; font-weight:bold;">Forgot <span style="text-decoration:underline; color:Green;">Password?</span></div>
       <div style="height:20px;"></div>
       <div>
       <table cellpadding="5">
            <tr>
                
                <td>
                    <asp:TextBox ID="TextBox1" runat="server" placeholder="E-mail ID" class="tble"></asp:TextBox>
                </td>
            </tr>
            <tr>
               
                <td>
                    <asp:DropDownList ID="DropDownList1" runat="server" placeholder="Security Question" class="drpdwn">
                        <asp:ListItem>Your nickname?</asp:ListItem>
                        <asp:ListItem>What is your Date Of Birth?</asp:ListItem>
                        <asp:ListItem>Your favourite Colour?</asp:ListItem>
                        <asp:ListItem>Your ba habit?</asp:ListItem>
                    </asp:DropDownList>
                </td>
            </tr>
            <tr>
            <td>
                    <asp:TextBox ID="TextBox2" runat="server" placeholder="Answer" class="tble"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Button ID="Button1" runat="server" Text="Recover it!!!" class="bbtn" 
                        onclick="Button1_Click"/>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label1" runat="server" Text="Label" style="color:Red;"></asp:Label>
                </td>
            </tr>
        </table>
       </div>

       </div>

    
    </form>
</body>
</html>
