<h4>Moncash sdk pèman nan laravel</h4>

<p>App sa pèmèt ou resevwa lajan sou Moncash apati Rest API Moncash la, li fèt avek laravel ki se yon framework php
pou plis enfo visite <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>

Itilizasyon

Apre w fin desann projè pase komand sa 

$ composer install

a) Premye bagay ale nan app la na App/Http/Controllers/Controller.php 
	wap defini idantifyan kliyan (client) epi kle sekrè a (secret).

b) konfigire mòd ou pral itilize a sandbox ki se mod tes oubyen prod ki se mòd prodiksyon.
	Pou sandbox nan fonksyon makepayment() wap itilize metòd getSandboxConfigs pou konfigirasyon
	Pou Prod oubyen Live nan fonksyon makepayment() wap itilize metòd getProdConfigs pou konfigirasyon
	Nan  fichye App/Http/Controllers/MoncashController.php

c) Pou ou pase yon pèman wap itilize url baz plis /testmoncash?orderId=8786&amount=1000


Mesi, mwen espere mwen ede ou.