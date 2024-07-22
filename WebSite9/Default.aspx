<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
<style type="text/css">
        .enq
        {
            padding:5px; width:180px;
        }
        .btn
        {
            padding:6px; width:193px;
        }
       .img
        {
        width:184px; height:200px;
        }
        .img2
        {
            width:313px; height:250px;
        }
   
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div style="width:960px; height:auto; margin-top:10px; background-color:transparent; margin:auto;">

        <div style="width:650px; height:250px; float:left; background-color:White;">
         <div style="text-align:center; font-size:80px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:Black;">About transport</span></div> 
        <div style="font-variant:small-caps; text-align:center;">
            Transport Specialties International was launched in 2019 as an International 
        Courier, Mailing and Messenger Service primarily servicing the tri-state area. The 
        quality of the service that we provided to our clients directly resulted in their demand 
        for TSI to offer more varied support services to assist these companies in their sales and 
        marketing efforts.
Our response was to establish a diversified mailing and warehouse fulfillment company 
offering the most responsive and personalized services available. From those beginnings and over 
the years.</div></div>
        <div style="width:300px; height:250px; float:right; background-color:white; ">
        <div style="text-align:center; font-size:50px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:black;">Enquiry</span></div> 

<div>
    <table>
        <tr>
            <td >
                Name</td>
            <td>
                <asp:TextBox ID="TextBox1" runat="server" class="enq"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                E-mail ID</td>
            <td>
                <asp:TextBox ID="TextBox2" runat="server" class="enq"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                Contact No.</td>
            <td>
                <asp:TextBox ID="TextBox3" runat="server" class="enq"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td >
                Message</td>
            <td>
                <asp:TextBox ID="TextBox4" runat="server" class="enq"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
            <td>
                <asp:Button ID="Button1" runat="server" Text="Submit" class="btn" 
                    onclick="Button1_Click"/>
            </td>
        </tr>
    </table>
</div>
</div>
<div style="clear:both;"></div>
             <marquee onmouseover="this.stop();" onmouseout="this.start();"><div style="width:960px; height:200px; margin-top:10px; background-color:white;">
             <div style="width:184px; height:200px; background-color:Blue;  float:left;">
                 <img src="images/t7.jpg" class="img" /></div>
             <div style="width:184px; height:200px; background-color:Green; float:left; margin-left:10px;">
                 <img src="images/t10.jpg" class="img"/></div>
             <div style="width:184px; height:200px; background-color:Lime; float:left; margin-left:10px;">
                 <img src="images/t9%20.jpg" class="img"/></div>
             <div style="width:184px; height:200px; background-color:Fuchsia; float:left; margin-left:10px;">
                 <img src="images/t8.jpeg" class="img"/></div>
             <div style="width:184px; height:200px; background-color:Maroon; float:right;">
                 <img src="images/t2.jpeg" class="img"/></div>
            </div></marquee>
            <div style=" width:960px; height:250px; background-color:white; margin-top:10px;">
            <div style="width:313px; height:250px; background-color:white; font-variant:small-caps; text-align:center; float:left;">
            <div style="width:10px; height:250px; float:left; background-color:transparent;"></div>
             <div style="width:10px; height:250px; float:right; background-color:transparent;"></div>
             <h1> Full Truckload Services</h1>
One of the primary services offered by trucking companies is Full Truckload transportation. This service is best suited for large shipments that require the entire capacity of a truck, typically over 10,000 pounds or occupying more than 12 linear feet of space. </div>
            <div style="width:313px; height:250px; text-align:center; background-color:White;  font-variant :small-caps; float:left; margin-left:10px;">
            <div style="width:10px; height:250px; float:left; background-color:transparent;"></div>
             <div style="width:10px; height:250px; float:right; background-color:transparent;"></div>
              <h1>Intermodal Transportation</h1>
Intermodal transportation services involve the use of multiple modes of transport, such as trucks, trains, and ships, to move goods to their destination. This process allows trucking companies to optimize shipping routes, reduce costs, and minimize the environmental. </div>
            <div style="width:313px; height:250px; background-color:white; font-variant:small-caps; float:right; text-align:center;">
            <div style="width:10px; height:250px; float:left; background-color:transparent;"></div>
             <div style="width:10px; height:250px; float:right; background-color:transparent;"></div>
             <h1>Freight brokerage services</h1> Freight brokerage services connect shippers with carriers to facilitate the efficient transportation of goods. Trucking companies that offer freight brokerage services leverage their industry connections and expertise to find the best carrier.  </div>
             </div>
             <div style="width:960px; height:350px; font-variant:small-caps; margin-top:10px; background-color:white;">
            <div style="text-align:center; font-size:60px; font-variant:small-caps; font-weight:bold;"><span style="text-decoration:underline; color:Black;">About Us</span></div>  
             <div style="text-align:justify; ">
             <div style="width:10px; height:350px; float:left; background-color:transparent;"></div>
             <div style="width:10px; height:350px; float:right; background-color:transparent;"></div>
             This Transport established by Mr. Davinder Singh in 2019. Transportation is interchangeably used with the mode of transport. The means of transportation are bus, train, aeroplane, ship, car, etc while the mode of transportation refers to road, air, sea/ocean, etc. This is any of the different types of transport machines used for moving people or cargo.Transportation can be defined as the movement of any substance from one place to another. Water and nutrients required for all metabolic activities should be transported in the body of plants and animals. The waste material or excretory products should also move to the region of excretion.Transport in India consists of transport by land, water and air. Road transport is the primary mode of transport for most Indian citizens, and India's road transport systems are among the most heavily used in the world.
Canada's road network is the second-largest, after the United States and one of the busiest in the world, transporting 8.225 billion passengers and over 980 million tonnes of cargo annually, as of 2015. USA's rail network is the fourth largest and second busiest in the world, transporting 8.09 billion passengers and 1.20 billion tonnes of freight annually, as of 2020. Aviation in Canada is broadly divided into military and civil aviation which is the fastest-growing aviation market in the world. India's waterways network, in the form of rivers, canals, backwaters and creeks, is the ninth largest waterway network in the world. Freight transport by waterways is highly under utilised in Canada with the total cargo moved by inland waterways being 0.1 percent of the total inland traffic in Canada. In total, about 21 percent of households have two wheelers whereas 4.70 percent of households in India have cars or vans as per the 2011 census of Canada.More.........
             </div>
             </div>
</asp:Content>

