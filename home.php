<html> 
    <head>
    <title>second form</title>
        <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 20px;
    font-family: sans-serif;
    min-width: 550px;
    box-shadow: 0 0 100px rgba(0, 0, 0, 0.15);
}
       .styled-table thead tr {
    background-color: #2E86C1;
    color: #ffffff;
    text-align: left;
} 
            .styled-table th,
.styled-table td {
    padding: 16px 18px;
}
            .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #F1C40F;
}
            .styled-table tbody tr.active-row {
    font-weight: bold;
    color: #F1C40F;
}
            h1{
                font-size: 34px;
                padding-top: 40px;
                color: #F1C40F ;
            }
            body{
                background: #808B96;
            }
        </style>
    </head>
   <body> 
       <center>
           <h1>Student Information</h1>
     <table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_GET["fname"]; ?> </td>
            <td><?php echo $_GET["email"]; ?></td>
            <td><?php echo $_GET["phone"]; ?></td>
            <td><?php echo $_GET["birth"]; ?></td>
            <td><?php echo $_GET["gender"]; ?></td>
            <td><?php echo $_GET["adress"]; ?></td>
        </tr>
      
    </tbody>
         
</table>
    
       </center>
   </body>  
</html>  