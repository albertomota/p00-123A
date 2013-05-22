<?php
/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php 
//$imagethumburl = file_create_url($row->_field_data['uid']['entity']->field_alternative_profile_image['und'][0]['uri']);
$imageUri = $row->_field_data['uid']['entity']->field_alternative_profile_image;
//$imageFile = image_style_url('profile', $imageUri['und'][0]['uri']);

//var_dump($imageUri);
//print_r($row->_field_data)
//print_r($imageUri) ; 

?>

<?php
//echo '<pre>' 
//print_r($row);
//echo'</pre>'
?>

<div class="pentagon presentatorThumbnail">
        <?php 
            if (isset($imageUri['und'])) { 
            $imageFile = image_style_url('profile', $imageUri['und'][0]['uri']);    ?>
        <img class="profilePicture" src="<?php print $imageFile;?>" alt="profile picture"/>    
	
        <?php    };
        ?>        
        <img class="pentagon-attendee-even" src="<?php print $directory; ?>/_images/pentagon-attendee-even.png"/>
        <img class="pentagon-attendee-odd" src="<?php print $directory; ?>/_images/pentagon-attendee-odd.png"/>
</div>