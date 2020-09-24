<?php
	$fh = fopen("testlist.txt",'w') or die ('falled to write the text');
	$text = <<<_END
	 ajflsdakjflakdsjflkdf
	 afkljadslkfjasdlkfjdslkf
_END;
	 fwrite($fh,$text) or die ('failed to write the text');
	 fclose($fh);
	 ?>
	<?php
	 $fh = fopen("testlist.txt",'r') or die ('falled to write the text');
	 
	 while(1)
	 {
	 $line=fgets($fh);
	 echo "$line<br/>";
	   if($line='null')
	   {
		 break;
	   }
		   
	 }
	 fclose($fh);
	 
	 ?>
	