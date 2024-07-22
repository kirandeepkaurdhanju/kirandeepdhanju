<%@ Page Title="" Language="C#" MasterPageFile="~/Adminmaster.master" AutoEventWireup="true" CodeFile="admuserenq.aspx.cs" Inherits="admuserenq" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
<div style="font-size:60px; padding:30px; text-align:center; font-weight:bold; font-variant:small-caps; color:white; background-color:Purple;"> User's Enquiry</div>
<div style="width:700px; height:auto; margin:justify; margin-top:20px; font-variant:small-caps;">
    <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
    DataKeyNames="Id" DataSourceID="SqlDataSource1">
    <Columns>
        <asp:BoundField DataField="Id" HeaderText="Id" InsertVisible="False" 
            ReadOnly="True" SortExpression="Id" />
        <asp:BoundField DataField="name" HeaderText="name" SortExpression="name" />
        <asp:BoundField DataField="mobile" HeaderText="mobile" 
            SortExpression="mobile" />
        <asp:BoundField DataField="email" HeaderText="email" SortExpression="email" />
        <asp:BoundField DataField="message" HeaderText="message" 
            SortExpression="message" />
        <asp:BoundField DataField="remark" HeaderText="remark" 
            SortExpression="remark" />
    </Columns>
</asp:GridView>
<asp:SqlDataSource ID="SqlDataSource1" runat="server" 
    ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
    SelectCommand="SELECT * FROM [userenq]"></asp:SqlDataSource>
    </div>
    <div style="width:960px; height:50px; "></div>
</asp:Content>

