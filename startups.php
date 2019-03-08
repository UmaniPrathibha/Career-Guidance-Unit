<html lang="en">
        <?php
session_start();
include './students.php';

?>
    <head>
        <style>
         
            #body_header
            {

                width:auto;
                margin:0px auto;
                text-align:center;
                font-size:25px;
            }
            form {
                max-width: 300px;
                margin: 10px auto;
                padding: 10px 20px;
                background: #cccccc;
                border-radius: 8px;
                
            }

            h1 {
                margin: 0 0 30px 0;
                text-align: center;
            }

            input[type="text"],
            input[type="password"],
            input[type="date"],
            input[type="datetime"],
            input[type="email"],
            input[type="number"],
            input[type="search"],
            input[type="tel"],
            input[type="time"],
            input[type="url"],
            textarea,
            select {
                background: rgba(255,255,255,0.1);
                border: none;
                padding: 8px;
                font-size: 16px;
                height: auto;
                margin: auto;
                outline: 0;
                width: 100%;
                background-color: #e8eeef;
                color: black;
                box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                margin-bottom: 30px;
            }

            input[type="radio"],
            input[type="checkbox"]

            {
                margin: 0 4px 8px 0;
            }

            select {
                padding: 6px;
                height: 32px;
                border-radius: 2px;
            }

            button {
                padding: 19px 39px 18px 39px;
                color: #FFF;
                background-color: #ff9900;
                font-size: 18px;
                text-align: center;
                font-style: normal;
                border-radius: 5px;
                width: 100%;
                border: 1px solid #ff9900;
                border-width: 1px 1px 3px;
                box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
                margin-bottom: 10px;
                
            }
            button:hover{
                color: #FFF;
                background-color: #009933;
                border: 1px solid #4bc970;
                border-width: 1px 1px 3px;
            }
            fieldset {
                margin-bottom: 30px;
                border: none;
            }

            legend {
                font-size: 1.4em;
                margin-bottom: 10px;
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            label.light {
                font-weight: 300;
                display: inline;
            }

            .number {
                background-color:#009900;
                color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 100%;
            }



            form {
                max-width: 480px;
                position: absolute;
                top: 65%;
                    Left:35%;
                    margin-bottom: 10%;
            }



        </style>
    </head>

    <body>
          
        <div id="container">
          
            <!--This is a division tag for body container-->
            <div id="body_header">
                <!--This is a division tag for body header-->
                
                <br>

            </div>
            <form action="proposals.php" method="post" enctype="multipart/form-data">
                <h3 style="color:black;text-align: center;">Upload Your Business Proposals</h3>
                <br>
                <label for="name" style="color:black;"><b>Registration No*:</b></label>	
                <input type="text"  name="RN" placeholder="UWU" required>

                <label for="name" style="color:black;"><b>Project Title*:</b></label>
                <input type="text"  name="PT" placeholder="Enter your Project Title" required>


                <b style="color:black;">Brief Description:</b><textarea name="pdescription" placeholder="Brief description about your Business proposal" rows="3" cols="40"></textarea>

                <label for="name" style="color:black;"><b>File Input:</b></label>
                <input type="file" name="proposal">
                <p style="color:black;">Select your project proposal</p>

                <button type="submit">Submit</button>
                <button type="submit">Cancel</button>
                <br>
            </form>
            
        </div>
    </body>

</html>
