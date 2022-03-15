<!-- <div class="container mt-3">
  <h3>Modal Example</h3>
  <p>Click on the button to open the modal.</p>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
  </button>
</div> -->

<!-- The Modal -->
<div class="modal fade" id="signupModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Зарегистрироваться</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="registration.php" method="post">
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Имя пользователя:</label>
                <input type="text" class="form-control" id="username" placeholder="Введите имя пользователя" name="username">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Фамилия:</label>
                <input type="text" class="form-control" id="surname" placeholder="Введите фамилию" name="surname">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Имя:</label>
                <input type="text" class="form-control" id="name" placeholder="Введите имя" name="name" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Отчество:</label>
                <input type="text" class="form-control" id="patronymic" placeholder="Введите отчество" name="patronymic" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Введите Email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">№ телефона:</label>
                <input type="number" class="form-control" id="phno" placeholder="Введите +375(хх)ххххххх" name="phno" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Пароль:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Введите пароль" name="pswd" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Повторите пароль:</label>
                <input type="password" class="form-control" id="cnfrm_pwd" placeholder="Введите пароль ещё раз" name="cnfrm_pswd" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block" name="register_btn">Зарегистрироваться</button><br>
            </div>
            <span>Уже есть аккаунт? 
            <a data-bs-dismiss="modal" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#loginModal"><u>Войти здесь</u></a>
            </span>
        </form>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>
<script src="js\jquery.min.js"></script>