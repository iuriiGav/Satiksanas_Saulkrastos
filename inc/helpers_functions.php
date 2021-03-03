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
    <a class="btn btn-no-border btn-no-border--no-padding-left-yes-p-top" href="<?php echo $link_full_article ?>"> Read more </a>
  <?php }
}
?>