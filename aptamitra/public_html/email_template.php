<?php ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Email Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/css?family=Cinzel:700,400,900" rel="stylesheet" type="text/css">
        <style>
            body{
                max-width: 920px;
                margin: 0 auto;
                font-family: trajan_bold;
            }
            #header
            {
                background-color: #11354f;
                width: 100%;
            }


            #main_logo
            {
                width: 50%;
                padding: 2%;
            }
            #android_logo
            {
                width: 50%;
                text-align: end;
                padding: 2%;
            }
            #para_1
            {
                text-transform: uppercase;              
                color: black;
                font-size: 1em;
                text-align: center;
                margin-top: 2%;
                margin-bottom: 10%;
            }

            #bill
            {
                width: 100%;
                margin-bottom: 4%;
                margin-left: 5%;
                margin-right: 5%;
            }
            #username
            {
                font-family: trajan_bold;
            }
            #user_image
            {
                text-align: center;
            }
            #user_details
            {
                text-align: center;
                font-size: 1em;
            }
            #table_bill
            {
                width: 100%;
                border-spacing: 0px 0px;
                font-family:sans-serif; 
                margin-bottom: 10%;
            }
            #table_bill_header
            {
                text-transform: capitalize;
                background-color: #fab001;
            }
            #table_bill_header > th
            {
                text-align: center; 
                padding: 1%;
            }
            #table_bill_data
            {
                font-weight: normal;
                

            }
            #table_bill_data > td
            {
                text-align: center;  
                padding: 1%;

            }
            #footer{
                font-family:sans-serif; 
                text-transform: capitalize;
                text-align: center;
            }
            #details_table
            {
               
            }
            #details_table th
            {
                text-align: left;
                 padding-right:  3%;
            }

/*            table, th, td {
                border: 1px solid black;

            }*/

            @font-face {
                font-family: trajan_regular;
                src: url(fonts/trajan_pro_regular.otf);
            }
            @font-face {
                font-family: trajan_bold;
                src: url(fonts/trajan_pro_bold.otf);
            }
        </style>
    </head>
    <body>
        <table id="header">
            <tr>
                <td id="main_logo"><img src="images/aptamitra.png" alt="aptamitra logo"/></td>
                <td id="android_logo"><img src="images/android.png" alt="android logo"/></td>
            </tr>
        </table>
        <div id="para_1">
            a trusted friend at your service.
        </div>

        <table id="bill">
            <tr id="username"><td>Dear Rahul,</td></tr>
            <tr id="user_image"><td><img src="images/photo.png" alt="user image" width="150" height="150"/></td></tr>
            <tr id="user_details"><td><p>Name <br>Mobile Number</p></td></tr>
            <tr><td>
                    <table id="details_table">
                        <tr>
                            <td colspan="2" style="padding-bottom: 15%">
                            REQUEST DETAILS
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Name</th>
                            <td>value</td>
                        </tr>
                        <tr>
                            <th colspan="2">Address</th>
                            <td>value</td>
                        </tr>
                        <tr>
                            <th colspan="2">Locality</th>
                            <td>value</td>
                        </tr>
                        <tr>
                            <th colspan="2">Service Type</th>
                            <td>value</td>
                        </tr>
                        <tr>
                            <th colspan="2">Date And Slot</th>
                            <td>value</td>
                        </tr>
                    </table>
                </td></tr>
        </table>

        <table id="table_bill">
            <tr id="table_bill_header">
                <th>SL No</th>
                <th>Service Type</th>
            </tr>
            <tr id="table_bill_data">
                <td>1</td>
                <td>Home Cleaning</td>
            </tr>
        </table>

        <div id="footer">
            <p>For any queries contact <strong>080 4666 5666</strong><br> and gibe your feed back to <strong>team.aptamitra@gmail.com</strong></p>
        </div>

    </body>
</html>