<?php

// Add hooks
Action::add('admin_header', 'SimpleMDE::headers');
Action::add('admin_post_template', 'SimpleMDE::footer');
/**
 * SimpleMDE Class
 */
class SimpleMDE
{
    /**
     * Set editor headers
     */
    public static function headers() 
    {
        echo ('
		<link rel="stylesheet" type="text/css" href="'.Option::get('siteurl').'/plugins/simplemde/simplemde/simplemde.min.css" />
		<link rel="stylesheet" type="text/css" href="'.Option::get('siteurl').'/public/assets/fonts/font-awesome/css/font-awesome.min.css" />
		');
    }
	
    public static function footer() 
    {
        if (Request::get('id') == 'pages' || Request::get('id') == 'blocks') { 
			echo ('
			<script type="text/javascript" src="'.Option::get('siteurl').'/plugins/simplemde/simplemde/simplemde.min.js"></script>
			
			<script>
				new SimpleMDE({
					element: document.getElementById("editor_area"),
					spellChecker: false,
					status: false,
					toolbarTips: true,
					toolbarGuideIcon: true,
					autofocus: false,
					lineWrapping: true,
					autoDownloadFontAwesome: false,
					indentWithTabs: true,
					tabSize: 2,
					spellChecker: false,
					autosave: {
						enabled: false,
						uniqueId: "new-page",
						delay: 1000,
					},
					toolbar: ["bold", "italic", "heading-1", "heading-2", "heading-3", "|", "quote", "unordered-list", "table", "|", "link", "image", "code", "horizontal-rule", "|", "preview", "side-by-side", "fullscreen", "guide"]
			
				});
			</script>
			');
		}
    }	

}
