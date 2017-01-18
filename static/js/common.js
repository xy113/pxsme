// JavaScript Document
function $$(o){
	return document.getElementById(o);
}
function trimStr(str) { 
	var reg = /\s{2,}/g;
	var str = str.replace(reg,'');	
	var re = /\s*(\S[^\0]*\S)\s*/; 
	re.exec(str); 
	return RegExp.$1; 
}
function mb_cutstr(str, maxlen, dot) {
	var len = 0;
	var ret = '';
	var dot = !dot ? '...' : '';
	maxlen = maxlen - dot.length;
	for(var i = 0; i < str.length; i++) {
		len += str.charCodeAt(i) < 0 || str.charCodeAt(i) > 255 ? (charset == 'utf-8' ? 3 : 2) : 1;
		if(len > maxlen) {
			ret += dot;
			break;
		}
		ret += str.substr(i, 1);
	}
	return ret;
}
function SwitchNews(id){
	var items = $$("tab_news").getElementsByTagName('span');
	for(var i = 0;i<items.length;i++){
		if(i == id){
			items[i].className = 'selected';
			$$("news_"+i).style.display = 'block';
		}else{
			items[i].className = '';
			$$("news_"+i).style.display = 'none';
		}
	}
}