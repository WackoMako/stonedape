require.config({
	shim: {
		'vendor/bootstrap.min': {
			deps: ['jquery']
		},
		'vendor/jquery.form.min': {
			deps: ['jquery']
		},
		'vendor/load-posts': {
			deps: ['jquery']
		}
	},
	paths: {
		jquery: 'vendor/jquery.min'
	}
});
 
require(['vendor/jquery.min', 'vendor/bootstrap.min'], function() {
	
	
	var path = document.location.pathname.replace(global.baseUrl, ""),
	explode = path.split('/');
	
	if ( explode[0] == 'index.php') {
        // Remove index.php crap
		explode.shift();
    }

    if (typeof explode[0] == 'undefined' || explode[0] == '') {
        var page = explode[1];
    } else {
        var page = explode[0];
    }
    
	var route = [
		{
		    page: '',
		    path: 'app/home'
		},
		{
		    page: 'home',
		    path: 'app/home'
		}

	];
	
	$.each(route, function(k, v) {
	    if (page == v.page) {
	        require([v.path], function(init) {
	        	console.log('Here');
	            init.init();
	        });
	    }
	});

	require(['app/site'], function(init) {
       init.init();
   });
	
});
