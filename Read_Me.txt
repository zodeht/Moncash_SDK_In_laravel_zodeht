Moncash pèman

App sa pèmèt ou resevwa lajan sou Moncash apati Rest API Moncash la, li fèt avek laravel ki se yon framework php
pou plis enfo visite https://laravel.com/

Itilizasyon


a) Premye bagay ale nan app la na App/Http/Controllers/Controller.php 
	wap defini idantifyan kliyan (client) epi kle sekrè a (secret).

b) konfigire mòd ou pral itilize a sandbox ki se mod tes oubyen prod ki se mòd prodiksyon.
	Pou sandbox nan fonksyon makepayment() wap itilize metòd getSandboxConfigs pou konfigirasyon
	Pou Prod oubyen Live nan fonksyon makepayment() wap itilize metòd getProdConfigs pou konfigirasyon
	Nan  fichye App/Http/Controllers/MoncashController.php

c) Pou ou pase yon pèman wap itilize url baz plis /testmoncash?orderId=8786&amount=1000


Mesi, mwen espere mwen ede ou.
