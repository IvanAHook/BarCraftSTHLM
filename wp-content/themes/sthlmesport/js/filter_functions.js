jQuery(document).ready( function($) {

    $('.filter-icon').bind('click', function() {
        var filter = $(this).attr('name');
        setFilter(filter);
    });

    function setFilter(filter) {
        var current_filter = getCookie('filter');

        if (current_filter.indexOf(filter) == -1) { // not pretty but no time to fix now
            if (current_filter == '') {
                document.cookie='filter=' + filter + ',';
            } else {
                document.cookie='filter=' + getCookie('filter') + filter + ',';
            }
        } else {
            document.cookie='filter=' + current_filter.replace(filter + ',', '');
        }
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name)==0) return c.substring(name.length,c.length);
        }
        return '';
    }

});

