<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request) {
        //dump($request->file('fileBlob'));
		 $file = $request->file('picture')->store('uploads');
		 
		 return response()->json([
			 'code' => 0,
			 'msg' => '',
			 'data' => [
				 'src' => asset('storage/'.$file),
				 'savepath' => $file
			 ]
		 ]);
        
    	 //$file = $request->file()->store('uploads');
        // $index = $request->chunkIndex;
        // $name= $request->fname;

    	// return response()->json([
    	// 	'chunkIndex' => $index,
    	// 	'initialPreview' => ['<img width=200 height=200 src='.asset('storage/'.$file).' class=file-preview-image /><input value='.$file.' type=hidden name='.$name.'>'],

    	// 	'initialPreviewConfig' => [ 
    	// 		[
	    // 			'type' => 'image',      // check previewTypes (set it to 'other' if you want no content preview)
	    //             'caption' => $request->picture->getClientOriginalName(), // caption
	    //             //'key' => $fileId,       // keys for deleting/reorganizing preview
	    //             //'fileId' => $fileId,    // file identifier
	    //            // 'size' => $request->cover->getClientSize(),    // file size
	    //             //'width' => '500px',
	    //            // 'zoomData' => asset('storage/'.$file), // separate larger zoom data
        //         ]
    	// 	],
    	// 	'append' => true,
    	// ]);
    }
}
