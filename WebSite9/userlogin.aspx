<%@ Page Language="C#" AutoEventWireup="true" CodeFile="userlogin.aspx.cs" Inherits="userlogin" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
       html
        {
            background-image:url('images/bubbles.jpg');
        }
         .Txt
        {
       width:320px; height:20px; padding:3px;
        }
   .txt1
   {
       width:292px; height:40px; padding:3px;
   }
   .btn
   {
       width:330px; height:30px;
   }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div style="height:150px;"></div>
       <div style="width:420px; border:dashed 2px black; box-shadow:0 0 50px black; border-top-left-radius:50px; border-bottom-right-radius:50px; padding:5px; height:260px; margin:auto; float:inherit; background-color:rgba(255,255,255,0.75);">
       <div style="text-align:center; font-size:40px; font-weight:bold;"> <span style="text-decoration:underline; color:Purple;">User Login</span></div>
       <div style="height:20px;"></div>
    
        <table >
            <tr>
                <td>
                    Email-Id</td>
                <td>
                    <asp:TextBox ID="TextBox1" runat="server" class="Txt"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    Password</td>
                <td>
                    <asp:TextBox ID="TextBox2" runat="server" TextMode="Password" class="Txt"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:Button ID="Button1" runat="server" Text="Login" class="btn" 
                        onclick="Button1_Click" />
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:LinkButton ID="LinkButton1" runat="server"><a href="userReg.aspx"> Sign Up! New User</a></asp:LinkButton>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:LinkButton ID="LinkButton2" runat="server"><a href="Forgetpassword.aspx">Forget Password</a></asp:LinkButton>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
                    <asp:Label ID="Label1" runat="server" ForeColor="#FF0066" Text="Label"></asp:Label>
                </td>
            </tr>
        </table>
    </div>
    
    </div>
    </form>
</body>
</html>
