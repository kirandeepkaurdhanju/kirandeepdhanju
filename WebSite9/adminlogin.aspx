<%@ Page Language="C#" AutoEventWireup="true" CodeFile="adminlogin.aspx.cs" Inherits="adminlogin" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        html
        {
            background-image:url('images/computer.jpg');
        }
         .tble
     {
        width:320px; padding:10px; border:none; border-bottom:solid 1px black;
     }
     
   .bbtn
     {
         width:340px; padding:10px; border:none; border-bottom:solid 1px black; background-color:blue; font-weight:bold; color:White;
     }
    </style>
</head>
<body>
    <form id="form1" runat="server">
   
   
   <div style="height:120px;"></div>
       <div style="width:420px; border:dashed 2px black; box-shadow:0 0 50px black; border-top-left-radius:50px; border-bottom-right-radius:50px; padding:5px; height:auto; margin:auto; float:right; background-color:rgba(255,255,255,0.75);">
       <div style="text-align:center; font-size:40px; font-weight:bold;"> <span style="text-decoration:underline; color:Blue;">Admin Login</span></div>
       <div style="height:20px;"></div>
       <div>
    
        <table>
            <tr>
                <td>
                    E-mail ID</td>
                <td>
                    <asp:TextBox ID="TextBox1" runat="server" class="tble"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    Password</td>
                <td>
                    <asp:TextBox ID="TextBox2" runat="server" TextMode="Password" class="tble"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:Button ID="Button1" runat="server" Text="Login" class="bbtn" 
                        onclick="Button1_Click" />
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:LinkButton ID="LinkButton1" runat="server"><a href="Forgetpassword.aspx">Forget Password</a></asp:LinkButton>
                   
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:Label ID="Label1" runat="server" ForeColor="#0000CC" Text="Label"></asp:Label>
                   
                </td>
            </tr>
        </table>
   </div>
    </div>
    </form>
</body>
</html>
