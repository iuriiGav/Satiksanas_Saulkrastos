<?php 

function custom_length_excerpt($string, $length, $link_full_article)
{
  if(strlen($string)<=$length)
  {
    echo $string;
  }
  else
  {
    $shorter_string = substr($string,0,$length) . '...' ?>
<?php   echo $shorter_string ?>
<br>

<?php 
        $concerts_page_ID = ig_get_page_ID_by_template_name('page-concerts')[0];
        $read_more = get_field('post_concerts_read_more_button_label', $concerts_page_ID);
?>
    <a class="btn btn-no-border btn-no-border--no-padding-left-yes-p-top" href="<?php echo $link_full_article ?>"> <?php echo $read_more?> </a>
  <?php }
}
?>