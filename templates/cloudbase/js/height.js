function equals(equalClass){
	var equalClassVariable = equalClass;
	var columns = $$(equalClassVariable);
	var max_height = 0;
	columns.setStyle('height', 'auto');
	columns.each(function(item){ 
		max_height = Math.max(max_height, item.getSize().size.y); 
	});
	columns.setStyle('height', max_height);
}
function checkMootools(){
	var version = MooTools.version;
	if((version).contains("1.2")){
		alert('This template doesn\'t support MooTools 1.2 version. Please unpublish \"System - Mootools Upgrade\" plugin in the backend of your Joomla! site.');
	}
}
window.addEvent('domready',  function(){
	equals('.equalsTop');
	equals('.equalsBottom');
	checkMootools();
});