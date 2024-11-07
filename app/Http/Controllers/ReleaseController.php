<?php
namespace App\Http\Controllers;

use App\Http\Resources\ReleaseResource;
use App\Models\Release;
use Illuminate\Http\Request;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Illuminate\Support\Facades\Storage;

class ReleaseController extends Controller
{
    public function uploadFile(Request $request)
    {
        // Create the file receiver
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));

        // Check if the upload is success or has failed
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }

        // Receive the file
        $save = $receiver->receive();

        // Check if the upload has finished
        if ($save->isFinished()) {
            return $this->saveFile($save->getFile(), $request->input('version'));
        }

        // We are in chunk mode, lets send the current progress
        $handler = $save->handler();
        return response()->json([
            "done" => $handler->getPercentageDone(),
            "status" => true
        ]);
    }

    protected function saveFile($file, $version)
    {
        // Generate the file name
        $fileName = "Foody_v{$version}.apk";

        $disk = Storage::disk('public');
        $path = $disk->putFileAs('release', $file, $fileName);

        // Delete the chunked file
        unlink($file->getPathname());

        return response()->json([
            'path' => asset('storage/' . $path),
            'filename' => $fileName,
            'status' => true
        ]);
    }

    public function latest() {
        $release = Release::latest()->first();

        return response()->json([
            'success' => true,
            'status' => 'success',
            'data' => new ReleaseResource($release)
        ]);
    }

    public function download() {
        $release = Release::latest()->first();

        return redirect($release->url);
    }
}