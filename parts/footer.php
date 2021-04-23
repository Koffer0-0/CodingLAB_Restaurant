 <div class="container">
    <h3 class="title">Contact <span>us</span></h3>
    
    <div class="col-md-6 contact-right wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s" style = "max-width: 100%">        
      <form action="Database/contacts.php" method="post">
        <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
        <input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
        <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="">Message...</textarea>
        <input type="submit" value="Submit" name = "contacts">
      </form>
    </div>
    <div class="col-md-6 contact-left wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
      <h2>Contacts</h2>
      <p>"We are glad to welcome you to our website! Leave a request and we will definitely call you back."<br>
      There is our contacts:</p>
      <ul class="contact-list">
        <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Astana(Nur-Sultan), Kazakhstan</li>
        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">201708@astanait.edu.kz</a></li>
        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+77074467658</li>
      </ul>
      <ul class="icons-list footer-bottom">
        <li><a href="https://www.youtube.com/watch?v=us7tHgYeKDk" class="use1"><span>Our anthem</span><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://t.me/joinchat/yclpy6yaThY4ZmVi" class="use2"><span>Telegram</span><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="https://outlook.office.com/mail/inbox" class="use3"><span>Outlook</span><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
      </ul>
    </div>            
    <div class="clearfix"> 
    </div>
    <p class="copy-right text-center">&copy; 2020 Name Site. All rights reserved</p>
</div>      