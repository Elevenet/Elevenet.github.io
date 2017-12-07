<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	
	<?php 
	
		server {
			listen 80;
			server_name localhost;
			location / {
			root html;
			index index.html index.htm;
			}
			error_page 405 =200 $uri;
			# ...
		}

              if(isset($_POST['text1'])){
                  $name = $_POST['text1'];
                  $handle = fopen('names.txt','a');
                  fwrite($handle,$name."\n");
                  fclose($handle);
            }     

            if(isset($_POST['text2'])){
                  $name1 = $_POST['text2'];
                  $handle1 = fopen('names.txt','a');
                  fwrite($handle1,$name1."\n");
                  fclose($handle1);
            }     

            if(isset($_POST['text3'])){
                  $name2 = $_POST['text3'];
                  $handle2 = fopen('names.txt','a');
                  fwrite($handle2,$name2."\n");
                  fclose($handle2);
            }     

            if(isset($_POST['email'])){
                  $name3 = $_POST['email'];
                  $handle3 = fopen('names.txt','a');
                  fwrite($handle3,$name3."\n");
                  fclose($handle3);
            }     

            if(isset($_POST['comment'])){
                  $name4 = $_POST['comment'];
                  $handle4 = fopen('names.txt','a');
                  fwrite($handle4,$name4."\n");
                  fclose($handle4);
            }     

          ?>

</body>
</html>
