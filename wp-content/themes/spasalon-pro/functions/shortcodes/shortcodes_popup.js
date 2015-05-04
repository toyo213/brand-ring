(function() {
	
	tinymce.create('tinymce.plugins.webr_shortcodesPlugin', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mcespa_shortcodes', function() {
				ed.windowManager.open({
					file : url + '/shortcodes_iframe.php', // file that contains HTML for our modal window
					width : 600 + parseInt(ed.getLang('spa_shortcodes.delta_width', 0)), // size of our window
					height : 700 + parseInt(ed.getLang('spa_shortcodes.delta_height', 0)), // size of our window
					inline : 1
				}, {
					plugin_url : url
				});
			});
			 
			
			ed.addButton('spa_shortcodes', {title : 'Spa Shortcode', cmd : 'mcespa_shortcodes', image: url + '/images/shortcodes.png' });
		},
		 
		getInfo : function() {
			return {
				longname : 'Insert Shortcode',
				author : 'webriti',
				authorurl : 'http://webriti.com',
				infourl : 'http://webriti.com',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});
	 
	// Register plugin
	
	// second parameter must match the first parameter of the tinymce.create() function above
	tinymce.PluginManager.add('spa_shortcodes', tinymce.plugins.webr_shortcodesPlugin);

})();