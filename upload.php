<?php

require_once __DIR__ . '/vendor/autoload.php';

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use Kunnu\Dropbox\DropboxFile;
use Kunnu\Dropbox\Exceptions\DropboxClientException;

//Configure Dropbox Application
$app = new DropboxApp("DROPBOX_API_ID", "DROPBOX_API_SECRET", "DROPBOX_API_KEY");

//Configure Dropbox service
$dropbox = new Dropbox($app);

// Check if file was uploaded
if (isset($_FILES["file"])) {
    // File to Upload
    $file = $_FILES['file'];

    // File Path
    $fileName = $file['name'];
    $filePath = $file['tmp_name'];

    try {
        // Create Dropbox File from Path
        $dropboxFile = new DropboxFile($filePath);

        // Upload the file to Dropbox
        $uploadedFile = $dropbox->upload($dropboxFile, "/" . $fileName, ['autorename' => true]);

        // File Uploaded
        echo $uploadedFile->getPathDisplay();
    } catch (DropboxClientException $e) {
        echo $e->getMessage();
    }
}
