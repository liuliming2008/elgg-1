<?php 

?>
//<script>
elgg.provide('elgg.thewire_tools');

//for jquery.textcomplete
elgg.thewire_tools.init = function() {

    var matchRegExp = /@(\w*)$/;///\B@(\w*)$/;///(^|\s)@(\w*)$/;
    var indexNumber = 1;
    var cache=new Array();
    var searchFunc = function (term, callback) {
      if( cache[term] )
        callback(cache[term], true); // Show local cache immediately.
      $.getJSON(elgg.get_site_url() + "thewire/autocomplete", { q:  '@'+term ,
						page_owner_guid: elgg.get_page_owner_guid() })
        .done(function (resp) {
          callback(resp); // `resp` must be an Array
          cache[term]=resp; 
        })
        .fail(function () {
          callback([]); // Callback must be invoked even if something went wrong.
        });
    };
    var templateFunc = function (value) {
      // `value` is an element of array callbacked by searchFunc.
      //return '<b>' + value + '</b>';
      var list_body = "";
				if(value.type == "user"){
					list_body = "<img src='" + value.icon + "' /> " + value.name;
				} else {
					list_body = value.value;
				}
        return list_body;
    };
    var replaceFunc = function (value) { return '$1@' + value.name + ' '; };
    var cacheBoolean=true;
    var maxCountNumber=20;
    var placementStr='bottom' ;
    var strategy = {
      // Required
      match:     matchRegExp,
      search:    searchFunc,
      replace:   replaceFunc,
    
      // Optional
       index:     indexNumber,     // 2
       maxCount:  maxCountNumber,  // 10
       template:  templateFunc,    // function (value) { return value; }
       cache:     cacheBoolean,    // false
       placement: placementStr     // undefined
//       header:    headerStrOrFunc  // undefined
//       footer:    footerStrOrFunc  // undefined
    };
    var strategies = [
      // There are two strategies.
      strategy
      
    ];
    $('#thewire-textarea').textcomplete(strategies);//, option);
  /*
  var cachedata=new Array();
  var searchFunc = function (term, callback) {
  if( cachedata[term] )
  callback(cachedata[term], true); // Show local cache immediately.
  
  $.getJSON(elgg.get_site_url() + "thewire/autocomplete", { q: '@'+term,
						page_owner_guid: elgg.get_page_owner_guid() })
    .done(function (resp) {
      cachedata[term]=resp;
      callback(resp); // `resp` must be an Array
    })
    .fail(function () {
      callback([]); // Callback must be invoked even if something went wrong.
    }); 
};
$('#thewire-textarea').textcomplete([
    { // emoji strategy
        //mentions: ['yuku_t'],
        cacheBoolean: true,
        maxCount:20,
        match: /\B@(\w*)$/,
        search: searchFunc,
        index: 1,
        replace: function (mention) {
            return '@' + mention + ' ';
        }
    }
]);  */
}

//for jquery.autocomplete
elgg.thewire_tools.init2 = function() {
	function split( val ) {
		//return val.split( / \s*/ );   /\B@(\w*)$/
    return val.split( / \s*/ );
	}
	function extractLast( term ) {
		return split( term ).pop();
	}
  /*$('.elgg-form-thewire-add textarea[name="body"]').each(function(i){
    // Detect the word starting with '@' as a query term.
    var matchRegExp = /(^|\s)@(\w*)$/;
    var indexNumber = 2;
    var cache=new Array();
    var searchFunc = function (term, callback) {
      if( cache[term] )
        callback(cache[term], true); // Show local cache immediately.
      $.getJSON(elgg.get_site_url() + "thewire/autocomplete", { q:  '@'+term ,
						page_owner_guid: elgg.get_page_owner_guid() })
        .done(function (resp) {
          callback(resp); // `resp` must be an Array
          cache[term]=resp; 
        })
        .fail(function () {
          callback([]); // Callback must be invoked even if something went wrong.
        });
    };
    var templateFunc = function (value) {
      // `value` is an element of array callbacked by searchFunc.
      //return '<b>' + value + '</b>';
      var list_body = "";
				if(value.type == "user"){
					list_body = "<img src='" + value.icon + "' /> " + value.name;
				} else {
					list_body = value.value;
				}
        return list_body;
    };
    var replaceFunc = function (value) { return '$1@' + value.name + ' '; };
    var cacheBoolean=true;
    var maxCountNumber=20;
    var placementStr='top' ;
    var strategy = {
      // Required
      match:     matchRegExp,
      search:    searchFunc,
      replace:   replaceFunc,
    
      // Optional
       index:     indexNumber,     // 2
       maxCount:  maxCountNumber,  // 10
       template:  templateFunc,    // function (value) { return value; }
       cache:     cacheBoolean,    // false
       placement: placementStr     // undefined
//       header:    headerStrOrFunc  // undefined
//       footer:    footerStrOrFunc  // undefined
    }
    var strategies = [
      // There are two strategies.
      strategy
      
    ];
    $(this).textcomplete(strategies);//, option);
  
  });*/
  
	$('.elgg-form-thewire-add textarea[name="body"]').each(function(i){
    
		$auto=$(this)
			// don't navigate away from the field on tab when selecting an item
			.bind( "keydown", function( event ) {
				if ( event.keyCode === $.ui.keyCode.TAB &&
						$( this ).data( "autocomplete" ).menu.active ) {
					event.preventDefault();
				}
        var newY = $(this).textareaHelper('caretPos').top + (parseInt($(this).css('font-size'), 10) * 1.5);
        var newX = $(this).textareaHelper('caretPos').left;
        var posString = "left+" + newX + "px top+" + newY + "px";
        $(this).autocomplete("option", "position", {
            my: "left top",
            at: posString
        });
        //$( this ).autocomplete( "option", "position", {   my: "left top", at: "left bottom",
        //of: event,
        //collision: "none  " } );
			})
			.autocomplete({
        minLength:1,
				source: function( request, response ) {
					$.getJSON( elgg.get_site_url() + "thewire/autocomplete", {
						q: extractLast( request.term ),
						page_owner_guid: elgg.get_page_owner_guid()
					}, response );
				},
				search: function() {
					// custom minLength
					var term = extractLast( this.value );
					var firstChar = term.substring(0,1);

					if (( term.length >= 1) && (firstChar == "@" || firstChar == "#")) {
						return true;
					}
					return false;
				},
				focus: function() {
					// prevent value inserted on focus
					return false;
				},
				select: function( event, ui ) {
					var terms = split(this.value);
					// remove the current input
					terms.pop();
					// add the selected item
					if(ui.item.type == "user"){
						terms.push("@" + ui.item.name);//username );
					} else {
						terms.push("#" + ui.item.value );
					}

					// add placeholder to get the comma-and-space at the end
					terms.push( "" );
					this.value = terms.join( " " );
					return false;
				},
				autoFocus: true
			});
      $auto.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
				var list_body = "";
				if(item.type == "user"){
					list_body = "<img src='" + item.icon + "' /> " + item.name;
				} else {
					list_body = item.value;
				}

				return $( "<li></li>" )
				.data( "item.autocomplete", item )
				.append( "<a>" + list_body + "</a>" )
				.appendTo( ul );
			}; 
      $auto.data( "ui-autocomplete" )._resizeMenu = function() {
    this.menu.element.outerWidth( 200 );
    }
	});   
};

//for jquery.atwho
elgg.thewire_tools.init3 = function() {
  var templateFunc = function (value) {
      // `value` is an element of array callbacked by searchFunc.
      //return '<b>' + value + '</b>';
      var list_body = "";
				if(value.type == "user"){
					list_body = "<img src='" + value.icon + "' /> " + value.name;
				} else {
					list_body = value.value;
				}
        return list_body;
    };
  $('#thewire-textarea').atwho({
    at: "@",
    data: "http://www.atjs.com/users.json",
    tpl:templateFunc, 
    search_key: "name",
    max_len: 20,
    start_with_space: false,
    limit: 10,
  });
    var matchRegExp = /@(\w*)$/;///\B@(\w*)$/;///(^|\s)@(\w*)$/;
    var indexNumber = 1;
    var cache=new Array();
    var searchFunc = function (term, callback) {
      if( cache[term] )
        callback(cache[term], true); // Show local cache immediately.
      $.getJSON(elgg.get_site_url() + "thewire/autocomplete", { q:  '@'+term ,
						page_owner_guid: elgg.get_page_owner_guid() })
        .done(function (resp) {
          callback(resp); // `resp` must be an Array
          cache[term]=resp; 
        })
        .fail(function () {
          callback([]); // Callback must be invoked even if something went wrong.
        });
    };
    var templateFunc = function (value) {
      // `value` is an element of array callbacked by searchFunc.
      //return '<b>' + value + '</b>';
      var list_body = "";
				if(value.type == "user"){
					list_body = "<img src='" + value.icon + "' /> " + value.name;
				} else {
					list_body = value.value;
				}
        return list_body;
    };
    var replaceFunc = function (value) { return '$1@' + value.name + ' '; };
    var cacheBoolean=true;
    var maxCountNumber=20;
    var placementStr='bottom' ;
    var strategy = {
      // Required
      match:     matchRegExp,
      search:    searchFunc,
      replace:   replaceFunc,
    
      // Optional
       index:     indexNumber,     // 2
       maxCount:  maxCountNumber,  // 10
       template:  templateFunc,    // function (value) { return value; }
       cache:     cacheBoolean,    // false
       placement: placementStr     // undefined
//       header:    headerStrOrFunc  // undefined
//       footer:    footerStrOrFunc  // undefined
    };
    var strategies = [
      // There are two strategies.
      strategy
      
    ];
    $('#thewire-textarea').textcomplete(strategies);//, option);
  /*
  var cachedata=new Array();
  var searchFunc = function (term, callback) {
  if( cachedata[term] )
  callback(cachedata[term], true); // Show local cache immediately.
  
  $.getJSON(elgg.get_site_url() + "thewire/autocomplete", { q: '@'+term,
						page_owner_guid: elgg.get_page_owner_guid() })
    .done(function (resp) {
      cachedata[term]=resp;
      callback(resp); // `resp` must be an Array
    })
    .fail(function () {
      callback([]); // Callback must be invoked even if something went wrong.
    }); 
};
$('#thewire-textarea').textcomplete([
    { // emoji strategy
        //mentions: ['yuku_t'],
        cacheBoolean: true,
        maxCount:20,
        match: /\B@(\w*)$/,
        search: searchFunc,
        index: 1,
        replace: function (mention) {
            return '@' + mention + ' ';
        }
    }
]);  */
}
elgg.register_hook_handler('init', 'system', elgg.thewire_tools.init2);