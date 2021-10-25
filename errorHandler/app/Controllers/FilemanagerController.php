<?php
namespace App\Controllers;

class FilemanagerController
{
   
    public function index()
    {
        $files = scandir(__DIR__ . '/../../storage/filemanager');
        $files = array_filter($files, function($item) {
            return (!in_array($item, ['.', '..']));
        });

        return renderView('filemanager', ['files' => $files]);
        
    }

    public function upload()
    {
        uploadFiles('image', 'filemanager');
        redirect('/filemanager');
    }

    public function delete()
    {
        $path = __DIR__ . '/../../storage/filemanager';
        unlink($path . $_POST['file']);
        redirect('/filemanager');
    }
}