<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<form role="search" action="<?php bloginfo("home");?>" method="get" >
    <div class="input-group stylish-input-group">
        <input type="text" class="form-control" name="s" id="s" value="<?php _e('Nhập từ khóa cần tìm');?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
        
        <!-- <span class="input-group-addon">
            <button type="submit">
                <span class="fa fa-search"></span>
            </button>  
        </span> -->
    </div>
    <button type="submit" class="material-icons">
search
</button>
</form>
<!-- <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form> -->