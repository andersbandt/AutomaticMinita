<html>
 <head>
 <meta name="viewport" content="width=device-width" />
 <title>LED Control</title>
 </head>
         <body>
         LED Control:
         <form method="get" action="relay-control.php">
                 <input type="submit" value="ON" name="on">
                 <input type="submit" value="OFF" name="off">
                 <input type="text" name="hour">
                 <input type="text" name="minute">
                 <input type="submit" value="OFF" name="final">
         </form>
         <?php
         $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
         if(isset($_GET['final'])){
                 $hour = $_GET['hour'];
                 $minute = $_GET['minute']; 
          
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
                echo "LED is on";
         }
         if(isset($_GET['off'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
                 echo "LED is off";
         }
         ?>
         </body>
 </html>
