<%@ Page Title="" Language="C#" MasterPageFile="~/Usermaster.master" AutoEventWireup="true" CodeFile="appointment.aspx.cs" Inherits="appointment" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
         .Txt
   {
       width:290px; height:20px; padding:2px; resize:none;
   }
   .txt1
   {
       width:298px; height:30px; padding:2px; 
   }
   .btn
   {
       width:298px; height:30px;
   }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
    <div style="width:960px; height:335px; margin:auto;">
   <div style="text-align:center; font-size:50px; font-variant:small-caps; margin-top:10px; font-weight:bold;"><span style="text-decoration:underline; color:Purple;">user Appointment</span></div>  
   <div style="width:960px; height:10px; background-color:White;"></div>
   <div style="width:390px; height:auto; margin:auto;">
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
                Contact No.</td>
            <td>
                <asp:TextBox ID="TextBox2" runat="server" placeholder="Contact No." class="Txt"></asp:TextBox>
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
                Appointment</td>
            <td>
                <asp:DropDownList ID="DropDownList1" runat="server" class="txt1">
                    <asp:ListItem>Logging truck</asp:ListItem>
                    <asp:ListItem>Flatbed truck</asp:ListItem>
                    <asp:ListItem>Long Haul truck</asp:ListItem>
                    <asp:ListItem>Shunt truck</asp:ListItem>
                    <asp:ListItem>Dumb truck</asp:ListItem>
                    <asp:ListItem>Bulk goods truck</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td >
                Day</td>
            <td>
                <asp:DropDownList ID="DropDownList2" runat="server" class="txt1">
                    <asp:ListItem>Monday</asp:ListItem>
                    <asp:ListItem>Tuesday</asp:ListItem>
                    <asp:ListItem>Wednesday</asp:ListItem>
                    <asp:ListItem>Thursday</asp:ListItem>
                    <asp:ListItem>Friday</asp:ListItem>
                    <asp:ListItem>Saturday</asp:ListItem>
                    <asp:ListItem>Sunday</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td>
                Time</td>
            <td>
                <asp:DropDownList ID="DropDownList3" runat="server" class="txt1">
                    <asp:ListItem>8-9 AM</asp:ListItem>
                    <asp:ListItem>9-10 AM</asp:ListItem>
                    <asp:ListItem>10-11 AM</asp:ListItem>
                    <asp:ListItem>11-12 AM</asp:ListItem>
                    <asp:ListItem>12-1 PM</asp:ListItem>
                    <asp:ListItem>1-2 PM</asp:ListItem>
                    <asp:ListItem>2-3 PM</asp:ListItem>
                    <asp:ListItem>3-4 PM</asp:ListItem>
                    <asp:ListItem>4-5 PM</asp:ListItem>
                    <asp:ListItem>5-6 PM</asp:ListItem>
                    <asp:ListItem>6-7 PM</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td >
                Remark</td>
            <td>
                <asp:TextBox ID="TextBox4" runat="server" TextMode="MultiLine" placeholder="Remark" class="Txt"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td >
                &nbsp;</td>
            <td>
                <asp:Button ID="Button1" runat="server" onclick="Button1_Click" Text="Submit" class="btn"/>
            </td>
        </tr>
    </table>
    </div>
    <div style="width:960px; height:20px; margin:auto; background-color:White";></div>
    </div>
   
</asp:Content>

