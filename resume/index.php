<?php
	 function Redirect($url, $permanent = false)
     {
         header('Location: ' . $url, true, $permanent ? 301 : 302);

         exit();
     }

     Redirect('http://shuaizhou.me/resume/Shuai_Zhou_Resume.pdf', false);
?>
