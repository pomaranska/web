<div id="menulg"> 
  <div id="for_larger_screens">
    <div id="logo"><img src="img/logo3.png"/></div>
    <div id="menu2"> 
      <div class="menu">
        <select onchange="location = this.value;">
          <option value="index.php">Home</option>
          <option value="index.php?value=dolacz">Zarejestruj się</option>
          <option value="index.php">Strona główna</option>
        </select></div>
      <div class="menu">
        <select onchange="location = this.value;">
          <option value="#container">Sklep</option>
          <option value="index.php?value=damskie">Buty damskie</option>
          <option value="index.php?value=meskie">Buty męskie</option>
        </select></div>
    </div>
          <div id="logOUT">
      <form id="logowanie" action="login.php" method="post">
        <input type="text" placeholder="LOGIN" name="login">
        <input type="password" placeholder="HASŁO" name="password">
        <input type="submit" name="ZALOGUJ" value="ZALOGUJ">
      </form>
    </div>
  
  </div>


</div>       

  <div id="for_smaller_screens">
  <div id="menu">
    <div class="logo"><img src="img/logo3.png"/></div></div>
    
    <select onchange="location = this.value;">
        <option value="index.php">Home</option>
        <option value="index.php?value=dolacz">Zarejestruj się</option>
        <option value="index.php">Strona główna</option>
        <option value="index.php?value=damskie">Buty damskie</option>
        <option value="index.php?value=meskie">Buty męskie</option>
    </select>

  
      <div id="logOUT">
      <form id="logowanie" action="login.php" method="post">
        <input type="text" placeholder="LOGIN" name="login">
        <input type="password" placeholder="HASŁO" name="password">
        <input type="submit" name="ZALOGUJ" value="ZALOGUJ">
      </form>
    </div>
    </div>