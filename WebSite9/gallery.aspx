<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="gallery.aspx.cs" Inherits="gallery" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .img
        {
            width: 316px; height: 200px; border-top-left-radius:10px; border-bottom-left-radius:10px; border-top-right-radius:10px; border-bottom-right-radius:10px;
        }
  
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div style="text-align:center; font-size:80px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:White;">Gallery</span></div> 
<div>

    <table width="960"; Height="auto";>
           <tr>
           <td >
                <a href="images/bckgrd.jpg" target="new"><img src="images/bckgrd.jpg" class="img" /></a></td>
           <td>
                <a href="images/t1.jpeg" target="new"><img src="images/t1.jpeg" class="img"/></a></td>
           <td>
               <a href="images/t2.jpeg" target="new"> <img src="images/t2.jpeg" class="img" /></a></td>
          </tr>
           <tr>
            <td>
                <a href="images/t2jpg.jpg" target="new"><img src="images/t2jpg.jpg" class="img" /></a></td>
            <td>
                <a href="images/t3.jpeg" target="new"><img src="images/t3.jpeg" class="img" /></a></td>
            <td>
                <a href="images/t4.jpeg" target="new"><img src="images/t4.jpeg" class="img" /></a></td>
           </tr>
           <tr>
            <td>
               <a href="images/truck.jpeg" target="new"> <img src="images/truck.jpeg" class="img" /></a></td>
            <td>
               <a href="images/t6.jpeg" target="new"> <img src="images/t6.jpeg" class="img" /></a></td>
            <td>
               <a href="images/truck%20banner.jpeg" target="new"> <img src="images/truck%20banner.jpeg" class="img"/></a></td>
          </tr>
          <tr>
            <td>
                <a href="images/t5.jpeg" target="new"><img src="images/t5.jpeg" class="img" /></a></td>
            <td>
                <a href="images/t7.jpg" target="new"><img src="images/t7.jpg" class="img" /></a></td>
            <td>
               <a href="images/t8.jpeg" target="new"> <img src="images/t8.jpeg" class="img" /></a></td>
          </tr>
          <tr>
            <td>
               <a href="images/t10.jpg" target="new"> <img src="images/t10.jpg" class="img"/></a></td>
            <td>
               <a href="images/t12.jpeg" target="new"> <img src="images/t12.jpeg" class="img"/></a></td>
            <td>
                <a href="images/t13.jpg" target="new"> <img src="images/t13.jpg" class="img" /></a></td>
          </tr>
           <tr>
            <td>
                <a href="images/t14.jpeg" target="new"><img src="images/t14.jpeg" class="img"/></a></td>
            <td>
               <a href="images/t9%20.jpg" target="new"> <img src="images/t9%20.jpg" class="img"/></a></td>
            <td>
                <a href="images/lst.jpeg" target="new"><img src="images/lst.jpeg" class="img" /></a></td>
           </tr>
    </table>

</div>
</asp:Content>

