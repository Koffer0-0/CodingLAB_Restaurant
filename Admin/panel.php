
<main class = "row m-3 py-3">
    <section class = "block1 col-md-7 col-sm-12 p-2 m-md-2 m-sm-2 ">
     <?php
        require_once ('../Database/ShowOOP.php');
        $obj = new Show();
        $reciepe = $obj->select_table('recieps');
        for ($i = 0; $i < count($reciepe); $i++) {
     ?>
       <section class = "item">
           <tr>
               <td> <?php echo $reciepe[$i][3] ?></td>
           </tr>
       </section>

     <?php } ?>
    </section>

    <section class = "block2  col-md-4 col-sm-12 p-2 m-md-2 m-sm-2">
        <div class = "goods-out"></div>
        <label for="">Category</label><input type = "text" class = "form-control" id = "category">
        <label for="">Picture</label><input type = "text" class = "form-control" id = "pic">
        <label for="">Title</label><input type = "text" class = "form-control" id = "title">
        <label for="">Price</label><input type = "text" class = "form-control" id = "price">
        <label for="">Description</label><input type = "text" class = "form-control" id = "descr">
        <input type = "hidden" id = "gid">
        <button class = "add btn" type="submit">Add</button>
        <button class = "change btn">Change</button>
        <button class = "delete btn">Delete</button>
    </section>
    <section class = "block3 col-md-11 col-sm-12 p-2 m-md-3 m-sm-2">
    	just block tupo
    </section>
</main>

<script> src = "admin.js"</script>