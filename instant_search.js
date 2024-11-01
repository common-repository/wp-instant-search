jQuery(document).ready(function() {
	jQuery("input[id='s']").attr("autocomplete", "off");	
    jQuery("input[id='s']").each(function() {
        jQuery(this).suggest("../wp-content/plugins/wp-instant-search/search.php?action=instant-search", {
            delay: 300,
            minchars: 3,
            multiple: false,
            resultsClass: 'instant-search-results',
            selectClass: 'instant-search-select',
            matchClass: 'instant-search-match'
        });
    });
});