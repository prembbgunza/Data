<html>
  <head>
  <title>Upload Folder using PHP </title>
  </head>
  <body>
  <form action="test_addupload_album.php" method="post" enctype="multipart/form-data"> 
  Type Folder Name:<input type="text" name="foldername" /><br/><br/>
  Select Folder to Upload: <input type="file" name="files[]" id="files" acceept="Image/*" multiple directory="" webkitdirectory="" moxdirectory="" /><br/><br/> 
  <input type="Submit" value="Upload" name="upload" />
  </form>
  </body>
  </html>