<div class="container-fluid">
    <div class="row">
            <div class="col-9 container">

        <!--//////////////////////////////////////////////////////////-->
                  <div class = "row menuCatalog" >
                          <ul class="list-group list-group-horizontal ">
                                  <li class="list-group-item"><a href="#" data-filter="all"><b>ALL</b></a></li>
                                  <li class="list-group-item"><a href="#" data-filter="spanish"><b>Spanish cuisine</b></a></li>
                                  <li class="list-group-item"><a href="#" data-filter="italian"><b>Italian cuisineө</b></a></li>
                                  <li class="list-group-item"><a href="#" data-filter="beverage"><b>Beverage</b></a></li>
                                  <li class="list-group-item"><a href="#" data-filter="desert"><b>Desert</b></a></li>
                          </ul>
                  </div>

                  <div class = "goods-out-main row menuScroll " >
                  </div>




         <!--//////////////////////////////////////////////////////////-->
                  <div class="row menuOrder ">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#menuModal">ЗАКАЗАТЬ</button>

                        <div id="menuModal" class="modal fade" >
                          <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header"><h4 class="modal-title">ФОРМА ЗАКАЗА</h4></div>
                                <div class="modal-body">
                                  <div class="menuButton">
                                    <p>Имя: <input type="text" id="name"></p>
                                    <p>email: <input type="text" id="email"></p>
                                    <p>Телефон: <input type="text" id="phone"></p>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button class="menuSendModal" data-dismiss="modal">Отправить</button>
                                  <button data-dismiss="modal">Отмена</button>
                                </div>

                            </div>
                          </div>
                        </div>
                        <!--тестовая версия красивой готовый формы не удалять-->
                        <!--<div id="menuModal" class="modal fade" > 
                          <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header"><h4 class="modal-title">ФОРМА ЗАКАЗА</h4></div>
                                <div class="modal-body">
                                  <form>
                                    
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button class="menuSendModal" data-dismiss="modal">Отправить</button>
                                  <button data-dismiss="modal">Отмена</button>
                                </div>

                            </div>
                          </div>
                        </div>-->


                  </div>      
            </div>

<!--//////////////////////////////////////////////////////////-->
          <div class="col-3 container" style="border: 1px solid black">
                <div class = "row basketLegend">
                    <h3>ВАША КОРЗИНА</h3>
                    <button style="margin-bottom:9px;margin-left: 10px"><img class="deleteAll-to-cart" data-id="${key}" src="images/delete.png"></button>
                </div>


                <div class="row basketCart " >
                      <div class="mini-cart"></div>
                </div>





                <div class="basketBill">
                  <p>ВАШ СЧЕТ</p>
                  <p>К оплате: ??? tg</p>
                    
                </div>
          </div>
<!--//////////////////////////////////////////////////////////-->
    </div>
</div>
