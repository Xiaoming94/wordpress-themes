<?php
/**
 * The searchform.php of ThemeOne - Wordpress theme by XiaoMing
 * This is the template file for the searchform
 * The base code for this template can be found at (http://buildwpyourself.com/wordpress-search-form-template/)
 *
 * @link https://github.com/Xiaoming94/wordpress-theme/themes/themeone
 * @version 0.1.0
 * @author XiaoMing
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
<div class="input-group">
  <input type="search" class="search-field input-group-field" placeholder="Search …" value="" name="s" title="Search for:" />
  <div class="input-group-button">
    <button type="submt button" class="search-submit button" value="Search" />Search</button>
  </div>
</div>
</form>