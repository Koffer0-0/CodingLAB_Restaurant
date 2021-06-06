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

                  <div class = "goods-out-main row menuScroll">
                  </div>
         <!--//////////////////////////////////////////////////////////-->
                  <div class="row menuOrder ">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#menuModal">ЗАКАЗАТЬ</button>

                        <!-- модальное окно-->
                            <div id="menuModal" class="modal fade" > 
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                            <div class="modal-header">
                                              <h4 class="modal-title">ФОРМА ЗАКАЗА</h4>
                                            </div>
                                 
                                            <div class="modal-body">
                                                    <form class="form">
                                                      <!------------------------------------------->
                                                      <div class="form_radio_group">
                                                        <div class="form_radio_group-item">
                                                          <input type="radio" name="formRadio" id="delivery" value="delivery" checked>
                                                          <label for="delivery">Доставка</label>
                                                        </div>
                                                        <div class="form_radio_group-item">
                                                          <input type="radio" name="formRadio" id="pickup" value="pickup">
                                                          <label for="pickup">Самовызов</label>
                                                        </div>
                                                      </div>
                                                      <!------------------------------------------->
                                                      <div class="form-group">
                                                          <label for="name">Name</label>
                                                          <input type="name" class="form-control" id="name" placeholder="Ivan">
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="email">Email</label>
                                                          <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                                      </div>
                                                      <!------------------------------------------->
                                                      <div class="form-group" id="deliveryBlock1">
                                                          <label for="phone">Phone</label>
                                                          <input type="phone" class="form-control" id="phone" placeholder="87000000000">
                                                      </div>
                                                      <div class="form-group" id="deliveryBlock2">
                                                          <label for="address">Address</label>
                                                          <textarea class="form-control" id="address" rows="3"></textarea>
                                                      </div>
                                                      <div class="form-group" id="pickupBlock1">
                                                          <label for="">Вы можите забрать свои заказ по адресу:<br>Улица Пушника, дом-7, квартира-13</label>
                                                      </div>
                                                    </form>
                                            </div>
                                                            
                                            <div class="modal-footer">
                                                <button class="menuSendModal" data-dismiss="modal">Отправить</button>
                                                <button data-dismiss="modal">Отмена</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!--конец модального окна-->


                  </div>      
            </div>

<!--//////////////////////////////////////////////////////////-->
          <div class="col-3 container" style="border: 1px solid black">
                <div class = "row basketLegend">
                    <p>ВАША КОРЗИНА</p>
                    <button><img class="deleteAll-to-cart" src="images/delete.png"></button>
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
