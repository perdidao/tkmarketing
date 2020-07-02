<form action="<?php bloginfo('url') ?>" method="GET" class="search-form__container">
  <input type="text" name="s" value="<?php echo $_GET['s']; ?>" placeholder="Pesquise por assunto" class="search-form__input">
  <button type="submit" class="search-form__button">
    Buscar
  </button>
</form>
