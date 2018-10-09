<?php 
    // include composer autoload
    require 'vendor/autoload.php';
    // import the Intervention Image Manager Class
    use Intervention\Image\ImageManager;


    //outputs php info
    // phpinfo();
    //die();
    $errors = array();

    if (isset($_FILES["image"])) {
        $fileSize = $_FILES["image"]["size"];
        $fileTmp = $_FILES["image"]["tmp_name"];
        $fileType = $_FILES["image"]["type"];

        // var_dump($fileSize);
        // var_dump($fileTmp);
        // var_dump($fileType);

        //Check file size
        if ($fileSize > 5000000) {
            array_push($errors, "File is too large - must be under 5mb");
        }

        //Check file type
        $validExtensions = array("jpeg", "jpg", "png");
        //Splits file name into array when finds a . 
        $filenameArray = explode(".", $_FILES["image"]["name"]);

        //This takes the end of filenameArray (file extension) and converts it to lower case
        $fileExt = strtolower(end($filenameArray));

        //First value is what you're searching for, second is where you're searching - loops through automatically
        if (in_array($fileExt, $validExtensions) === false){
            array_push($errors, "Incorrect file type - please upload a jpg or png");
        }
        
        if (empty($errors)){
            $destination = "images/uploads";
            //Check if destination exists and make it if it doesn't
            if (!is_dir($destination)) {
                //needs / on end to ensure it's not a file, 0777 is default with widest access
                mkdir("images/uploads/", 0777, true);
            }

            //give the uploaded file a new unique name
            $newFilename = uniqid() . "." . $fileExt;
            //put it in the uploads folder - commented out as is throwing imagemanager errors
            // move_uploaded_file($fileTmp, $destination . "/.$newFilename");

            //requires the image intervention
            $manager = new ImageManager();

            //rewrite to stop file not found error
            $mainImage = $manager->make($fileTmp);
            $mainImage->save($destination."/".$newFilename, 100);

            //Create thumbnail folder if it doesn't exist
            $thumbnailDestination = "images/uploads/thumbnails";
            if (!is_dir($thumbnailDestination)){
                mkdir("images/uploads/thumbnails/", 0777, true);
            }

            //make thumbnailImagr from fileTmp
            $thumbnailImage = $manager->make($fileTmp);
            //resize image but prevent upsizing, and keep aspect ratio
            $thumbnailImage->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            //save thumbnail image in the destination with a new filename, and set quality
            $thumbnailImage->save($thumbnailDestination."/".$newFilename, 100);


        }

        // die();

    } else {
        array_push($errors, "File not found, please upload an image");
        // var_dump($errors);
    }

    $page = "imageUpload";
    require "templates/meta.php";
    include "templates/header.php";
?>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
            <h1>Image upload page</h1>
             
            <form method="post" action="imageUpload.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Upload your image</label>
                    <input type="file" class="form-control" name="image" placeholder="Upload image file">
                </div>
                <button type="submit" class="btn btn-lg btn-default">Submit</button>
            </form>
        </div>
    </div>
    </div>
    </div>
<?php 
    include "templates/footer.php";
?>