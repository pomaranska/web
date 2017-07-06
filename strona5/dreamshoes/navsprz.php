<div id="menulg"> 
  <div id="for_larger_screens">
    <div id="logo"><img src="img/logo3.png"></div>
    <div id="menu2"> 
      <div class="menu">
        <select onchange="location = this.value;">
          <option value="sprzedajacy.php">Home</option>
          <option value="sprzedajacy.php">Strona główna</option>
        </select></div>
      <div class="menu">
        <select onchange="location = this.value;">
          <option value="sprzedajacy.php">Sklep</option>
          <option value="sprzedajacy.php?value=damskie">Buty damskie</option>
          <option value="sprzedajacy.php?value=meskie">Buty męskie</option>
        </select></div>
      <div class="menu">
        <select onchange="location = this.value;">
          <option>Twój profil</option>
          <option value="sprzedajacy.php?value=dodane">Dodane produkty</option>          
          <option value="sprzedajacy.php?value=dodaj">Dodaj produkt</option>
          <option value="logout.php">Wyloguj</option>
      </select></div>
    </div>  
  </div>
  </div>     

  <div id="for_smaller_screens">
  <div id="menu">
    <div class="logo"><img src="img/logo3.png"/></div></div>
    
    <select onchange="location = this.value;">
        <option value="sprzedajacy.php">Home</option>
        <option value="sprzedajacy.php?value=dodane">Dodane produkty</option>          
        <option value="sprzedajacy.php?value=dodaj">Dodaj produkt</option>
        <option value="sprzedajacy.php?value=damskie">Buty damskie</option>
        <option value="sprzedajacy.php?value=meskie">Buty męskie</option>
        <option value="logout.php">Wyloguj</option>
    </select>
  </div>