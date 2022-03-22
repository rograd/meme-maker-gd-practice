<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      *, *::before, *::after {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      body {
         background-color: #eee;
      }
   </style>
</head>
<body>
   <form action="generate.php" method="POST" enctype="multipart/form-data" autocomplete="off">
      <input type="file" name="image">
      <input type="text" name="caption" placeholder="Caption">
      <button type="submit">Generate!</button>
   </form>
</body>
</html>