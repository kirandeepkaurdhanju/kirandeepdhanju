<%@ Page Title="" Language="C#" MasterPageFile="~/Adminmaster.master" AutoEventWireup="true" CodeFile="admrigs.aspx.cs" Inherits="admrigs" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
<div style="font-size:60px; padding:30px; text-align:center; font-weight:bold; font-variant:small-caps; color:White; background-color:Purple;"> User's Registration</div>
<div style="width:700px; height:auto; margin:center; margin-top:20px; font-variant:small-caps;">
    <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
    DataKeyNames="Id" DataSourceID="SqlDataSource1">
    <Columns>
        <asp:BoundField DataField="Id" HeaderText="Id" InsertVisible="False" 
            ReadOnly="True" SortExpression="Id" />
        <asp:BoundField DataField="name" HeaderText="name" SortExpression="name" />
        <asp:BoundField DataField="fname" HeaderText="fname" SortExpression="fname" />
        <asp:BoundField DataField="mname" HeaderText="mname" SortExpression="mname" />
        <asp:BoundField DataField="dob" HeaderText="dob" SortExpression="dob" />
        <asp:BoundField DataField="gender" HeaderText="gender" 
            SortExpression="gender" />
        <asp:BoundField DataField="address" HeaderText="address" 
            SortExpression="address" />
        <asp:BoundField DataField="mobile" HeaderText="mobile" 
            SortExpression="mobile" />
        <asp:BoundField DataField="email" HeaderText="email" SortExpression="email" />
        <asp:BoundField DataField="pass" HeaderText="pass" SortExpression="pass" />
        <asp:BoundField DataField="sqsn" HeaderText="sqsn" SortExpression="sqsn" />
        <asp:BoundField DataField="ans" HeaderText="ans" SortExpression="ans" />
        <asp:BoundField DataField="rem" HeaderText="rem" SortExpression="rem" />
    </Columns>
</asp:GridView>
<asp:SqlDataSource ID="SqlDataSource1" runat="server" 
    ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
    SelectCommand="SELECT * FROM [userreg]"></asp:SqlDataSource>
    </div>
     <div style="width:960px; height:50px; "></div>
</asp:Content>

