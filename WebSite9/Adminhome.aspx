<%@ Page Title="" Language="C#" MasterPageFile="~/Adminmaster.master" AutoEventWireup="true" CodeFile="Adminhome.aspx.cs" Inherits="Adminhome" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
<style type="text/css">
        .img
        {
            width:300px; height:250px; border-top-left-radius:20px; border-bottom-left-radius:20px; border-top-right-radius:20px; border-bottom-right-radius:20px;
        }
        .img2
        {
            width:520px; height:300px;border-top-left-radius:20px; border-bottom-left-radius:20px; border-top-right-radius:30px; border-bottom-right-radius:30px;
        </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
   <div style="width:960px; height:850px; margin-top:10px; background-color:white; margin:auto;">

        <div style="width:650px; height:250px; float:left; background-color:White;">
         <div style="text-align:center; font-size:40px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:Black;">Rules of Transportation</span></div> 
        <div style="font-variant:small-caps;">
           <font size="5">1. Vehicle registation</font> </br>
           <font size="5">2. Nation permit</font></br>
           <font size="5">3. vehicle fitness certificate</font></br>
           <font size="5">4. e- way bill</font></br>
            <font size="5">5. Maximum speed of vehicle</font></br>
            <font size="5">6. mantory all the documents</font></br>
             <font size="5">7. maximum safe axle weight </font></br>
            </div></div>
        <div style="width:300px; height:250px; float:right; background-color:white; ">
            <img src="images/t10.jpg" class="img" />
</div>
<div style="clear:both;"></div>

<div style="width:960px; height:300px; background-color:black;">
    <img src="images/writtenpage1.jpg" />

</div>
<div style="width:960px; height:300px; background-color:transparent;">
<div style="width:430px; height:300px; float:left; background-color:transparent;">
<div style="font-variant:small-caps;">
<h1>Terms and Conditions</h1>
 <font size="5">1.Transportation documents </font> </br>
           <font size="5">2.Customer Warranties </font></br>
           <font size="5">3.Limitation of Liability </font></br>
           <font size="5">4.claims </font></br>
            <font size="5">5.Payments </font></br>
            <font size="5">6.Cargo Insure </font></br>
             <font size="5">7.Permits  </font></br>
             </div>
             </div>
            <div style="width:520px; height:300px; float:right; background-color:transparent;">
                <img src="images/t13.jpg" class="img2"/>
            </div>
            <div style="clear:both;"></div>

</div></div>
</div>
</asp:Content>

