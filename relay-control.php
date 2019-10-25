<html>
 <head>
 <meta name="viewport" content="width=device-width" />
 <title>LED Control</title>
 </head>
         <body>
         LED Control:
         <form method="get" action="relay-control.php">
                 <input type="submit" value="Outtake On" name="outtake_on">
                 <input type="submit" value="Outtake Off" name="outtake_off">
                 <input type="submit" value="Intake On" name="intake_on">
                 <input type="submit" value="Intake Off" name="intake_off">
                 <input type="text" name="hour">
                 <input type="text" name="minute">
                 <input type="submit" value="OFF" name="submit">
         </form>
         <?php
         $setmode17 = shell_exec("");
         if(isset($_GET['final'])){
                 $hour = $_GET['hour'];
                 $minute = $_GET['minute']; 
                 $output = shell_exec('crontab -l');
                 $command = $minute + $hour + '* * * /* coffee.sh file path';
                 file_put_contents('/tmp/crontab.txt', $output.$command.PHP_EOL);
                 echo exec('crontab /tmp/crontab.txt');
         }
         if(isset($_GET['intake_on'])){
                 $gpio_on = shell_exec("./Code/grow/intake_on.sh");
                echo "Intake Fan is On";
         }
         if(isset($_GET['intake_off'])){
                 $gpio_off = shell_exec(".Code/grow/intake_off.sh");
                 echo "Intake Fan is Off";
         }
         if(isset($_GET['outtake_on'])){
                 $gpio_on = shell_exec("./Code/grow/outtake_on.sh");
                echo "Intake Fan is On";
         }
         if(isset($_GET['outtake_off'])){
                 $gpio_off = shell_exec(".Code/grow/outtake_off.sh");
                 echo "Intake Fan is Off";
         }
         ?>
         </body>
 </html>
