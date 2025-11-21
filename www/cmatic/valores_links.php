<?php

$result1  	= mysqli_query($connect, "SELECT * FROM links where id=1");
$row1 	  	= mysqli_fetch_array($result1);

$result2  	= mysqli_query($connect, "SELECT * FROM links where id=2");
$row2 	  	= mysqli_fetch_array($result2);

$result3  	= mysqli_query($connect, "SELECT * FROM links where id=3");
$row3 	  	= mysqli_fetch_array($result3);

$result4  	= mysqli_query($connect, "SELECT * FROM links where id=4");
$row4 	  	= mysqli_fetch_array($result4);

$result5  	= mysqli_query($connect, "SELECT * FROM links where id=5");
$row5 	  	= mysqli_fetch_array($result5);

$result6  	= mysqli_query($connect, "SELECT * FROM links where id=6");
$row6 	  	= mysqli_fetch_array($result6);

$result7  	= mysqli_query($connect, "SELECT * FROM links where id=7");
$row7 	  	= mysqli_fetch_array($result7);

$result8  	= mysqli_query($connect, "SELECT * FROM links where id=8");
$row8 	  	= mysqli_fetch_array($result8);

$result9  	= mysqli_query($connect, "SELECT * FROM links where id=9");
$row9 	  	= mysqli_fetch_array($result9);

$result10  	= mysqli_query($connect, "SELECT * FROM links where id=10");
$row10 	  	= mysqli_fetch_array($result10);

$result11  	= mysqli_query($connect, "SELECT * FROM links where id=11");
$row11 	  	= mysqli_fetch_array($result11);

$result12  	= mysqli_query($connect, "SELECT * FROM links where id=12");
$row12 	  	= mysqli_fetch_array($result12);

$result13  	= mysqli_query($connect, "SELECT * FROM links where id=13");
$row13 	  	= mysqli_fetch_array($result13);

$result14  	= mysqli_query($connect, "SELECT * FROM links where id=14");
$row14 	  	= mysqli_fetch_array($result14);

$result15  	= mysqli_query($connect, "SELECT * FROM links where id=15");
$row15 	  	= mysqli_fetch_array($result15);

$result16  	= mysqli_query($connect, "SELECT * FROM links where id=16");
$row16 	  	= mysqli_fetch_array($result16);

$result17  	= mysqli_query($connect, "SELECT * FROM links where id=17");
$row17 	  	= mysqli_fetch_array($result17);

$result18  	= mysqli_query($connect, "SELECT * FROM links where id=18");
$row18 	  	= mysqli_fetch_array($result18);

$result19  	= mysqli_query($connect, "SELECT * FROM links where id=19");
$row19 	  	= mysqli_fetch_array($result19);

$result20  	= mysqli_query($connect, "SELECT * FROM links where id=20");
$row20 	  	= mysqli_fetch_array($result20);

$result21  	= mysqli_query($connect, "SELECT * FROM links where id=21");
$row21 	  	= mysqli_fetch_array($result21);

$result22  	= mysqli_query($connect, "SELECT * FROM links where id=22");
$row22 	  	= mysqli_fetch_array($result22);

$result23  	= mysqli_query($connect, "SELECT * FROM links where id=23");
$row23 	  	= mysqli_fetch_array($result23);

$result24  	= mysqli_query($connect, "SELECT * FROM links where id=24");
$row24 	  	= mysqli_fetch_array($result24);

$result25  	= mysqli_query($connect, "SELECT * FROM links where id=25");
$row25 	  	= mysqli_fetch_array($result25);

$result26  	= mysqli_query($connect, "SELECT * FROM links where id=26");
$row26 	  	= mysqli_fetch_array($result26);

$result27  	= mysqli_query($connect, "SELECT * FROM links where id=27");
$row27 	  	= mysqli_fetch_array($result27);

$result28  	= mysqli_query($connect, "SELECT * FROM links where id=28");
$row28 	  	= mysqli_fetch_array($result28);

$result29  	= mysqli_query($connect, "SELECT * FROM links where id=29");
$row29 	  	= mysqli_fetch_array($result29);

$result30  	= mysqli_query($connect, "SELECT * FROM links where id=30");
$row30 	  	= mysqli_fetch_array($result30);

$result31  	= mysqli_query($connect, "SELECT * FROM links where id=31");
$row31 	  	= mysqli_fetch_array($result31);

$result32  	= mysqli_query($connect, "SELECT * FROM links where id=32");
$row32 	  	= mysqli_fetch_array($result32);

$result33  	= mysqli_query($connect, "SELECT * FROM links where id=33");
$row33 	  	= mysqli_fetch_array($result33);

$cinta1					  = $row1[cinta];
$cinta2					  = $row2[cinta];
$cinta3					  = $row3[cinta];
$cinta4					  = $row4[cinta];

$menu0					  = $row6[cinta];
$menu0_desc				  = $row7[cinta];
$menu_inicio				  = $row8[cinta];
$link_inicio				  = $menu_inicio.'.php';

$menu02					  = $row5[nosotros];
$menu02_desc				  = $row6[nosotros];
$menu02_desc_ing			  = $row7[nosotros];
$menu_nosotros			  	  = $row8[nosotros];
$link_nosotros			  	  = $menu_nosotros.'.php';

$menu01					  = $row1[nosotros];
$menu01_desc				  = $row2[nosotros];
$menu01_desc_ing			  = $row3[nosotros];
$menu_nosotros_objetivos		  = $row4[nosotros];
$link_nosotros_objetivos		  = $menu_nosotros_objetivos.'.php';

$menu10					  = $row12[nosotros];
$menu10_desc				  = $row13[nosotros];
$menu_nosotros_misionvision		  = $row14[nosotros];
$link_nosotros_misionvision		  = $menu_nosotros_misionvision.'.php';

$menu09					  = $row9[nosotros];
$menu09_desc				  = $row10[nosotros];
$menu_nosotros_valores			  = $row11[nosotros];
$link_nosotros_valores			  = $menu_nosotros_valores.'.php';

$menu04					  = $row15[nosotros];
$menu04_desc				  = $row16[nosotros];
$menu04_desc_ing			  = $row17[nosotros];
$menu_nosotros_patrocinantes		  = $row18[nosotros];
$link_nosotros_patrocinantes		  = $menu_nosotros_patrocinantes.'.php';

$menu05					  = $row19[nosotros];
$menu05_desc				  = $row20[nosotros];
$menu_cmatic	  	 	  	  = $row21[nosotros];
$link_cmatic	  		  	  = $menu_cmatic.'.php';

$menu06					  = $row22[nosotros];
$menu06_desc				  = $row23[nosotros];
$menu_fundatics	  	  		  = $row24[nosotros];
$link_fundatics	     	  		  = $menu_fundatics.'.php';

$menu03					  = $row25[nosotros];
$menu03_desc				  = $row26[nosotros];
$menu03_desc_ing			  = $row27[nosotros];
$menu_nosotros_equipotrabajo		  = $row28[nosotros];
$link_nosotros_equipotrabajo		  = $menu_nosotros_equipotrabajo.'.php';

$menu07					  = $row29[nosotros];

$menu071				  = $row30[nosotros];
$menu_funproa	  	  		  = $row31[nosotros];
$link_funproa	     	  		  = $menu_funproa.'.php';

$menu072				  = $row32[nosotros];
$menu_antitaurino  	  		  = $row33[nosotros];
$link_antitaurino     	  		  = $menu_antitaurino.'.php';

$menu17					  = $row1[vps];
$menu17_desc				  = $row2[vps];
$menu_vps				  = $row3[vps];
$link_vps				  = $menu_vps.'.php';

$menu11					  = $row1[ingenieria];
$menu11_desc				  = $row2[ingenieria];
$menu_ingenieria			  = $row3[ingenieria];
$link_ingenieria			  = $menu_ingenieria.'.php';

$menu111				  = $row4[ingenieria];
$menu111_desc				  = $row5[ingenieria];
$menu_ingenieria_tarifas		  = $row6[ingenieria];
$link_ingenieria_tarifas		  = $menu_ingenieria_tarifas.'.php';

$menu172				  = $row4[vps];
$menu172_desc				  = $row5[vps];
$menu_vps_tarifas			  = $row6[vps];
$link_vps_tarifas			  = $menu_vps_tarifas.'.php';

$menu173				  = $row1[trading];

$menu174				  = $row2[trading];
$menu1741_desc				  = $row3[trading];
$menu_trading				  = $row4[trading];
$link_trading				  = $menu_trading.'.php';

$menu175				  = $row5[trading];
$menu1751_desc				  = $row6[trading];
$menu_trading_metodologia		  = $row7[trading];
$link_trading_metodologia	  	  = $menu_trading_metodologia.'.php';

$menu176				  = $row8[trading];
$menu1761_desc				  = $row9[trading];
$menu_trading_simulador			  = $row10[trading];
$link_trading_simulador			  = $menu_trading_simulador.'.php';

$menu177				  = 'Inteligencia Artificia (IA)';
$menu1771_desc	 			  = 'Inteligencia Artificia (IA)';
$menu_ia_descripcion			  = 'ia_descripcion';
$link_ia_descripcion			  = $menu_ia_descripcion.'.php';

$menu21					  = 'Pago de Compras';
$menu21_desc				  = 'Pago de Compras';
$menu_pago				  = 'pago';
$link_pago				  = $menu_pago.'.php';

$menu251				  = $row7[vps];
$menu251_desc				  = $row8[vps];
$menu_instructivos_vps			  = $row9[vps];
$link_instructivos_vps			  = $menu_instructivos.'.php?servicio=vps';

$menu20					  = 'Carrito de Compras';
$menu20_desc				  = 'Carrito de Compras';
$menu_carrito_compras			  = 'carrito_compras';
$link_carrito_compras			  = $menu_carrito_compras.'.php';

$menu23				  	  = $row1[chat];
$menu23_desc				  = $row2[chat];
$menu_chat				  = $row3[chat];
$link_chat				  = $menu_chat.'.php';

$menu24				  	  = $row4[chat];
$menu24_desc				  = $row5[chat];
$menu_chat_ia				  = $row6[chat];
$link_chat_ia				  = $menu_chat_ia.'.php';

$menu39					  = $row1[faq];
$menu39_desc				  = $row2[faq];
$menu_faq				  = $row3[faq];
$link_faq				  = $menu_faq.'.php';

$menu391				  = $row4[faq];
$menu392				  = $row5[faq];

$menu_contacto_formulario		  = 'contacto_formulario';
$link_contacto_formulario		  = $menu_contacto_formulario.'.php';

$menu31					  = $row1[registro];
$menu31_desc				  = $row2[registro];
$menu_dashboard_registro		  = $row3[registro];
$link_dashboard_registro		  = $menu_dashboard_registro.'.php';

$menu32					  = $row1[entrar];
$menu32_desc				  = $row2[entrar];
$menu_dashboard_login			  = $row3[entrar];
$link_dashboard_login			  = $menu_dashboard_login.'.php';

$menu34					  = $row1[acercade];
$menu34_desc				  = $row2[acercade];
$menu_acerca				  = $row3[acercade];
$link_acerca				  = $menu_acerca.'.php';

$menu35					  = $row1[intranet];
$menu34_desc				  = $row2[intranet];
$menu_entrar_intranet			  = $row3[intranet];
$link_entrar_intranet			  = $menu_entrar_intranet.'.php';

?>