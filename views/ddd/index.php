<?php cpm_get_header( __( 'DDD', 'cpm' ), $project_id ); ?>


<div class="ddd">
<pre>
<?php
    print_r($_SERVER);
?>
</div>
</pre>
<?php

if ( empty( $attachments ) ) {
    cpm_blank_template( 'ddd', $project_id );
}
?>

