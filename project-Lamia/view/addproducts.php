<!DOCTYPE html>
<html land="en">
<head>
    <meta charset="UTF=8">
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../asset/style.css" />
    <title>Document</title>
</head>
<style>
    h1{
        text-align:center;
        font-size:10em;
    }
</style>
<body>
 <section id="content mt-5 bg white">
    <div class="content-blog ">
        <div class ="container">
            <form method="post" action="../controller/upload.php" entype="mutipart/form.data">
                <div class ="Ptoductname"> Product Name </label>
                <Input type = "text" class="form.control" name="productname" id="productname" placeholder="productname">
    </div>
    <div class ="form.group">
        <label for = "productcategory"> Product Category </label>
        <select class ="form.control" id="productcategory" name="productcategory">
            <option value="">---SELECT CATEGORY---</option>

            <option value="Option">Options</option>
            <option value="Option">Options</option>
            <option value="Option">Options</option>
            <option value="Option">Options</option>
            <option value="Option">Options</option>
    </select>
    </div>
      <div class="form.group">
        <label for="productprice"> Product Price </label>
        <Input type = "text" class="form.control" name="productprice" id="productprice" placeholder="productprice">
        <p class="help.block"> Only jpg/png are allowed </p>
    </div>
        <input type="file" name="myfile" />
        <input type="submit" name="submit" value="Submit" /> 
    </form|>
</div>
</div>
</section>
</div>
    