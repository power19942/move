<div class="nav-wrapper">
    <form action="<?php echo home_url( '/' ); ?>">
        <div class="input-field">
            <input value="<?php echo get_search_query() ?>" id="search"
                   placeholder="<?php echo esc_attr_x( 'بحث', 'placeholder' ) ?>"
                   value="<?php echo get_search_query() ?>" name="s"
                    />
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
<!--            <i class="material-icons">close</i>-->
        </div>
    </form>
</div>