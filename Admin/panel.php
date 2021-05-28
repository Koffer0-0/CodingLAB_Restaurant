
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
    <section class = "block2 col-md-4 col-sm-12 p-2 m-md-2 m-sm-2">
        <select name="" id="" class = "form-control">
            <option value=""></option>
        </select>

        <label for="">Category</label><input type = "text" class = "form-control">
        <label for="">Picture</label><input type = "text" class = "form-control">
        <label for="">Title</label><input type = "text" class = "form-control">
        <label for="">Price</label><input type = "text" class = "form-control">
        <label for="">Description</label><input type = "text" class = "form-control">
        <button class = "add btn" type = "button">Add</button>
        <button class = "change btn" type = "button">Change</button>
        <button class = "delete btn" type = "button">Delete</button>
    </section>
    <section class = "block3 col-md-11 col-sm-12 p-2 m-md-3 m-sm-2">
    	just block tupo 
    </section>
</main>
