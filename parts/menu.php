<?php
      // require_once('Database/ShowOOP.php');
      // $obj = new Show();
      // $reciepe = $obj->select_table('recieps');
?>
<div class = "container-fluid menu">
    <div class = "row">
            <div class = "col-9 container">

                  <!--//////////////////////////////////////////////////////////-->
                  <div class = "row catalog" >
                          <ul class="list-group list-group-horizontal ">
                                  <li class="list-group-item" ><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
                                  <li class="list-group-item"><a href="#" data-select="spanish"><b>Spanish cuisine</b></a></li>
                                  <li class="list-group-item"><a href="#" data-select="italian"><b>Italian cuisineө</b></a></li>
                                  <li class="list-group-item"><a href="#" data-select="beverage"><b>Beverage</b></a></li>
                                  <li class="list-group-item"><a href="#" data-select="desert"><b>Desert</b></a></li>
                          </ul>
                  </div>

                  <div class = "row goods-out" style = "border:1px solid black">                  
                  </div>



    <!--//////////////////////////////////////////////////////////-->
                  <div class = "row justify-content-center ">
                    <button type = "button" class = "btn btn-danger">ЗАКАЗАТЬ</button>
                  </div>      
            </div>

<!--//////////////////////////////////////////////////////////-->
          <div class = "col-3 container" style = "border: 1px solid black">
                <div class = "row justify-content-center">
                  <b>ВАША КОРЗИНА</b>
                </div>

                <div class = " row mini-cart" style="border: 1px solid black">
                    <!--minicart-->
                </div>

                <div class = "row align-self-end justify-content-center">
                  <div class=""> ВАШ СЧЕТ </div>
                  
                </div>
          </div>
            <!--//////////////////////////////////////////////////////////-->
    </div>
</div>