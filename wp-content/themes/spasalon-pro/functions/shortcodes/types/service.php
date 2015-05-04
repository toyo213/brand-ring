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
var ServiceDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ServiceDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertService(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		 
		// set up variables to contain our input values
		var wbr_services = jQuery('#wbr_services option:selected').text();
		
		var wbr_services_slug = jQuery('#wbr_services option:selected').val();
		var wbr_services_style = jQuery('#service_style option:selected').val();
		
	
		 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		
		// setup the output of our shortcode
		var output = '';
		
		output = '&nbsp;';
		output += '[service';
		
		if(wbr_services) {
			output += ' category="'+ wbr_services_slug +'" ';
		}
		if(wbr_services_style) {
			output += ' style="'+ wbr_services_style +'" ';
		}
				
		output += '/]';

		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ServiceDialog.init, ServiceDialog);
 
</script>

<form action="/" method="get" accept-charset="utf-8">
	<table class="table table-bordered table-condensed">
    	<tbody>
     <tr>
				  <td>&nbsp;</td>
				  <td class="lable-all"></td>
			  </tr>
			    <tr>
				   <td class="lable-all" ><?php _e('Select Service Category','sis_spa');?></td>
                    <td class="lable-all"> 
					  <select name="wbr_services" id="wbr_services" size="1">
					
			<?php $categories = get_categories('taxonomy=services_categories&hide_empty=0'); ?>
		
			<?php 
			
		foreach($categories as $category) { 
			?>
			<option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
			<?php } ?>
        </select>  
				     </td>
          
				</tr>
				<tr>
				   <td class="lable-all" ><?php _e('Select Style to display ','sis_spa');?></td>
                    <td class="lable-all"> 
					    <select name="service_style" id="service_style" size="1">
                           <option value="one-column" selected="selected">Service One Column</option>
                           <option value="two-column" >Service Two Column</option>
						</select>  
				     </td>
          
				</tr>
				
    <td>&nbsp;</td>
<td><a href="javascript:ServiceDialog.insert(ServiceDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
</tbody>
</table>
</form>