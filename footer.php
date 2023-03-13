<section class="cta">
    <div class="bg-grey section-cta">
      <img src="img/cta-img.png" alt="cta-img" class="cta-img">
      <div class="cta-form-wrapper container">
        <form action="handler.php" method="POST" class="cta-form">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input 
              id="username" 
              type="text" 
              name="username"
              class="input" 
              placeholder=" "
              required
              maxlenght="100"
              >
              <label class="input-label" for="username">Имя</label>
            </div>
            <div class="input-group">
              <input 
              id="user-phone"
              type="tel"
              name="userphone"
              class="input" 
              placeholder=" ">
              <label class="input-label" for="user-phone">Телефон</label>
            </div>
          </div>

          <div class="cta-form-footer">
            <button type="submit" class="btn cta-btn">Отправить заявку</button>
            <div class="notify">
              <img src="img/notify.svg" alt="notification" class="notify-img">
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
                информации!
              </p>
            </div>

          </div>

        </form>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <img src="img/icons/logo-dark.svg" alt="" class="footer-logo">
        <a href="tel:+74996861014" class="footer-top-phone">+7 999 686-10-14</a>
        <div class="footer-top-info-item footer-top-info-item-address">
          <img src="img/icons/geo.svg" alt="geo">
          <span>г. Москва, Холодильный пер. 4к1с8</span>
        </div>
        <div class="footer-top-info-item">
          <img src="img/icons/mail.svg" alt="mail">
          <span>a.dragunov@tdaliance.ru</span>
        </div>
        <div class="footer-social-media">
          <a class="footer-social-media-link" href="#">
            <img src="img/icons/vk.svg" alt="vk">
          </a>
          <a class="footer-social-media-link" href="#">
            <img src="img/icons/inst.svg" alt="ins">
          </a>
        </div>
      </div>
    </div>
  </div>
  <hr class="footer-separator">
  <div class="container">
    <div class="footer-bottom">
      
      <div class="footer-menu-wrapper">
        <p class="footer-menu-title">Контрактное производство</p>
        <ul class="footer-menu-list footer-menu-list-column">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автомобильная химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Бытовая химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Косметическая продукция</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
          </li>
        </ul>
      </div>

      <div class="footer-menu-wrapper">
        <p class="footer-menu-title">Собственные марки</p>
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AP</a>
          </li>
      </div>

      <div class="footer-menu-wrapper">
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link column-3">О компании</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link column-3">Новости</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link column-3">Контакты</a>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <hr class="footer-separator">

  <div class="container">
    <div class="footer-legacy">
      <p class="copyright">&copy; <?php echo date(y)?> «Aliance Production». Все права защищены.</p>
      <a href="#" class="policy">Политика конфиденциальности</a>
      <div class="made-in">
        <span class="made-in-text">Сделано в</span>
        <img src="img/made-in.svg" alt="" class="made-in-img">
      </div>
    </div>
  </div>
  </footer>

  <div class="modal">
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a href="#" class="modal-close" data-toggle="modal">
        <img class="modal-close-icon" src="img/close.svg" alt="close">
      </a>
      <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
      <form action="handler.php" method="POST" class="modal-form">
        
        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group modal-input-group">
            <input 
            id="modal-username" 
            type="text" 
            class="input modal-input" 
            placeholder=" "
            name="username">
            <label class="input-label modal-input-label" for="modal-username">Имя</label>
          </div>
          <div class="input-group modal-input-group">
            <input id="modal-user-phone" 
            type="tel" 
            class="input modal-input" 
            placeholder=" "
            name="userphone"
            >
            <label class="input-label modal-input-label" for="modal-user-phone">Телефон</label>
          </div>
        </div>

        <div class="modal-form-footer">
          <button type="submit" class="btn modal-form-btn">Отправить заявку</button>
          <div class="notify">
            <img src="img/notify.svg" alt="notification" class="notify-img">
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
              информации!
            </p>
          </div>

        </div>

      </form>
    </div>
  </div>


  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/just-validate.production.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>