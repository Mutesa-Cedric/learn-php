
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Roboto:wght@100&display=swap');
        body{
            margin: 0;
            padding: 0;
            background: #f1f1f1;
            
            font-family: 'Roboto', sans-serif;
        }
        form{
            width: 800px;
            height: 60vh;
            margin: 100px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            
            font-size: x-large;
            font-weight: 900;
        }

        #submit{
            border: 1px solid black;
            text-align: black;
            background-color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: x-large;
            margin:20px auto;
        }

        h1{
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h1>
            Select image to upload:
        </h1>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input id="submit" type="submit" value="Upload Image" name="submit">
      </form>
</body>
</html>