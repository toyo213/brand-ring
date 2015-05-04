<?php
// this file contains the contents of the popup window

/* FindWPConfig - searching for a root of wp */
function FindWPConfig($directory){
	global $confroot;
	foreach(glob($directory."/*") as $f){
		if (basename($f) == 'wp-config.php' ){
			$confroot = str_replace("\\", "/", dirname($f));
			return true;
		}
		if (is_dir($f)){
		$newdir = dirname(dirname($f));
		}
	}
	if (isset($newdir) && $newdir != $directory){
		if (FindWPConfig($newdir)){
			return false;
		}	
	}
	return false;
}
if (!isset($table_prefix)){
	global $confroot;
	FindWPConfig(dirname(dirname(__FILE__)));
	include_once $confroot."/wp-load.php";

}
?>
<script type="text/javascript">
var ProductDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ProductDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertService(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		 
		// set up variables to contain our input values
		var wbr_product = jQuery('#wbr_product option:selected').text();
		
		var wbr_product_slug = jQuery('#wbr_product option:selected').val();
		
		
	
		 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		
		// setup the output of our shortcode
		var output = '';
		
		output = '&nbsp;';
		output += '[product';
		
		if(wbr_product) {
			output += ' category="'+ wbr_product_slug +'" ';
		}
		
				
		output += '/]';

		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ProductDialog.init, ProductDialog);
 
</script>

<form action="/" method="get" accept-charset="utf-8">
	<table class="table table-bordered table-condensed">
    	<tbody>
     <tr>
				  <td>&nbsp;</td>
				  <td class="lable-all"></td>
			  </tr>
			    <tr>
				   <td class="lable-all" ><?php _e('Select Product Category','sis_spa');?></td>
                    <td class="lable-all"> 
					  <select name="wbr_product" id="wbr_product" size="1">
					<?php 
					$categories = get_categories('taxonomy=product_categories&hide_empty=0'); ?>
			
		
			<?php 
			
		foreach($categories as $category) { 
			?>
			<option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
			<?php } ?>
        </select>  
				     </td>
          
				</tr>
				
				
    <td>&nbsp;</td>
<td><a href="javascript:ProductDialog.insert(ProductDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
</tbody>
</table>
</form>