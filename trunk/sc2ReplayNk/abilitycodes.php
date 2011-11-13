



<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/vnd.microsoft.icon" href="https://ssl.gstatic.com/codesite/ph/images/phosting.ico">
 
 
 <script type="text/javascript">
 
 
 
 
 var codesite_token = "0132b5d831fb9fa7b7f23fbb1515fcd1";
 
 
 var CS_env = {"profileUrl":["/u/olivier.locci@gmail.com/"],"token":"0132b5d831fb9fa7b7f23fbb1515fcd1","assetHostPath":"https://ssl.gstatic.com/codesite/ph","domainName":null,"assetVersionPath":"https://ssl.gstatic.com/codesite/ph/16877346213899399380","projectHomeUrl":"/p/phpsc2replay","relativeBaseUrl":"","projectName":"phpsc2replay","loggedInUserEmail":"olivier.locci@gmail.com"};
 var _gaq = _gaq || [];
 _gaq.push(
 ['siteTracker._setAccount', 'UA-18071-1'],
 ['siteTracker._trackPageview']);
 
 
 </script>
 
 
 <title>abilitycodes.php - 
 phpsc2replay -
 
 
 Starcraft 2 Replay parser for PHP - Google Project Hosting
 </title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
 
 <meta name="ROBOTS" content="NOARCHIVE">
 
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/16877346213899399380/css/core.css">
 
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/16877346213899399380/css/ph_detail.css" >
 
 
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/16877346213899399380/css/d_sb.css" >
 
 
 
<!--[if IE]>
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/16877346213899399380/css/d_ie.css" >
<![endif]-->
 <style type="text/css">
 .menuIcon.off { background: no-repeat url(https://ssl.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -42px }
 .menuIcon.on { background: no-repeat url(https://ssl.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -28px }
 .menuIcon.down { background: no-repeat url(https://ssl.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 0; }
 
 
 
  tr.inline_comment {
 background: #fff;
 vertical-align: top;
 }
 div.draft, div.published {
 padding: .3em;
 border: 1px solid #999; 
 margin-bottom: .1em;
 font-family: arial, sans-serif;
 max-width: 60em;
 }
 div.draft {
 background: #ffa;
 } 
 div.published {
 background: #e5ecf9;
 }
 div.published .body, div.draft .body {
 padding: .5em .1em .1em .1em;
 max-width: 60em;
 white-space: pre-wrap;
 white-space: -moz-pre-wrap;
 white-space: -pre-wrap;
 white-space: -o-pre-wrap;
 word-wrap: break-word;
 font-size: 1em;
 }
 div.draft .actions {
 margin-left: 1em;
 font-size: 90%;
 }
 div.draft form {
 padding: .5em .5em .5em 0;
 }
 div.draft textarea, div.published textarea {
 width: 95%;
 height: 10em;
 font-family: arial, sans-serif;
 margin-bottom: .5em;
 }

 
 .nocursor, .nocursor td, .cursor_hidden, .cursor_hidden td {
 background-color: white;
 height: 2px;
 }
 .cursor, .cursor td {
 background-color: darkblue;
 height: 2px;
 display: '';
 }
 
 
.list {
 border: 1px solid white;
 border-bottom: 0;
}

 
 </style>
</head>
<body class="t4">
<script type="text/javascript">
 (function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
 })();
</script>
<div class="headbg">

 <div id="gaia">
 

 <span>
 
 
 <b>olivier.locci@gmail.com</b>
 
 
 | <a href="/u/olivier.locci@gmail.com/" id="projects-dropdown" onclick="return false;"
 ><u>My favorites</u> <small>&#9660;</small></a>
 | <a href="/u/olivier.locci@gmail.com/" onclick="_CS_click('/gb/ph/profile');"
 title="Profile, Updates, and Settings"
 ><u>Profile</u></a>
 | <a href="https://www.google.com/accounts/Logout?continue=https%3A%2F%2Fcode.google.com%2Fp%2Fphpsc2replay%2Fsource%2Fbrowse%2Fphp%2Fbetaphase1%2Fabilitycodes.php" 
 onclick="_CS_click('/gb/ph/signout');"
 ><u>Sign out</u></a>
 
 </span>

 </div>

 <div class="gbh" style="left: 0pt;"></div>
 <div class="gbh" style="right: 0pt;"></div>
 
 
 <div style="height: 1px"></div>
<!--[if lte IE 7]>
<div style="text-align:center;">
Your version of Internet Explorer is not supported. Try a browser that
contributes to open source, such as <a href="http://www.firefox.com">Firefox</a>,
<a href="http://www.google.com/chrome">Google Chrome</a>, or
<a href="http://code.google.com/chrome/chromeframe/">Google Chrome Frame</a>.
</div>
<![endif]-->




 <table style="padding:0px; margin: 0px 0px 10px 0px; width:100%" cellpadding="0" cellspacing="0"
 itemscope itemtype="http://schema.org/CreativeWork">
 <tr style="height: 58px;">
 
 <td id="plogo">
 <link itemprop="url" href="/p/phpsc2replay">
 <a href="/p/phpsc2replay/">
 
 <img src="https://ssl.gstatic.com/codesite/ph/images/defaultlogo.png" alt="Logo" itemprop="image">
 
 </a>
 </td>
 
 <td style="padding-left: 0.5em">
 
 <div id="pname">
 <a href="/p/phpsc2replay/"><span itemprop="name">phpsc2replay</span></a>
 </div>
 
 <div id="psum">
 <a id="project_summary_link"
 href="/p/phpsc2replay/"><span itemprop="description">Starcraft 2 Replay parser for PHP</span></a>
 
 </div>
 
 
 </td>
 <td style="white-space:nowrap;text-align:right; vertical-align:bottom;">
 
 <form action="/hosting/search">
 <input size="30" name="q" value="" type="text">
 
 <input type="submit" name="projectsearch" value="Search projects" >
 </form>
 
 </tr>
 </table>

</div>

 
<div id="mt" class="gtb"> 
 <a href="/p/phpsc2replay/" class="tab ">Project&nbsp;Home</a>
 
 
 
 
 <a href="/p/phpsc2replay/downloads/list" class="tab ">Downloads</a>
 
 
 
 
 
 <a href="/p/phpsc2replay/w/list" class="tab ">Wiki</a>
 
 
 
 
 
 <a href="/p/phpsc2replay/issues/list"
 class="tab ">Issues</a>
 
 
 
 
 
 <a href="/p/phpsc2replay/source/checkout"
 class="tab active">Source</a>
 
 
 
 
 
 <div class=gtbc></div>
</div>
<table cellspacing="0" cellpadding="0" width="100%" align="center" border="0" class="st">
 <tr>
 
 
 
 
 
 
 <td class="subt">
 <div class="st2">
 <div class="isf">
 
 <form action="/p/phpsc2replay/source/browse" style="display: inline">
 
 Repository:
 <select name="repo" id="repo" style="font-size: 92%" onchange="submit()">
 <option value="default">default</option><option value="wiki">wiki</option>
 </select>
 </form>
 
 


 <span class="inst1"><a href="/p/phpsc2replay/source/checkout">Checkout</a></span> &nbsp;
 <span class="inst2"><a href="/p/phpsc2replay/source/browse/">Browse</a></span> &nbsp;
 <span class="inst3"><a href="/p/phpsc2replay/source/list">Changes</a></span> &nbsp;
 <span class="inst4"><a href="/p/phpsc2replay/source/clones">Clones</a></span> &nbsp; 
 
 &nbsp;
 <form action="http://www.google.com/codesearch" method="get" style="display:inline"
 onsubmit="document.getElementById('codesearchq').value = document.getElementById('origq').value + ' package:http://phpsc2replay\\.googlecode\\.com'">
 <input type="hidden" name="q" id="codesearchq" value="">
 <input type="text" maxlength="2048" size="38" id="origq" name="origq" value="" title="Google Code Search" style="font-size:92%">&nbsp;<input type="submit" value="Search Trunk" name="btnG" style="font-size:92%">
 
 
 
 
 
 
 </form>
 </div>
</div>

 </td>
 
 
 
 <td align="right" valign="top" class="bevel-right"></td>
 </tr>
</table>


<script type="text/javascript">
 var cancelBubble = false;
 function _go(url) { document.location = url; }
</script>
<div id="maincol"
 
>

 
<!-- IE -->




<div class="collapse">
<div id="colcontrol">
<style type="text/css">
 #file_flipper { white-space: nowrap; padding-right: 2em; }
 #file_flipper.hidden { display: none; }
 #file_flipper .pagelink { color: #0000CC; text-decoration: underline; }
 #file_flipper #visiblefiles { padding-left: 0.5em; padding-right: 0.5em; }
</style>
<table id="nav_and_rev" class="list"
 cellpadding="0" cellspacing="0" width="100%">
 <tr>
 
 <td nowrap="nowrap" class="src_crumbs src_nav" width="33%">
 <strong class="src_nav">Source path:&nbsp;</strong>
 <span id="crumb_root">
 
 <a href="/p/phpsc2replay/source/browse/">hg</a>/&nbsp;</span>
 <span id="crumb_links" class="ifClosed"><a href="/p/phpsc2replay/source/browse/php/">php</a><span class="sp">/&nbsp;</span><a href="/p/phpsc2replay/source/browse/php/betaphase1/">betaphase1</a><span class="sp">/&nbsp;</span>abilitycodes.php</span>
 
 
 
 
 
 <form class="src_nav">
 
 <span class="sourcelabel"><strong>Branch:</strong>
 <select id="branch_select" name="name" onchange="submit()">
 
 <option value="buffer"
 >
 buffer
 </option>
 
 <option value="default"
 selected>
 default
 </option>
 
 <option value="exceptions"
 >
 exceptions
 </option>
 
 <option value="zsol"
 >
 zsol
 </option>
 
 
 <option value="c176e47bd502225eb00a74166a1615be6d4e28be">c176e47bd502</option>
 
 </select>
 </span>
 </form>
 
 
 
 <form class="src_nav">
 
 <span class="sourcelabel">
 <strong>Tag:</strong>
 <select id="tag_select" name="name" onchange="submit()">
 <option value="">&lt;none&gt;</option>
 
 <option value="1.40" >1.40</option>
 
 </select>
 </span>
 </form>
 
 


 </td>
 
 
 <td nowrap="nowrap" width="33%" align="center">
 <a href="/p/phpsc2replay/source/browse/php/betaphase1/abilitycodes.php?edit=1"
 ><img src="https://ssl.gstatic.com/codesite/ph/images/pencil-y14.png"
 class="edit_icon">Edit file</a>
 </td>
 
 
 <td nowrap="nowrap" width="33%" align="right">
 <table cellpadding="0" cellspacing="0" style="font-size: 100%"><tr>
 
 
 <td class="flipper"><b>3cae61303e6b</b></td>
 
 </tr></table>
 </td> 
 </tr>
</table>

<div class="fc">
 
 
 
<style type="text/css">
.undermouse span {
 background-image: url(https://ssl.gstatic.com/codesite/ph/images/comments.gif); }
</style>
<table class="opened" id="review_comment_area"
><tr>
<td id="nums">
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
<pre><table width="100%" id="nums_table_0"><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_1"

><td id="1"><a href="#1">1</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_2"

><td id="2"><a href="#2">2</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_3"

><td id="3"><a href="#3">3</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_4"

><td id="4"><a href="#4">4</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_5"

><td id="5"><a href="#5">5</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_6"

><td id="6"><a href="#6">6</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_7"

><td id="7"><a href="#7">7</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_8"

><td id="8"><a href="#8">8</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_9"

><td id="9"><a href="#9">9</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_10"

><td id="10"><a href="#10">10</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_11"

><td id="11"><a href="#11">11</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_12"

><td id="12"><a href="#12">12</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_13"

><td id="13"><a href="#13">13</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_14"

><td id="14"><a href="#14">14</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_15"

><td id="15"><a href="#15">15</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_16"

><td id="16"><a href="#16">16</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_17"

><td id="17"><a href="#17">17</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_18"

><td id="18"><a href="#18">18</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_19"

><td id="19"><a href="#19">19</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_20"

><td id="20"><a href="#20">20</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_21"

><td id="21"><a href="#21">21</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_22"

><td id="22"><a href="#22">22</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_23"

><td id="23"><a href="#23">23</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_24"

><td id="24"><a href="#24">24</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_25"

><td id="25"><a href="#25">25</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_26"

><td id="26"><a href="#26">26</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_27"

><td id="27"><a href="#27">27</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_28"

><td id="28"><a href="#28">28</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_29"

><td id="29"><a href="#29">29</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_30"

><td id="30"><a href="#30">30</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_31"

><td id="31"><a href="#31">31</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_32"

><td id="32"><a href="#32">32</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_33"

><td id="33"><a href="#33">33</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_34"

><td id="34"><a href="#34">34</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_35"

><td id="35"><a href="#35">35</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_36"

><td id="36"><a href="#36">36</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_37"

><td id="37"><a href="#37">37</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_38"

><td id="38"><a href="#38">38</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_39"

><td id="39"><a href="#39">39</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_40"

><td id="40"><a href="#40">40</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_41"

><td id="41"><a href="#41">41</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_42"

><td id="42"><a href="#42">42</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_43"

><td id="43"><a href="#43">43</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_44"

><td id="44"><a href="#44">44</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_45"

><td id="45"><a href="#45">45</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_46"

><td id="46"><a href="#46">46</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_47"

><td id="47"><a href="#47">47</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_48"

><td id="48"><a href="#48">48</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_49"

><td id="49"><a href="#49">49</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_50"

><td id="50"><a href="#50">50</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_51"

><td id="51"><a href="#51">51</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_52"

><td id="52"><a href="#52">52</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_53"

><td id="53"><a href="#53">53</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_54"

><td id="54"><a href="#54">54</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_55"

><td id="55"><a href="#55">55</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_56"

><td id="56"><a href="#56">56</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_57"

><td id="57"><a href="#57">57</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_58"

><td id="58"><a href="#58">58</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_59"

><td id="59"><a href="#59">59</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_60"

><td id="60"><a href="#60">60</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_61"

><td id="61"><a href="#61">61</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_62"

><td id="62"><a href="#62">62</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_63"

><td id="63"><a href="#63">63</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_64"

><td id="64"><a href="#64">64</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_65"

><td id="65"><a href="#65">65</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_66"

><td id="66"><a href="#66">66</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_67"

><td id="67"><a href="#67">67</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_68"

><td id="68"><a href="#68">68</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_69"

><td id="69"><a href="#69">69</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_70"

><td id="70"><a href="#70">70</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_71"

><td id="71"><a href="#71">71</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_72"

><td id="72"><a href="#72">72</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_73"

><td id="73"><a href="#73">73</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_74"

><td id="74"><a href="#74">74</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_75"

><td id="75"><a href="#75">75</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_76"

><td id="76"><a href="#76">76</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_77"

><td id="77"><a href="#77">77</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_78"

><td id="78"><a href="#78">78</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_79"

><td id="79"><a href="#79">79</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_80"

><td id="80"><a href="#80">80</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_81"

><td id="81"><a href="#81">81</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_82"

><td id="82"><a href="#82">82</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_83"

><td id="83"><a href="#83">83</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_84"

><td id="84"><a href="#84">84</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_85"

><td id="85"><a href="#85">85</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_86"

><td id="86"><a href="#86">86</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_87"

><td id="87"><a href="#87">87</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_88"

><td id="88"><a href="#88">88</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_89"

><td id="89"><a href="#89">89</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_90"

><td id="90"><a href="#90">90</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_91"

><td id="91"><a href="#91">91</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_92"

><td id="92"><a href="#92">92</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_93"

><td id="93"><a href="#93">93</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_94"

><td id="94"><a href="#94">94</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_95"

><td id="95"><a href="#95">95</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_96"

><td id="96"><a href="#96">96</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_97"

><td id="97"><a href="#97">97</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_98"

><td id="98"><a href="#98">98</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_99"

><td id="99"><a href="#99">99</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_100"

><td id="100"><a href="#100">100</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_101"

><td id="101"><a href="#101">101</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_102"

><td id="102"><a href="#102">102</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_103"

><td id="103"><a href="#103">103</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_104"

><td id="104"><a href="#104">104</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_105"

><td id="105"><a href="#105">105</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_106"

><td id="106"><a href="#106">106</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_107"

><td id="107"><a href="#107">107</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_108"

><td id="108"><a href="#108">108</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_109"

><td id="109"><a href="#109">109</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_110"

><td id="110"><a href="#110">110</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_111"

><td id="111"><a href="#111">111</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_112"

><td id="112"><a href="#112">112</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_113"

><td id="113"><a href="#113">113</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_114"

><td id="114"><a href="#114">114</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_115"

><td id="115"><a href="#115">115</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_116"

><td id="116"><a href="#116">116</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_117"

><td id="117"><a href="#117">117</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_118"

><td id="118"><a href="#118">118</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_119"

><td id="119"><a href="#119">119</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_120"

><td id="120"><a href="#120">120</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_121"

><td id="121"><a href="#121">121</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_122"

><td id="122"><a href="#122">122</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_123"

><td id="123"><a href="#123">123</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_124"

><td id="124"><a href="#124">124</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_125"

><td id="125"><a href="#125">125</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_126"

><td id="126"><a href="#126">126</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_127"

><td id="127"><a href="#127">127</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_128"

><td id="128"><a href="#128">128</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_129"

><td id="129"><a href="#129">129</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_130"

><td id="130"><a href="#130">130</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_131"

><td id="131"><a href="#131">131</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_132"

><td id="132"><a href="#132">132</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_133"

><td id="133"><a href="#133">133</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_134"

><td id="134"><a href="#134">134</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_135"

><td id="135"><a href="#135">135</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_136"

><td id="136"><a href="#136">136</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_137"

><td id="137"><a href="#137">137</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_138"

><td id="138"><a href="#138">138</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_139"

><td id="139"><a href="#139">139</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_140"

><td id="140"><a href="#140">140</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_141"

><td id="141"><a href="#141">141</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_142"

><td id="142"><a href="#142">142</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_143"

><td id="143"><a href="#143">143</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_144"

><td id="144"><a href="#144">144</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_145"

><td id="145"><a href="#145">145</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_146"

><td id="146"><a href="#146">146</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_147"

><td id="147"><a href="#147">147</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_148"

><td id="148"><a href="#148">148</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_149"

><td id="149"><a href="#149">149</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_150"

><td id="150"><a href="#150">150</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_151"

><td id="151"><a href="#151">151</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_152"

><td id="152"><a href="#152">152</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_153"

><td id="153"><a href="#153">153</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_154"

><td id="154"><a href="#154">154</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_155"

><td id="155"><a href="#155">155</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_156"

><td id="156"><a href="#156">156</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_157"

><td id="157"><a href="#157">157</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_158"

><td id="158"><a href="#158">158</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_159"

><td id="159"><a href="#159">159</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_160"

><td id="160"><a href="#160">160</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_161"

><td id="161"><a href="#161">161</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_162"

><td id="162"><a href="#162">162</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_163"

><td id="163"><a href="#163">163</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_164"

><td id="164"><a href="#164">164</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_165"

><td id="165"><a href="#165">165</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_166"

><td id="166"><a href="#166">166</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_167"

><td id="167"><a href="#167">167</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_168"

><td id="168"><a href="#168">168</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_169"

><td id="169"><a href="#169">169</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_170"

><td id="170"><a href="#170">170</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_171"

><td id="171"><a href="#171">171</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_172"

><td id="172"><a href="#172">172</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_173"

><td id="173"><a href="#173">173</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_174"

><td id="174"><a href="#174">174</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_175"

><td id="175"><a href="#175">175</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_176"

><td id="176"><a href="#176">176</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_177"

><td id="177"><a href="#177">177</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_178"

><td id="178"><a href="#178">178</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_179"

><td id="179"><a href="#179">179</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_180"

><td id="180"><a href="#180">180</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_181"

><td id="181"><a href="#181">181</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_182"

><td id="182"><a href="#182">182</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_183"

><td id="183"><a href="#183">183</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_184"

><td id="184"><a href="#184">184</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_185"

><td id="185"><a href="#185">185</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_186"

><td id="186"><a href="#186">186</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_187"

><td id="187"><a href="#187">187</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_188"

><td id="188"><a href="#188">188</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_189"

><td id="189"><a href="#189">189</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_190"

><td id="190"><a href="#190">190</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_191"

><td id="191"><a href="#191">191</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_192"

><td id="192"><a href="#192">192</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_193"

><td id="193"><a href="#193">193</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_194"

><td id="194"><a href="#194">194</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_195"

><td id="195"><a href="#195">195</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_196"

><td id="196"><a href="#196">196</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_197"

><td id="197"><a href="#197">197</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_198"

><td id="198"><a href="#198">198</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_199"

><td id="199"><a href="#199">199</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_200"

><td id="200"><a href="#200">200</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_201"

><td id="201"><a href="#201">201</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_202"

><td id="202"><a href="#202">202</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_203"

><td id="203"><a href="#203">203</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_204"

><td id="204"><a href="#204">204</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_205"

><td id="205"><a href="#205">205</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_206"

><td id="206"><a href="#206">206</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_207"

><td id="207"><a href="#207">207</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_208"

><td id="208"><a href="#208">208</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_209"

><td id="209"><a href="#209">209</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_210"

><td id="210"><a href="#210">210</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_211"

><td id="211"><a href="#211">211</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_212"

><td id="212"><a href="#212">212</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_213"

><td id="213"><a href="#213">213</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_214"

><td id="214"><a href="#214">214</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_215"

><td id="215"><a href="#215">215</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_216"

><td id="216"><a href="#216">216</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_217"

><td id="217"><a href="#217">217</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_218"

><td id="218"><a href="#218">218</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_219"

><td id="219"><a href="#219">219</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_220"

><td id="220"><a href="#220">220</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_221"

><td id="221"><a href="#221">221</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_222"

><td id="222"><a href="#222">222</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_223"

><td id="223"><a href="#223">223</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_224"

><td id="224"><a href="#224">224</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_225"

><td id="225"><a href="#225">225</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_226"

><td id="226"><a href="#226">226</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_227"

><td id="227"><a href="#227">227</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_228"

><td id="228"><a href="#228">228</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_229"

><td id="229"><a href="#229">229</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_230"

><td id="230"><a href="#230">230</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_231"

><td id="231"><a href="#231">231</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_232"

><td id="232"><a href="#232">232</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_233"

><td id="233"><a href="#233">233</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_234"

><td id="234"><a href="#234">234</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_235"

><td id="235"><a href="#235">235</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_236"

><td id="236"><a href="#236">236</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_237"

><td id="237"><a href="#237">237</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_238"

><td id="238"><a href="#238">238</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_239"

><td id="239"><a href="#239">239</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_240"

><td id="240"><a href="#240">240</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_241"

><td id="241"><a href="#241">241</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_242"

><td id="242"><a href="#242">242</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_243"

><td id="243"><a href="#243">243</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_244"

><td id="244"><a href="#244">244</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_245"

><td id="245"><a href="#245">245</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_246"

><td id="246"><a href="#246">246</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_247"

><td id="247"><a href="#247">247</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_248"

><td id="248"><a href="#248">248</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_249"

><td id="249"><a href="#249">249</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_250"

><td id="250"><a href="#250">250</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_251"

><td id="251"><a href="#251">251</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_252"

><td id="252"><a href="#252">252</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_253"

><td id="253"><a href="#253">253</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_254"

><td id="254"><a href="#254">254</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_255"

><td id="255"><a href="#255">255</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_256"

><td id="256"><a href="#256">256</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_257"

><td id="257"><a href="#257">257</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_258"

><td id="258"><a href="#258">258</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_259"

><td id="259"><a href="#259">259</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_260"

><td id="260"><a href="#260">260</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_261"

><td id="261"><a href="#261">261</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_262"

><td id="262"><a href="#262">262</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_263"

><td id="263"><a href="#263">263</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_264"

><td id="264"><a href="#264">264</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_265"

><td id="265"><a href="#265">265</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_266"

><td id="266"><a href="#266">266</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_267"

><td id="267"><a href="#267">267</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_268"

><td id="268"><a href="#268">268</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_269"

><td id="269"><a href="#269">269</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_270"

><td id="270"><a href="#270">270</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_271"

><td id="271"><a href="#271">271</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_272"

><td id="272"><a href="#272">272</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_273"

><td id="273"><a href="#273">273</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_274"

><td id="274"><a href="#274">274</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_275"

><td id="275"><a href="#275">275</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_276"

><td id="276"><a href="#276">276</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_277"

><td id="277"><a href="#277">277</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_278"

><td id="278"><a href="#278">278</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_279"

><td id="279"><a href="#279">279</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_280"

><td id="280"><a href="#280">280</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_281"

><td id="281"><a href="#281">281</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_282"

><td id="282"><a href="#282">282</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_283"

><td id="283"><a href="#283">283</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_284"

><td id="284"><a href="#284">284</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_285"

><td id="285"><a href="#285">285</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_286"

><td id="286"><a href="#286">286</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_287"

><td id="287"><a href="#287">287</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_288"

><td id="288"><a href="#288">288</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_289"

><td id="289"><a href="#289">289</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_290"

><td id="290"><a href="#290">290</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_291"

><td id="291"><a href="#291">291</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_292"

><td id="292"><a href="#292">292</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_293"

><td id="293"><a href="#293">293</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_294"

><td id="294"><a href="#294">294</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_295"

><td id="295"><a href="#295">295</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_296"

><td id="296"><a href="#296">296</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_297"

><td id="297"><a href="#297">297</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_298"

><td id="298"><a href="#298">298</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_299"

><td id="299"><a href="#299">299</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_300"

><td id="300"><a href="#300">300</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_301"

><td id="301"><a href="#301">301</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_302"

><td id="302"><a href="#302">302</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_303"

><td id="303"><a href="#303">303</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_304"

><td id="304"><a href="#304">304</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_305"

><td id="305"><a href="#305">305</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_306"

><td id="306"><a href="#306">306</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_307"

><td id="307"><a href="#307">307</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_308"

><td id="308"><a href="#308">308</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_309"

><td id="309"><a href="#309">309</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_310"

><td id="310"><a href="#310">310</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_311"

><td id="311"><a href="#311">311</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_312"

><td id="312"><a href="#312">312</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_313"

><td id="313"><a href="#313">313</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_314"

><td id="314"><a href="#314">314</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_315"

><td id="315"><a href="#315">315</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_316"

><td id="316"><a href="#316">316</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_317"

><td id="317"><a href="#317">317</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_318"

><td id="318"><a href="#318">318</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_319"

><td id="319"><a href="#319">319</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_320"

><td id="320"><a href="#320">320</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_321"

><td id="321"><a href="#321">321</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_322"

><td id="322"><a href="#322">322</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_323"

><td id="323"><a href="#323">323</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_324"

><td id="324"><a href="#324">324</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_325"

><td id="325"><a href="#325">325</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_326"

><td id="326"><a href="#326">326</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_327"

><td id="327"><a href="#327">327</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_328"

><td id="328"><a href="#328">328</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_329"

><td id="329"><a href="#329">329</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_330"

><td id="330"><a href="#330">330</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_331"

><td id="331"><a href="#331">331</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_332"

><td id="332"><a href="#332">332</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_333"

><td id="333"><a href="#333">333</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_334"

><td id="334"><a href="#334">334</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_335"

><td id="335"><a href="#335">335</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_336"

><td id="336"><a href="#336">336</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_337"

><td id="337"><a href="#337">337</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_338"

><td id="338"><a href="#338">338</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_339"

><td id="339"><a href="#339">339</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_340"

><td id="340"><a href="#340">340</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_341"

><td id="341"><a href="#341">341</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_342"

><td id="342"><a href="#342">342</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_343"

><td id="343"><a href="#343">343</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_344"

><td id="344"><a href="#344">344</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_345"

><td id="345"><a href="#345">345</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_346"

><td id="346"><a href="#346">346</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_347"

><td id="347"><a href="#347">347</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_348"

><td id="348"><a href="#348">348</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_349"

><td id="349"><a href="#349">349</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_350"

><td id="350"><a href="#350">350</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_351"

><td id="351"><a href="#351">351</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_352"

><td id="352"><a href="#352">352</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_353"

><td id="353"><a href="#353">353</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_354"

><td id="354"><a href="#354">354</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_355"

><td id="355"><a href="#355">355</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_356"

><td id="356"><a href="#356">356</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_357"

><td id="357"><a href="#357">357</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_358"

><td id="358"><a href="#358">358</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_359"

><td id="359"><a href="#359">359</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_360"

><td id="360"><a href="#360">360</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_361"

><td id="361"><a href="#361">361</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_362"

><td id="362"><a href="#362">362</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_363"

><td id="363"><a href="#363">363</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_364"

><td id="364"><a href="#364">364</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_365"

><td id="365"><a href="#365">365</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_366"

><td id="366"><a href="#366">366</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_367"

><td id="367"><a href="#367">367</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_368"

><td id="368"><a href="#368">368</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_369"

><td id="369"><a href="#369">369</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_370"

><td id="370"><a href="#370">370</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_371"

><td id="371"><a href="#371">371</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_372"

><td id="372"><a href="#372">372</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_373"

><td id="373"><a href="#373">373</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_374"

><td id="374"><a href="#374">374</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_375"

><td id="375"><a href="#375">375</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_376"

><td id="376"><a href="#376">376</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_377"

><td id="377"><a href="#377">377</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_378"

><td id="378"><a href="#378">378</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_379"

><td id="379"><a href="#379">379</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_380"

><td id="380"><a href="#380">380</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_381"

><td id="381"><a href="#381">381</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_382"

><td id="382"><a href="#382">382</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_383"

><td id="383"><a href="#383">383</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_384"

><td id="384"><a href="#384">384</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_385"

><td id="385"><a href="#385">385</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_386"

><td id="386"><a href="#386">386</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_387"

><td id="387"><a href="#387">387</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_388"

><td id="388"><a href="#388">388</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_389"

><td id="389"><a href="#389">389</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_390"

><td id="390"><a href="#390">390</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_391"

><td id="391"><a href="#391">391</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_392"

><td id="392"><a href="#392">392</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_393"

><td id="393"><a href="#393">393</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_394"

><td id="394"><a href="#394">394</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_395"

><td id="395"><a href="#395">395</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_396"

><td id="396"><a href="#396">396</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_397"

><td id="397"><a href="#397">397</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_398"

><td id="398"><a href="#398">398</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_399"

><td id="399"><a href="#399">399</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_400"

><td id="400"><a href="#400">400</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_401"

><td id="401"><a href="#401">401</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_402"

><td id="402"><a href="#402">402</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_403"

><td id="403"><a href="#403">403</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_404"

><td id="404"><a href="#404">404</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_405"

><td id="405"><a href="#405">405</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_406"

><td id="406"><a href="#406">406</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_407"

><td id="407"><a href="#407">407</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_408"

><td id="408"><a href="#408">408</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_409"

><td id="409"><a href="#409">409</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_410"

><td id="410"><a href="#410">410</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_411"

><td id="411"><a href="#411">411</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_412"

><td id="412"><a href="#412">412</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_413"

><td id="413"><a href="#413">413</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_414"

><td id="414"><a href="#414">414</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_415"

><td id="415"><a href="#415">415</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_416"

><td id="416"><a href="#416">416</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_417"

><td id="417"><a href="#417">417</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_418"

><td id="418"><a href="#418">418</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_419"

><td id="419"><a href="#419">419</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_420"

><td id="420"><a href="#420">420</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_421"

><td id="421"><a href="#421">421</a></td></tr
><tr id="gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_422"

><td id="422"><a href="#422">422</a></td></tr
></table></pre>
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
</td>
<td id="lines">
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
<pre class="prettyprint "><table id="src_table_0"><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_1

><td class="source">&lt;?php<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_2

><td class="source">/*<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_3

><td class="source">    This program is free software: you can redistribute it and/or modify<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_4

><td class="source">    it under the terms of the GNU General Public License as published by<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_5

><td class="source">    the Free Software Foundation, either version 3 of the License, or<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_6

><td class="source">    (at your option) any later version.<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_7

><td class="source"><br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_8

><td class="source">    This program is distributed in the hope that it will be useful,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_9

><td class="source">    but WITHOUT ANY WARRANTY; without even the implied warranty of<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_10

><td class="source">    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_11

><td class="source">    GNU General Public License for more details.<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_12

><td class="source"><br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_13

><td class="source">    You should have received a copy of the GNU General Public License<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_14

><td class="source">    along with this program.  If not, see &lt;http://www.gnu.org/licenses/&gt;.<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_15

><td class="source">*/<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_16

><td class="source"><br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_17

><td class="source"><br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_18

><td class="source">$sc2_abilityCodes = array( <br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_19

><td class="source"> 0x020400 =&gt; &quot;stops&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_20

><td class="source"> 0x020402 =&gt; &quot;cheers&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_21

><td class="source"> 0x020403 =&gt; &quot;dances&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_22

><td class="source"> 0x020501 =&gt; &quot;holds fire&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_23

><td class="source"> 0x020600 =&gt; &quot;moves&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_24

><td class="source"> 0x020601 =&gt; &quot;patrols&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_25

><td class="source"> 0x020602 =&gt; &quot;holds position&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_26

><td class="source"> 0x020603 =&gt; &quot;stops&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_27

><td class="source"> 0x020900 =&gt; &quot;attacks&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_28

><td class="source"> 0x030000 =&gt; &quot;uses Acid Spores (Unknown Unit)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_29

><td class="source"> 0x030100 =&gt; &quot;uses Corruption (Corruptor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_30

><td class="source"> 0x030200 =&gt; &quot;uses Explode (Baneling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_31

><td class="source"> 0x030300 =&gt; &quot;researches ResearchVoidRaySpeedUpgrade (Fleet Beacon)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_32

><td class="source"> 0x030301 =&gt; &quot;researches ResearchInterceptorLaunchSpeedUpgrade (Fleet Beacon)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_33

><td class="source"> 0x030400 =&gt; &quot;uses Fungal Growth (Infestor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_34

><td class="source"> 0x030500 =&gt; &quot;uses Guardian Shield (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_35

><td class="source"> 0x030600 =&gt; &quot;repairs (MULE)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_36

><td class="source"> 0x030700 =&gt; &quot;trains a Mothership (Nexus)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_37

><td class="source"> 0x030800 =&gt; &quot;uses Feedback (High Templar)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_38

><td class="source"> 0x030900 =&gt; &quot;uses Mass Recall (Mothership)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_39

><td class="source"> 0x030A00 =&gt; &quot;uses Place Point Defense Drone (Raven)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_40

><td class="source"> 0x030C00 =&gt; &quot;trains an Archon Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_41

><td class="source"> 0x030D00 =&gt; &quot;trains a Colossus Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_42

><td class="source"> 0x030E00 =&gt; &quot;trains a High Templar Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_43

><td class="source"> 0x030F00 =&gt; &quot;trains an Immortal Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_44

><td class="source"> 0x040000 =&gt; &quot;trains a Phoenix Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_45

><td class="source"> 0x040100 =&gt; &quot;trains a Probe Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_46

><td class="source"> 0x040200 =&gt; &quot;trains a Stalker Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_47

><td class="source"> 0x040300 =&gt; &quot;trains a Void Ray Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_48

><td class="source"> 0x040400 =&gt; &quot;trains a Warp Prism Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_49

><td class="source"> 0x040500 =&gt; &quot;trains a Zealot Hallucination (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_50

><td class="source"> 0x040600 =&gt; &quot;gathers resources (MULE)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_51

><td class="source"> 0x040700 =&gt; &quot;uses HunterSeekerMissile (Raven)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_52

><td class="source"> 0x040800 =&gt; &quot;uses Calldown MULE (Orbital Command)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_53

><td class="source"> 0x040900 =&gt; &quot;uses Graviton Beam (Phoenix)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_54

><td class="source"> 0x040B00 =&gt; &quot;uses Siphon (Infestor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_55

><td class="source"> 0x040C00 =&gt; &quot;uses Spawn Changeling (Overseer)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_56

><td class="source"> 0x040D00 =&gt; &quot;uses Disguise (Changeling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_57

><td class="source"> 0x040E00 =&gt; &quot;uses Disguise As Zealot (Changeling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_58

><td class="source"> 0x040F00 =&gt; &quot;uses Disguise As Marine With Shield (Changeling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_59

><td class="source"> 0x050000 =&gt; &quot;uses Disguise As Marine Without Shield (Changeling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_60

><td class="source"> 0x050100 =&gt; &quot;uses Disguise As Zergling With Wings (Changeling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_61

><td class="source"> 0x050200 =&gt; &quot;uses Disguise As Zergling Without Wings (Changeling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_62

><td class="source"> 0x050300 =&gt; &quot;uses Phase Shift (High Templar)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_63

><td class="source"> 0x050400 =&gt; &quot;sets rally point (General Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_64

><td class="source"> 0x050500 =&gt; &quot;sets rally point (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_65

><td class="source"> 0x050600 =&gt; &quot;sets rally point (Nexus)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_66

><td class="source"> 0x050700 =&gt; &quot;sets rally point (Hatchery)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_67

><td class="source"> 0x050701 =&gt; &quot;sets rally point for drones (Hatchery)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_68

><td class="source"> 0x050800 =&gt; &quot;researches EvolveOrganicCarapace (Roach Warren)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_69

><td class="source"> 0x050801 =&gt; &quot;researches EvolveGlialRegeneration (Roach Warren)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_70

><td class="source"> 0x050802 =&gt; &quot;researches EvolveTunnelingClaws (Roach Warren)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_71

><td class="source"> 0x050900 =&gt; &quot;uses Sap Structure (Baneling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_72

><td class="source"> 0x050A00 =&gt; &quot;uses Infested Terrans (Infestor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_73

><td class="source"> 0x050B00 =&gt; &quot;uses Neural Parasite (Infestor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_74

><td class="source"> 0x050C00 =&gt; &quot;uses Spawn Mutant Larva (Queen)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_75

><td class="source"> 0x050D00 =&gt; &quot;uses Stimpack (Marauder)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_76

><td class="source"> 0x050E00 =&gt; &quot;uses Supply Drop (Orbital Command)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_77

><td class="source"> 0x050F00 =&gt; &quot;uses 250mm Strike Cannons (Thor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_78

><td class="source"> 0x060000 =&gt; &quot;uses Temporal Rift (High Templar)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_79

><td class="source"> 0x060100 =&gt; &quot;uses Time Warp (Nexus)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_80

><td class="source"> 0x060201 =&gt; &quot;researches EvolveAnabolicSynthesis2 (Ultralisk Cavern)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_81

><td class="source"> 0x060202 =&gt; &quot;researches EvolveChitinousPlating (Ultralisk Cavern)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_82

><td class="source"> 0x060300 =&gt; &quot;uses Wormhole Transit (Mothership)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_83

><td class="source"> 0x060400 =&gt; &quot;gathers resources (SCV)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_84

><td class="source"> 0x060401 =&gt; &quot;uses Return Cargo (SCV)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_85

><td class="source"> 0x060500 =&gt; &quot;gathers resources (Probe)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_86

><td class="source"> 0x060501 =&gt; &quot;uses Return Cargo (Probe)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_87

><td class="source"> 0x060700 =&gt; &quot;cancels a mutation in progress (Drone?)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_88

><td class="source"> 0x060701 =&gt; &quot;cancels something (research needed)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_89

><td class="source"> 0x060800 =&gt; &quot;cancels an attack&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_90

><td class="source"> 0x060801 =&gt; &quot;cancels a build in progress (SCV)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_91

><td class="source"> 0x060900 =&gt; &quot;cancels something (research needed)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_92

><td class="source"> 0x060901 =&gt; &quot;cancels a search in progress (ResearchSiegeTech)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_93

><td class="source"> 0x060A00 =&gt; &quot;cancels something (research needed)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_94

><td class="source"> 0x060A01 =&gt; &quot;cancels a build in progress (SCV at Planetary Fortress)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_95

><td class="source"> 0x060B00 =&gt; &quot;cancels a build in progress (Pylon)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_96

><td class="source"> 0x060C00 =&gt; &quot;repairs (SCV)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_97

><td class="source"> 0x060D00 =&gt; &quot;builds a Command Center&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_98

><td class="source"> 0x060D01 =&gt; &quot;builds a Supply Depot&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_99

><td class="source"> 0x060D02 =&gt; &quot;builds a Refinery&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_100

><td class="source"> 0x060D03 =&gt; &quot;builds a Barracks&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_101

><td class="source"> 0x060D04 =&gt; &quot;builds an Engineering Bay&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_102

><td class="source"> 0x060D05 =&gt; &quot;builds a Missile Turret&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_103

><td class="source"> 0x060D06 =&gt; &quot;builds a Bunker&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_104

><td class="source"> 0x060D08 =&gt; &quot;builds a Sensor Tower&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_105

><td class="source"> 0x060D09 =&gt; &quot;builds a Ghost Academy&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_106

><td class="source"> 0x060D0A =&gt; &quot;builds a Factory&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_107

><td class="source"> 0x060D0B =&gt; &quot;builds a Starport&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_108

><td class="source"> 0x060D0D =&gt; &quot;builds an Armory&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_109

><td class="source"> 0x060D0F =&gt; &quot;builds a Fusion Core&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_110

><td class="source"> 0x061D0E =&gt; &quot;cancels a build in progress (Terran Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_111

><td class="source"> 0x060E00 =&gt; &quot;builds an Auto Turret (Raven)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_112

><td class="source"> 0x060E01 =&gt; &quot;builds a Spider Mine (Raven)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_113

><td class="source"> 0x060E03 =&gt; &quot;builds a Sensor Tower (Raven)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_114

><td class="source"> 0x060E04 =&gt; &quot;builds a Targeting Drone (Raven)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_115

><td class="source"> 0x061E0E =&gt; &quot;cancels a build in progress (Raven Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_116

><td class="source"> 0x060F00 =&gt; &quot;uses Stimpack (Mixed Units)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_117

><td class="source"> 0x070000 =&gt; &quot;uses Cloak (Ghost)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_118

><td class="source"> 0x070001 =&gt; &quot;uses Decloak (Ghost)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_119

><td class="source"> 0x070100 =&gt; &quot;uses Snipe (Ghost)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_120

><td class="source"> 0x070200 =&gt; &quot;uses Heal (Medivac)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_121

><td class="source"> 0x070300 =&gt; &quot;uses Siege Mode (Siege Tank)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_122

><td class="source"> 0x070400 =&gt; &quot;uses Tank Mode (Siege Tank)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_123

><td class="source"> 0x070500 =&gt; &quot;uses Cloak (Banshee)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_124

><td class="source"> 0x070501 =&gt; &quot;uses Decloak (Banshee)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_125

><td class="source"> 0x070600 =&gt; &quot;uses Load (Medivac)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_126

><td class="source"> 0x070601 =&gt; &quot;uses Unload All (Medivac)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_127

><td class="source"> 0x070602 =&gt; &quot;uses Unload All At (Medivac)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_128

><td class="source"> 0x070603 =&gt; &quot;uses Unload Unit (Medivac)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_129

><td class="source"> 0x070604 =&gt; &quot;uses Load All (Medivac)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_130

><td class="source"> 0x070700 =&gt; &quot;uses Scanner Sweep (Orbital Command)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_131

><td class="source"> 0x070800 =&gt; &quot;uses Yamato Gun (Battlecruiser)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_132

><td class="source"> 0x070900 =&gt; &quot;uses Assault Mode (Viking)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_133

><td class="source"> 0x070A00 =&gt; &quot;uses Fighter Mode (Viking)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_134

><td class="source"> 0x070B00 =&gt; &quot;uses Load (Bunker)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_135

><td class="source"> 0x070B01 =&gt; &quot;uses Unload All (Bunker)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_136

><td class="source"> 0x070B02 =&gt; &quot;uses Unload All At (Bunker)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_137

><td class="source"> 0x070B03 =&gt; &quot;uses Unload Unit (Bunker)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_138

><td class="source"> 0x070B04 =&gt; &quot;uses Load All (Bunker)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_139

><td class="source"> 0x070C00 =&gt; &quot;uses Load (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_140

><td class="source"> 0x070C01 =&gt; &quot;uses Unload All (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_141

><td class="source"> 0x070C02 =&gt; &quot;uses Unload All At (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_142

><td class="source"> 0x070C03 =&gt; &quot;uses Unload Unit (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_143

><td class="source"> 0x070C04 =&gt; &quot;uses Load All (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_144

><td class="source"> 0x070D00 =&gt; &quot;uses Lift Off (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_145

><td class="source"> 0x070E00 =&gt; &quot;uses Land (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_146

><td class="source"> 0x070F00 =&gt; &quot;builds a LabTech (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_147

><td class="source"> 0x070F01 =&gt; &quot;builds a Reactor (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_148

><td class="source"> 0x071F0E =&gt; &quot;cancels an Addon (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_149

><td class="source"> 0x080000 =&gt; &quot;uses Lift Off (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_150

><td class="source"> 0x080100 =&gt; &quot;builds a LabTech (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_151

><td class="source"> 0x080101 =&gt; &quot;builds a Reactor (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_152

><td class="source"> 0x08110E =&gt; &quot;cancels an Addon (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_153

><td class="source"> 0x080200 =&gt; &quot;sets rally point (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_154

><td class="source"> 0x080300 =&gt; &quot;builds a LabTech (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_155

><td class="source"> 0x080301 =&gt; &quot;builds a Reactor (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_156

><td class="source"> 0x08130E =&gt; &quot;cancels an Addon (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_157

><td class="source"> 0x080400 =&gt; &quot;uses Lift Off (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_158

><td class="source"> 0x080500 =&gt; &quot;uses Land (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_159

><td class="source"> 0x080600 =&gt; &quot;uses Land (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_160

><td class="source"> 0x080700 =&gt; &quot;trains an SCV (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_161

><td class="source"> 0x080800 =&gt; &quot;uses Land (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_162

><td class="source"> 0x080900 =&gt; &quot;lowers a Supply Depot&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_163

><td class="source"> 0x080A00 =&gt; &quot;raises a Supply Depot&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_164

><td class="source"> 0x080B00 =&gt; &quot;trains a Marine (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_165

><td class="source"> 0x080B01 =&gt; &quot;trains a Reaper (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_166

><td class="source"> 0x080B02 =&gt; &quot;trains a Ghost (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_167

><td class="source"> 0x080B03 =&gt; &quot;trains a Marauder (Barracks)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_168

><td class="source"> 0x080C01 =&gt; &quot;trains a Siege Tank (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_169

><td class="source"> 0x080C04 =&gt; &quot;trains a Thor (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_170

><td class="source"> 0x080C05 =&gt; &quot;trains a Hellion (Factory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_171

><td class="source"> 0x080D00 =&gt; &quot;trains a Medivac (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_172

><td class="source"> 0x080D01 =&gt; &quot;trains a Banshee (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_173

><td class="source"> 0x080D02 =&gt; &quot;trains a Raven (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_174

><td class="source"> 0x080D03 =&gt; &quot;trains a Battlecruiser (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_175

><td class="source"> 0x080D04 =&gt; &quot;trains a Viking Fighter (Starport)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_176

><td class="source"> 0x080E00 =&gt; &quot;researches ResearchHiSecAutoTracking (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_177

><td class="source"> 0x080E01 =&gt; &quot;researches UpgradeBuildingArmorLevel1 (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_178

><td class="source"> 0x080E02 =&gt; &quot;researches TerranInfantryWeaponsLevel1 (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_179

><td class="source"> 0x080E03 =&gt; &quot;researches TerranInfantryWeaponsLevel2 (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_180

><td class="source"> 0x080E04 =&gt; &quot;researches TerranInfantryWeaponsLevel3 (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_181

><td class="source"> 0x080E05 =&gt; &quot;researches ResearchNeosteelFrame (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_182

><td class="source"> 0x080E06 =&gt; &quot;researches TerranInfantryArmorLevel1 (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_183

><td class="source"> 0x080E07 =&gt; &quot;researches TerranInfantryArmorLevel2 (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_184

><td class="source"> 0x080E08 =&gt; &quot;researches TerranInfantryArmorLevel3 (Engineering Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_185

><td class="source"> 0x080F03 =&gt; &quot;researches ReaperSpeed (Barracks TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_186

><td class="source"> 0x090000 =&gt; &quot;arms Silo With Nuke&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_187

><td class="source"> 0x090100 =&gt; &quot;researches StimPack (Barracks TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_188

><td class="source"> 0x090101 =&gt; &quot;researches ResearchShieldWall (Barracks TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_189

><td class="source"> 0x090102 =&gt; &quot;researches ResearchPunisherGrenades (Barracks TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_190

><td class="source"> 0x090200 =&gt; &quot;researches ResearchSiegeTech (Factory TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_191

><td class="source"> 0x090201 =&gt; &quot;researches ResearchHighCapacityBarrels (Factory TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_192

><td class="source"> 0x090300 =&gt; &quot;researches ResearchBansheeCloak (Starport TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_193

><td class="source"> 0x090302 =&gt; &quot;researches ResearchMedivacEnergyUpgrade (Starport TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_194

><td class="source"> 0x090303 =&gt; &quot;researches ResearchRavenEnergyUpgrade (Starport TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_195

><td class="source"> 0x090306 =&gt; &quot;researches ResearchSeekerMissile (Starport TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_196

><td class="source"> 0x090307 =&gt; &quot;researches ResearchDurableMaterials (Starport TechLab)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_197

><td class="source"> 0x090400 =&gt; &quot;researches ResearchPersonalCloaking (Ghost Academy)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_198

><td class="source"> 0x090401 =&gt; &quot;researches GhostMoebiusReactor (Ghost Academy)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_199

><td class="source"> 0x090405 =&gt; &quot;researches EMP (Ghost Academy)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_200

><td class="source"> 0x090502 =&gt; &quot;researches TerranVehiclePlatingLevel1 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_201

><td class="source"> 0x090503 =&gt; &quot;researches TerranVehiclePlatingLevel2 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_202

><td class="source"> 0x090504 =&gt; &quot;researches TerranVehiclePlatingLevel3 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_203

><td class="source"> 0x090505 =&gt; &quot;researches TerranVehicleWeaponsLevel1 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_204

><td class="source"> 0x090506 =&gt; &quot;researches TerranVehicleWeaponsLevel2 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_205

><td class="source"> 0x090507 =&gt; &quot;researches TerranVehicleWeaponsLevel3 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_206

><td class="source"> 0x090508 =&gt; &quot;researches TerranShipPlatingLevel1 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_207

><td class="source"> 0x090509 =&gt; &quot;researches TerranShipPlatingLevel2 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_208

><td class="source"> 0x09050A =&gt; &quot;researches TerranShipPlatingLevel3 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_209

><td class="source"> 0x09050B =&gt; &quot;researches TerranShipWeaponsLevel1 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_210

><td class="source"> 0x09050C =&gt; &quot;researches TerranShipWeaponsLevel2 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_211

><td class="source"> 0x09050D =&gt; &quot;researches TerranShipWeaponsLevel3 (Armory)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_212

><td class="source"> 0x090600 =&gt; &quot;builds a Nexus&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_213

><td class="source"> 0x090601 =&gt; &quot;builds a Pylon&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_214

><td class="source"> 0x090602 =&gt; &quot;builds an Assimilator&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_215

><td class="source"> 0x090603 =&gt; &quot;builds a Gateway&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_216

><td class="source"> 0x090604 =&gt; &quot;builds a Forge&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_217

><td class="source"> 0x090605 =&gt; &quot;builds a Fleet Beacon&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_218

><td class="source"> 0x090606 =&gt; &quot;builds a Twilight Council&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_219

><td class="source"> 0x090607 =&gt; &quot;builds a Photon Cannon&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_220

><td class="source"> 0x090609 =&gt; &quot;builds a Stargate&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_221

><td class="source"> 0x09060A =&gt; &quot;builds a Templar Archive&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_222

><td class="source"> 0x09060B =&gt; &quot;builds a Dark Shrine&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_223

><td class="source"> 0x09060C =&gt; &quot;builds a Robotics Bay&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_224

><td class="source"> 0x09060D =&gt; &quot;builds a Robotics Facility&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_225

><td class="source"> 0x09060E =&gt; &quot;builds a Cybernetics Core&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_226

><td class="source"> 0x09060F =&gt; &quot;builds an Obelisk&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_227

><td class="source"> 0x09160E =&gt; &quot;cancels a build in progress (Protoss Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_228

><td class="source"> 0x090700 =&gt; &quot;uses Load (Warp Prism)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_229

><td class="source"> 0x090701 =&gt; &quot;uses Unload All (Warp Prism)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_230

><td class="source"> 0x090702 =&gt; &quot;uses Unload All At (Warp Prism)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_231

><td class="source"> 0x090703 =&gt; &quot;uses Unload Unit (Warp Prism)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_232

><td class="source"> 0x090704 =&gt; &quot;uses Load All (Warp Prism)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_233

><td class="source"> 0x090800 =&gt; &quot;trains a Zealot (Gateway)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_234

><td class="source"> 0x090801 =&gt; &quot;trains a Stalker (Gateway)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_235

><td class="source"> 0x090803 =&gt; &quot;trains a High Templar (Gateway)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_236

><td class="source"> 0x090804 =&gt; &quot;trains a Dark Templar (Gateway)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_237

><td class="source"> 0x090805 =&gt; &quot;trains a Sentry /Disruptor (Gateway)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_238

><td class="source"> 0x090900 =&gt; &quot;trains a Phoenix (Stargate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_239

><td class="source"> 0x090902 =&gt; &quot;trains a Carrier (Stargate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_240

><td class="source"> 0x090904 =&gt; &quot;trains a Void Ray (Stargate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_241

><td class="source"> 0x090A00 =&gt; &quot;trains a Warp Prism (Robotics Facility)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_242

><td class="source"> 0x090A01 =&gt; &quot;trains an Observer (Robotics Facility)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_243

><td class="source"> 0x090A02 =&gt; &quot;trains a Colossus (Robotics Facility)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_244

><td class="source"> 0x090A03 =&gt; &quot;trains an Immortal (Robotics Facility)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_245

><td class="source"> 0x090B00 =&gt; &quot;trains a Probe (Nexus)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_246

><td class="source"> 0x090C00 =&gt; &quot;uses Psi Storm (High Templar)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_247

><td class="source"> 0x090F00 =&gt; &quot;trains an Interceptor (Carrier)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_248

><td class="source"> 0x0A0000 =&gt; &quot;researches ProtossGroundWeaponsLevel1 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_249

><td class="source"> 0x0A0001 =&gt; &quot;researches ProtossGroundWeaponsLevel2 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_250

><td class="source"> 0x0A0002 =&gt; &quot;researches ProtossGroundWeaponsLevel3 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_251

><td class="source"> 0x0A0003 =&gt; &quot;researches ProtossGroundArmorLevel1 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_252

><td class="source"> 0x0A0004 =&gt; &quot;researches ProtossGroundArmorLevel2 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_253

><td class="source"> 0x0A0005 =&gt; &quot;researches ProtossGroundArmorLevel3 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_254

><td class="source"> 0x0A0006 =&gt; &quot;researches ProtossShieldsLevel1 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_255

><td class="source"> 0x0A0007 =&gt; &quot;researches ProtossShieldsLevel2 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_256

><td class="source"> 0x0A0008 =&gt; &quot;researches ProtossShieldsLevel3 (Forge)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_257

><td class="source"> 0x0A0101 =&gt; &quot;researches ResearchGraviticBooster (Robotics Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_258

><td class="source"> 0x0A0102 =&gt; &quot;researches ResearchGraviticDrive (Robotics Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_259

><td class="source"> 0x0A0105 =&gt; &quot;researches ResearchExtendedThermalLance (Robotics Bay)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_260

><td class="source"> 0x0A0200 =&gt; &quot;researches ResearchHighTemplarEnergyUpgrade (Templar Archives)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_261

><td class="source"> 0x0A0204 =&gt; &quot;researches ResearchPsiStorm (Templar Archives)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_262

><td class="source"> 0x0A0300 =&gt; &quot;builds a Hatchery&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_263

><td class="source"> 0x0A0301 =&gt; &quot;builds a Creep Tumor&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_264

><td class="source"> 0x0A0302 =&gt; &quot;builds an Extractor&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_265

><td class="source"> 0x0A0303 =&gt; &quot;builds a Spawning Pool&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_266

><td class="source"> 0x0A0304 =&gt; &quot;builds an Evolution Chamber&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_267

><td class="source"> 0x0A0305 =&gt; &quot;builds a Hydralisk Den&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_268

><td class="source"> 0x0A0306 =&gt; &quot;builds a Spire&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_269

><td class="source"> 0x0A0307 =&gt; &quot;builds an Ultralisk Cavern&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_270

><td class="source"> 0x0A0308 =&gt; &quot;builds an Infestation Pit&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_271

><td class="source"> 0x0A0309 =&gt; &quot;builds a Nydus Network&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_272

><td class="source"> 0x0A030A =&gt; &quot;builds a Baneling Nest&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_273

><td class="source"> 0x0A030B =&gt; &quot;builds a Lurker Den&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_274

><td class="source"> 0x0A030D =&gt; &quot;builds a Roach Warren&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_275

><td class="source"> 0x0A030E =&gt; &quot;builds a Spine Crawler&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_276

><td class="source"> 0x0A030F =&gt; &quot;builds a Spore Crawler&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_277

><td class="source"> 0x0A130E =&gt; &quot;cancels a build in progress (Zerg Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_278

><td class="source"> 0x0A0400 =&gt; &quot;gathers resources (Drone)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_279

><td class="source"> 0x0A0401 =&gt; &quot;uses Return Cargo (Drone)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_280

><td class="source"> 0x0A0500 =&gt; &quot;researches zergmeleeweapons1 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_281

><td class="source"> 0x0A0501 =&gt; &quot;researches zergmeleeweapons2 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_282

><td class="source"> 0x0A0502 =&gt; &quot;researches zergmeleeweapons3 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_283

><td class="source"> 0x0A0503 =&gt; &quot;researches zerggroundarmor1 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_284

><td class="source"> 0x0A0504 =&gt; &quot;researches zerggroundarmor2 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_285

><td class="source"> 0x0A0505 =&gt; &quot;researches zerggroundarmor3 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_286

><td class="source"> 0x0A0506 =&gt; &quot;researches zergmissileweapons1 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_287

><td class="source"> 0x0A0507 =&gt; &quot;researches zergmissileweapons2 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_288

><td class="source"> 0x0A0508 =&gt; &quot;researches zergmissileweapons3 (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_289

><td class="source"> 0x0A050A =&gt; &quot;researches ResearchBurrow (Evolution Chamber)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_290

><td class="source"> 0x0A0600 =&gt; &quot;upgrades to Lair (Hatchery)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_291

><td class="source"> 0x0A0601 =&gt; &quot;cancels Lair upgrade (Hatchery)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_292

><td class="source"> 0x0A0700 =&gt; &quot;upgrades to Hive (Lair)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_293

><td class="source"> 0x0A0701 =&gt; &quot;cancels Hive upgrade (Lair)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_294

><td class="source"> 0x0A0800 =&gt; &quot;upgrades to Greater Spire (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_295

><td class="source"> 0x0A0801 =&gt; &quot;cancels Greater Spire upgrade (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_296

><td class="source"> 0x0A0901 =&gt; &quot;researches overlordspeed (Lair)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_297

><td class="source"> 0x0A0902 =&gt; &quot;researches EvolveVentralSacks (Lair)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_298

><td class="source"> 0x0A0903 =&gt; &quot;researches EnduringCorruption (Lair)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_299

><td class="source"> 0x0A0904 =&gt; &quot;researches RazorTech (Lair)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_300

><td class="source"> 0x0A0A00 =&gt; &quot;researches zerglingattackspeed (Spawning Pool)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_301

><td class="source"> 0x0A0A01 =&gt; &quot;researches zerglingmovementspeed (Spawning Pool)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_302

><td class="source"> 0x0A0B02 =&gt; &quot;researches hydraliskspeed (Hydralisk Den)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_303

><td class="source"> 0x0A0C00 =&gt; &quot;researches zergflyerattack1 (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_304

><td class="source"> 0x0A0C01 =&gt; &quot;researches zergflyerattack2 (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_305

><td class="source"> 0x0A0C02 =&gt; &quot;researches zergflyerattack3 (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_306

><td class="source"> 0x0A0C03 =&gt; &quot;researches zergflyerarmor1 (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_307

><td class="source"> 0x0A0C04 =&gt; &quot;researches zergflyerarmor2 (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_308

><td class="source"> 0x0A0C05 =&gt; &quot;researches zergflyerarmor3 (Spire)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_309

><td class="source"> 0x0A0D00 =&gt; &quot;trains a Drone (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_310

><td class="source"> 0x0A0D01 =&gt; &quot;trains a Zergling (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_311

><td class="source"> 0x0A0D02 =&gt; &quot;trains an Overlord (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_312

><td class="source"> 0x0A0D03 =&gt; &quot;trains a Hydralisk (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_313

><td class="source"> 0x0A0D04 =&gt; &quot;trains a Mutalisk (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_314

><td class="source"> 0x0A0D05 =&gt; &quot;trains a Scourge (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_315

><td class="source"> 0x0A0D06 =&gt; &quot;trains an Ultralisk (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_316

><td class="source"> 0x0A0D07 =&gt; &quot;trains a Baneling (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_317

><td class="source"> 0x0A0D09 =&gt; &quot;trains a Roach (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_318

><td class="source"> 0x0A0D0A =&gt; &quot;trains an Infestor (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_319

><td class="source"> 0x0A0D0B =&gt; &quot;trains a Corruptor (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_320

><td class="source"> 0x0A0D0C =&gt; &quot;trains a Mutalisk (Larva)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_321

><td class="source"> 0x0A0E00 =&gt; &quot;mutates into a Brood Lord (Corruptor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_322

><td class="source"> 0x0A0E01 =&gt; &quot;cancels Brood Lord mutation (Corruptor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_323

><td class="source"> 0x0A0F00 =&gt; &quot;uses Burrow (Baneling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_324

><td class="source"> 0x0B0000 =&gt; &quot;uses Unburrow (Baneling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_325

><td class="source"> 0x0B0100 =&gt; &quot;uses Burrow (Drone)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_326

><td class="source"> 0x0B0200 =&gt; &quot;uses Unburrow (Drone)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_327

><td class="source"> 0x0B0300 =&gt; &quot;uses Burrow (Hydralisk)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_328

><td class="source"> 0x0B0400 =&gt; &quot;uses Unburrow (Hydralisk)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_329

><td class="source"> 0x0B0500 =&gt; &quot;uses Burrow (Roach)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_330

><td class="source"> 0x0B0600 =&gt; &quot;uses Unburrow (Roach)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_331

><td class="source"> 0x0B0700 =&gt; &quot;uses Burrow (Zergling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_332

><td class="source"> 0x0B0800 =&gt; &quot;uses Unburrow (Zergling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_333

><td class="source"> 0x0B0900 =&gt; &quot;uses Burrow (InfestorTerran)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_334

><td class="source"> 0x0B0A00 =&gt; &quot;uses Unburrow (InfestorTerran)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_335

><td class="source"> 0x0B0B00 =&gt; &quot;uses Load (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_336

><td class="source"> 0x0B0B01 =&gt; &quot;uses Unload All (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_337

><td class="source"> 0x0B0B02 =&gt; &quot;uses Unload All At (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_338

><td class="source"> 0x0B0B03 =&gt; &quot;uses Unload Unit (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_339

><td class="source"> 0x0B0B04 =&gt; &quot;uses Load All (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_340

><td class="source"> 0x0B0E00 =&gt; &quot;trains a Zealot (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_341

><td class="source"> 0x0B0E01 =&gt; &quot;trains a Stalker (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_342

><td class="source"> 0x0B0E02 =&gt; &quot;trains an Immortal (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_343

><td class="source"> 0x0B0E03 =&gt; &quot;trains a High Templar (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_344

><td class="source"> 0x0B0E04 =&gt; &quot;trains a Dark Templar (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_345

><td class="source"> 0x0B0E05 =&gt; &quot;trains a Sentry (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_346

><td class="source"> 0x0B0F00 =&gt; &quot;uses Burrow (Queen)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_347

><td class="source"> 0x0C0000 =&gt; &quot;uses Unburrow (Queen)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_348

><td class="source"> 0x0C0100 =&gt; &quot;mutates into a Baneling (Zergling)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_349

><td class="source"> 0x0C0200 =&gt; &quot;uses Load (Nydus Worm)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_350

><td class="source"> 0x0C0201 =&gt; &quot;uses Unload All (Nydus Worm)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_351

><td class="source"> 0x0C0202 =&gt; &quot;uses Unload All At (Nydus Worm)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_352

><td class="source"> 0x0C0203 =&gt; &quot;uses Unload Unit (Nydus Worm)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_353

><td class="source"> 0x0C0204 =&gt; &quot;uses Load All (Nydus Worm)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_354

><td class="source"> 0x0C0300 =&gt; &quot;uses Blink (Stalker)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_355

><td class="source"> 0x0C0400 =&gt; &quot;uses Burrow (Infestor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_356

><td class="source"> 0x0C0500 =&gt; &quot;uses Unburrow (Infestor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_357

><td class="source"> 0x0C0600 =&gt; &quot;mutates into an Overseer (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_358

><td class="source"> 0x0C0601 =&gt; &quot;cancels Overseer mutation&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_359

><td class="source"> 0x0C0700 =&gt; &quot;upgrades to Planetary Fortress (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_360

><td class="source"> 0x0C0701 =&gt; &quot;cancels Planetary Fortress upgrade&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_361

><td class="source"> 0x0C0900 =&gt; &quot;researches Disease (Infestation Pit)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_362

><td class="source"> 0x0C0901 =&gt; &quot;researches InfestorPeristalsis (Infestation Pit)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_363

><td class="source"> 0x0C0902 =&gt; &quot;researches InfestorEnergyUpgrade (Infestation Pit)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_364

><td class="source"> 0x0C0A00 =&gt; &quot;researches EvolveCentrificalHooks (Baneling Nest)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_365

><td class="source"> 0x0C0B00 =&gt; &quot;uses Burrow (Ultralisk)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_366

><td class="source"> 0x0C0C00 =&gt; &quot;uses Unburrow (Ultralisk)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_367

><td class="source"> 0x0C0D00 =&gt; &quot;uses D8 Charge (Unknown Unit)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_368

><td class="source"> 0x0C0E00 =&gt; &quot;upgrades to Orbital Command (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_369

><td class="source"> 0x0C0E01 =&gt; &quot;cancels Orbital Command upgrade (Command Center)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_370

><td class="source"> 0x0C0F00 =&gt; &quot;upgrades to Warp Gate (Gateway)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_371

><td class="source"> 0x0C0F01 =&gt; &quot;cancels Warp Gate upgrade (Gateway)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_372

><td class="source"> 0x0D0000 =&gt; &quot;mutates into a Gateway (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_373

><td class="source"> 0x0D0001 =&gt; &quot;cancels Gateway mutation (Warp Gate)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_374

><td class="source"> 0x0D0100 =&gt; &quot;uses Lift Off (Orbital Command)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_375

><td class="source"> 0x0D0200 =&gt; &quot;uses Land (Orbital Command)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_376

><td class="source"> 0x0D0300 =&gt; &quot;uses Force Field (Sentry)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_377

><td class="source"> 0x0D0400 =&gt; &quot;uses Phasing Mode (Warp Prism)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_378

><td class="source"> 0x0D0500 =&gt; &quot;uses Transport Mode (Warp Prism)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_379

><td class="source"> 0x0D0600 =&gt; &quot;researches BattlecruiserEnableSpecializations (Fusion Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_380

><td class="source"> 0x0D0601 =&gt; &quot;researches BattlecruiserBehemothReactor (Fusion Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_381

><td class="source"> 0x0D0700 =&gt; &quot;researches ProtossAirWeaponsLevel1 (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_382

><td class="source"> 0x0D0701 =&gt; &quot;researches ProtossAirWeaponsLevel2 (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_383

><td class="source"> 0x0D0702 =&gt; &quot;researches ProtossAirWeaponsLevel3 (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_384

><td class="source"> 0x0D0703 =&gt; &quot;researches ProtossAirArmorLevel1 (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_385

><td class="source"> 0x0D0704 =&gt; &quot;researches ProtossAirArmorLevel2 (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_386

><td class="source"> 0x0D0705 =&gt; &quot;researches ProtossAirArmorLevel3 (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_387

><td class="source"> 0x0D0706 =&gt; &quot;researches ResearchWarpGate (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_388

><td class="source"> 0x0D0709 =&gt; &quot;researches ResearchHallucination (Cybernetics Core)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_389

><td class="source"> 0x0D0800 =&gt; &quot;researches Charge (Twilight Council)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_390

><td class="source"> 0x0D0801 =&gt; &quot;researches BlinkTech (Twilight Council)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_391

><td class="source"> 0x0D0900 =&gt; &quot;uses Tactical Nuclear Strike (Ghost)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_392

><td class="source"> 0x0D0901 =&gt; &quot;cancels Tactical Nuclear Strike (Ghost)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_393

><td class="source"> 0x0D0B00 =&gt; &quot;uses Salvage (Bunker)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_394

><td class="source"> 0x0D0C00 =&gt; &quot;uses EMP (Ghost)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_395

><td class="source"> 0x0D0D00 =&gt; &quot;uses Vortex (Mothership)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_396

><td class="source"> 0x0D0E00 =&gt; &quot;trains a Queen (Hatchery, Lair or Hive)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_397

><td class="source"> 0x0D0F00 =&gt; &quot;uses Burrow (Creep Tumor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_398

><td class="source"> 0x0E0000 =&gt; &quot;uses Transfusion (Queen)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_399

><td class="source"> 0x0E0900 =&gt; &quot;attacks (Mixed Units)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_400

><td class="source"> 0x0E0A00 =&gt; &quot;uses Stimpack (Mixed Units)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_401

><td class="source"> 0x0E0B00 =&gt; &quot;stops (Mixed Units)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_402

><td class="source"> 0x0E0C00 =&gt; &quot;stops (Mixed Units)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_403

><td class="source"> 0x0E0D00 =&gt; &quot;uses Generate Creep (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_404

><td class="source"> 0x0E0D01 =&gt; &quot;cancels Generate Creep (Overlord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_405

><td class="source"> 0x0E0E00 =&gt; &quot;builds Creep Tumor (Queen)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_406

><td class="source"> 0x0E1E0E =&gt; &quot;cancels a build in progress (Queen Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_407

><td class="source"> 0x0E0F00 =&gt; &quot;uses Uproot (Spine Crawler)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_408

><td class="source"> 0x0F0000 =&gt; &quot;uses Uproot (Spore Crawler)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_409

><td class="source"> 0x0F0100 =&gt; &quot;uses Root (Spine Crawler)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_410

><td class="source"> 0x0F0200 =&gt; &quot;uses Root (Spore Crawler)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_411

><td class="source"> 0x0F0300 =&gt; &quot;builds Creep Tumor (Creep Tumor)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_412

><td class="source"> 0x0F130E =&gt; &quot;cancels a build in progress (Creep Tumor Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_413

><td class="source"> 0x0F0400 =&gt; &quot;uses Auto Turret (Raven)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_414

><td class="source"> 0x0F0500 =&gt; &quot;uses Archon Warp (High Templar or Dark Templar)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_415

><td class="source"> 0x0F0600 =&gt; &quot;builds a Nydus Canal (Nydus Network)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_416

><td class="source"> 0x0F160E =&gt; &quot;cancels a build in progress (Nydus Network Building)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_417

><td class="source"> 0x0F0700 =&gt; &quot;trains Broodling Escort (Brood Lord)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_418

><td class="source"> 0x0F0800 =&gt; &quot;uses Charge (Zealot)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_419

><td class="source"> 0x0F0A00 =&gt; &quot;mutates into an Infested Terran (Infested Terrans Egg)&quot;,<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_420

><td class="source"> 0xFFFF0F =&gt; &quot;right-clicks&quot;<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_421

><td class="source"> );<br></td></tr
><tr
id=sl_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_422

><td class="source">?&gt;<br></td></tr
></table></pre>
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
</td>
</tr></table>

 
<script type="text/javascript">
 var lineNumUnderMouse = -1;
 
 function gutterOver(num) {
 gutterOut();
 var newTR = document.getElementById('gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_' + num);
 if (newTR) {
 newTR.className = 'undermouse';
 }
 lineNumUnderMouse = num;
 }
 function gutterOut() {
 if (lineNumUnderMouse != -1) {
 var oldTR = document.getElementById(
 'gr_svn3cae61303e6b1b6405fe1878476c52db5594c7c9_' + lineNumUnderMouse);
 if (oldTR) {
 oldTR.className = '';
 }
 lineNumUnderMouse = -1;
 }
 }
 var numsGenState = {table_base_id: 'nums_table_'};
 var srcGenState = {table_base_id: 'src_table_'};
 var alignerRunning = false;
 var startOver = false;
 function setLineNumberHeights() {
 if (alignerRunning) {
 startOver = true;
 return;
 }
 numsGenState.chunk_id = 0;
 numsGenState.table = document.getElementById('nums_table_0');
 numsGenState.row_num = 0;
 if (!numsGenState.table) {
 return; // Silently exit if no file is present.
 }
 srcGenState.chunk_id = 0;
 srcGenState.table = document.getElementById('src_table_0');
 srcGenState.row_num = 0;
 alignerRunning = true;
 continueToSetLineNumberHeights();
 }
 function rowGenerator(genState) {
 if (genState.row_num < genState.table.rows.length) {
 var currentRow = genState.table.rows[genState.row_num];
 genState.row_num++;
 return currentRow;
 }
 var newTable = document.getElementById(
 genState.table_base_id + (genState.chunk_id + 1));
 if (newTable) {
 genState.chunk_id++;
 genState.row_num = 0;
 genState.table = newTable;
 return genState.table.rows[0];
 }
 return null;
 }
 var MAX_ROWS_PER_PASS = 1000;
 function continueToSetLineNumberHeights() {
 var rowsInThisPass = 0;
 var numRow = 1;
 var srcRow = 1;
 while (numRow && srcRow && rowsInThisPass < MAX_ROWS_PER_PASS) {
 numRow = rowGenerator(numsGenState);
 srcRow = rowGenerator(srcGenState);
 rowsInThisPass++;
 if (numRow && srcRow) {
 if (numRow.offsetHeight != srcRow.offsetHeight) {
 numRow.firstChild.style.height = srcRow.offsetHeight + 'px';
 }
 }
 }
 if (rowsInThisPass >= MAX_ROWS_PER_PASS) {
 setTimeout(continueToSetLineNumberHeights, 10);
 } else {
 alignerRunning = false;
 if (startOver) {
 startOver = false;
 setTimeout(setLineNumberHeights, 500);
 }
 }
 }
 function initLineNumberHeights() {
 // Do 2 complete passes, because there can be races
 // between this code and prettify.
 startOver = true;
 setTimeout(setLineNumberHeights, 250);
 window.onresize = setLineNumberHeights;
 }
 initLineNumberHeights();
</script>

 
 
 <div id="log">
 <div style="text-align:right">
 <a class="ifCollapse" href="#" onclick="_toggleMeta(this); return false">Show details</a>
 <a class="ifExpand" href="#" onclick="_toggleMeta(this); return false">Hide details</a>
 </div>
 <div class="ifExpand">
 
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="changelog">
 <p>Change log</p>
 <div>
 <a href="/p/phpsc2replay/source/detail?spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9&amp;r=805078b9755c2045853752d5d0739339fff31e0b">805078b9755c</a>
 by zeta.two
 on Aug 1, 2010
 &nbsp; <a href="/p/phpsc2replay/source/diff?spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9&r=805078b9755c2045853752d5d0739339fff31e0b&amp;format=side&amp;path=/php/betaphase1/abilitycodes.php&amp;old_path=/php/betaphase1/abilitycodes.php&amp;old=">Diff</a>
 </div>
 <pre>Merged C++ project.</pre>
 </div>
 
 
 
 
 
 
 <script type="text/javascript">
 var detail_url = '/p/phpsc2replay/source/detail?r=805078b9755c2045853752d5d0739339fff31e0b&spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9';
 var publish_url = '/p/phpsc2replay/source/detail?r=805078b9755c2045853752d5d0739339fff31e0b&spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9#publish';
 // describe the paths of this revision in javascript.
 var changed_paths = [];
 var changed_urls = [];
 
 changed_paths.push('/CMakeLists.txt');
 changed_urls.push('/p/phpsc2replay/source/browse/CMakeLists.txt?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/README');
 changed_urls.push('/p/phpsc2replay/source/browse/README?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/betaphase1/abilitycodes.php');
 changed_urls.push('/p/phpsc2replay/source/browse/betaphase1/abilitycodes.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/betaphase1/mpqfile.php');
 changed_urls.push('/p/phpsc2replay/source/browse/betaphase1/mpqfile.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/betaphase1/php4/mpqfile.php');
 changed_urls.push('/p/phpsc2replay/source/browse/betaphase1/php4/mpqfile.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/betaphase1/php4/sc2replay.php');
 changed_urls.push('/p/phpsc2replay/source/browse/betaphase1/php4/sc2replay.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/betaphase1/sc2replay.php');
 changed_urls.push('/p/phpsc2replay/source/browse/betaphase1/sc2replay.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/mpqfile.php');
 changed_urls.push('/p/phpsc2replay/source/browse/mpqfile.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/betaphase1/abilitycodes.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/betaphase1/abilitycodes.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 var selected_path = '/php/betaphase1/abilitycodes.php';
 
 
 changed_paths.push('/php/betaphase1/mpqfile.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/betaphase1/mpqfile.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/betaphase1/php4/mpqfile.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/betaphase1/php4/mpqfile.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/betaphase1/php4/sc2replay.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/betaphase1/php4/sc2replay.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/betaphase1/sc2replay.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/betaphase1/sc2replay.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/mpqfile.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/mpqfile.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/sc2replay.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/sc2replay.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/sc2replayutils.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/sc2replayutils.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/php/upload_file.php');
 changed_urls.push('/p/phpsc2replay/source/browse/php/upload_file.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/sc2replay.php');
 changed_urls.push('/p/phpsc2replay/source/browse/sc2replay.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/sc2replayutils.php');
 changed_urls.push('/p/phpsc2replay/source/browse/sc2replayutils.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/gameevents.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/gameevents.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/gameevents.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/gameevents.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/info.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/info.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/info.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/info.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/messageevents.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/messageevents.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/messageevents.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/messageevents.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/mpq.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/mpq.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/mpq.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/mpq.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/mpqimpl.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/mpqimpl.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/mpqimpl.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/mpqimpl.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/player.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/player.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/player.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/player.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/replay.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/replay.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/replay.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/replay.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/syncevents.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/src/syncevents.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/syncevents.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/syncevents.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/types.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/types.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/util.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/util.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/src/valueparser.h');
 changed_urls.push('/p/phpsc2replay/source/browse/src/valueparser.h?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/tools/CMakeLists.txt');
 changed_urls.push('/p/phpsc2replay/source/browse/tools/CMakeLists.txt?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/tools/detailsparser.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/tools/detailsparser.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/tools/unpack.cpp');
 changed_urls.push('/p/phpsc2replay/source/browse/tools/unpack.cpp?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 changed_paths.push('/upload_file.php');
 changed_urls.push('/p/phpsc2replay/source/browse/upload_file.php?r\x3d805078b9755c2045853752d5d0739339fff31e0b\x26spec\x3dsvn3cae61303e6b1b6405fe1878476c52db5594c7c9');
 
 
 function getCurrentPageIndex() {
 for (var i = 0; i < changed_paths.length; i++) {
 if (selected_path == changed_paths[i]) {
 return i;
 }
 }
 }
 function getNextPage() {
 var i = getCurrentPageIndex();
 if (i < changed_paths.length - 1) {
 return changed_urls[i + 1];
 }
 return null;
 }
 function getPreviousPage() {
 var i = getCurrentPageIndex();
 if (i > 0) {
 return changed_urls[i - 1];
 }
 return null;
 }
 function gotoNextPage() {
 var page = getNextPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoPreviousPage() {
 var page = getPreviousPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoDetailPage() {
 window.location = detail_url;
 }
 function gotoPublishPage() {
 window.location = publish_url;
 }
</script>

 
 <style type="text/css">
 #review_nav {
 border-top: 3px solid white;
 padding-top: 6px;
 margin-top: 1em;
 }
 #review_nav td {
 vertical-align: middle;
 }
 #review_nav select {
 margin: .5em 0;
 }
 </style>
 <div id="review_nav">
 <table><tr><td>Go to:&nbsp;</td><td>
 <select name="files_in_rev" onchange="window.location=this.value">
 
 <option value="/p/phpsc2replay/source/browse/CMakeLists.txt?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/CMakeLists.txt</option>
 
 <option value="/p/phpsc2replay/source/browse/README?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/README</option>
 
 <option value="/p/phpsc2replay/source/browse/betaphase1/abilitycodes.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/betaphase1/abilitycodes.php</option>
 
 <option value="/p/phpsc2replay/source/browse/betaphase1/mpqfile.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/betaphase1/mpqfile.php</option>
 
 <option value="/p/phpsc2replay/source/browse/betaphase1/php4/mpqfile.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/betaphase1/php4/mpqfile.php</option>
 
 <option value="/p/phpsc2replay/source/browse/betaphase1/php4/sc2replay.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/betaphase1/php4/sc2replay.php</option>
 
 <option value="/p/phpsc2replay/source/browse/betaphase1/sc2replay.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/betaphase1/sc2replay.php</option>
 
 <option value="/p/phpsc2replay/source/browse/mpqfile.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/mpqfile.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/betaphase1/abilitycodes.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 selected="selected"
 >/php/betaphase1/abilitycodes.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/betaphase1/mpqfile.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/betaphase1/mpqfile.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/betaphase1/php4/mpqfile.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/betaphase1/php4/mpqfile.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/betaphase1/php4/sc2replay.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/betaphase1/php4/sc2replay.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/betaphase1/sc2replay.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/betaphase1/sc2replay.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/mpqfile.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/mpqfile.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/sc2replay.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/sc2replay.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/sc2replayutils.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/sc2replayutils.php</option>
 
 <option value="/p/phpsc2replay/source/browse/php/upload_file.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/php/upload_file.php</option>
 
 <option value="/p/phpsc2replay/source/browse/sc2replay.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/sc2replay.php</option>
 
 <option value="/p/phpsc2replay/source/browse/sc2replayutils.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/sc2replayutils.php</option>
 
 <option value="/p/phpsc2replay/source/browse/src/gameevents.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/gameevents.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/gameevents.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/gameevents.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/info.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/info.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/info.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/info.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/messageevents.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/messageevents.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/messageevents.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/messageevents.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/mpq.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/mpq.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/mpq.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/mpq.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/mpqimpl.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/mpqimpl.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/mpqimpl.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/mpqimpl.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/player.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/player.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/player.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/player.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/replay.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/replay.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/replay.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/replay.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/syncevents.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/syncevents.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/src/syncevents.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/syncevents.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/types.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/types.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/util.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/util.h</option>
 
 <option value="/p/phpsc2replay/source/browse/src/valueparser.h?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/src/valueparser.h</option>
 
 <option value="/p/phpsc2replay/source/browse/tools/CMakeLists.txt?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/tools/CMakeLists.txt</option>
 
 <option value="/p/phpsc2replay/source/browse/tools/detailsparser.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/tools/detailsparser.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/tools/unpack.cpp?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/tools/unpack.cpp</option>
 
 <option value="/p/phpsc2replay/source/browse/upload_file.php?r=805078b9755c2045853752d5d0739339fff31e0b&amp;spec=svn3cae61303e6b1b6405fe1878476c52db5594c7c9"
 
 >/upload_file.php</option>
 
 </select>
 </td></tr></table>
 
 
 



 
 </div>
 
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="older_bubble">
 <p>Older revisions</p>
 
 <a href="/p/phpsc2replay/source/list?path=/php/betaphase1/abilitycodes.php&r=805078b9755c2045853752d5d0739339fff31e0b">All revisions of this file</a>
 </div>
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="fileinfo_bubble">
 <p>File info</p>
 
 <div>Size: 20367 bytes,
 422 lines</div>
 
 <div><a href="//phpsc2replay.googlecode.com/hg/php/betaphase1/abilitycodes.php">View raw file</a></div>
 </div>
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 </div>
 </div>


</div>

</div>
</div>

<script src="https://ssl.gstatic.com/codesite/ph/16877346213899399380/js/prettify/prettify.js"></script>
<script type="text/javascript">prettyPrint();</script>


<script src="https://ssl.gstatic.com/codesite/ph/16877346213899399380/js/source_file_scripts.js"></script>

 <script type="text/javascript" src="https://kibbles.googlecode.com/files/kibbles-1.3.3.comp.js"></script>
 <script type="text/javascript">
 var lastStop = null;
 var initialized = false;
 
 function updateCursor(next, prev) {
 if (prev && prev.element) {
 prev.element.className = 'cursor_stop cursor_hidden';
 }
 if (next && next.element) {
 next.element.className = 'cursor_stop cursor';
 lastStop = next.index;
 }
 }
 
 function pubRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftDestroyed(data) {
 updateCursorForCell(data.cellId, 'nocursor');
 if (initialized) {
 reloadCursors();
 }
 }
 function reloadCursors() {
 kibbles.skipper.reset();
 loadCursors();
 if (lastStop != null) {
 kibbles.skipper.setCurrentStop(lastStop);
 }
 }
 // possibly the simplest way to insert any newly added comments
 // is to update the class of the corresponding cursor row,
 // then refresh the entire list of rows.
 function updateCursorForCell(cellId, className) {
 var cell = document.getElementById(cellId);
 // we have to go two rows back to find the cursor location
 var row = getPreviousElement(cell.parentNode);
 row.className = className;
 }
 // returns the previous element, ignores text nodes.
 function getPreviousElement(e) {
 var element = e.previousSibling;
 if (element.nodeType == 3) {
 element = element.previousSibling;
 }
 if (element && element.tagName) {
 return element;
 }
 }
 function loadCursors() {
 // register our elements with skipper
 var elements = CR_getElements('*', 'cursor_stop');
 var len = elements.length;
 for (var i = 0; i < len; i++) {
 var element = elements[i]; 
 element.className = 'cursor_stop cursor_hidden';
 kibbles.skipper.append(element);
 }
 }
 function toggleComments() {
 CR_toggleCommentDisplay();
 reloadCursors();
 }
 function keysOnLoadHandler() {
 // setup skipper
 kibbles.skipper.addStopListener(
 kibbles.skipper.LISTENER_TYPE.PRE, updateCursor);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_top', 50);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_bottom', 100);
 // Register our keys
 kibbles.skipper.addFwdKey("n");
 kibbles.skipper.addRevKey("p");
 kibbles.keys.addKeyPressListener(
 'u', function() { window.location = detail_url; });
 kibbles.keys.addKeyPressListener(
 'r', function() { window.location = detail_url + '#publish'; });
 
 kibbles.keys.addKeyPressListener('j', gotoNextPage);
 kibbles.keys.addKeyPressListener('k', gotoPreviousPage);
 
 
 }
 </script>
<script src="https://ssl.gstatic.com/codesite/ph/16877346213899399380/js/code_review_scripts.js"></script>
<script type="text/javascript">
 function showPublishInstructions() {
 var element = document.getElementById('review_instr');
 if (element) {
 element.className = 'opened';
 }
 }
 var codereviews;
 function revsOnLoadHandler() {
 // register our source container with the commenting code
 var paths = {'svn3cae61303e6b1b6405fe1878476c52db5594c7c9': '/php/betaphase1/abilitycodes.php'}
 codereviews = CR_controller.setup(
 {"profileUrl":["/u/olivier.locci@gmail.com/"],"token":"0132b5d831fb9fa7b7f23fbb1515fcd1","assetHostPath":"https://ssl.gstatic.com/codesite/ph","domainName":null,"assetVersionPath":"https://ssl.gstatic.com/codesite/ph/16877346213899399380","projectHomeUrl":"/p/phpsc2replay","relativeBaseUrl":"","projectName":"phpsc2replay","loggedInUserEmail":"olivier.locci@gmail.com"}, '', 'svn3cae61303e6b1b6405fe1878476c52db5594c7c9', paths,
 CR_BrowseIntegrationFactory);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, showPublishInstructions);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_PUB_PLATE, pubRevealed);
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, draftRevealed);
 codereviews.registerActivityListener(CR_ActivityType.DISCARD_DRAFT_COMMENT, draftDestroyed);
 
 
 
 
 
 
 
 var initialized = true;
 reloadCursors();
 }
 window.onload = function() {keysOnLoadHandler(); revsOnLoadHandler();};

</script>
<script type="text/javascript" src="https://ssl.gstatic.com/codesite/ph/16877346213899399380/js/dit_scripts.js"></script>

 
 
 
 <script type="text/javascript" src="https://ssl.gstatic.com/codesite/ph/16877346213899399380/js/ph_core.js"></script>
 
 
 
 
 <script type="text/javascript" src="/js/codesite_product_dictionary_ph.pack.04102009.js"></script>
</div> 
<div id="footer" dir="ltr">
 <div class="text">
 &copy;2011 Google -
 <a href="/projecthosting/terms.html">Terms</a> -
 <a href="http://www.google.com/privacy.html">Privacy</a> -
 <a href="/p/support/">Project Hosting Help</a>
 </div>
</div>
 <div class="hostedBy" style="margin-top: -20px;">
 <span style="vertical-align: top;">Powered by <a href="http://code.google.com/projecthosting/">Google Project Hosting</a></span>
 </div>
 
 


 
 </body>
</html>

