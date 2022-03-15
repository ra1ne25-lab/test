<!-- <div class="container mt-3">
  <h3>Modal Example</h3>
  <p>Click on the button to open the modal.</p>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
  </button>
</div> -->

<!-- The Modal -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Вход</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


      <form action="login.php" method="post">
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Имя пользователя:</label>
                <input type="text" class="form-control" id="username" placeholder="Введите имя пользователя" name="username" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Пароль:</label>
                <input type="password" placeholder="Введите пароль" class="form-control" id="pwd" name="pswd" required>
            </div>
            <div class="d-grid" style="margin-top: 5px;">
                <button type="submit" name="login_btn" class="btn btn-primary btn-block">Войти</button><br>
            </div>
            
            <span>У вас нет аккаунта?
            <a data-bs-dismiss="modal" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#signupModal"><u>Зарегистрируйтесь здесь</u></a>
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
