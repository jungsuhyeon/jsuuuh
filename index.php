<?php 
header("content-type:text/html; charset=utf-8");
session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head> 
 <meta charset="utf-8"/>
  <title> 한율, 옛어머니의 지혜에서 찾은 아름다움 | 한율 </title>  
  <!--[if IE 8]> 
	<link rel="stylesheet" type="text/css" href="css/ie8.css"/>  
  <![endif]-->
  <!--[if IE 7]> 
	<link rel="stylesheet" type="text/css" href="css/ie7.css"/>  
  <![endif]-->
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>


  <style>
	/* #################초기화###################*/
	*{margin:0; padding:0;}
	li{list-style:none;}
	a:link, a:visited{text-decoration:none; color:#333; }
	a:hover, a:focus{}
	
	body, #wrapper, #wrap, #header, #visualWrap, #sectionWrap, #linkAreaWrap, #footer{margin:0; padding:0;}
	body{font-family:돋움, dotum, gulim, 굴림;}
	img{border:none;}


	@font-face{	font-family:"dotumL"; src:url("font/KoPubDotumLight.woff");	 } 


	#skipNav{position:absolute; top:0; width:100%; z-index:15;}
	#skipNav li a:link, #skipNav li a:visited{
		display:block; 
		width:100%;
		height:23px;
		line-height:23px;
		background-color:#333; 
		color:#fff;
		text-align:center;
		position:absolute;
		left:0;
		top:-100px;*/
		padding:10px 0;
		font-size:14px
		}
	#skipNav li a:focus{color:#fff; top:0;}
	
	
	#wrapper{width:100%;  max-width:1600px; margin:0 auto;}
	#wrap{max-width:1280px; margin:0 auto;}
	#header{width:100%; height:156px; text-align:center; margin:0 auto; position:relative;}

	/* ############################# header +  logo  ###############################*/

	#logo{width:98%; height:82px; border-bottom:1px solid #eee; margin:0 auto; padding-top:23px;}
	#logo h1 img{width:220px; height:47px; padding:10px 0 25px 0; }

	/* ############################# header + infoNav  ###############################*/
	
	#infoNav{width:98%; text-align:right; padding-top:5px; margin:0 auto; position:absolute; top:0; right:1%;}
	#infoNav a{color:#888; display:inline-block; padding:0 5px 0 0px; font-size:13px;}
	#infoNav a:last-child{padding-right:0;}
	#infoNav a:hover, #infoNav a:focus{color:#333}
	#infoNav span{color:#ddd; font-size:10px;}


	/* ############################# header +  gnb  ###############################*/

	#gnb{width:98%; height:48px; line-height:48px; margin:0 auto;}
	
	#gnb #nav{width:100%; text-align:center;   position:relative;}

	#gnb #mainNav{width:700px;  margin:0 auto; font-family:"dotumL"}

	#gnb #MOBnav{display:none;}
	#gnb #mainNav li.navlist{ font-size:18px;   display:inline; font-weight:bold; }
	#gnb #mainNav li a{
		color:#595959; 
		display:inline-block;  
		text-align:center; 
		width:135px; 		
		}
	#gnb #mainNav li span{color:#878787;  }
	#gnb #mainNav li:hover a, #gnb #nav li:hover span{color:#000; }	


	#gnb #mainNav li#color:hover a span#brown{color:#916745; }
	#gnb #mainNav li#color a em{font-style:normal;}

	/* #############################  gnb + subNav  ###############################*/

	#gnb #subNav{
		width:100%;
		height:225px; 
		background-color:#fff; 
		border-top:1px solid #eee;
		position:absolute; 
		left:0; 
		top:48px; 
		z-index:7;
		text-align:left;
		}


	#gnb #subNav #sub{width:675px; margin:0 auto; }
	#gnb #subNav #sub li{float:left; width:145px;  line-height:1.7em; padding-top:10px;}
	#gnb #subNav #sub li a{font-size:14px; color:#777; display:block; }
	#gnb #subNav #sub li a:hover{color:#333;}
	#gnb #subNav #sub .s1{width:149px; padding-left:15px;}
	#gnb #subNav #sub .s3{width:138px;}
/*
	#gnb #subNav{display:none;}
	#gnb:hover #subNav{display:block;}
*/

	/* ############################# visual ###############################*/

	#visualWrap{
		width:100%;
		margin:1px auto 0;	
		height:459px;
		}
	#visual{	
		width:98%; 		
		height:100%;
		margin:0 auto;
		position:relative;
		overflow:hidden;				
		}			
	#visual #visual_bg {width:98%; }
	#visual #visual_bg img{width:120%; height:415px;}

	#visual #textWrap{width:370px; padding-left:200px;}
	#textWrap p#visual_h1 img{
		width:370px; 		
		position:absolute;
		left:15%;
		top:10%;
		animation:h1_animation 2s 1 ease-in;
		}
	@keyframes h1_animation{
		0%{left:15%; top:7%; opacity:0;}
		50%{left:15%; top:7%; opacity:0;}
		100%{left:15%; top:10%; opacity:1;}
	}

	#textWrap p#visual_normal{
		color:#c86355; 
		padding-bottom:20px;  		
		line-height:1.5em;
		position:absolute;
		left:15%;
		top:53%;
		z-index:3;
		animation:normal_animation 2s 1 ease-in;
		}

	@keyframes normal_animation{
		0%{left:15%; top:51%; opacity:0;}
		60%{left:15%; top:51%; opacity:0;}
		100%{left:15%; top:53%; opacity:1;}
	}

	#textWrap p#visual_btn{
		display:inline-block; 
		padding:10px 27px; 
		border:1px solid #aaa;
		position:absolute;		
		left:15%;
		top:73%;
		z-index:2;
		animation:btn_animation 2.3s 1 ease-in;
		}

	@keyframes btn_animation{
		0%{left:15%; top:71%; opacity:0;}
		75%{left:15%; top:71%; opacity:0;}
		100%{left:15%; top:73%; opacity:1;}
	}

	#textWrap p#visual_btn a{color:#777;  font-size:12px; display:block;}
	#textWrap p#visual_btn:hover{background-color:#555; }

	#imgWrap{
		width:900px;	
		height:400px;
		position:absolute;
		right:-5%;
		top:5%;		
		animation:visual_image 3.5s 1 ease-in-out;
		z-index:1;
		}
	@keyframes visual_image{
		0%{right:7%; top:9%; opacity:0;}
		40%{right:7%; top:5%; opacity:1;}
		100%{right:-5%; top:5%; opacity:1;}
		}

	#imgWrap img{width:95%; height:95%;	}

	#barWrap{
		width:1280px;
		height:10px; 
		background-color:#916745;  
		position:absolute;
		left:0;
		bottom:43px;
		z-index:5;
		animation:bar-ani 5.5s ease-out;
		}
	@keyframes bar-ani{
		0%{width:0px; }		
		100%{width:100%;}
	}
	#barWrap #bar{width:100%; height:100%; }
	
	#slideControl img{
		display:inline-block;
		width:40px;
		height:79px;
		background-color:rgba(0,0,0,0.2);
		cursor:pointer;}
	#slideControl img:hover{background-color:rgba(0,0,0,0.4);}

	#slideControl #left{position:absolute; left:-9999px; top:175px; width:1px; height:1px;}
	#slideControl #right{position:absolute; right:-9999px; top:175px; z-index:6; width:1px; height:1px;}


	
	#visual #ad2{position:absolute; left:0; top:0;}
	#visual #visual2_bg {width:98%; }
	#visual #visual2_bg img{width:105%; height:415px; }

	#visual #textWrap2{width:370px; padding-left:200px;}
	#textWrap2 p#visual2_h1 img{
		width:370px; 		
		position:absolute;
		left:15%;
		top:10%;
		animation:h1_animation2 2s 1 ease-in;
		}
	@keyframes h1_animation2{
		0%{left:15%; top:7%; opacity:0;}
		50%{left:15%; top:7%; opacity:0;}
		100%{left:15%; top:10%; opacity:1;}
	}
	#textWrap2 p#visual2_normal{
		color:#6b5b50; 
		padding-bottom:20px;  		
		line-height:1.5em;
		position:absolute;
		left:15%;
		top:57%;
		z-index:3;
		animation:normal_animation2 2s 1 ease-in;
		}

	@keyframes normal_animation2{
		0%{left:15%; top:55%; opacity:0;}
		60%{left:15%; top:55%; opacity:0;}
		100%{left:15%; top:57%; opacity:1;}
	}

	#textWrap2 p#visual2_btn{
		display:inline-block; 
		padding:10px 27px; 
		border:1px solid #aaa;
		position:absolute;		
		left:15%;
		top:80%;
		z-index:2;
		animation:btn_animation2 2.3s 1 ease-in;
		}

	@keyframes btn_animation2{
		0%{left:15%; top:78%; opacity:0;}
		75%{left:15%; top:78%; opacity:0;}
		100%{left:15%; top:80%; opacity:1;}
	}
	#textWrap2 p#visual2_btn a{color:#777;  font-size:12px; display:block;}
	#textWrap2 p#visual2_btn:hover{background-color:#555; }

	#imgWrap2{
		width:860px;
		height:400px;	
		position:absolute;
		right:-5%;
		top:2%;		
		animation:visual_image2 3.5s 1 ease-in-out;
		
		}
	@keyframes visual_image2{
		0%{right:7%; top:10%; opacity:0;}
		40%{right:7%; top:2%; opacity:1;}
		100%{right:-5%; top:2%; opacity:1;}
		}
	#imgWrap2 img{width:95%; height:95%;	}

	#barWrap2{
		width:100%; 
		height:10px; 
		background-color:#916745;
		position:absolute;
		left:0; 
		bottom:2px;
		z-index:11;
		animation:bar-ani2 5.5s ease-out;
	}
	@keyframes bar-ani2{
		0%{width:0px; }		
		100%{width:100%;}
	}
	#barWrap2 #bar2{width:100%; height:100%; }
	
	#slideControl2 img{
		display:inline-block;
		width:40px; 
		height:79px; 
		background-color:rgba(0,0,0,0.2);
		cursor:pointer;
		}
	#slideControl2 img:hover{background-color:rgba(0,0,0,0.4);}

	#slideControl2 #left2{position:absolute; left:-9999px; top:175px; width:1px; height:1px;}
	#slideControl2 #right2{position:absolute; right:-9999px; top:175px; z-index:6; width:1px; height:1px;}




	#visual #click_box{width:100%; height:30px;  position:relative; background-color:#fff; }
	#visual #click_box div{float:left;}
	#visual #click_box span{display:none;}
	
	#click_box #start{	position:absolute;	right:30px; top:3px;}
	#click_box #stop{position:absolute;	right:3px; top:3px;}
	
	#click_box #start a, #click_box #stop a{
		display:block; 
		width:25px; 
		height:25px;	
		}
	#click_box #start a img, #click_box #stop a img{
		width:100%; height:100%;
	}

	 #visual_mobile{display:none;}


	 /* ############################# section + topArea ###############################*/

	#sectionWrap{width:98%; height:620px;  margin:60px auto; }
	#section{width:100%; height:100%; margin:0 auto; /*overflow:hidden;*/  position:relative;}
	
	#section #topArea{width:920px; height:400px; margin:0 auto; border-bottom:1px solid #ccc;}	
	
	#topArea #leftArea{
		width:610px;
		height:370px;		
		float:left;
		padding-right:10px;
		}		

	#leftArea #banner1{position:relative; width:610px; height:180px; padding-bottom:10px; /*overflow:hidden;*/}
	#leftArea #banner1 .linkTab{width:610px; overflow:hidden; height:23px; background-color:#d9d4d0; }
	#leftArea #banner1 .linkTab li{
		width:151.6px; 
		height:23px;
		background-color:#d9d4d0;
		float:left; 
		position:absolute; 
		border-right:1px solid #aaa;
		z-index:10;
		}
	#leftArea #banner1 .linkTab li:last-child{border-right:0;}
	#leftArea #banner1 .linkTab li a{display:block; width:100%; font-size:0.8em; text-align:center; line-height:23px;}
	#banner1 .linkTab li.tab0 a{color:#fff; background-color:#916745; }

	#banner1 .linkTab li.tab0{color:#fff; background-color:#916745;}

	#banner1 .linkTab li.tab1{left:152.6px;}
	#banner1 .linkTab li.tab2{left:305.2px;}
	#banner1 .linkTab li.tab3{left:458.4px; }
	

	#banner1 .panel{width:610px; height:180px; position:relative;  /*overflow:hidden;*/}
	#banner1 .panel li{width:100%; height:180px;}
	#banner1 .panel li .content{width:100%; height:180px; position:relative;}

	#banner1 .panel li .bannerImg{
		position:absolute; 
		left:0;
		top:-23px; 
		z-index:8;
		width:100%; 
		height:100%;
		}	
	#leftArea #banner1 .panel .textArea{
		position:absolute;
		left:0px; 
		top:22px;
		width:595px;
		height:135px;
		color:#fff;
		line-height:16px;			
		text-align:center;
		z-index:9;
		}

	#leftArea #banner1 .panel .textArea span{
		font-size:14px;  		
		font-weight:normal;		
		}
	#leftArea #banner1 .panel .textArea strong{
		font-size:30px; 
		font-weight:normal;
		display:block;
		padding:15px 0;
		}
	#leftArea #banner1 .panel .textArea a{
		display:block; 
		background-color:#fff; 
		width:120px; 
		font-size:12px;
		letter-spacing:0px;
		padding:10px;
		color:#333;		
		text-align:center;	
		margin:0 auto;
		}	
	#leftArea #banner1 .textArea a:hover{background-color:#333; color:#fff;}


	#leftArea #m_bannerImg2, #leftArea #m_movieBtn{display:none;}
	#leftArea #banner2{position:relative; width:610px; height:180px; }
	#leftArea #bannerImg2{width:610px; height:180px;overflow:hidden;}
	#leftArea #bannerImg2 img{width:100%; height:100%;}
	#leftArea #banner2 #movieBtn{
		position:absolute;
		left:275px;
		top:60px;		
		}
	#leftArea #banner2 #movieBtn img{border:none;}

	#leftArea #banner2 #textArea2{	
		width:610px;
		height:180px;			
		position:absolute;
		left:0;
		top:0;
		color:#fff; 	
		line-height:17px;				
		display:none;
		}
			
	#leftArea #banner2 #textArea2 h4{
		font-weight:normal;
		text-align:center; 
		padding-top:25px; 
		font-size:15px;
		line-height:1.6em;
		}
	
	#leftArea #banner2 #textArea2 a#movieLink{
		width:85px;		
		display:block; 
		color:#333; 
		background-color:#fff; 
		padding:10px; 
		font-size:13px; 
		margin:25px 0 0 249px;
		text-align:center;		
		}
	#leftArea #banner2 #mobile_movieBtn{display:none;}

	#videoPopup{
		width:685px;
		height:580px;
		background-color:#fff; 
		border:1px solid #ccc;	
		padding:30px 60px 20px 60px;			
		position:absolute;
		left:50%;
		top:50%;
		margin-left:-403.5px;
		margin-top:-340px;
		z-index:20;
		box-shadow:5px 5px 10px rgba(0,0,0,0.2);
		}
	#videoPopup h2{font-size:20px; padding-bottom:15px; color:#555;}
	#videoPopup #closeBtn{
		width:40px;
		height:40px; 
		overflow:hidden; 		
		position:absolute;
		right:5px;
		top:5px;
		}
	#videoPopup #closeBtn img{margin-left:-70px; width:350px; margin-top:4px; cursor:pointer;}
	#videoPopup #caption{
		width:98%;
		height:90px; 
		background-color:#9f9388; 
		overflow:hidden;
		overflow-y:scroll;
		font-size:13px;
		color:#fff;		
		padding:15px 0 15px 15px;
		line-height:1.5em;
		}
	#full{
		width:100%;
		height:100%;
		background-color:rgba(0,0,0,0.4);
		position:fixed;
		left:0; 
		top:0;
		z-index:19;
		}
	
	#topArea #rightArea{width:300px; height:370px; position:relative;  overflow:hidden; background-color:#ccc; float:right;}	
	
	#topArea #rightArea ul{width:1800px; height:370px;  background-color:#ccc;}
	#topArea #rightArea ul:after{content:""; display:block; clear:both;}
	#topArea #rightArea ul li{float:left;}

	#rightArea #r01, #rightArea #r02, 
	#rightArea #r03, #rightArea #r04, 
	#rightArea #r05, #rightArea #r06{
		position:relative;}

	#rightArea #hover_text1, #rightArea #hover_text2, 
	#rightArea #hover_text3, #rightArea #hover_text4, 
	#rightArea #hover_text5, #rightArea #hover_text6{
		width:300px; 
		height:370px;
		position:absolute; 
		left:0px; top:0; 
		color:#fff;
		background-color:rgba(0,0,0,0.2);
		text-align:center;		
		line-height:15px;
		}

	#rightArea h4.h4{padding-top:110px; line-height:1.5em;}

	#rightArea a.link1{
		display:inline-block;
		padding:10px;
		background-color:#fff;
		color:#333;
		margin-top:30px;		
		font-size:13px;
		}

	#r01 #hover_text1, #r02 #hover_text2, 
	#r03 #hover_text3, #r04 #hover_text4,
	#r05 #hover_text5, #r06 #hover_text6{
		display:none;
	}

	#r01:hover #hover_text1, #r02:hover #hover_text2,
	#r03:hover #hover_text3, #r04:hover #hover_text4,
	#r05:hover #hover_text5, #r06:hover #hover_text6{display:block;}
	#rightArea a.link1:hover{background-color:#333; color:#eee;}
	#rightArea a.link1 span{font-size:12px; vertical-align:top;}

	#rightArea #slideButton{	
		position:absolute; 
		right:0;
		bottom:0;		
		}
	#rightArea #slideButton input{			
		background-color:#777;
		border:none;
		width:30px;
		height:30px;
		color:#ddd;
		font-size:16px;
		cursor:pointer;
		}

	#rightArea #slideButton input:hover{background-color:#555;}
	#rightArea #slideButton input#leftButton{margin-right:1px; }
	#rightArea #slideButton input{-webkit-appearance:none; border-radius:0;}


	/* ############################# section + bottomArea ###############################*/

	#bottomArea{width:920px; height:180px; margin:20px auto; }

	#bottomArea  div{float:left; }
	#bottomArea #promotion1 {	
		width:300px; 
		height:180px;
		background-image:url("img/promotion1.jpg");
		background-repeat:no-repeat;		
		background-position:center bottom;											
		}

	#bottomArea #promotion1 #p1 a, #bottomArea #promotion2 #p2 a, #bottomArea #promotion3 #p3 a{width:300px; height:180px; display:inline-block;}

	#bottomArea #promotion2{		
		width:300px; 
		height:180px;
		background-image:url("img/promotion2.jpg");
		background-repeat:no-repeat;		
		background-position:center bottom;	
		padding:0 10px;		
		}	

	#bottomArea strong.text{	
		font-size:14px; 
		color:#666; 
		display:inline-block; 
		padding-bottom:7px; 		
		}
	#bottomArea span.subText{
		font-size:14px; 
		color:#444; 		
		letter-spacing:-1px; 
		line-height:1.2em;
		}

	#bottomArea #promotion3{
		width:300px; 
		height:180px;
		background-image:url("img/promotion3.jpg");
		background-repeat:no-repeat;		
		background-position:center bottom;	
		background-size:100% 85%;
	}

	#bottomArea #promotion3 strong.text2{
		display:block; 
		width:300px; 
		font-size:14px;
		color:#916745;
		text-align:center;
		}

/* ############################# linkAreaWrap ###############################*/

	#linkAreaWrap{width:100%; height:60px; background-color:#424242; padding:20px 0; margin-top:70px; clear:both; }
	#linkArea{width:1144px; height:60px; margin:0 auto; }
	#linkArea div{float:left;}

	#mall{width:466px; height:60px; border-right:1px solid #555;}
	#mall h3, #beautyPoint h3{ float:left; position:relative;}

	#mall h3 img{width:143px; position:absolute; left:0; top:18px;}
	#mall #mall_text{width:314px; height:60px; padding-left:152px; }
	#mall #mall_text p{float:left;}

	#linkArea .text_1{ font-size:12px; color:#ddd; padding-right:15px; padding-top:14px;}
	#linkArea .link_1 a#product{
		font-size:12px; 
		color:#fff; 
		display:inline-block; 
		border:1px solid #aaa; 
		width:100px;
		padding:7px 20px; 
		margin:14px 0px 0 0;
		position:relative;
		}
	#linkArea .link_1 a#beauty{
		font-size:12px; 
		color:#fff; 
		display:inline-block; 
		border:1px solid #aaa; 
		width:90px;
		padding:7px 20px; 
		margin:14px 0px 0 0;
		position:relative;
	}
	#linkArea .link_1 a#product:hover, #linkArea .link_1 a#beauty:hover{background-color:#fff; color:#424242;} 
/*	
	#linkArea .link_1 a span:before{		
		width:0;
		height:30px;
		background-color:#fff;
		content:"";
		display:block;
		position:absolute;
		left:0;
		top:0;
		transition:width 0.2s;
	}
	#linkArea .link_1 a span:before:hover{width:140px;}*/
	
	


	#beautyPoint{width:430px; height:60px; border-right:1px solid #555;}	
	#beautyPoint h3 img{width:78px; position:absolute; left:20px; top:15px; display:inline-block;}
	#beautyPoint #beauty_text{width:310px; height:60px; padding-left:120px;}
	#beautyPoint #beauty_text p{float:left;}


	#sns{width:246px; height:60px;}
	#sns h3{width:115px; font-size:14px; color:#fff; font-weight:normal; padding:10px 30px 0 20px; float:left;}
	#sns p{ margin-top:17.5px;}
	#sns p a#fb, #sns p a#yt{width:23px; height:23px; border:1px solid #aaa; display:inline-block; }	

	#linkAreaWrap #mobile_infoNav{display:none;}


	/* ############################# footer ###############################*/
	
	#footer{width:100%; margin:20px auto;}
	#footer ul{width:1280px; height:67px; text-align:center; margin:0 auto;}
	#footer ul li{display:inline; position:relative;}
	#footer ul li a{font-size:12px; color:#777;}
	#footer ul li a:hover{text-decoration:underline; color:#333;}

	#footer ul li span{color:#ddd; padding: 0 20px 0 27px;  }
	#footer ul li a img{vertical-align:middle; padding-left:20px;}

	#footer li#mark a img{border:none;}
	
	#footer p{text-align:center; }
	#footer p#cs{clear:both;  margin-top:-18px; }
	#footer p#cs a{font-size:12px; color:#777;}
	#footer p#cs a:hover{ text-decoration:underline; color:#333;}
	#footer p#copyright{font-size:10px; color:#666; padding:15px 0 25px;}



	/*+++++++++++++++++++++++ 반응형 media ++++++++++++++++++++++++++++++*/
	
	@media all and (min-width:1281px) and (max-width:1600px){}

	@media all and (min-width:1024px) and (max-width:1280px){
		
			
			#textWrap p#visual_h1 img{
				width:320px; 		
				position:absolute;
				left:15%;
				top:10%;
				animation:h1_animation 2s 1 ease-in;
				}
			@keyframes h1_animation{
				0%{left:15%; top:7%; opacity:0;}
				50%{left:15%; top:7%; opacity:0;}
				100%{left:15%; top:10%; opacity:1;}
			}

			#textWrap p#visual_normal{
				color:#c86355; 
				padding-bottom:20px;  		
				line-height:1.5em;
				position:absolute;
				left:15%;
				top:53%;
				z-index:3;
				animation:normal_animation 2.2s 1 ease-in;
				}

			@keyframes normal_animation{
				0%{left:15%; top:51%; opacity:0;}
				60%{left:15%; top:51%; opacity:0;}
				100%{left:15%; top:53%; opacity:1;}
			}

			#textWrap p#visual_btn{
				display:inline-block; 
				padding:10px 27px; 
				border:1px solid #aaa;
				position:absolute;		
				left:15%;
				top:73%;
				z-index:2;
				animation:btn_animation 2.3s 1 ease-in;
				}
			@keyframes btn_animation{
				0%{left:15%; top:71%; opacity:0;}
				75%{left:15%; top:71%; opacity:0;}
				100%{left:15%; top:73%; opacity:1;}
			}

			#imgWrap{
				width:860px;
				height:400px;
				position:absolute;
				right:-5%;
				top:5%;		
				animation:visual_image 3.5s 1 ease-in-out;
				z-index:1;
				}
			@keyframes visual_image{
				0%{right:7%; top:9%; opacity:0;}
				40%{right:7%; top:5%; opacity:1;}
				100%{right:-5%; top:5%; opacity:1;}
				}




			#slideControl a#left{position:absolute; left:0; top:175px;}
			#slideControl a#right{position:absolute; right:0; top:175px; z-index:6}
				

			#textWrap2 p#visual2_h1 img{
				width:320px; 		
				position:absolute;
				left:15%;
				top:10%;
				animation:h1_animation2 2s 1 ease-in;
				}
			@keyframes h1_animation2{
				0%{left:15%; top:7%; opacity:0;}
				50%{left:15%; top:7%; opacity:0;}
				100%{left:15%; top:10%; opacity:1;}
			}

			#textWrap2 p#visual2_normal{
				color:#6b5b50; 
				padding-bottom:20px;  		
				line-height:1.5em;
				position:absolute;
				left:15%;
				top:57%;
				z-index:3;
				animation:normal_animation2 2.2s 1 ease-in;
				font-size:15px;
				}

			@keyframes normal_animation2{
				0%{left:15%; top:55%; opacity:0;}
				60%{left:15%; top:55%; opacity:0;}
				100%{left:15%; top:57%; opacity:1;}
			}

			#textWrap2 p#visual2_btn{
				display:inline-block; 
				padding:10px 27px; 
				border:1px solid #aaa;
				position:absolute;		
				left:15%;
				top:80%;
				z-index:2;
				animation:btn_animation2 2.3s 1 ease-in;
				}

			@keyframes btn_animation2{
				0%{left:15%; top:78%; opacity:0;}
				75%{left:15%; top:78%; opacity:0;}
				100%{left:15%; top:80%; opacity:1;}
			}

			#imgWrap2{
				width:860px;
				height:400px;	
				position:absolute;
				right:-5%;
				top:2%;		
				animation:visual_image2 3.5s 1 ease-in-out;
				
				}
			@keyframes visual_image2{
				0%{right:7%; top:10%; opacity:0;}
				40%{right:7%; top:2%; opacity:1;}
				100%{right:-5%; top:2%; opacity:1;}
				}


			#slideControl2 a#left2{position:absolute; left:0; top:175px;}
			#slideControl2 a#right2{position:absolute; right:0; top:175px; z-index:6}
			

			#linkAreaWrap{clear:both;  margin:0; }

			#linkArea{width:960px; margin:0 auto;}

			#mall{width:458px; padding-left:10px;}
			#mall #mall_text{width:314px;}

			#beautyPoint{width:410px;}
			#beautyPoint h3 img{position:absolute; left:15px;}
			#beautyPoint #beauty_text{width:310px; padding-left:100px;}

			#sns{width:80px;}
			#sns p a#fb{margin-left:20px;}
			#sns p a#yt{ margin-left:0;}
			#linkAreaWrap #sns h3{display:none;}
			#linkAreaWrap #sns a{margin-left:2%;}
			#linkAreaWrap #sns a img{border:none;}

			#footer{width:98%; }
			#footer ul{width:98%; }		
	}


	@media all and (min-width:768px) and (max-width:1023px){
		
		#gnb:hover #subNav, #linkAreaWrap #sns h3, #gnb #subNav{display:none;}


		#gnb{width:100%; height:47px; line-height:47px; margin:0 auto;}
		#gnb #nav{
			width:100%; 
			height:49px;
			text-align:center; 
			position:relative;
			border-bottom:1px solid #ddd;
			box-shadow:0 1px 3px rgba(0,0,0,0.1);
			}	
		#gnb #mainNav li a{color:#595959; display:inline-block;  text-align:center; width:115px; font-size:17px;}


		#gnb #subNav #sub{width:675px; margin:0 auto; }
		#gnb #subNav #sub li{float:left; width:125px;  line-height:1.7em; padding-top:10px;}
		#gnb #subNav #sub li a{font-size:14px; color:#777; display:block; }
		#gnb #subNav #sub li a:hover{color:#333;}
		#gnb #subNav #sub .s1{width:130px; padding-left:55px;}
		#gnb #subNav #sub .s2{width:123px;}
		#gnb #subNav #sub .s3{width:118px;}

		#gnb #MOBnav{display:none;}




		#visualWrap{
			width:100%;			
			margin:20px auto 0;			
			}
		#visual{width:100%;}

		#textWrap p#visual_h1 img{
			width:320px; 		
			position:absolute;
			left:15%;
			top:10%;
			animation:h1_animation 2s 1 ease-in;
			}
		@keyframes h1_animation{
			0%{left:15%; top:8%; opacity:0;}
			50%{left:15%; top:8%; opacity:0;}
			100%{left:15%; top:10%; opacity:1;}
		}

		#textWrap p#visual_normal{
			color:#c86355; 
			padding-bottom:20px;  		
			line-height:1.5em;
			position:absolute;
			left:15%;
			top:53%;
			z-index:3;
			animation:normal_animation 2s 1 ease-in;
			font-size:13px;
			}

		@keyframes normal_animation{
			0%{left:15%; top:50%; opacity:0;}
			60%{left:15%; top:50%; opacity:0;}
			100%{left:15%; top:53%; opacity:1;}
		}

		#textWrap p#visual_btn{
			display:inline-block; 
			padding:10px 27px; 
			border:1px solid #aaa;
			position:absolute;		
			left:15%;
			top:73%;
			z-index:2;
			animation:btn_animation 2.3s 1 ease-in;
			}

		@keyframes btn_animation{
			0%{left:15%; top:71%; opacity:0;}
			75%{left:15%; top:71%; opacity:0;}
			100%{left:15%; top:73%; opacity:1;}
		}

		#barWrap{
			width:1280px;
			height:10px; 
			background-color:#916745;  
			position:absolute;
			left:0;
			bottom:43px;
			z-index:5;
			animation:bar-ani 5s ease-out;
			}
		@keyframes bar-ani{
			0%{width:0px; }			
			100%{width:100%;}
		}

		#imgWrap{
			width:850px;	
			height:380px;
			position:absolute;
			right:-5%;
			top:5%;		
			animation:visual_image 3.5s 1 ease-in-out;
			z-index:1;
			}
		@keyframes visual_image{
			0%{right:7%; top:9%; opacity:0;}
			40%{right:7%; top:5%; opacity:1;}
			100%{right:-5%; top:5%; opacity:1;}
			}

		#slideControl a{display:inline-block; width:40px; height:70px; background-color:rgba(0,0,0,0.2); }
		#slideControl a img{margin-top:-5px;}
		#slideControl a#left{position:absolute; left:0; top:175px;}
		#slideControl a#right{position:absolute; right:0; top:175px; z-index:6}


		#textWrap2 p#visual2_h1 img{
				width:320px; 		
				position:absolute;
				left:15%;
				top:10%;
				animation:h1_animation 2s 1 ease-in;
				}
			@keyframes h1_animation{
				0%{left:15%; top:7%; opacity:0;}
				50%{left:15%; top:7%; opacity:0;}
				100%{left:15%; top:10%; opacity:1;}
			}

		#textWrap2 p#visual2_normal{
			color:#6b5b50; 
			padding-bottom:20px;  		
			line-height:1.5em;
			position:absolute;
			left:15%;
			top:57%;
			z-index:3;
			animation:normal_animation2 2s 1 ease-in;
			font-size:13px;
			}
		@keyframes normal_animation2{
			0%{left:15%; top:55%; opacity:0;}
			60%{left:15%; top:55%; opacity:0;}
			100%{left:15%; top:57%; opacity:1;}
		}

		#textWrap2 p#visual2_btn{
			display:inline-block; 
			padding:10px 27px; 
			border:1px solid #aaa;
			position:absolute;		
			left:15%;
			top:80%;
			z-index:2;
			animation:btn_animation2 2.3s 1 ease-in;
			font-size:13px;
			}

		@keyframes btn_animation2{
			0%{left:15%; top:78%; opacity:0;}
			75%{left:15%; top:78%; opacity:0;}
			100%{left:15%; top:80%; opacity:1;}
		}

		#imgWrap2{
			width:850px;
			height:380px;	
			position:absolute;
			right:-5%;
			top:2%;		
			animation:visual_image2 3.5s 1 ease-in-out;
			
			}
		@keyframes visual_image2{
			0%{right:7%; top:10%; opacity:0;}
			40%{right:7%; top:2%; opacity:1;}
			100%{right:-5%; top:2%; opacity:1;}
			}

		#barWrap2{
			width:1280px;
			height:10px; 
			background-color:#916745;  
			position:absolute;
			left:0;
			bottom:2px;
			z-index:5;
			animation:bar-ani2 5s ease-out;
			}
		@keyframes bar-ani2{
			0%{width:0px; }			
			100%{width:100%;}
		}

		#slideControl2 a{display:inline-block; width:40px; height:70px; background-color:rgba(0,0,0,0.2); }
		#slideControl2 a img{margin-top:-5px;}
		#slideControl2 a#left2{position:absolute; left:0; top:175px;}
		#slideControl2 a#right2{position:absolute; right:0; top:175px; z-index:6}


		#sectionWrap{width:81.3%; height:750px; margin:60px auto; }
		#section{width:610px; height:750px;}		


		#section #topArea{width:610px; height:380px; margin:0 auto; border-bottom:none; }


		#topArea #rightArea{width:300px; height:370px; position:relative;  overflow:hidden; background-color:#ccc; clear:both; margin-top:10px; }	
	
		#topArea #rightArea ul{width:1800px; height:370px;  background-color:#ccc;}
		#topArea #rightArea ul:after{content:""; display:block; clear:both;}
		#topArea #rightArea ul li{float:left;}

		#rightArea #r01, #rightArea #r02, 
		#rightArea #r03, #rightArea #r04, 
		#rightArea #r05, #rightArea #r06{
			position:relative;}

		#rightArea #hover_text1, #rightArea #hover_text2, 
		#rightArea #hover_text3, #rightArea #hover_text4, 
		#rightArea #hover_text5, #rightArea #hover_text6{
			width:300px; 
			height:370px;
			position:absolute; 
			left:0px; top:0; 
			color:#fff;
			background-color:rgba(0,0,0,0.2);
			text-align:center;		
			line-height:15px;
			}

		#rightArea h4.h4{padding-top:110px; line-height:1.5em;}

		#rightArea a.link1{
			display:inline-block;
			padding:10px;
			background-color:#fff;
			color:#333;
			margin-top:30px;		
			font-size:13px;
			}

		#r01 #hover_text1, #r02 #hover_text2, 
		#r03 #hover_text3, #r04 #hover_text4,
		#r05 #hover_text5, #r06 #hover_text6{
			display:none;
		}

		#r01:hover #hover_text1, #r02:hover #hover_text2,
		#r03:hover #hover_text3, #r04:hover #hover_text4,
		#r05:hover #hover_text5, #r06:hover #hover_text6{display:block;}
		#rightArea a.link1:hover{background-color:#333; color:#eee;}
		#rightArea a.link1 span{font-size:12px; vertical-align:top;}

		#rightArea #slideButton{	
			position:absolute; 
			right:0;
			bottom:0;		
			}
		#rightArea #slideButton input{			
			background-color:#777;
			border:none;
			width:30px;
			height:30px;
			color:#ddd;
			font-size:16px;
			cursor:pointer;
			}

		#rightArea #slideButton input:hover{background-color:#555;}
		#rightArea #slideButton input#leftButton{margin-right:1px; }
		#rightArea #slideButton input{-webkit-appearance:none; border-radius:0;}



		#bottomArea{width:300px; height:180px; margin:0; position:absolute; left:0; top:380px;}

		#bottomArea  div{ clear:both;}
		#bottomArea #promotion1 {	
			width:300px; 
			height:180px;
			background-image:url("img/promotion1.jpg");
			background-repeat:no-repeat;		
			background-position:center bottom;	
			margin-bottom:10px;
			}

		#bottomArea #promotion1 #p1 a, #bottomArea #promotion2 #p2 a, #bottomArea #promotion3 #p3 a{width:300px; height:180px; display:inline-block;}

		#bottomArea #promotion2{		
			width:300px; 
			height:180px;
			background-image:url("img/promotion2.jpg");
			background-repeat:no-repeat;		
			background-position:center bottom;	
			padding:0;		
			}	

		#bottomArea strong.text{	
			font-size:14px; 
			color:#666; 
			display:inline-block; 
			padding-bottom:7px; 
						}
		#bottomArea span.subText{
			font-size:14px; 
			color:#444; 			
			letter-spacing:-1px; 
			line-height:1.2em;
			}

		#bottomArea #promotion3{display:none;}


		#linkAreaWrap{height:70px; }
		#linkArea{width:675px; margin:0 auto; }
		#linkArea #mall{width:290px;}		
		#linkArea #mall_text{width:290px; height:60px; padding-left:0; float:left; padding-top:15px; }
		#mall h3 img{width:143px; position:absolute; left:0; top:10px;}

		#linkArea .link_1 a{font-size:12px; color:#fff; display:inline-block; border:1px solid #aaa; padding:7px 10px; margin:14px 0px 0 10px;}
		#linkArea .text_1{ font-size:12px; color:#ddd; padding-right:7px; padding-top:14px;}
		

		#linkArea #beautyPoint{width:300px;}
		#linkArea #beauty_text{padding-left:15px; width:285px; padding-top:15px;}
		#beautyPoint h3 img{width:78px; position:absolute; left:15px; top:7px; display:inline-block;}

		#sns{width:80px; }
		#sns p a#fb{margin-left:15px;}
		#sns p a#yt{ margin-left:0;}

		#footer{width:98%; }
		#footer ul{width:98%; }

		#footer ul li span{color:#ddd; padding: 0 5px 0 12px; font-size:12px; }

		#footer p#cs{width:100%; }
		#footer p#cs a{ margin:0 auto;}
		#footer p#cs a span.txt{display:block; width:100%;}

		#footer p#copyright{font-size:10px; color:#666; padding:10px 0 25px;}

	
	}

	@media all and (min-width:481px) and (max-width:767px){
		#infoNav{display:none;}
		#header{height:116px;}
		#logo{width:100%; height:67px; background-color:#424242; padding-top:0;}
		#logo a.m_logo{
			display:inline-block;
			width:149px;
			height:32px;			
			background-image:url("img/m_logo.png");
			background-repeat:no-repeat;
			background-size:100%;			
			margin:0 auto;	
			margin:18px 0 10px;			
			}

		#logo h1 img{ display:none; }

		
		#gnb{width:100%; height:47px; line-height:47px; margin:0 auto;}
		#gnb #nav{	display:none;	}	
		
		#gnb #mainNav{display:none;}	
		
		
		
		#gnb #subNav, #textWrap, #barWrap, #slideControl, #imgWrap, #visual #visual_bg{display:none;}
		#nav:hover #subNav{display:none;}


		#gnb #MOBnav{display:block;}
		#gnb #MOBnav{position:relative;}
		#gnb #MOBnav p a#mobile_Btn {display:block; width:100%;  margin:0 auto; color:#424242; font-size:14px; border-bottom:1px solid #aaa;} 	
		#gnb #MOBnav #slideNav{width:100%; background-color:#fff; position:absolute; left:0; top:48px; z-index:15; }
		#gnb #MOBnav #slideNav li{width:90%; /* border-bottom:1px solid #ddd;*/margin:0 auto; text-align:left; text-indent:10px;}
		
		#gnb #MOBnav li a{display:block;  color:#595959;  font-size:14px; width:100%; }		

		#gnb #MOBnav li#color:hover a span#brown{color:#595959; }
		#gnb #MOBnav li#color a em{font-style:normal;}
		#gnb #MOBnav li a.sNav{width:100%; height:47px; border-bottom:1px solid #eee;}
		#gnb #MOBnav li a{display:block; }
		#gnb #MOBnav li a span.text{display:block; width:90%; float:left;}
		#gnb #MOBnav li a img.gt{color:#aaa; display:block; width:27px; height:46px; float:right;  font-size:12px; text-align:center;}

		#gnb #MOBnav li:last-child span.text, #gnb #MOBnav li:last-child span.gt{border-bottom:none;}

		#gnb #MOBnav .subSlide {width:100%; clear:both; background-color:rgb(247,247,247);  }	
		#gnb #MOBnav .subSlide li p{height:35px; line-height:35px; width:100%; }
		#gnb #MOBnav .subSlide li p a{ font-size:12px; color:#888; border-bottom:1px solid #eee;}		


		#visualWrap, #visual, #visual #visual_bg, #visual #intro, #visual #slide{display:none;}	

		#visualWrap_mobile{width:95%; margin:10px auto 0; }
		#visual_mobile{
			display:block;
			width:100%; 	
			margin:0 auto; 
			overflow:hidden;		
			position:relative;			
			}	
		#visual_mobile li.v1 img{
			width:110%; 	
			margin-left:-20px;
			display:block;		
			margin-bottom:30px;
	
			}
		#visual_mobile li.v2 img{
			width:110%; 	
			margin-left:-25px;
			display:block;		
			margin-bottom:30px;
			position:absolute; left:0; top:0;				
			}

		#visual_mobile li p{
			position:absolute; 
			left:50%; 
			top:75%; 
			z-index:6;
			width:125px;
			height:33px;
			margin-left:-65px;
			}
		#visual_mobile li p a{
			display:block; 
			line-height:33px;
			background-color:#c76257; 
			text-align:center; 
			color:#fff;
			font-size:12px;
			width:100%;
			height:100%;
			}

		#visual_mobile #Btn{
			width:100%; 
			height:10px; 					
			position:absolute;
			left:0;
			bottom:4px;		
			}
		#visual_mobile #radioBtn{width:80px; height:10px; margin:0 auto; }
		#visual_mobile #radioBtn a{
			display:block; 
			width:32px; 
			height:11px; 
			float:left;		
			margin:0 3px;
			cursor:pointer;
			border:1px solid #333;
			background-color:#fff;
			border-radius:6px;
			}		
		#visual_mobile #radioBtn a span{display:none;}

		/* ############################# section ###############################*/
			
		#sectionWrap{width:95%; height:1050px;  margin:30px auto; }
		#section{width:100%; height:100%;/* height:100%; */margin:0 auto; overflow:hidden; }
		
		#section #topArea{width:440px; height:580px; margin:0 auto; border-bottom:none; }	
		
		#topArea #leftArea{
			width:100%;
			height:280px;		
			float:left;
			padding-right:10px;
			}	
	
		#leftArea #banner1{position:relative; width:100%; height:130px; padding-bottom:10px; }

		#leftArea #banner1 .linkTab{display:none;}

		#banner1 .panel li .bannerImg{
			position:absolute; 
			left:0;
			top:0px; 
			z-index:8;
			width:100%; 
			height:100%;
			}			
	
		#leftArea #banner1 .panel .textArea{
		position:absolute;
		left:0px; 
		top:0;
		width:440px;
		height:130px;
		color:#fff;
		line-height:16px;			
		text-align:center;
		z-index:9;
		}
		#leftArea #banner1 .textArea span{	display:none;	}
		#leftArea #banner1 .panel .textArea strong{display:none;	}
		#leftArea #banner1 .panel .textArea a{
			display:block; 
			background-color:#fff; 
			width:120px; 
			font-size:12px;
			letter-spacing:0px;
			padding:10px;
			color:#333;		
			text-align:center;	
			margin:15px auto 0;
			}	
		
		#leftArea #banner1 .bannerImg{width:440px; height:130px; overflow:hidden;}
		#leftArea #banner1 .textArea a:hover{background-color:#fff; color:#333;}
		#leftArea #banner1 .bannerImg img{transition:none; width:100%; }
		#leftArea #banner1:hover .bannerImg img{transform:scale(1);}


		#leftArea #banner2{position:relative; width:440px; height:130px;}	
		#leftArea #bannerImg2, #leftArea #movieBtn{display:none;}
		#leftArea #m_bannerImg2, #leftArea #m_movieBtn{display:block;}
		#leftArea #m_bannerImg2 img{width:100%; height:100%;}
		#leftArea #banner2 #m_movieBtn{
			position:absolute;
			left:190px;
			top:35px;
			display:block;
		}			
			
		#topArea #rightArea{width:300px; height:290px; overflow:hidden; position:relative; margin-right:70px;}	
		#topArea #rightArea ul{width:1800px; height:290px;  background-color:#ccc; }
		#topArea #rightArea ul li{float:left;}

		#rightArea #r01, #rightArea #r02, 
		#rightArea #r03, #rightArea #r04, 
		#rightArea #r05, #rightArea #r06{
			position:relative;}

		#rightArea #hover_text1, #rightArea #hover_text2, 
		#rightArea #hover_text3, #rightArea #hover_text4, 
		#rightArea #hover_text5, #rightArea #hover_text6{
			width:280px; 
			height:290px;
			position:absolute; 
			left:0; top:0; 
			color:#fff;
			background-color:rgba(0,0,0,0);
			text-align:center;			
			line-height:15px;
			display:block;
			
			}

		#rightArea h4.h4{display:none;}

		#rightArea a.link1{
			display:block;
			width:300px;
			height:40px;			
			padding:250px 0 0 0;
			background-color:rgba(100,100,100,0.1);
			color:#fff;
			margin-top:0;			
			font-size:15px;
			font-weight:bold;
			}
		
		#rightArea a.link1:hover{background-color:rgba(100,100,100,0.1);  color:#fff;}
		#rightArea a.link1 span{font-size:12px; vertical-align:top;}
		

		#rightArea #slideButton input:hover{background-color:#555;}
		#rightArea #slideButton input#leftButton{margin-right:1px; }
		#rightArea #slideButton input{-webkit-appearance:none; border-radius:0;}
			


		#bottomArea{width:300px; height:370px; margin:20px auto; clear:both; border-top:1px solid #ccc; padding-top:25px;}

		#bottomArea  div{clear:both; }
		#bottomArea #promotion1 {	
			width:300px; 
			height:180px;
			background-image:url("img/promotion1.jpg");
			background-repeat:no-repeat;		
			background-position:center bottom;											
			}

		#bottomArea #promotion1 #p1 a, #bottomArea #promotion2 #p2 a, #bottomArea #promotion3 #p3 a{width:300px; height:180px; display:inline-block;}

		#bottomArea #promotion2{		
			width:300px; 
			height:180px;
			background-image:url("img/promotion2.jpg");
			background-repeat:no-repeat;		
			background-position:center bottom;				
			padding:0;
			margin:10px 0;
			}	


		#bottomArea #promotion3{display:none;}
		


		/* ############################# linkAreaWrap ###############################*/

		#linkAreaWrap{
			width:100%; 
			height:60px;
			background-color:#fff;
			padding:0; 
			margin-top:0px; 
			clear:both; 
			border-top:1px solid #ccc;
			border-bottom:1px solid #ccc;
			}
		#linkArea{width:440px; height:60px; margin:0 auto; }		

		#mall, #beautyPoint{display:none;}


		#sns{width:100%;}
		#sns h3{width:150px; height:60px; line-height:60px; font-size:17px; color:#666; font-weight:normal; padding:0px; float:left;}
		#sns h3 span{display:none;}
		#sns p{ margin-top:13px; margin-left:70px; float:right;}
		#sns p a#fb, #sns p a#yt{width:30px; height:30px; border:1px solid #ddd; display:inline-block; }
		#sns p a#fb{
			background-image:url("img/fb_m.png");
			background-repeat:no-repeat;
			background-size:100% 100%;
		}
		#sns p a#yt{
			background-image:url("img/yt_m.png");
			background-repeat:no-repeat;
			background-size:100% 100%;
		}
		#sns p a img{display:none;}




		#linkAreaWrap #mobile_infoNav{
			display:block;
			width:100%;
			height:70px;
			}

		#mobile_infoNav ul{width:439px; height:66px; margin:20px auto; border:1px solid #ccc;}
		#mobile_infoNav li{
			float:left;  
			width:145px; 
			height:33px; 
			text-align:center; 
			line-height:33px;
			border-right:1px solid #ccc;
			border-bottom:1px solid #ccc;
			}
		#mobile_infoNav li.link3, #mobile_infoNav li.link6{border-right:none;}
		#mobile_infoNav li.link4, #mobile_infoNav li.link5,  #mobile_infoNav li.link6{border-bottom:none;}

		#mobile_infoNav li a{font-size:14px; color:#555; display:block;}




		#footer{width:90%; margin:120px auto 20px; clear:both;}
		#footer ul{width:100%; height:45px; text-align:center; margin:0 auto; position:relative; }
		#footer ul li{display:inline-block; }
		#footer ul li a{font-size:12px; color:#777; }
		#footer ul li a:hover{text-decoration:underline; color:#333;}

		#footer ul li span{color:#ddd; padding: 0 2px 0 3px;  }
		#footer ul li a img{vertical-align:middle; padding-left:20px; width:50px;}	
		

		
		
		#footer p#cs{clear:both;  margin-top:10px; }
		#footer p#cs a{font-size:12px; color:#777; font-weight:normal;}
		#footer p#cs a:hover{ text-decoration:underline; color:#333;}
		#footer p#cs a span.txt{display:block; width:100%; padding-top:5px;}

		#footer p#copyright{font-size:10px; color:#666; padding:30px 0 25px;}

	}
	@media all and (min-width:320px) and (max-width:480px){
		#infoNav{display:none;}
		#header{height:116px;}
		#logo{width:100%; height:67px; background-color:#424242; padding-top:0;}
		#logo a.m_logo{
			display:inline-block;
			width:149px;
			height:32px;			
			background-image:url("img/m_logo.png");
			background-repeat:no-repeat;
			background-size:100%;			
			margin:0 auto;	
			margin:18px 0 10px;			
			}
		#logo h1 img{ display:none; }
		#gnb{width:100%; height:47px; line-height:47px; margin:0 auto;}
		#gnb #nav{	display:none;	}			
		#gnb #mainNav{display:none;}	

		#gnb #nav p{width:100%; }
		#gnb #nav p a#mobile_Btn {display:block; width:100%;  margin:0 auto; color:#424242; } 		
	
		#gnb #mainNav{display:none;}
		#gnb #subNav, #textWrap, #barWrap, #slideControl, #imgWrap, #visual #visual_bg{display:none;}
		#nav:hover #subNav{display:none;}

		#gnb #MOBnav{display:block;}
		#gnb #MOBnav{position:relative;}
		#gnb #MOBnav p a#mobile_Btn {display:block; width:100%;  margin:0 auto; color:#424242; font-size:14px; border-bottom:1px solid #aaa;} 	
		#gnb #MOBnav #slideNav{
			width:100%;
			background-color:#fff; 
			position:absolute;
			left:0;
			top:48px;
			z-index:15; 
			 border-bottom:1px solid #eee;
			}
		#gnb #MOBnav #slideNav li{width:90%; /* border-bottom:1px solid #ddd;*/margin:0 auto; text-align:left; text-indent:10px;}
		
		#gnb #MOBnav li a{display:block;  color:#595959;  font-size:14px; width:100%; }		

		#gnb #MOBnav li#color:hover a span#brown{color:#595959; }
		#gnb #MOBnav li#color a em{font-style:normal;}
		#gnb #MOBnav li a.sNav{width:100%; height:47px; border-bottom:1px solid #eee;}
		#gnb #MOBnav li a{display:block; }
		#gnb #MOBnav li a span.text{display:block; width:90%; float:left;}
		#gnb #MOBnav li a img.gt{color:#aaa; display:block; width:27px; height:46px; float:right;  font-size:12px; text-align:center;}

		#gnb #MOBnav li:last-child span.text, 
		#gnb #MOBnav li:last-child span.gt {border-bottom:none;}

		#gnb #MOBnav .subSlide {
			width:100%; 
			clear:both; 
			background-color:rgb(247,247,247);  
			border-bottom:1px solid #eee;
			}	
		#gnb #MOBnav .subSlide li p{height:35px; line-height:35px; width:100%; }
		#gnb #MOBnav .subSlide li p a{ font-size:12px; color:#888; border-bottom:1px solid #eee;}
		#gnb #MOBnav .subSlide li p a:last-child{border-bottom:0;}


		#visualWrap, #visual, #visual #visual_bg, #visual #intro, #visual #slide{display:none;}

		#visualWrap_mobile{width:95%; margin:10px auto 0; }
		#visual_mobile{
			display:block;
			width:100%; 	
			margin:0 auto; 
			overflow:hidden;		
			position:relative;			
			}	
		#visual_mobile li.v1 img{
			width:110%; 	
			margin-left:-15px;
			display:block;		
			margin-bottom:30px;
	
			}
		#visual_mobile li.v2 img{
			width:110%; 	
			margin-left:-25px;
			display:block;		
			margin-bottom:30px;
			position:absolute; left:0; top:0;				
			}

		#visual_mobile li p{
			position:absolute; 
			left:50%; 
			top:70%; 
			z-index:6;
			width:125px;
			height:33px;
			margin-left:-63px;
			}
		#visual_mobile li p a{
			display:block; 
			line-height:33px;
			background-color:#c76257; 
			text-align:center; 
			color:#fff;
			font-size:12px;
			width:100%;
			height:100%;
			}

		#visual_mobile #Btn{
			width:100%; 
			height:10px; 					
			position:absolute;
			left:0;
			bottom:4px;		
			}
		#visual_mobile #radioBtn{width:80px; height:10px; margin:0 auto; }
		#visual_mobile #radioBtn a{
			display:block; 
			width:32px; 
			height:11px; 
			float:left;		
			margin:0 3px;
			cursor:pointer;
			border:1px solid #333;
			background-color:#fff;
			border-radius:6px;
			}		
		#visual_mobile #radioBtn a span{display:none;}
		

	
		/* ############################################# section ################################################*/

		#sectionWrap{width:95%; height:900px; margin:30px auto; }
		#section{width:100%; height:100%; margin:0 auto; overflow:hidden; }		
		#section #topArea{width:280px; height:436px; margin:0 auto; border-bottom:none; }	
		
		#topArea #leftArea{
			width:100%;
			height:186px;		
			float:left;
			padding-right:10px;
			}	
		
		#leftArea #banner1{position:relative; width:100%; height:83px; padding-bottom:10px; }
		#leftArea #banner1 .linkTab{display:none;}		
		#leftArea #banner1 .content{width:280px; height:83px;}
		#leftArea #banner1 .p1{display:none;}

		#banner1 .panel{width:280px; height:83px; position:relative;  /*overflow:hidden;*/}
		#banner1 .panel li{width:100%; height:83px;}
		#banner1 .panel li .bannerImg{
			position:absolute; 
			left:0;
			top:0px; 
			z-index:8;
			width:100%; 
			height:100%;
			}	
	
		#leftArea #banner1 .panel .textArea{
			position:absolute;
			left:0px; 
			top:0;
			width:280px;
			height:83px;
			color:#fff;
			line-height:13px;			
			text-align:center;			
			}
		#leftArea #banner1 .textArea span{	display:none;}
		#leftArea #banner1 .panel .textArea strong{display:none;	}
		#leftArea #banner1 .panel .textArea a{
			display:block; 
			background-color:#fff; 
			width:100px; 
			font-size:11px;
			letter-spacing:0px;
			padding:10px;
			color:#333;		
			text-align:center;	
			margin:0 auto;
			}	
	
		#leftArea #banner1 .bannerImg{width:280px; height:83px; overflow:hidden;}
		#leftArea #banner1 .textArea a:hover{background-color:#fff; color:#333;}
		#leftArea #banner1 .bannerImg img{transition:none; width:100%; }
		#leftArea #banner1:hover .bannerImg img{transform:scale(1);}

		#leftArea #banner2{position:relative; width:280px; height:83px;}			
		#leftArea #bannerImg2, #leftArea #movieBtn{display:none;}
		#leftArea #m_bannerImg2, #leftArea #m_movieBtn{display:block;}
		#leftArea #m_bannerImg2 img{width:100%; height:100%;}

		#leftArea #banner2 #m_movieBtn{
			position:absolute;
			left:115px;
			top:20px;
			display:block;
		}
		#leftArea #banner2 #m_movieBtn a img{width:80%;}


		#topArea #rightArea{width:280px; height:250px; overflow:hidden; position:relative; margin:0 auto;}	
		#topArea #rightArea ul{width:1800px; height:290px;  background-color:#ccc;}
		#topArea #rightArea ul li{float:left;}

		#rightArea #r01, #rightArea #r02, 
		#rightArea #r03, #rightArea #r04, 
		#rightArea #r05, #rightArea #r06{
			position:relative;}

		#rightArea #hover_text1, #rightArea #hover_text2, 
		#rightArea #hover_text3, #rightArea #hover_text4, 
		#rightArea #hover_text5, #rightArea #hover_text6{
			width:280px; 
			height:250px;
			position:absolute; 
			left:0; top:0; 
			color:#fff;
			background-color:rgba(0,0,0,0.0);
			text-align:center;			
			line-height:15px;
			display:block;
			}

		#rightArea h4.h4{display:none;}

		#rightArea a.link1{
			display:block;
			width:280px;
			height:40px;			
			padding:210px 0 0 0;
			background-color:rgba(100,100,100,0.1);
			color:#fff;
			margin-top:0;			
			font-size:14px;
			font-weight:bold;
			}
		
		#rightArea a.link1:hover{background-color:rgba(100,100,100,0.1); color:#fff;}
		#rightArea a.link1 span{font-size:12px; vertical-align:top;}			

		#rightArea #slideButton input:hover{background-color:#555;}
		#rightArea #slideButton input#leftButton{margin-right:1px; }
		#rightArea #slideButton input{-webkit-appearance:none; border-radius:0;}
		
		#bottomArea{width:280px; height:370px; margin:20px auto; clear:both; border-top:1px solid #ccc; padding-top:25px;}

		#bottomArea  div{clear:both; }
		#bottomArea #promotion1 {	
			width:280px; 
			height:180px;
			background-image:url("img/promotion1.jpg");
			background-repeat:no-repeat;		
			background-position:center bottom;											
			}
		#bottomArea #promotion1 #p1 a, #bottomArea #promotion2 #p2 a, #bottomArea #promotion3 #p3 a{width:280px; height:180px; display:inline-block;}

		#bottomArea #promotion2{		
			width:280px; 
			height:180px;
			background-image:url("img/promotion2.jpg");
			background-repeat:no-repeat;		
			background-position:center bottom;				
			padding:0;
			margin:10px 0;
			}	

		#bottomArea #promotion3{display:none;}		


		/* ############################# linkAreaWrap ###############################*/

		#linkAreaWrap{
			width:100%; 
			height:60px;
			background-color:#fff;
			padding:0; 
			margin-top:0px; 
			clear:both; 
			border-top:1px solid #ccc;
			border-bottom:1px solid #ccc;
			}
		#linkArea{width:280px; height:60px; margin:0 auto; }		

		#mall, #beautyPoint{display:none;}

		#sns{width:100%;}
		#sns h3{width:130px; height:60px; line-height:60px; font-size:17px; color:#666; font-weight:normal; padding:0px; float:left;}
		#sns h3 span{display:none;}
		#sns p{ margin-top:13px; margin-left:70px; float:right;}
		#sns p a#fb, #sns p a#yt{width:30px; height:30px; border:1px solid #ddd; display:inline-block; }
		#sns p a#fb{
			background-image:url("img/fb_m.png");
			background-repeat:no-repeat;
			background-size:100% 100%;
		}
		#sns p a#yt{
			background-image:url("img/yt_m.png");
			background-repeat:no-repeat;
			background-size:100% 100%;
		}
		#sns p a img{display:none;}

		#linkAreaWrap #mobile_infoNav{
			display:block;
			width:100%;
			height:70px;
			}

		#mobile_infoNav ul{width:272px; height:66px; margin:20px auto; border:1px solid #ccc;}
		#mobile_infoNav li{
			float:left;  
			width:90px; 
			height:33px; 
			text-align:center; 
			line-height:33px;
			border-right:1px solid #ccc;
			border-bottom:1px solid #ccc;
			}
		#mobile_infoNav li.link3, #mobile_infoNav li.link6{border-right:none;}
		#mobile_infoNav li.link4, #mobile_infoNav li.link5,  #mobile_infoNav li.link6{border-bottom:none;}
		#mobile_infoNav li a{font-size:12px; color:#555; display:block;}	
		
		#footer{width:90%; margin:120px auto 20px; clear:both;}
		#footer ul{width:100%; height:45px; text-align:center; margin:0 auto; position:relative; }
		#footer ul li{display:inline-block; }
		#footer ul li a{font-size:12px; color:#777; }
		#footer ul li a:hover{text-decoration:underline; color:#333;}

		#footer ul li span{color:#ddd; padding: 0 2px 0 3px;  }
		#footer ul li a img{vertical-align:middle; padding-left:20px; width:50px;}
		
		
		#footer p#cs{clear:both;  margin-top:30px; }
		#footer p#cs a{font-size:12px; color:#777;}
		#footer p#cs a:hover{ text-decoration:underline; color:#333;}
		#footer p#cs a span.txt{display:block; width:100%; padding-top:5px;}

		#footer p#copyright{font-size:10px; color:#666; padding:30px 0 25px;}
		
	}



  </style>
  <script src="js/jquery-1.12.0.min.js"></script>

  <script>
	$(function(){	

		//gnb #subNav에 마우스오버하면 slideDown하기
		//먼저 #subNav 숨기기
		$("#subNav").hide();
		$("#nav").bind("mouseover focus",function(){
			$("#subNav").stop().slideDown();
		}).bind("mouseout blur",function(){
			$("#subNav").stop().slideUp();
		});


		//모바일버전에서 movile_Btn클릭하면 메인네비 나오기
		$("#slideNav").hide();
		$("#mobile_Btn").click(function(){
			$("#slideNav").slideToggle();
		});

		$(".subSlide").hide();

		$(".nav1").click(function(){	
			$(".subSlide").slideUp();	
			$(".nav2").children(".down2").attr("src","img/m_right.png");
			$(".nav3").children(".down3").attr("src","img/m_right.png");
			$(".nav4").children(".down4").attr("src","img/m_right.png");

			$(this).next().slideDown();	
			$(this).children(".down1").attr("src","img/m_bottom.png");				
		});

		$(".nav2").click(function(){
			$(".subSlide").slideUp();
			$(".nav1").children(".down1").attr("src","img/m_right.png");
			$(".nav2").children(".down2").attr("src","img/m_right.png");
			$(".nav3").children(".down3").attr("src","img/m_right.png");
			
			$(this).next().slideDown();	
			$(this).children(".down2").attr("src","img/m_bottom.png");			
		});
		
		$(".nav3").click(function(){
			$(".subSlide").slideUp();
			$(".nav1").children(".down1").attr("src","img/m_right.png");				
			$(".nav2").children(".down2").attr("src","img/m_right.png");
			$(".nav4").children(".down4").attr("src","img/m_right.png");
			
			$(this).next().slideDown();	
			$(this).children(".down3").attr("src","img/m_bottom.png");			
		});

		$(".nav4").click(function(){
			$(".subSlide").slideUp();
			$(".nav1").children(".down1").attr("src","img/m_right.png");				
			$(".nav2").children(".down2").attr("src","img/m_right.png");
			$(".nav3").children(".down3").attr("src","img/m_right.png");
			
			$(this).next().slideDown();	
			$(this).children(".down4").attr("src","img/m_bottom.png");			
		});


		

		// ################################## visual ######################################

		$("#ad2").hide();



		$("#slideControl img").click(function(){
			$("#content").fadeOut(1200);			
			$("#ad2").delay(800).fadeIn();				
		});

		$("#slideControl2 img").click(function(){
			$("#ad2").fadeOut(400);
			$("#content").delay(1200).fadeIn();		
		});

		// 자동클릭 만들기
		var autoClick = setInterval(function(){$("#slideControl img").click();},5300);

		var autoClick2 = setInterval(function(){$("#slideControl2 img").click();},10600);

	
		$("#start img").attr("src","img/icons_start1-1.png");

		$("#stop").click(function(){
			$("#stop img").attr("src","img/icons_stop1-1.png");
			$("#start img").attr("src","img/icons_start1.png");
				
			clearInterval(autoClick);
			return false;
		});		

		$("#start").click(function(){
			$("#stop img").attr("src","img/icons_stop1.png");
			$("#start img").attr("src","img/icons_start1-1.png");
			location.reload();
			return false;
		});

		//mobile
		$(".circle1").css({"backgroundColor":"#333"});

		$(".circle2").click(function(){
			$(".circle1").css({"backgroundColor":"#fff"});
			$(this).css({"backgroundColor":"#333"});
			$(".v2").fadeOut(1500);
		});

		$(".circle1").click(function(){
			$(".v2").fadeIn(1500);
			$(".circle2").css({"backgroundColor":"#fff"});
			$(this).css({"backgroundColor":"#333"});
		});
		

		// ################################## section ######################################
		//첫번째 빼고 .panel숨기기
		$(".panel li:not(:first)").hide();

		$(".linkTab li:eq(0) a").bind("mouseenter focusin",function(){
			$(".panel li").hide();
			$(".panel li:eq(0)").show();
		});
		
		//li중 2번째 마우스올렸을때 .panel li의 두번째 내용보이기
		$(".linkTab li:eq(1) a").bind("mouseenter focusin",function(){
			$(".panel li").hide();
			$(".panel li:eq(1)").show();
		});

		$(".linkTab li:eq(2) a").bind("mouseenter focusin",function(){
			$(".panel li").hide();
			$(".panel li:eq(2)").show();
		});

		$(".linkTab li:eq(3) a").bind("mouseenter focusin",function(){
			$(".panel li").hide();
			$(".panel li:eq(3)").show();
		});
		
		//.linkTab li a에 마우스올리면
		//.tab0 클래스 속성 이어받기
		$(".linkTab li").bind("mouseenter focusin",function(){
			$(".linkTab li").removeClass("tab0");
			$(this).addClass("tab0");
		});


		$(".film").prepend($(".film li:last"));
		$(".film").css({"marginLeft":"-300px"});

		//#rightButton클릭하면 이미지 다음으로 넘어가기
		$("#rightButton").click(function(){
			$(".film:not(:animated)").stop().animate({"marginLeft":"-=300px"},700,"swing",function(){
				$(".film").append($(".film li:first"));
				$(".film").css({"marginLeft":"-300px"})
			});
		});

		$("#leftButton").click(function(){
			$(".film:not(:animated)").stop().animate({"marginLeft":"+=300px"},700,"swing",function(){
				$(".film").prepend($(".film li:last"));
				$(".film").css({"marginLeft":"-300px"})
			});
		});

		var autoClick2 = setInterval(function(){$("#rightButton").click();},2000);


		$("#videoPopup, #full").hide();
		$("#bannerImg2 img, #movieBtn img").click(function(){
			$("#videoPopup").show();	
			$("#full").show();	
		//	return false;
		});

		$("#videoPopup, #full").click(function(){
			$("#videoPopup, #full").hide();
			location.reload();
		});

	});

  </script>
 </head>
 <body>
	<ul id="skipNav">		
		<li><a href="#sectionWrap" title="본문">본문내용 바로가기</a></li>	
	</ul>
	<div id="wrapper">
		<div id="wrap">
			<div id="header">
				<div id="logo">
					<h1><a class="m_logo" href="http://www.hanyul.co.kr/" title="한율"><img src="img/logo.png" alt="로고"/></a></h1>
				</div>	
				<div id="infoNav">
<? include "inc_login.php"?>
<!--
<? if(empty($_SESSION['userid']) ){?>
					<a href="03_login.php" title="로그인">로그인</a><span>|</span>
					<a href="01_hanyul_join.php" title="회원가입">회원가입</a><span>|</span>
<?}else{?>
					<a href="03_1_logout.php" title="로그아웃">로그아웃</a><span>|</span>
					<a href="05_edit.php?userid=<?=$row['userid']?>" title="회원 정보수정">회원 정보수정</a><span>|</span>				
<? }?>	
-->
					

					<a href="#" title="뷰티포인트">뷰티포인트</a><span>|</span>
					<a href="#" title="온라인구입처">온라인구입처</a><span>|</span>
					<a href="#" title="오프라인구입처">오프라인구입처</a><span>|</span>
					<a href="#" title="한율정">한율정</a>
				</div>		
				<div id="gnb">
					<div id="nav">
						<ul id="mainNav">
							<li class="navlist"><a id="m1" href="hanyul_story_intro.php" title="한율 이야기"><span>한율</span> 이야기</a></li>
							<li class="navlist"><a id="m2" href="hanyul_nature.php" title="한율 자연"><span>한율</span> 자연</a></li>
							<li class="navlist"><a id="m3" href="hanyul_product_function.php" title="한율 제품"><span>한율</span> 제품</a></li>
							<li class="navlist"><a id="m4" href="hanyul_community.php" title="한율 공감"><span>한율</span> 공감</a></li>
							<li id="color"  class="navlist"><a id="m5"  href="hanyul_geukjin.php" title="한율 극진"><span id="brown">한율</span> <em style="color:#916745;">극진</em></a></li>
						</ul>
						<div id="subNav">
							<ul id="sub">
								<li class="s1">
									<p><a href="hanyul_story_intro.php" title="한율소개">한율 소개</a></p>
									<p><a href="hanyul_story_ad.php" title="한율 광고">한율 광고</a></p>
									<p><a href="#" title="한율 브랜드북">한율 브랜드북</a></p>
									<p><a href="hanyul_story_popupStore.php" title="팝업 스토어">팝업 스토어</a></p>
								</li>
								<li class="s2">
									<p><a href="hanyul_nature_01.php" title="갈색솔잎">갈색솔잎</a></p>
									<p><a href="hanyul_nature_04.php" title="쌀">쌀</a></p>
									<p><a href="hanyul_nature_01.php" title="서리태">서리태</a></p>
									<p><a href="hanyul_nature_04.php" title="백화고">백화고</a></p>
									<p><a href="hanyul_nature_01.php" title="흰감국">흰감국</a></p>
									<p><a href="hanyul_nature_04.php" title="어린 쑥">어린 쑥</a></p>
									<p><a href="hanyul_nature_07.php" title="한율 원료 백서">한율 원료 백서</a></p>
								</li>
								<li class="s3">
									<p><a href="hanyul_product_type.php" title="제품 유형별">제품 유형별</a></p>
									<p><a href="hanyul_product_function.php" title="제품 기능별">제품 기능별</a></p>
									<p><a href="hanyul_product_bestseller.php" title="베스트 셀러">베스트 셀러</a></p>
									<p><a href="#" title="제품 사용순서">제품 사용순서</a></p>
								</li>
								<li class="s4">
									<p><a href="hanyul_community_news_page1.php" title="한율소식">한율소식</a></p>
									<p><a href="hanyul_community_travel.php" title="한율 자연여행">한율 자연여행</a></p>
									<p><a href="#" title="한율 자연편지">한율 자연편지</a></p>
									<p><a href="#" title="한율 피부체질™">한율 피부체질™</a></p>
								</li>
							</ul>
						</div>	
					</div>
					<div id="MOBnav">
						<p>
							<a  id="mobile_Btn" href="#" title="메뉴화살표">▼</a>				
						</p>	
						<ul id="slideNav">
							<li class="m_nav">
								<a class="sNav nav1" href="#" title="한율 이야기"><span class="text">한율 이야기</span><img class="gt down1" src="img/m_right.png" alt="클릭버튼이미지1"/></a>
								<ul class="subSlide">
									<li>
										<p><a href="hanyul_story_intro.php" title="한율소개">한율 소개</a></p>
										<p><a href="hanyul_story_ad.php" title="한율 광고">한율 광고</a></p>
										<p><a href="#" title="한율 브랜드북">한율 브랜드북</a></p>
										<p><a href="hanyul_story_popupStore.php" title="팝업 스토어">팝업 스토어</a></p>
									</li>
								</ul>
							</li>
							<li class="m_nav">
								<a class="sNav nav2" href="#" title="한율 자연"><span class="text">한율 자연</span><img class="gt down2" src="img/m_right.png" alt="클릭버튼이미지2"/></a>
								<ul class="subSlide">
									<li>
										<p><a href="hanyul_nature_01.php" title="갈색솔잎">갈색솔잎</a></p>
										<p><a href="#" title="쌀">쌀</a></p>
										<p><a href="#" title="서리태">서리태</a></p>
										<p><a href="hanyul_nature_04.php" title="백화고">백화고</a></p>
										<p><a href="#" title="흰감국">흰감국</a></p>
										<p><a href="#" title="어린 쑥">어린 쑥</a></p>
										<p><a href="#" title="한율 원료 백서">한율 원료 백서</a></p>
									</li>
								</ul>
							</li>
							<li class="m_nav">
								<a class="sNav nav3" href="#" title="한율 제품"><span class="text">한율 제품</span><img class="gt down3" src="img/m_right.png" alt="클릭버튼이미지3"/></a>
								<ul class="subSlide">
									<li>
										<p><a href="hanyul_product_type.php" title="제품 유형별">제품 유형별</a></p>
										<p><a href="hanyul_product_function.php" title="제품 기능별">제품 기능별</a></p>
										<p><a href="hanyul_product_bestseller.php" title="베스트 셀러">베스트 셀러</a></p>
										<p><a href="#" title="제품 사용순서">제품 사용순서</a></p>
									</li>
								</ul>
							</li>
							<li class="m_nav">
								<a class="sNav nav4" href="#" title="한율 공감"><span class="text">한율 공감</span><img class="gt down4" src="img/m_right.png" alt="클릭버튼이미지4"/></a>
								<ul class="subSlide">
									<li>
										<p><a href="#" title="한율소식">한율소식</a></p>
										<p><a href="hanyul_community_travel.php" title="한율 자연여행">한율 자연여행</a></p>
										<p><a href="#" title="한율 자연편지">한율 자연편지</a></p>
										<p><a href="#" title="한율 피부체질™">한율 피부체질™</a></p>
									</li>
								</ul>
							</li>
							<li id="color">
								<a href="#" title="한율 극진"><span class="text">한율 극진</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="visualWrap">
				<div id="visual">			
					<ul id="slide">
						<li id="ad1">
							<div id="content">
								<div id="textWrap">					
									<p id="visual_h1">
										<img src="img/visual1_h1.png" alt="쌀진액스킨"/>
									</p>					
									<p id="visual_normal">
										여주쌀을 발효하여 만든 한율 홍국발효진액™이<br/>
										건조한 피부에 수분을 채워주고 촉촉하게 정돈하는<br/>
										쌀 진액 보습 스킨
									</p>
									<p id="visual_btn">
										<a href="#" title="제품상세보기">제품 상세보기</a>
									</p>
								</div>				
								<div id="imgWrap">
									<img src="img/v05.png" alt="진액스킨이미지1"/>
								</div>
					
								<div id="barWrap">
									<div id="bar">					
									</div>
								</div>	
								<div id="slideControl">
									<img id="left" src="img/btn_prev.png" alt="이전버튼이미지"/>
									<img id="right" src="img/btn_next.png" alt="다음버튼이미지"/>
								</div>			
							</div>
							<div id="visual_bg">
								<img src="img/v_bg1.jpg" alt="배경이미지"/>
							</div>								
						</li>
						<li id="ad2">
							<div id="textWrap2">					
								<p id="visual2_h1">
									<img src="img/visual3_h1.png" alt="백화고 고결크림"/>
								</p>					
								<p id="visual2_normal">
									백화고가 깊고 길게 패인 주름을 채우고 줄여주어로<br/>
									팽팽하게 젊은 피부로 가꾸어 주는 고결 크림
								</p>
								<p id="visual2_btn">
									<a href="#" title="제품상세보기">제품 상세보기</a>
								</p>
							</div>				
							<div id="imgWrap2">
								<img src="img/v02.png" alt="백화고 고결크림"/>
							</div>
							<div id="visual2_bg">
								<img src="img/v_bg1.jpg" alt="배경이미지2"/>
							</div>					
							<div id="barWrap2">
								<div id="bar2">					
								</div>
							</div>	
							<div id="slideControl2">
								<img id="left2" src="img/btn_prev.png" alt="이전버튼이미지"/>
								<img id="right2" src="img/btn_next.png" alt="다음버튼이미지"/>
							</div>
						</li>
					</ul>
					<div id="btn_control">						
					</div>					
					<div id="click_box">
						<div id="start">	
							<a href="img/icons_start1.png" title="start"><img id="startBtn" src="img/icons_start1.png" alt="재생"></a>
						</div>
						<div id="stop">	
							<a href="img/icons_stop1.png" title="stop"><img id="stopBtn" src="img/icons_stop1.png" alt="멈춤"></a>
						</div>							
					</div>
				</div>			
			</div>
			<div id="visualWrap_mobile">
				<div id="visual_mobile">
					<ul>
						<li class="m_slide v1">
							<img src="img/visual_mb3.jpg" alt="제품이미지2"/>
							<p>
								<a href="#" title="제품상세보기">제품 상세보기</a>
							</p>
						</li>
						<li class="m_slide v2">
							<img src="img/visual_mb.jpg" alt="제품이미지1"/>
							<p>
								<a href="#" title="제품상세보기">제품 상세보기</a>
							</p>
						</li>

						<!--
						<li id="bg">
							<img src="img/v_bg1.jpg" alt="배경이미지"/>
						</li>-->
					</ul>
					<div id="Btn">
						<div id="radioBtn">
							<a class="black circle1" href="#" title="진액스킨"><span>1</span></a>
							<a class="black circle2" href="#" title="진액스킨 에디션"><span>2</span></a>
						</div>
					</div>
				</div>
			</div>
			<div id="sectionWrap">
				<div id="section">
					<div id="topArea">
						<div id="leftArea">
							<div id="banner1">
								<ul class="linkTab">
									<li  class="tab0"><a href="#" title="한율자연여행">한율 자연여행</a></li>
									<li  class="tab1"><a href="#" title="여주여행">01</a></li>
									<li  class="tab2"><a href="#" title="영월여행">02</a></li>
									<li  class="tab3"><a href="#" title="강화도여행">03</a></li>
								</ul>
								<ul class="panel">
									<li>
										<div class="content">
											<p class="textArea">
												<span class="small">한국의 자연을 만나다</span><br/>
												<strong>한율 자연여행</strong><br/>										
												<a href="hanyul_community_travel.php" title="한율자연여행">한율자연 여행하기 <span>&gt;</span></a>
											</p>
											<p class="bannerImg">
												<img src="img/banner00.jpg" alt="한율자연여행"/>
											</p>
										</div>
									</li>
									<li class="p1">
										<div class="content">
											<p class="bannerImg">
												<img src="img/banner01.jpg" alt="여주이미지"/>
											</p>
											<p class="textArea">
												<span class="small">벼가 익는 마을</span><br/>
												<strong>여주 여행</strong><br/>									
												<a class="linkBtn" href="hanyul_community_travel-rice.php" title="쌀의 고장을 찾아서">쌀의 고장을 찾아서 <span>&gt;</span></a>
											</p>
										</div>
									</li>
									<li class="p1">
										<div class="content">
											<p class="bannerImg">
												<img src="img/banner02.jpg" alt="강원도이미지"/>
											</p>
											<p class="textArea">
												<span class="small">바다의 품으로 쑥을 키우는 바람의 땅</span><br/>
												<strong>강원도 여행</strong><br/>				
												<a href="#" title="어린쑥을 찾아서">어린쑥을 찾아서 <span>&gt;</span></a>		
											</p>
										</div>
									</li>
									<li class="p1">
										<div class="content">
											<p class="bannerImg">
												<img src="img/banner03.jpg" alt="영월이미지"/>
											</p>
											<p class="textArea">
												<span class="small">아름다운 느림의 땅</span><br/>
												<strong>영월 여행</strong><br/>
												<a href="#" title="서리태를 찾아서">서리태를 찾아서 <span>&gt;</span></a>
											</p>
										</div>
									</li>
									
								</ul>
							</div>						
							<div id="banner2">	
								<div id="bannerImg2">
									<a  href="#" title="영상이미지"><img src="img/banner_3.jpg" alt="영상이미지"/></a>
								</div>
								<div id="movieBtn">
									<a  href="#" title="재생"><img src="img/m_movieBtn.png" alt="재생이미지"/></a>
								</div>
								<div id="m_bannerImg2">
									<a  href="hanyul_story_ad_inner.php" title="영상이미지"><img src="img/banner_3.jpg" alt="영상이미지"/></a>
								</div>
								<div id="m_movieBtn">
									<a  href="hanyul_story_ad_inner.php" title="재생"><img src="img/m_movieBtn.png" alt="재생이미지"/></a>
								</div>										
							</div>
						</div>
						<div id="rightArea">
							<div id="slideImg">							
								<ul class="film">
									<li id="r01">
										<img src="img/slide01.jpg" alt="백화고"/>						
										<div id="hover_text1">
											<h4 class="h4">한국의 자연에서<br/>
											원료를 찾았습니다.</h4>
											<a  class="link1" href="hanyul_nature_04.php" title="백화고">백화고 <span>&gt;</span></a>
										</div>							
									</li>
									<li id="r02">
										<img src="img/slide02.jpg" alt="흰감국"/>							
										<div id="hover_text2">
											<h4 class="h4">한국의 자연에서<br/>
											원료를 찾았습니다.</h4>
											<a  class="link1" href="#" title="흰감국">흰감국 <span>&gt;</span></a>
										</div>							
									</li>
									<li id="r03">
										<img src="img/slide03.jpg" alt="갈색솔잎"/>							
										<div id="hover_text3">
											<h4 class="h4">한국의 자연에서<br/>
											원료를 찾았습니다.</h4>
											<a  class="link1" href="hanyul_nature_01.php" title="갈색솔잎">갈색솔잎 <span>&gt;</span></a>
										</div>							
									</li>
									<li id="r04">
										<img src="img/slide04.jpg" alt="서리태"/>							
										<div id="hover_text4">
											<h4 class="h4">한국의 자연에서<br/>
											원료를 찾았습니다.</h4>
											<a  class="link1" href="#" title="서리태">서리태 <span>&gt;</span></a>
										</div>							
									</li>
									<li id="r05">
										<img src="img/slide05.jpg" alt="쌀"/>							
										<div id="hover_text5">
											<h4 class="h4">한국의 자연에서<br/>
											원료를 찾았습니다.</h4>
											<a  class="link1" href="#" title="쌀">쌀 <span>&gt;</span></a>
										</div>							
									</li>
									<li id="r06">
										<img src="img/slide06.jpg" alt="어린 쑥"/>							
										<div id="hover_text6">
											<h4 class="h4">한국의 자연에서<br/>
											원료를 찾았습니다.</h4>
											<a  class="link1" href="#" title="어린 쑥">어린 쑥 <span>&gt;</span></a>
										</div>							
									</li>
								</ul>							
							</div>
							<div id="slideButton">
								<input id="leftButton" type="button" value="&lt;" title="이전버튼" /><input id="rightButton" type="button" value="&gt;" title="다음버튼" />
							</div>
						</div>
					</div>					
					<div id="bottomArea">
						<div id="promotion1">
							<div id="p1">
								<a href="#" title="자연편지">		
									<strong class="text">자연편지</strong><br/>
									<span class="subText">한율이 전하는 이롭고 편안한<br/>
									자연의 이야기</span>
								</a>		
							</div>
						</div>
						<div id="promotion2">
							<div id="p2">
								<a href="hanyul_product_bestseller.php" title="베스트셀러">		
									<strong class="text">베스트셀러</strong><br/>
									<span class="subText">피부에 촉촉한 윤기를 더하는<br/>
									천연유래 100% <br/>
									자초 윤기 보습 오일</span>
								</a>		
							</div>
						</div>
						<div id="promotion3">
							<div id="p3">
								<a href="#" title="한율극진">		
									<strong class="text2">한율극진</strong><br/>									
								</a>		
							</div>
						</div>
					</div>
				</div>
				<div id="videoPopup">					
					<h2>꽉 잡은 보습 - 한율 진액 스킨</h2>		
					<p id="closeBtn"><img src="img/geukjin_icon.png" alt="닫기"/>	</p>
					<video controls width="685" height="385" > 
						<source src="video/hanyul_video.mp4" type="video/mp4"/>				
					</video>
					<p id="caption">
						한국 자연이 전하는 피부율<br/>
						한율.<br/><br/>
						왜 한율의 보습은 한국 쌀에서 시작했지?<br/>
						변덕스러운 봄, 뜨거운 여름, 건조한 가을, 매서운 겨울까지<br/>
						한국쌀은 사계절을 견디기 위해 수분을 꽉 움켜쥐거든요.<br/><br/>
						흙 속 수분을 꽉 움켜쥔 한국쌀의 힘으로<br/>
						8일간 붉게 발효한 홍국진액의 힘으로<br/><br/>
						당신의 피부도 마르지 않도록<br/>
						꽉 잡아줄게요. <br/><br/>
						꽉 잡았다.<br/>
						꽉 잡은 보습.<br/>
						한율 진액 스킨.<br/><br/>
						한율.
					</p>								
				</div>
			</div>	
		
			<div id="linkAreaWrap">
				<div id="linkArea">		
					<div id="mall">
						<h3><img src="img/apmall.png" alt="아모레퍼시픽몰로고"/></h3>
						<div id="mall_text">
							<p class="text_1">
								지금은 한율과 함께<br/>
								아름다워지는 시간입니다
							</p>
							<p class="link_1">
								<a id="product" href="#" title="한율제품 구매하기"><span>한율제품 구매하기</span></a>
							</p>
						</div>
					</div>
					<div id="beautyPoint">
						<h3><img src="img/beautypoint.png" alt="뷰티포인트"/></h3>
						<div id="beauty_text">
							<p class="text_1">
								쌓을수록 아름다워지는<br/>
								아모레 퍼시픽 통합 멤버십
							</p>
							<p class="link_1">
								<a id="beauty" href="#" title="뷰티포인트 소개">뷰티포인트 소개</a>
							</p>
						</div>
					</div>
					<div id="sns">
						<h3>Hanyul SNS<br/>
							<span>페이스북, 유튜브</span>
						</h3>
						<p>
							<a id="fb" href="https://www.facebook.com/hanyul.kr" title="페이스북"><img src="img/fb.png" alt="페이스북로고"/></a>
							<a id="yt" href="https://www.youtube.com/user/HANYULkr" title="유튜브"><img src="img/yt.png" alt="유튜브로고"/></a>
						</p>
					</div>
				</div>
				<div id="mobile_infoNav">
					<ul>
						<li class="link1"><a href="hanyul_login.php" title="로그인">로그인</a></li>
						<li class="link2"><a href="hanyul_join.php" title="회원가입">회원가입</a></li>
						<li class="link3"><a href="#" title="뷰티포인트">뷰티포인트</a></li>
						<li class="link4"><a href="#" title="온라인구입처">온라인구입처</a></li>
						<li class="link5"><a href="#" title="오프라인구입처">오프라인구입처</a></li>
						<li class="link6"><a href="#" title="한율정">한율정</a></li>
					</ul>
				</div>
			</div>
			<div id="footer">
				<ul>
					<li><a href="#" title="영상정보처리기기 운영 및 관리 방침">영상정보처리기기 운영 및 관리 방침</a><span>|</span></li>
					<li><a href="#" title="서비스이용약관">서비스이용약관</a><span>|</span></li>
					<li><a href="#" title="개인정보취급방침">개인정보취급방침</a><span>|</span></li>
					<li><a href="#" title="사이트맵">사이트맵</a><span>|</span></li>
					<li><a href="#" title="관련사이트">관련사이트</a></li>
					<li id="mark"><a href="#" title="WA인증마크"><img src="img/wa.png" alt="wa인증마크"/></a></li>
				</ul>
				<p id="cs">
					<a href="#" title="고객서비스센터">고객서비스센터(수신자요금부담) <strong>080-023-5454</strong><span class="txt"> (월~목 : AM 09:00 ~ PM 09:00, 금 : AM 09:00 ~ PM 05:30)</span></a>
				</p>
				<p id="copyright">
					©2014 AMOREPACIFIC. ALL RIGHTS RESERVED.
				</p>					
			</div>				
		</div>
		<div id="full"></div>
	</div>
 </body>
</html>

