/**
* CustomScripts.js 1.0.0
* @author TemplateToaster
**/
jQuery(document).ready(function () {
 
/* Button Style Script */
jQuery("#wp-submit").addClass("btn btn-default");
jQuery(".contact_file").addClass(" btn btn-md btn-default");
jQuery(".wpcf7-submit").addClass("pull-left btn btn-md btn-default");
jQuery(".wpcf7-submit").attr("value", "SEND MESSAGE");
if(jQuery('.wpcf7-file').length){
jQuery('.wpcf7-file').change(function(){
var parentdiv = jQuery(this).parent().closest(".form-group");
var value = this.value.replace( /C:\\fakepath\\/i, "" );
var divv = jQuery(parentdiv).find("span#upload-file");
jQuery(divv).text(value);
});
}
 
/* Account details page Button class Script */
jQuery('form.woocommerce-EditAccountForm .woocommerce-Button.button').removeClass("button").addClass('btn btn-default');
 
/* Slideshow Function Call */
if(jQuery('#ttr_slideshow_inner').length){
jQuery('#ttr_slideshow_inner').TTSlider({
stopTransition:false,slideShowSpeed:2000, begintime:1000,cssPrefix: 'ttr_'
});
}
 
/* Sticky menu script */
if(jQuery('#ttr_menu').length){
var menuheight = jQuery('nav.navbar').height();
var menutop = jQuery('#ttr_menu').offset().top;
jQuery(document).scroll(function () {
var scrollTop = jQuery(this).scrollTop();
var menuOffset = menutop - menuheight;
if(menuOffset < 0)
{
menuOffset = 0;
}
if (scrollTop > menutop) 
{
jQuery('#ttr_menu').addClass('navbar-fixed-top');
}
else if (scrollTop <= menuOffset)
{
jQuery('#ttr_menu').removeClass('navbar-fixed-top');
}
});
}
 
/* Checkbox Script */
var inputs = document.getElementsByTagName('input');
for (a = 0; a < inputs.length; a++) {
if (inputs[a].type == "checkbox") {
var id = inputs[a].getAttribute("id");
if (id==null){
id=  "checkbox" +a;
}
inputs[a].setAttribute("id",id);
var container = document.createElement('div');
container.setAttribute("class", "ttr_checkbox");
var label = document.createElement('label');
label.setAttribute("for", id);
jQuery(inputs[a]).wrap(container).after(label);
}
}

 
/* RadioButton Script */
var inputs = document.getElementsByTagName('input');
for (a = 0; a < inputs.length; a++) {
if (inputs[a].type == "radio") {
var id = inputs[a].getAttribute("id");
if (id==null){
id=  "radio" +a;
}
inputs[a].setAttribute("id",id);
var container = document.createElement('div');
container.setAttribute("class", "ttr_radio");
var label = document.createElement('label');
label.setAttribute("for", id);
jQuery(inputs[a]).wrap(container).after(label);
}
}
 
/* -----StaticFooterScript ----*/
var window_height =  Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
var body_height = jQuery(document.body).height();
var content = jQuery("div[id$='content_margin']");
if(body_height < window_height){
differ = (window_height - body_height);
content_height = content.height() + differ;
jQuery("div[id*='content_margin']").css({"min-height":content_height+"px"});
}
 
/* -----HamburgerScript ----*/
jQuery('#nav-expander').on('click',function(e){
e.preventDefault();
jQuery('body').toggleClass('nav-expanded');
});
 
/* -----MenuOpenClickScript ----*/
jQuery('ul.ttr_menu_items.nav li [data-toggle=dropdown]').on('click', function() {
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
if(window_width > 1025 && jQuery(this).attr('href')){
window.location.href = jQuery(this).attr('href'); 
}
else{
if(jQuery(this).parent().hasClass('open')){
location.assign(jQuery(this).attr('href'));
}
}
});
 
/* -----SidebarMenuOpenClickScript ----*/
jQuery('ul.ttr_vmenu_items.nav li [data-toggle=dropdown]').on('click', function() {
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
if(window_width > 1025 && jQuery(this).attr('href')){
window.location.href = jQuery(this).attr('href'); 
}
else{
if(jQuery(this).parent().hasClass('open')){
location.assign(jQuery(this).attr('href'));
}
}
});
 
/*----- PageAlignment Script ------*/
var page_width = jQuery('#ttr_page').width();
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width > 1025){
jQuery('.ttr_page_align_left').each(function() {
var left_div_width = jQuery(this).width(); 
var page_align_left_value = page_width - left_div_width;
left_div_width = left_div_width + 1;
jQuery(this).css({'left' : '-' + page_align_left_value + 'px', 'width': left_div_width + 'px'});
});
jQuery('.ttr_page_align_right').each(function() {
var right_div_width = jQuery(this).width(); 
var page_align_left_value = page_width - right_div_width;
right_div_width = right_div_width + 1;
jQuery(this).css({'right' : '-' + page_align_left_value + 'px', 'width': right_div_width + 'px'});
});
}
 
/* ---- TabClickScript ----*/
jQuery('.ttr_menu_items ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) { 
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width < 1025){
event.preventDefault();
event.stopPropagation();
jQuery(this).parent().siblings().removeClass('open');
jQuery(this).parent().toggleClass(function() {
if (jQuery(this).is(".open") ) {
window.location.href = jQuery(this).children("[data-toggle=dropdown]").attr('href'); 
return "";
} else {
return "open";
}
});
}
});
 
/* ----- TabVMenuClickScript -----*/
jQuery('.ttr_vmenu_items ul [data-toggle=dropdown]').on('click', function(event) { 
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width < 1025){
event.preventDefault();
event.stopPropagation();
jQuery(this).parent().siblings().removeClass('open');
jQuery(this).parent().toggleClass(function() {
if (jQuery(this).is(".open") ) {
window.location.href = jQuery(this).children("[data-toggle=dropdown]").attr('href'); 
return "";
} else {
return "open";
}
});
}
});
 
/* ----- GoogleWebFontScript -----*/
WebFontConfig = {
google: { families: [ 'Roboto+Slab'] }
};
(function() {
var wf = document.createElement('script');
wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
wf.type = 'text/javascript';
wf.async = 'true';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(wf, s);
})();
 
/*************** Html video script ***************/
var objects = ['iframe[src*="youtube.com"]','iframe[src*="youtu.be"]', '.html_content video','object'];
for(var i = 0 ; i < objects.length ; i++){
if (jQuery(objects[i]).length > 0) {
jQuery(objects[i]).wrap( "<div class='embed-responsive embed-responsive-16by9'></div>" );
jQuery(objects[i]).addClass('embed-responsive-item');
}
}
});