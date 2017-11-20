<?php 
 if (isset($_POST['submit'])) {
 	$name = $_POST['name'];
 	$contact_no = $_POST['contact_no'];
 	$from = $_POST['email'];
 	$company = $_POST['company'];
 	$message = $_POST['message'];
 	

                $to = "delivapart@gmail.com";


                $subject = "Message From Delivapart";

                $htmlContent = '<html><head><title>Delivapart</title></head>
                <body>
                  <h1>Welcome Mr/Mrs/Ms - '.$name.'</h1>
                  <table border="0" style="border:1px solid #4ae;padding:10px;">
                  <tr style="background-color: #e0e0e0;">
                      <td style="padding:10px;">Contact Number</td>
                      <td style="padding:10px;">'. $contact_no .'</td>
                  </tr>
                  <tr style="">
                      <td style="padding:10px;">Company Name</td>
                      <td style="padding:10px;">'. $company .'</td>
                  </tr>
                  <tr style="background-color: #e0e0e0;">
                      <td style="padding:10px;">Message</td>
                      <td style="padding:10px;">'. $message .'</td>
                  </tr>
                  
                  
                  



                  </table>
                </body>
                </html>';

                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // Additional headers
                $headers .= 'From: '.$from . "\r\n";
                

                // Send email
                mail($to,$subject,$htmlContent,$headers);

                     
                    //end


                echo "<script>alert('Your Message Has been Successfully send...')</script>";
                echo "<script>window.open('index.html','_self')</script>";
 }

 ?>