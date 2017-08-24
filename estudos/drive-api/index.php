<?php
$fileMetadata = new Google_Service_Drive_DriveFile(array( 
  'title' => 'photo.jpeg'));
$content = file_get_contents('C:\Users\Public\Pictures\Sample Pictures\photo.jpg');
$file = $driveService->files->insert($fileMetadata, array(
  'data' => $content,
  'mimeType' => 'image/jpeg',
  'uploadType' => 'multipart',
  'fields' => 'id'));
printf("File ID: %s\n", $file->id);