<?php
global $theme_name;
echo "\n\n/* ".$theme_name."/css/style.php Fly Kit for PHP-Nuke Titanium - Design Themes On The Fly */\n"; 
echo "/* When we are done we will move this code to style.css */\n\n"; 
global $screen_width, $screen_height, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4;

?>
/**
 * Stylesheet for the XtremeV3 Theme
 *
 * @filename:  style.css
 * @author  :  The Mortal
 * @version :  3.0
 * @date    :  12/24/2018 (DD/MM/YYY)
 * @license :  Copyright (c) 2019 The Mortal RealmDesignz.com under the MIT license
 * @notes   :  n/a
 *
 * -- -------------------------------------------------------------------
 * \/ STYLESHEET NAVIGATION
 * -- -------------------------------------------------------------------
 *
 * 1.  Reset CSS
 * 2.  Primary page styles
 * 3.  Page elements
 * 4.  Page header
 * 5.  Page footer
 * 6.  User interaction
 * 7.  Body content wrappers
 * 8.  Side body blocks
 * 9.  Center content wrapper
 * 10. Story content wrapper
 * 11. Inputs
 * 12. Clearfix
 * 13.  Forums Page Styles
 * --- -------------------------------------------------------------------
*/

@import url('//fonts.googleapis.com/css?family=Dosis|Faster+One|Montserrat|Open+Sans|Yanone+Kaffeesatz|Kanit|Roboto');

/*
 * 1. Reset CSS
 *
 * html5doctor.com Reset Stylesheet (Eric Meyer's Reset Reloaded + HTML5 baseline)
 * v2.0 2019-01-07 | Authors: Eric Meyer
 * html5doctor.com/html-5-reset-stylesheet/
 ----------------------------------------------------------------*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	border: 0;
    font-size: 100%;
    margin: 0;
    /*padding: 0;*/
}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}

a
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}

mark {
	background-color: #ff9;
	color: #000;
	font-style: italic;
	font-weight: bold;
}

del { text-decoration: line-through; }

abbr[title], dfn[title] { border-bottom: 1px dotted; cursor: help; }

select { cursor: pointer; }

input, select { vertical-align: middle; }
label.radio { cursor: pointer; }
input[type='checkbox'] { cursor: pointer; }

/*
 * 2. Primary page styles
 *----------------------------------------
*/

#flex-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

#flex-item {

}

.container {
	margin: 0 auto;
}

/*---------------------------------------------------------------*/
/* Full Screen Video Background v1.0                             */
/*                                                               */
/* Designed and Coded By: TheGhost                               */
/* Coded On: 22nd January, 2007                                  */
/* Copyright © 2007 TheGhost All Rights Reserved                 */
/*                                                               */
/* This uses Advanced Resolution Checking v1.0                   */
/*---------------------------------------------------------------*/
.fullscreen-bg {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: -100;
}

.fullscreen-bg__video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: <?=$screen_height?>;
}

@media (max-width: <?=$screen_width?>) {
  .fullscreen-bg {
  }

  .fullscreen-bg__video {
    display: none;
  }
}

body{
background-color: black;
font-size: 14px;
color: #fff;
font-family: "Open Sans", sans-serif;
text-rendering: optimizeLegibility;
position: relative;
min-height: 100%;
min-height: 100vh;
}

.categories {
	color: white;
	border: 0 solid #000;
}

/* Border Line & Background Color Round the Entire Page */
.bodyline {
}

a { 
	color: #ccc;
	text-decoration: none;
}

a:hover,
a.bbcode-href:hover { 
	color: #f5a405;
}

a.bbcode-href {
	color: #ce982d;
}

/*
 * 3. Page elements
 *--------------------------------------------------
*/
textarea, select, input {
	background-color: #333;
	color: #fff;
	font-family: "Open Sans", sans-serif;
	letter-spacing: 0px;
	margin: 0px 1px 1px;
	padding: 4px;
	border: 1px solid #D29A2B;
	resize: vertical;
	box-sizing: border-box;
}

p { padding-bottom: 5px; text-decoration: none; }
p, table { text-decoration: none; }

hr {
	background-color: #ccc;
	border: 0;
	height: 1px;
	margin: 5px 0;
	width: 100%;
}

ul {
	list-style-type: disc;
}

h1, h2, h3, h4, h5, h6 {
	color: #999;
	font-weight: normal;
}
h1 { font-size: 30px; line-height: 1; margin-bottom: 5px; }
h2 { font-size: 20px; margin-bottom: 7.5px; }
h3 { font-size: 15px; line-height: 1; margin-bottom: 10px; }
h4 { font-size: 12px; line-height: 1.25; margin-bottom: 12.5px; }
h5 { font-size: 10px; font-weight: bold; margin-bottom: 15px; }
h6 { font-size: 10px; font-weight: bold; }

/*
 * 5. Page Footer
 *--------------------------------------------------
*/
.copyright,
a.copyright,
a.copyright:link,
a.copyright:active,
a.copyright:visited {
	font-size: 14px;
	color: #ccc;
	text-decoration: none;
}
a.copyright:hover {
	font-size: 14px;
	color: #f5a405;
	text-decoration: none;
}

.ftr-banner-ads {
	width: 468px;
	height: 60px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 5px;
	margin-bottom: 5px;
}

/*
 * 6. User interaction
 *--------------------------------------------------
*/

/*
 * 7. Body Content wrappers
 *--------------------------------------------------
*/
.body-background {
	background-color: <?=$bgcolor4?>;
}

.body-background2 {
	background-color: <?=$bgcolor4?>;
}

/*
 * 11. Inputs
 *--------------------------------------------------
*/
input {
	color: #D29A2B;
	font-size: 13px;
	border: 1px solid #858585;
	padding: 4px;
	letter-spacing: 1px;
	box-sizing: border-box;
}
input.noborder {
	color: #fff;
	font: 11px arial, helvetica, sans-serif;
	border: 0 solid #fff;
}
input.sub {
	color: #D29A2B;
	font-size: 11px;
	background-color: #444;
	border: 1px solid #858585;
}

input.button, input.mainoption, input.liteoption {
	color: #D29A2B;
	font-size: 13px;
}

.language-css { color: #cd6a51; }

.left { text-align: left; }
.center { text-align: center; }
.justify { text-align: justify; }
.right { text-align: right; }

.gold_header_header {
opacity: 0.9;

}

/* Changes Color for: Story Box - Post By Line */
td.content {
	color: #fff;
	font-size: 11px;
	text-decoration: none;
}
td.extra {
	border: 0 solid #131313;
	border-right-color: #898989;
	border-bottom-color: #898989;
}

.heading {
	font-weight: bold;
	font-size: 11px;
	color: #fff;
	letter-spacing: 0;
	text-decoration: none;
}


/*
 * 12. Clearfix
 *
 * The Magnificent Clearfix: Updated to prevent margin-collapsing on child elements.
 * j.mp/bestclearfix
 *--------------------------------------------------
*/
.clearfix:before,
.clearfix:after {
	content: "\0020";
	display: block;
	height: 0;
	overflow: hidden;
}
.clearfix:after { clear: both; }
.clearfix { zoom: 1; }


/*
 * 13. FORUMS CSS Coding Begins Here
 *--------------------------------------------------
*/

/* Border Line & Background Color Round the Entire Page */
.bodyline {
	background-color: #2c2c2c;
	border: 0 solid #000;
}

/* The Outline Round the Main Forum Tables */
.forumline {
	background: #333;
	border: #222 0px solid;
}

/* Main table cell colours and backgrounds */
td.row1 {
	background: #988653;
	border: 3px solid #c9b06d;
	padding: 4px;
    box-shadow: inset 1px 1px 3px #000;
}

td.row2 {
	background: #8d7b4d;
	border: 3px solid #c9b06d;
	padding: 4px;
    box-shadow: inset 1px 1px 3px #000;
}

td.row3 {
	background: #8d7b4d;
	border: 3px solid #c9b06d;
	padding: 4px;
    box-shadow: inset 1px 1px 3px #000;
}

/* Category Row Right */
td.rowpic {
	background: #292929;
	border: #cccccc 1px solid;
	padding-left: 2px;
	padding-right: 2px;
	padding-bottom: 2px;
}

/* Recent Topics Row*/
th {
	color: #FFF;
	border: 1px solid #222;
	border-bottom-width: 0;
	font-size: 10px;
	background-color: #3d3d3d;
	white-space: nowrap;
	text-align: center;
}

th.bar {
	background: #333;
	border: #222 1px solid;
	color: #ddd;
	font-size: 11px;
	font-weight: bold;
	text-align: center;
}

/* Category Row Left */
td.cat, td.catHead, td.catSides, td.catLeft, td.catRight, td.catBottom {
	background-color: #343434;
	color: #FFF;
	border: 1px solid #787878;
	white-space: nowrap;
	padding: 4px;
}

td.cat, td.catHead, td.catBottom {
	white-space: nowrap;
  	background: #8d7b4d;
	border: 3px solid #c9b06d;
	padding: 4px;
   
}

/*
 * Setting additional nice inner borders for the main table cells.
 * The names indicate which sides the border will be on.
 * Don't worry if you don't understand this, just ignore it :-)
 *----------------------------------------------------------------
*/


/* Recent Topics, Row1, Viewforum_Body.tpl */
th.thHead, th.thSides, th.thTop, th.thLeft, th.thRight, th.thBottom, th.thCornerL, th.thCornerR {
	color: #F1F1F1;
	border: 3px solid #c9b06d;
	border-bottom-width: 0;
	font-size: 15px;
	background-color: #8d7b4d;
	white-space: nowrap;
}

/* Forum_Body.tpl - Last Column */
td.row3Right, td.spaceRow {
	height: 25px;
	color: #F1F1F1;
	border: 1px solid #222;
	border-bottom-width: 0;
	font-size: 10px;
	background-color: #444;
	white-space: nowrap;
}

/* The Largest Text Used in the Index Page Title & Toptic Title Etc. */
.maintitle, h1, h2 {
	font-weight: bold;
	font-size: 18px;
	line-height: 120%;
	color: #CCC;
	text-decoration: none;
}
a.maintitle:link {
	color: #D29A2B;
	font-size: 18px;
	text-decoration: none;
}
a.maintitle:visited {
	color: #D29A2B;
	font-size: 18px;
	text-decoration: none;
}
a.maintitle:hover {
	color: #888;
	font-size: 18px;
	text-decoration: none;
}

/* General Text */
.gen {
	font-size: 13px;
	color: #FFF;
}
.genmed {
	font-size: 12px;
}
.gensmall {
	font-size: 10px;
}
.gen, .genmed, .gensmall {
	color: #FFF;
}
a.gen, a.genmed, a.gensmall {
	background: transparent;
	color: #FFF;
	text-decoration: none;
}
a.gen:hover, a.genmed:hover, a.gensmall:hover {
	color: #D29A2B;
	text-decoration: none;
}

/* The Register, Login, Search, Etc, Links at the Top of the Page */
.mainmenu {
	color: #FFF;
}
a.mainmenu {
	color: #FFF;
	text-decoration: none;
}
a.mainmenu:hover {
	color: #bbbbbb;
	text-decoration: none;
}

/* Forum Cattitle & Description Text */
.cattitle {
	font-size: 13px !important;
	letter-spacing: 1px;
}
a.cattitle {
	color: #AFAFAF;
	text-decoration: none;
}
a.cattitle:hover {
	color: #D29A2B;
	text-decoration: none;
}

.cattitle3 {
	color: #FED192;
	font-size: 13px !important;
	letter-spacing: 1px;
}
a.cattitle3 {
	color: #AFAFAF;
	text-decoration: none;
}
a.cattitle3:hover {
	color: #D29A2B;
	text-decoration: none;
}

/* Forum title: Text and link to the forums used in: index.php */
.forumlink {
	font-weight: bold;
	font-size: 11px;
	color: #FFF;
}
a.forumlink {
	color: #999;
	text-decoration: none;
}
a.forumlink:hover {
	color: #6a0000;
	text-decoration: none;
}

/* Used for the Navigation text, (Page 1,2,3 etc) & the navigation bar when in a forum */
.nav {
	font-weight: bold; font-size: 11px; color: #999;
}
a.nav {
	color: #999; text-decoration: none;
}
a.nav:hover {
	color: #999; text-decoration: none;
}

/* Titles for the Topics: Could specify viewed link color too */
.topictitle {
	color: #DDD;
}
a.topictitle:link {
	color: #999;
	text-decoration: none;
}
a.topictitle:visited {
	color: #999;
	text-decoration: none;
}
a.topictitle:hover {
	color: #cb5858;
	text-decoration: none;
}

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name {
	font-size: 11px;
	color: #FFF;
}

/* Location, number of posts, post date etc */
.postdetails {
	font-size: 10px;
	color: #FFF;
}

/* The content of the posts (body of text) */
.postbody {
	font-size: 15px;
	color: #D3D3D3;
}

a.postlink:link {
	color: #FED192;
	text-decoration: none;
}
a.postlink:visited,
a.postlink:hover {
	color: #D29A2B;
	text-decoration: underline;
}


.fa-angle-double-up {
	text-shadow: 0px 0px 3px #636363, 0px 0px 1px #A20303;
}

/*--------------------------------------------------------------*/
/* Everything Below this Line Needs to be Added to Other Themes */
/*--------------------------------------------------------------*/
input[type='submit'],input[type='checkbox'],input[type='radio']{cursor:pointer;}
select{color: #fff;border:1px solid #D29A2B;cursor:pointer;margin:0 1px 1px;box-sizing:border-box;}
input{color: #fff;border:1px solid #D29A2B;box-sizing:border-box;letter-spacing:1px;margin:0 1px 1px;padding:5px;box-sizing:border-box;}
span.uppercase{text-transform:uppercase;}

td.forums,th.forums{padding-left:5px;}
td.threads,th.threads{width:80px;}
td.last_post,th.last_post{width:200px;padding-left:5px;}

input[type='radio']{background-color:transparent!important;width:18px;height:18px;}
input[type='checkbox']{width:18px;height:18px;}
input[type='image']{border:none;padding:0;}

progress{background-color:#f3f3f3;border:0;height:18px;}

.codebox{border-style:solid;display:block;padding: 10px;;border:1px solid #b5b7b9;background-color:#343434;}
.codebox code{display:block;font:1em Monaco,"Open Sans",sans-serif;max-height:500px;max-width:100%;overflow:auto;margin:0;padding: 5px 3px;}
.codebox p{display:block;font-weight:600;border-bottom:1px solid #ccc;text-transform:uppercase;}

.phpcodebox {background-color:#fdf6e3;}
.phpcodebox p{color:#333 ;}
.code_select {color:#676767;}
.code_select:hover {color: #D29A2B;}

.notepaper{position:relative;margin:auto;padding:29px 20px 20px 45px;width:90%;line-height:32px;color:#6a5f49;text-shadow:0 1px 1px #fff;background-color:#f2f6c1;background-image:-webkit-radial-gradient(center,cover,rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.1) 90%),-webkit-repeating-linear-gradient(top,transparent 0%,transparent 29px,rgba(239,207,173,0.7) 29px,rgba(239,207,173,0.7) 30px); background-image:-moz-radial-gradient(center,cover,rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.1) 90%),-moz-repeating-linear-gradient(top,transparent 0%,transparent 29px,rgba(239,207,173,0.7) 29px,rgba(239,207,173,0.7) 30px); background-image:-o-radial-gradient(center,cover,rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.1) 90%),-o-repeating-linear-gradient(top,transparent 0%,transparent 29px,rgba(239,207,173,0.7) 29px,rgba(239,207,173,0.7) 30px);border:1px solid #c3baaa;border-color:rgba(195,186,170,0.9);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.5),inset 0 0 5px #d8e071,0 0 1px rgba(0,0,0,0.1),0 2px rgba(0,0,0,0.02);box-shadow:inset 0 1px rgba(255,255,255,0.5),inset 0 0 5px #d8e071,0 0 1px rgba(0,0,0,0.1),0 2px rgba(0,0,0,0.02)}
.notepaper:before,.notepaper:after{content:'';position:absolute;top:0;bottom:0;}
.notepaper:before{left:28px;width:2px;border:solid #efcfad;border-color:rgba(239,207,173,0.9);border-width:0 1px;}
.notepaper:after{z-index:-1;left:0;right:0;background:rgba(242,246,193,0.9);border:1px solid rgba(170,157,134,0.7);-webkit-transform:rotate(2deg);-moz-transform:rotate(2deg);-ms-transform:rotate(2deg);-o-transform:rotate(2deg);transform:rotate(2deg)}

.curly-quotes:before,.curly-quotes:after{display:inline-block;vertical-align:top;height:30px;line-height:48px;font-size:50px;opacity:.2;}
.curly-quotes:before{content:'\201C';margin-right:4px;margin-left:-8px;}
.curly-quotes:after{content:'\201D';margin-left:4px;margin-right:-8px;}

.quote-by{display:block;padding-right:10px;font-size:13px;font-style:italic;color:#84775c;}
.lt-ie8 .notepaper{padding:15px 25px;}

.lastpost .fa{float:right;padding:10px;transition:all .2s ease-in-out;}
.left{text-align:left;}
.center{text-align:center;}
.justify{text-align:justify;}
.right{text-align:right;}

.forum-ranks {margin-bottom: 2px;}
.forum-avatar {padding-bottom: 5px;}
<?