<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']   = 'anasayfa';
$route['gizlilik']			   = 'anasayfa/gizlilik';
$route['satis']			   	   = 'anasayfa/satis';
$route['sss']			       = 'anasayfa/sss';
$route['garanti']			   = 'anasayfa/garanti';
$route['iletisim']			   = 'anasayfa/iletisim';

$route['kisiselgelisim']			   = 'anasayfa/kisiselgelisim';

$route['spor']			   = 'anasayfa/spor';

$route['egitim']			   = 'anasayfa/egitim';

$route['programlamayazilim']			   = 'anasayfa/programlamayazilim';

$route['grafiktasarim']			   = 'anasayfa/grafiktasarim';

$route['hobielsanatlari']			   = 'anasayfa/hobielsanatlari';

$route['ozelgunurunleri']			   =  'anasayfa/ozelgunurunleri';

$route['muzikveenstruman']			   =  'anasayfa/muzikveenstruman';

$route['bilisimveteknoloji']			   =  'anasayfa/bilisimveteknoloji';

$route['saglikveyasam']			   =  'anasayfa/saglikveyasam';

$route['ascilik']			   =  'anasayfa/ascilik';

$route['dilegitimi']			   =  'anasayfa/dilegitimi';

$route['kulturvesanat']			   =  'anasayfa/kulturvesanat';

$route['bilisimveteknolojidetay/(:any)'] = 'anasayfa/bilisimveteknolojidetay/$1';
$route['ascilikdetay/(:any)'] = 'anasayfa/ascilikdetay/$1';
$route['dilegitimidetay/(:any)'] = 'anasayfa/dilegitimidetay/$1';
$route['egitimdetay/(:any)'] = 'anasayfa/egitimdetay/$1';
$route['grafiktasarimdetay/(:any)'] = 'anasayfa/grafiktasarimdetay/$1';
$route['hobielsanatlaridetay/(:any)'] = 'anasayfa/hobielsanatlaridetay/$1';
$route['kisiselgelisimdetay/(:any)'] = 'anasayfa/kisiselgelisimdetay/$1';
$route['kulturvesanatdetay/(:any)'] = 'anasayfa/kulturvesanatdetay/$1';
$route['muzikveenstrumandetay/(:any)'] = 'anasayfa/muzikveenstrumandetay/$1';
$route['ozelgunurunleridetay/(:any)'] = 'anasayfa/ozelgunurunleridetay/$1';
$route['programlamayazilimdetay/(:any)'] = 'anasayfa/programlamayazilimdetay/$1';
$route['saglikveyasamdetay/(:any)'] = 'anasayfa/saglikveyasamdetay/$1';
$route['spordetay/(:any)'] = 'anasayfa/spordetay/$1';

$route['kayit']                           = 'anasayfa/kayit';
$route['giris']                           = 'anasayfa/giris';

$route['sepet']                           ='anasayfa/sepet';
$route['odeme']                          ='sepet/odeme';
$route['odemeislemi']                    ='anasayfa/odemeislemi';
$route['iptalislemi']                    ='anasayfa/iptalislemi';
$route['degisim']                        ='anasayfa/degisim';






$route['404_override'] 		   = '';
$route['translate_uri_dashes'] = FALSE;
