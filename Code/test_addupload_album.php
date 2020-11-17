<?php
  if(isset($_POST['upload']))
  {
  	if($_POST['foldername'] != "")
  	{
  		$foldername=$_POST['foldername'];
  		if(!is_dir($foldername))
  			mkdir($foldername);
  		foreach($_FILES['files']['name'] as $i => $name)
		{
  			if(!is_dir($name))
  			{
  				mkdir($foldername."/".$name);
  				if(strlen($_FILES['files']['name'][$i]) > 1)
  				{
  					move_uploaded_file($_FILES['files']['tmp_name'][$i]."/".$name);
  				}
  			}
  			else
  			{
  				if(strlen($_FILES['files']['name'][$i]) > 1)
  				{
					move_uploaded_file($_FILES['files']['tmp_name'][$i]."/".$name);
  				}
  			}
  		}
  		echo "Folder is successfully uploaded";
  	}
  	else
  		echo "Upload folder name is empty";
  }
  ?>