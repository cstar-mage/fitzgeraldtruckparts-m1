<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', TRUE);
ini_set('log_errors', TRUE);
set_time_limit(0);

//Include the Mage package
require_once __DIR__.'/../app/Mage.php';

//Set Developer mode to true, allows for more verbose errors
Mage::setIsDeveloperMode(true);

//Set php to display errors
ini_set('display_errors', 1);

//Initialize the app.
//Mage::app();
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

//Start timer
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());

    return ((float) $usec + (float) $sec);
}

$time_start = microtime_float();
///////END HEADER//////

$products = Mage::getModel('catalog/product')->getCollection();//->addAttributeToFilter('name',array('like'=>'%example%'));

foreach ($products as $product) {
if ($product->getSku() === '199') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '1914') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '1916') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '2122') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '2491') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '2643') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '2989') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '3284') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '4295') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '4410') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '5449') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '6107') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '6127') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '6449') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '8323') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '9348') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '15194') {
    $product->setPrice('3.75');
    $product->save();
}
if ($product->getSku() === '20531') {
    $product->setPrice('340');
    $product->save();
}
if ($product->getSku() === '20987') {
    $product->setPrice('14.82');
    $product->save();
}
if ($product->getSku() === '26618') {
    $product->setPrice('319.86');
    $product->save();
}
if ($product->getSku() === '49203') {
    $product->setPrice('18.75');
    $product->save();
}
if ($product->getSku() === '72397') {
    $product->setPrice('0.97');
    $product->save();
}
if ($product->getSku() === '72645') {
    $product->setPrice('25');
    $product->save();
}
if ($product->getSku() === '74360') {
    $product->setPrice('3.05');
    $product->save();
}
if ($product->getSku() === '91029') {
    $product->setPrice('7.75');
    $product->save();
}
if ($product->getSku() === '131973') {
    $product->setPrice('160');
    $product->save();
}
if ($product->getSku() === '167049') {
    $product->setPrice('750');
    $product->save();
}
if ($product->getSku() === '167050') {
    $product->setPrice('665');
    $product->save();
}
if ($product->getSku() === '167715') {
    $product->setPrice('665');
    $product->save();
}
if ($product->getSku() === '167735') {
    $product->setPrice('600');
    $product->save();
}
if ($product->getSku() === '167736') {
    $product->setPrice('600');
    $product->save();
}
if ($product->getSku() === '169011') {
    $product->setPrice('593');
    $product->save();
}
if ($product->getSku() === '169012') {
    $product->setPrice('640');
    $product->save();
}
if ($product->getSku() === '171701') {
    $product->setPrice('780');
    $product->save();
}
if ($product->getSku() === '171702') {
    $product->setPrice('695');
    $product->save();
}
if ($product->getSku() === '172033') {
    $product->setPrice('895');
    $product->save();
}
if ($product->getSku() === '172034') {
    $product->setPrice('790');
    $product->save();
}
if ($product->getSku() === '172035') {
    $product->setPrice('770');
    $product->save();
}
if ($product->getSku() === '172743') {
    $product->setPrice('795');
    $product->save();
}
if ($product->getSku() === '174260') {
    $product->setPrice('1589');
    $product->save();
}
if ($product->getSku() === '174269') {
    $product->setPrice('1185');
    $product->save();
}
if ($product->getSku() === '175963') {
    $product->setPrice('1585');
    $product->save();
}
if ($product->getSku() === '177148') {
    $product->setPrice('1600');
    $product->save();
}
if ($product->getSku() === '196463') {
    $product->setPrice('819');
    $product->save();
}
if ($product->getSku() === '196464') {
    $product->setPrice('831');
    $product->save();
}
if ($product->getSku() === '196800') {
    $product->setPrice('725');
    $product->save();
}
if ($product->getSku() === '360470') {
    $product->setPrice('1053.32');
    $product->save();
}
if ($product->getSku() === '621224') {
    $product->setPrice('29.37');
    $product->save();
}
if ($product->getSku() === '631261') {
    $product->setPrice('26');
    $product->save();
}
if ($product->getSku() === '631273') {
    $product->setPrice('1.5');
    $product->save();
}
if ($product->getSku() === '631293') {
    $product->setPrice('8.46');
    $product->save();
}
if ($product->getSku() === '631340') {
    $product->setPrice('32.51');
    $product->save();
}
if ($product->getSku() === '640008') {
    $product->setPrice('8.5');
    $product->save();
}
if ($product->getSku() === '640012') {
    $product->setPrice('7.8');
    $product->save();
}
if ($product->getSku() === '640021') {
    $product->setPrice('12');
    $product->save();
}
if ($product->getSku() === '641261') {
    $product->setPrice('250');
    $product->save();
}
if ($product->getSku() === '641270') {
    $product->setPrice('102.92');
    $product->save();
}
if ($product->getSku() === '642020') {
    $product->setPrice('4.77');
    $product->save();
}
if ($product->getSku() === '642080') {
    $product->setPrice('18');
    $product->save();
}
if ($product->getSku() === '650656') {
    $product->setPrice('15.8');
    $product->save();
}
if ($product->getSku() === '650657') {
    $product->setPrice('53.59');
    $product->save();
}
if ($product->getSku() === '671700') {
    $product->setPrice('181.97');
    $product->save();
}
if ($product->getSku() === '680371') {
    $product->setPrice('350.1');
    $product->save();
}
if ($product->getSku() === '691924') {
    $product->setPrice('656.12');
    $product->save();
}
if ($product->getSku() === '740420') {
    $product->setPrice('64.25');
    $product->save();
}
if ($product->getSku() === '791006') {
    $product->setPrice('584.61');
    $product->save();
}
if ($product->getSku() === '791068') {
    $product->setPrice('584.61');
    $product->save();
}
if ($product->getSku() === '791069') {
    $product->setPrice('584.61');
    $product->save();
}
if ($product->getSku() === '793027') {
    $product->setPrice('584.61');
    $product->save();
}
if ($product->getSku() === '994072') {
    $product->setPrice('75');
    $product->save();
}
if ($product->getSku() === '1024612') {
    $product->setPrice('117.26');
    $product->save();
}
if ($product->getSku() === '1029903') {
    $product->setPrice('1579');
    $product->save();
}
if ($product->getSku() === '1061792') {
    $product->setPrice('10.85');
    $product->save();
}
if ($product->getSku() === '1061793') {
    $product->setPrice('9.5');
    $product->save();
}
if ($product->getSku() === '2818261') {
    $product->setPrice('21.5');
    $product->save();
}
if ($product->getSku() === '6228951') {
    $product->setPrice('85');
    $product->save();
}
if ($product->getSku() === '8200289') {
    $product->setPrice('320');
    $product->save();
}
if ($product->getSku() === '8200308') {
    $product->setPrice('325');
    $product->save();
}
if ($product->getSku() === '8600126') {
    $product->setPrice('510');
    $product->save();
}
if ($product->getSku() === '8600127') {
    $product->setPrice('465');
    $product->save();
}
if ($product->getSku() === '8600310') {
    $product->setPrice('189');
    $product->save();
}
if ($product->getSku() === '8600315') {
    $product->setPrice('285');
    $product->save();
}
if ($product->getSku() === '8605556') {
    $product->setPrice('65.12');
    $product->save();
}
if ($product->getSku() === '8929077') {
    $product->setPrice('137.02');
    $product->save();
}
if ($product->getSku() === '8929285') {
    $product->setPrice('0.7');
    $product->save();
}
if ($product->getSku() === '8929387') {
    $product->setPrice('60');
    $product->save();
}
if ($product->getSku() === '8929388') {
    $product->setPrice('63.87');
    $product->save();
}
if ($product->getSku() === '8929690') {
    $product->setPrice('11.86');
    $product->save();
}
if ($product->getSku() === '11506101') {
    $product->setPrice('0.68');
    $product->save();
}
if ($product->getSku() === '23503747') {
    $product->setPrice('61.49');
    $product->save();
}
if ($product->getSku() === '23504851') {
    $product->setPrice('24.23');
    $product->save();
}
if ($product->getSku() === '23505876') {
    $product->setPrice('500');
    $product->save();
}
if ($product->getSku() === '23505887') {
    $product->setPrice('95');
    $product->save();
}
if ($product->getSku() === '23507438') {
    $product->setPrice('4');
    $product->save();
}
if ($product->getSku() === '23511667') {
    $product->setPrice('120');
    $product->save();
}
if ($product->getSku() === '23511982') {
    $product->setPrice('600');
    $product->save();
}
if ($product->getSku() === '23513509') {
    $product->setPrice('17.38');
    $product->save();
}
if ($product->getSku() === '23513557') {
    $product->setPrice('179.09');
    $product->save();
}
if ($product->getSku() === '23514328') {
    $product->setPrice('15');
    $product->save();
}
if ($product->getSku() === '23515251') {
    $product->setPrice('42.64');
    $product->save();
}
if ($product->getSku() === '23515354') {
    $product->setPrice('65.95');
    $product->save();
}
if ($product->getSku() === '23516969') {
    $product->setPrice('62.44');
    $product->save();
}
if ($product->getSku() === '23517437') {
    $product->setPrice('527.22');
    $product->save();
}
if ($product->getSku() === '23518207') {
    $product->setPrice('456.93');
    $product->save();
}
if ($product->getSku() === '23518348') {
    $product->setPrice('25.5');
    $product->save();
}
if ($product->getSku() === '23519094') {
    $product->setPrice('25.17');
    $product->save();
}
if ($product->getSku() === '23519147') {
    $product->setPrice('138');
    $product->save();
}
if ($product->getSku() === '23519307') {
    $product->setPrice('1200');
    $product->save();
}
if ($product->getSku() === '23519651') {
    $product->setPrice('45.53');
    $product->save();
}
if ($product->getSku() === '23522272') {
    $product->setPrice('165.45');
    $product->save();
}
if ($product->getSku() === '23522282') {
    $product->setPrice('359.2');
    $product->save();
}
if ($product->getSku() === '23522283') {
    $product->setPrice('425.38');
    $product->save();
}
if ($product->getSku() === '23522416') {
    $product->setPrice('196.33');
    $product->save();
}
if ($product->getSku() === '23523267') {
    $product->setPrice('162.64');
    $product->save();
}
if ($product->getSku() === '23524389') {
    $product->setPrice('50');
    $product->save();
}
if ($product->getSku() === '23526054') {
    $product->setPrice('203.63');
    $product->save();
}
if ($product->getSku() === '23527765') {
    $product->setPrice('91.15');
    $product->save();
}
if ($product->getSku() === '23528418') {
    $product->setPrice('87.22');
    $product->save();
}
if ($product->getSku() === '23530400') {
    $product->setPrice('18.82');
    $product->save();
}
if ($product->getSku() === '23530768') {
    $product->setPrice('5.38');
    $product->save();
}
if ($product->getSku() === '23531415') {
    $product->setPrice('55.42');
    $product->save();
}
if ($product->getSku() === '23531605') {
    $product->setPrice('311.45');
    $product->save();
}
if ($product->getSku() === '23532333') {
    $product->setPrice('165.36');
    $product->save();
}
if ($product->getSku() === '23532436') {
    $product->setPrice('30.36');
    $product->save();
}
if ($product->getSku() === '23533956') {
    $product->setPrice('45.13');
    $product->save();
}
if ($product->getSku() === '23533969') {
    $product->setPrice('25.05');
    $product->save();
}
if ($product->getSku() === '23537315') {
    $product->setPrice('217.27');
    $product->save();
}
if ($product->getSku() === '23537789') {
    $product->setPrice('27.6');
    $product->save();
}
if ($product->getSku() === '23538657') {
    $product->setPrice('15');
    $product->save();
}
if ($product->getSku() === '23539103') {
    $product->setPrice('37.8');
    $product->save();
}
if ($product->getSku() === '23539104') {
    $product->setPrice('52.04');
    $product->save();
}
if ($product->getSku() === '23539290') {
    $product->setPrice('34.25');
    $product->save();
}
if ($product->getSku() === '23539529') {
    $product->setPrice('187.18');
    $product->save();
}
if ($product->getSku() === '98313252') {
    $product->setPrice('125');
    $product->save();
}
if ($product->getSku() === '98362251') {
    $product->setPrice('125');
    $product->save();
}
if ($product->getSku() === '983813253') {
    $product->setPrice('125');
    $product->save();
}
if ($product->getSku() === '992787253') {
    $product->setPrice('129.2');
    $product->save();
}
if ($product->getSku() === '993813252') {
    $product->setPrice('125');
    $product->save();
}
if ($product->getSku() === '14969880000') {
    $product->setPrice('2075');
    $product->save();
}
if ($product->getSku() === '14969880001') {
    $product->setPrice('2075');
    $product->save();
}
if ($product->getSku() === '14969880002') {
    $product->setPrice('2075');
    $product->save();
}
if ($product->getSku() === '14969880003') {
    $product->setPrice('2095');
    $product->save();
}
if ($product->getSku() === '14969880004') {
    $product->setPrice('2390');
    $product->save();
}
if ($product->getSku() === '14969880005') {
    $product->setPrice('2390');
    $product->save();
}
if ($product->getSku() === '01-15052-000') {
    $product->setPrice('40');
    $product->save();
}
if ($product->getSku() === '0199X') {
    $product->setPrice('1500');
    $product->save();
}
if ($product->getSku() === '05-02657') {
    $product->setPrice('9.5');
    $product->save();
}
if ($product->getSku() === '05-08968') {
    $product->setPrice('26');
    $product->save();
}
if ($product->getSku() === '05-16840-000') {
    $product->setPrice('28.25');
    $product->save();
}
if ($product->getSku() === '05-18145-000') {
    $product->setPrice('24');
    $product->save();
}
if ($product->getSku() === '05-196760-002') {
    $product->setPrice('365');
    $product->save();
}
if ($product->getSku() === '05-19819-000') {
    $product->setPrice('90.35');
    $product->save();
}
if ($product->getSku() === '06-00984') {
    $product->setPrice('47.31');
    $product->save();
}
if ($product->getSku() === '06-01150-360') {
    $product->setPrice('25.15');
    $product->save();
}
if ($product->getSku() === '06-53404-000') {
    $product->setPrice('119.5');
    $product->save();
}
if ($product->getSku() === '09-8-545-220') {
    $product->setPrice('166.19');
    $product->save();
}
if ($product->getSku() === '10126-08590') {
    $product->setPrice('3.31');
    $product->save();
}
if ($product->getSku() === '105C137') {
    $product->setPrice('30.57');
    $product->save();
}
if ($product->getSku() === '106C1498') {
    $product->setPrice('12.95');
    $product->save();
}
if ($product->getSku() === '108391-74AM') {
    $product->setPrice('615');
    $product->save();
}
if ($product->getSku() === '109-4203') {
    $product->setPrice('340.33');
    $product->save();
}
if ($product->getSku() === '10R7222') {
    $product->setPrice('525.09');
    $product->save();
}
if ($product->getSku() === '10R7225') {
    $product->setPrice('525.09');
    $product->save();
}
if ($product->getSku() === '10R7675') {
    $product->setPrice('388.37');
    $product->save();
}
if ($product->getSku() === '1102-8001') {
    $product->setPrice('898.24');
    $product->save();
}
if ($product->getSku() === '1102-8004') {
    $product->setPrice('764');
    $product->save();
}
if ($product->getSku() === '1102-8009') {
    $product->setPrice('400');
    $product->save();
}
if ($product->getSku() === '1102-8011') {
    $product->setPrice('782');
    $product->save();
}
if ($product->getSku() === '1102-8012') {
    $product->setPrice('1172');
    $product->save();
}
if ($product->getSku() === '1102-8013') {
    $product->setPrice('1236');
    $product->save();
}
if ($product->getSku() === '1102-8014') {
    $product->setPrice('836');
    $product->save();
}
if ($product->getSku() === '110-555JHO') {
    $product->setPrice('198');
    $product->save();
}
if ($product->getSku() === '110-555PHO') {
    $product->setPrice('210');
    $product->save();
}
if ($product->getSku() === '1293-07896-04') {
    $product->setPrice('625');
    $product->save();
}
if ($product->getSku() === '14PAC-B6001009') {
    $product->setPrice('52.81');
    $product->save();
}
if ($product->getSku() === '14PB-2998CP') {
    $product->setPrice('68.12');
    $product->save();
}
if ($product->getSku() === '14PB-6615SCP') {
    $product->setPrice('112.5');
    $product->save();
}
if ($product->getSku() === '14PB-A2998SCP') {
    $product->setPrice('68.15');
    $product->save();
}
if ($product->getSku() === '14PB-B4656') {
    $product->setPrice('101.08');
    $product->save();
}
if ($product->getSku() === '14PB-PIN389SP') {
    $product->setPrice('39.81');
    $product->save();
}
if ($product->getSku() === '14ZPBX-30568050CP') {
    $product->setPrice('355.28');
    $product->save();
}
if ($product->getSku() === '14ZPBX-DR700CP') {
    $product->setPrice('451.79');
    $product->save();
}
if ($product->getSku() === '14ZPBX-RP7050CP') {
    $product->setPrice('419.42');
    $product->save();
}
if ($product->getSku() === '14ZPBX-RP8050CP') {
    $product->setPrice('432.95');
    $product->save();
}
if ($product->getSku() === '15-05609') {
    $product->setPrice('50');
    $product->save();
}
if ($product->getSku() === '17-13788-000') {
    $product->setPrice('6.25');
    $product->save();
}
if ($product->getSku() === '17-14850-003') {
    $product->setPrice('516.69');
    $product->save();
}
if ($product->getSku() === '18-2122') {
    $product->setPrice('225');
    $product->save();
}
if ($product->getSku() === '18-30769-002') {
    $product->setPrice('26.73');
    $product->save();
}
if ($product->getSku() === '18-52651-000') {
    $product->setPrice('53.71');
    $product->save();
}
if ($product->getSku() === '19105003-1') {
    $product->setPrice('3450');
    $product->save();
}
if ($product->getSku() === '192-0211') {
    $product->setPrice('340.71');
    $product->save();
}
if ($product->getSku() === '203-36-2042') {
    $product->setPrice('25');
    $product->save();
}
if ($product->getSku() === '208925-25') {
    $product->setPrice('825');
    $product->save();
}
if ($product->getSku() === '208925-82') {
    $product->setPrice('840');
    $product->save();
}
if ($product->getSku() === '208937-32') {
    $product->setPrice('1495');
    $product->save();
}
if ($product->getSku() === '21-465') {
    $product->setPrice('6.5');
    $product->save();
}
if ($product->getSku() === '21-467') {
    $product->setPrice('13.25');
    $product->save();
}
if ($product->getSku() === '22-53607-000') {
    $product->setPrice('80.5');
    $product->save();
}
if ($product->getSku() === '22-64780-002') {
    $product->setPrice('99.11');
    $product->save();
}
if ($product->getSku() === '23-13202-000') {
    $product->setPrice('2.45');
    $product->save();
}
if ($product->getSku() === '23-13203-000') {
    $product->setPrice('2.45');
    $product->save();
}
if ($product->getSku() === '23-132034-000') {
    $product->setPrice('2.7');
    $product->save();
}
if ($product->getSku() === '23-13205-000') {
    $product->setPrice('2.95');
    $product->save();
}
if ($product->getSku() === '23506683SS') {
    $product->setPrice('125');
    $product->save();
}
if ($product->getSku() === '2351215H1') {
    $product->setPrice('27.95');
    $product->save();
}
if ($product->getSku() === '24MP-50018CP') {
    $product->setPrice('58.95');
    $product->save();
}
if ($product->getSku() === '24MP-50024CP') {
    $product->setPrice('76.95');
    $product->save();
}
if ($product->getSku() === '24MP-50036CP') {
    $product->setPrice('103.95');
    $product->save();
}
if ($product->getSku() === '24MP-50044CP') {
    $product->setPrice('122.95');
    $product->save();
}
if ($product->getSku() === '24MP-50048CP') {
    $product->setPrice('134.95');
    $product->save();
}
if ($product->getSku() === '24MP-50054CP') {
    $product->setPrice('149.95');
    $product->save();
}
if ($product->getSku() === '24MP-50060CP') {
    $product->setPrice('166.95');
    $product->save();
}
if ($product->getSku() === '24MP-50068CP') {
    $product->setPrice('184.95');
    $product->save();
}
if ($product->getSku() === '24MP-50072CP') {
    $product->setPrice('195.95');
    $product->save();
}
if ($product->getSku() === '24MP-50084CP') {
    $product->setPrice('226.95');
    $product->save();
}
if ($product->getSku() === '24MP-60036CP') {
    $product->setPrice('132.95');
    $product->save();
}
if ($product->getSku() === '24MP-60044CP') {
    $product->setPrice('159.95');
    $product->save();
}
if ($product->getSku() === '24MP-60048CP') {
    $product->setPrice('182.95');
    $product->save();
}
if ($product->getSku() === '24MP-60054CP') {
    $product->setPrice('199.95');
    $product->save();
}
if ($product->getSku() === '24MP-60060CP') {
    $product->setPrice('219.95');
    $product->save();
}
if ($product->getSku() === '24MP-60068CP') {
    $product->setPrice('249.95');
    $product->save();
}
if ($product->getSku() === '24MP-605036CP') {
    $product->setPrice('148.95');
    $product->save();
}
if ($product->getSku() === '24MP-605048CP') {
    $product->setPrice('189.95');
    $product->save();
}
if ($product->getSku() === '24MP-605060CP') {
    $product->setPrice('229.95');
    $product->save();
}
if ($product->getSku() === '24MP-605084CP') {
    $product->setPrice('319.95');
    $product->save();
}
if ($product->getSku() === '24MP-70036CP') {
    $product->setPrice('308.95');
    $product->save();
}
if ($product->getSku() === '24MP-70044CP') {
    $product->setPrice('319.95');
    $product->save();
}
if ($product->getSku() === '24MP-70048CP') {
    $product->setPrice('337.95');
    $product->save();
}
if ($product->getSku() === '24MP-70054CP') {
    $product->setPrice('379.95');
    $product->save();
}
if ($product->getSku() === '24MP-70060CP') {
    $product->setPrice('416.95');
    $product->save();
}
if ($product->getSku() === '24MP-70068CP') {
    $product->setPrice('429.95');
    $product->save();
}
if ($product->getSku() === '24MP-705036CP') {
    $product->setPrice('353.95');
    $product->save();
}
if ($product->getSku() === '24MP-705048CP') {
    $product->setPrice('399.95');
    $product->save();
}
if ($product->getSku() === '24MP-705060CP') {
    $product->setPrice('452.95');
    $product->save();
}
if ($product->getSku() === '24MP-80036CP') {
    $product->setPrice('304.95');
    $product->save();
}
if ($product->getSku() === '24MP-80044CP') {
    $product->setPrice('319.95');
    $product->save();
}
if ($product->getSku() === '24MP-80048CP') {
    $product->setPrice('365.95');
    $product->save();
}
if ($product->getSku() === '24MP-80054CP') {
    $product->setPrice('382.95');
    $product->save();
}
if ($product->getSku() === '24MP-80060CP') {
    $product->setPrice('418.95');
    $product->save();
}
if ($product->getSku() === '24MP-80068CP') {
    $product->setPrice('435.95');
    $product->save();
}
if ($product->getSku() === '24MP-805036CP') {
    $product->setPrice('358.95');
    $product->save();
}
if ($product->getSku() === '24MP-805048CP') {
    $product->setPrice('399.95');
    $product->save();
}
if ($product->getSku() === '24MP-805060CP') {
    $product->setPrice('479.95');
    $product->save();
}
if ($product->getSku() === '24MP-805084CP') {
    $product->setPrice('665.95');
    $product->save();
}
if ($product->getSku() === '24P-60060CP') {
    $product->setPrice('130.14');
    $product->save();
}
if ($product->getSku() === '24P-60068CP') {
    $product->setPrice('228.95');
    $product->save();
}
if ($product->getSku() === '24P-6050284CP') {
    $product->setPrice('339.68');
    $product->save();
}
if ($product->getSku() === '24P605036CP') {
    $product->setPrice('149.95');
    $product->save();
}
if ($product->getSku() === '24P605048CP') {
    $product->setPrice('207.19');
    $product->save();
}
if ($product->getSku() === '24P-605060CP') {
    $product->setPrice('230.14');
    $product->save();
}
if ($product->getSku() === '24P-70036CP') {
    $product->setPrice('239.95');
    $product->save();
}
if ($product->getSku() === '24P-70044CP') {
    $product->setPrice('304.95');
    $product->save();
}
if ($product->getSku() === '24P-70048CP') {
    $product->setPrice('322.95');
    $product->save();
}
if ($product->getSku() === '24P-70054CP') {
    $product->setPrice('349.95');
    $product->save();
}
if ($product->getSku() === '24P-70060CP') {
    $product->setPrice('405.95');
    $product->save();
}
if ($product->getSku() === '24P-70068CP') {
    $product->setPrice('409.95');
    $product->save();
}
if ($product->getSku() === '24P-705036CP') {
    $product->setPrice('269.95');
    $product->save();
}
if ($product->getSku() === '24P-705048CP') {
    $product->setPrice('448.01');
    $product->save();
}
if ($product->getSku() === '24P-705060CP') {
    $product->setPrice('507.98');
    $product->save();
}
if ($product->getSku() === '24P-80036CP') {
    $product->setPrice('239.95');
    $product->save();
}
if ($product->getSku() === '24P-80044CP') {
    $product->setPrice('309.95');
    $product->save();
}
if ($product->getSku() === '24P-80048CP') {
    $product->setPrice('349.95');
    $product->save();
}
if ($product->getSku() === '24P-80054CP') {
    $product->setPrice('405.95');
    $product->save();
}
if ($product->getSku() === '24P-80060CP') {
    $product->setPrice('419.95');
    $product->save();
}
if ($product->getSku() === '24P-80068CP') {
    $product->setPrice('468.95');
    $product->save();
}
if ($product->getSku() === '24P-805048CP') {
    $product->setPrice('448.56');
    $product->save();
}
if ($product->getSku() === '24P-805060CP') {
    $product->setPrice('537.23');
    $product->save();
}
if ($product->getSku() === '24P-805084CP') {
    $product->setPrice('741.88');
    $product->save();
}
if ($product->getSku() === '24P-T960036CP') {
    $product->setPrice('293.95');
    $product->save();
}
if ($product->getSku() === '24P-T960044CP') {
    $product->setPrice('319.95');
    $product->save();
}
if ($product->getSku() === '24P-T960048CP') {
    $product->setPrice('345.95');
    $product->save();
}
if ($product->getSku() === '24P-T960054CP') {
    $product->setPrice('359.95');
    $product->save();
}
if ($product->getSku() === '24P-T960060CP') {
    $product->setPrice('389.95');
    $product->save();
}
if ($product->getSku() === '24P-T960068CP') {
    $product->setPrice('423.95');
    $product->save();
}
if ($product->getSku() === '24P-T9605024CP') {
    $product->setPrice('119.95');
    $product->save();
}
if ($product->getSku() === '24P-T9605036CP') {
    $product->setPrice('313.95');
    $product->save();
}
if ($product->getSku() === '24P-T9605048CP') {
    $product->setPrice('358.95');
    $product->save();
}
if ($product->getSku() === '24P-T9605060CP') {
    $product->setPrice('399.95');
    $product->save();
}
if ($product->getSku() === '24P-T9605084CP') {
    $product->setPrice('482.95');
    $product->save();
}
if ($product->getSku() === '24P-T970036CP') {
    $product->setPrice('614.95');
    $product->save();
}
if ($product->getSku() === '24P-T970044CP') {
    $product->setPrice('622.95');
    $product->save();
}
if ($product->getSku() === '24P-T970048CP') {
    $product->setPrice('648.95');
    $product->save();
}
if ($product->getSku() === '24P-T970054CP') {
    $product->setPrice('713.95');
    $product->save();
}
if ($product->getSku() === '24P-T970060CP') {
    $product->setPrice('775.95');
    $product->save();
}
if ($product->getSku() === '24P-T970068CP') {
    $product->setPrice('807.95');
    $product->save();
}
if ($product->getSku() === '24P-T9705036CP') {
    $product->setPrice('618.95');
    $product->save();
}
if ($product->getSku() === '24P-T9705048CP') {
    $product->setPrice('669.95');
    $product->save();
}
if ($product->getSku() === '24P-T9705060CP') {
    $product->setPrice('789.95');
    $product->save();
}
if ($product->getSku() === '24P-T980036CP') {
    $product->setPrice('604.95');
    $product->save();
}
if ($product->getSku() === '24P-T980044CP') {
    $product->setPrice('644.95');
    $product->save();
}
if ($product->getSku() === '24P-T980054CP') {
    $product->setPrice('734.95');
    $product->save();
}
if ($product->getSku() === '24P-T980060CP') {
    $product->setPrice('774.95');
    $product->save();
}
if ($product->getSku() === '24P-T9805036CP') {
    $product->setPrice('625.95');
    $product->save();
}
if ($product->getSku() === '24P-T9805048CP') {
    $product->setPrice('724.95');
    $product->save();
}
if ($product->getSku() === '24P-T9805060CP') {
    $product->setPrice('795.95');
    $product->save();
}
if ($product->getSku() === '24ZPX-70055CP') {
    $product->setPrice('373.29');
    $product->save();
}
if ($product->getSku() === '24ZPX-Q70052CP') {
    $product->setPrice('425');
    $product->save();
}
if ($product->getSku() === '24ZPX-Q70055CP') {
    $product->setPrice('447.33');
    $product->save();
}
if ($product->getSku() === '24ZPX-Q80055CP') {
    $product->setPrice('508.13');
    $product->save();
}
if ($product->getSku() === '25P-50018CP') {
    $product->setPrice('72.95');
    $product->save();
}
if ($product->getSku() === '25P-50024CP') {
    $product->setPrice('89.95');
    $product->save();
}
if ($product->getSku() === '25P-50036CP') {
    $product->setPrice('117.95');
    $product->save();
}
if ($product->getSku() === '25P-50048CP') {
    $product->setPrice('152.95');
    $product->save();
}
if ($product->getSku() === '25P-50054CP') {
    $product->setPrice('169.95');
    $product->save();
}
if ($product->getSku() === '25P-50060CP') {
    $product->setPrice('175.95');
    $product->save();
}
if ($product->getSku() === '25P-50068CP') {
    $product->setPrice('206.95');
    $product->save();
}
if ($product->getSku() === '25P-50072CP') {
    $product->setPrice('222.95');
    $product->save();
}
if ($product->getSku() === '25P-50084CP') {
    $product->setPrice('249.95');
    $product->save();
}
if ($product->getSku() === '25P-60018CP') {
    $product->setPrice('94.95');
    $product->save();
}
if ($product->getSku() === '25P-60036CP') {
    $product->setPrice('149.95');
    $product->save();
}
if ($product->getSku() === '25P-60044CP') {
    $product->setPrice('182.95');
    $product->save();
}
if ($product->getSku() === '25P-60048CP') {
    $product->setPrice('199.95');
    $product->save();
}
if ($product->getSku() === '25P-60054CP') {
    $product->setPrice('219.95');
    $product->save();
}
if ($product->getSku() === '25P-60060CP') {
    $product->setPrice('239.95');
    $product->save();
}
if ($product->getSku() === '25P-60068CP') {
    $product->setPrice('267.95');
    $product->save();
}
if ($product->getSku() === '25P-605024CP') {
    $product->setPrice('142.95');
    $product->save();
}
if ($product->getSku() === '25P-605036CP') {
    $product->setPrice('192.95');
    $product->save();
}
if ($product->getSku() === '25P-605048CP') {
    $product->setPrice('199.95');
    $product->save();
}
if ($product->getSku() === '25P-605060CP') {
    $product->setPrice('314.95');
    $product->save();
}
if ($product->getSku() === '25P-605084CP') {
    $product->setPrice('314.95');
    $product->save();
}
if ($product->getSku() === '25P-70036CP') {
    $product->setPrice('319.95');
    $product->save();
}
if ($product->getSku() === '25P-70044CP') {
    $product->setPrice('369.95');
    $product->save();
}
if ($product->getSku() === '25P-70048CP') {
    $product->setPrice('398.95');
    $product->save();
}
if ($product->getSku() === '25P-70054CP') {
    $product->setPrice('406.95');
    $product->save();
}
if ($product->getSku() === '25P-70060CP') {
    $product->setPrice('443.95');
    $product->save();
}
if ($product->getSku() === '25P-70068CP') {
    $product->setPrice('489.95');
    $product->save();
}
if ($product->getSku() === '25P-705036CP') {
    $product->setPrice('363.95');
    $product->save();
}
if ($product->getSku() === '25P-705048CP') {
    $product->setPrice('418.95');
    $product->save();
}
if ($product->getSku() === '25P-705060CP') {
    $product->setPrice('488.95');
    $product->save();
}
if ($product->getSku() === '25P-80036CP') {
    $product->setPrice('397.95');
    $product->save();
}
if ($product->getSku() === '25P-80044CP') {
    $product->setPrice('402.95');
    $product->save();
}
if ($product->getSku() === '25P-80048CP') {
    $product->setPrice('439.95');
    $product->save();
}
if ($product->getSku() === '25P-80054CP') {
    $product->setPrice('495.95');
    $product->save();
}
if ($product->getSku() === '25P-80060CP') {
    $product->setPrice('533.95');
    $product->save();
}
if ($product->getSku() === '25P-80068CP') {
    $product->setPrice('579.95');
    $product->save();
}
if ($product->getSku() === '25P-805036CP') {
    $product->setPrice('504.95');
    $product->save();
}
if ($product->getSku() === '25P-805048CP') {
    $product->setPrice('572.95');
    $product->save();
}
if ($product->getSku() === '25P-805060CP') {
    $product->setPrice('633.95');
    $product->save();
}
if ($product->getSku() === '25P-805084CP') {
    $product->setPrice('765.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50018CP') {
    $product->setPrice('124.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50024CP') {
    $product->setPrice('138.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50048CP') {
    $product->setPrice('204.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50054CP') {
    $product->setPrice('219.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50060CP') {
    $product->setPrice('222.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50068CP') {
    $product->setPrice('247.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50072CP') {
    $product->setPrice('262.95');
    $product->save();
}
if ($product->getSku() === '25P-EC50084CP') {
    $product->setPrice('289.95');
    $product->save();
}
if ($product->getSku() === '25P-EC60036CP') {
    $product->setPrice('193.95');
    $product->save();
}
if ($product->getSku() === '25P-EC60044CP') {
    $product->setPrice('236.95');
    $product->save();
}
if ($product->getSku() === '25P-EC60048CP') {
    $product->setPrice('204.95');
    $product->save();
}
if ($product->getSku() === '25P-EC60054CP') {
    $product->setPrice('275.95');
    $product->save();
}
if ($product->getSku() === '25P-EC60060CP') {
    $product->setPrice('295.95');
    $product->save();
}
if ($product->getSku() === '25P-EC60068CP') {
    $product->setPrice('306.95');
    $product->save();
}
if ($product->getSku() === '25P-EC605024CP') {
    $product->setPrice('192.95');
    $product->save();
}
if ($product->getSku() === '25P-EC605036CP') {
    $product->setPrice('232.95');
    $product->save();
}
if ($product->getSku() === '25P-EC605048CP') {
    $product->setPrice('252.95');
    $product->save();
}
if ($product->getSku() === '25P-EC605060CP') {
    $product->setPrice('267.95');
    $product->save();
}
if ($product->getSku() === '25P-EC605084CP') {
    $product->setPrice('348.95');
    $product->save();
}
if ($product->getSku() === '25P-EC70036CP') {
    $product->setPrice('349.95');
    $product->save();
}
if ($product->getSku() === '25P-EC70044CP') {
    $product->setPrice('396.95');
    $product->save();
}
if ($product->getSku() === '25P-EC70048CP') {
    $product->setPrice('424.95');
    $product->save();
}
if ($product->getSku() === '25P-EC70054CP') {
    $product->setPrice('460.95');
    $product->save();
}
if ($product->getSku() === '25P-EC70060CP') {
    $product->setPrice('497.95');
    $product->save();
}
if ($product->getSku() === '25P-EC70068CP') {
    $product->setPrice('543.95');
    $product->save();
}
if ($product->getSku() === '25P-EC705036CP') {
    $product->setPrice('399.95');
    $product->save();
}
if ($product->getSku() === '25P-EC705048CP') {
    $product->setPrice('471.95');
    $product->save();
}
if ($product->getSku() === '25P-EC705060CP') {
    $product->setPrice('543.95');
    $product->save();
}
if ($product->getSku() === '25P-EC80036CP') {
    $product->setPrice('407.94');
    $product->save();
}
if ($product->getSku() === '25P-EC80044CP') {
    $product->setPrice('434.54');
    $product->save();
}
if ($product->getSku() === '25P-EC80048CP') {
    $product->setPrice('494.95');
    $product->save();
}
if ($product->getSku() === '25P-EC80054CP') {
    $product->setPrice('541.95');
    $product->save();
}
if ($product->getSku() === '25P-EC80060CP') {
    $product->setPrice('588.95');
    $product->save();
}
if ($product->getSku() === '25P-EC80068CP') {
    $product->setPrice('636.95');
    $product->save();
}
if ($product->getSku() === '25P-EC805036CP') {
    $product->setPrice('559.95');
    $product->save();
}
if ($product->getSku() === '25P-EC805048CP') {
    $product->setPrice('627.95');
    $product->save();
}
if ($product->getSku() === '25P-EC805060CP') {
    $product->setPrice('690.95');
    $product->save();
}
if ($product->getSku() === '25P-EC805084CP') {
    $product->setPrice('858.95');
    $product->save();
}
if ($product->getSku() === '26P-100068CP') {
    $product->setPrice('1955.95');
    $product->save();
}
if ($product->getSku() === '26P-50024CP') {
    $product->setPrice('108.95');
    $product->save();
}
if ($product->getSku() === '26P-50036CP') {
    $product->setPrice('137.95');
    $product->save();
}
if ($product->getSku() === '26P-50044CP') {
    $product->setPrice('176.95');
    $product->save();
}
if ($product->getSku() === '26P-50048CP') {
    $product->setPrice('179.95');
    $product->save();
}
if ($product->getSku() === '26P-50054CP') {
    $product->setPrice('189.95');
    $product->save();
}
if ($product->getSku() === '26P-50060CP') {
    $product->setPrice('199.95');
    $product->save();
}
if ($product->getSku() === '26P-50068CP') {
    $product->setPrice('233.95');
    $product->save();
}
if ($product->getSku() === '26P-50072CP') {
    $product->setPrice('243.95');
    $product->save();
}
if ($product->getSku() === '26P-50084CP') {
    $product->setPrice('273.95');
    $product->save();
}
if ($product->getSku() === '26P-60044CP') {
    $product->setPrice('215.95');
    $product->save();
}
if ($product->getSku() === '26P-60048CP') {
    $product->setPrice('225.95');
    $product->save();
}
if ($product->getSku() === '26P-60054CP') {
    $product->setPrice('245.95');
    $product->save();
}
if ($product->getSku() === '26P-60060CP') {
    $product->setPrice('268.95');
    $product->save();
}
if ($product->getSku() === '26P-60068CP') {
    $product->setPrice('304.95');
    $product->save();
}
if ($product->getSku() === '26P-605024CP') {
    $product->setPrice('159.95');
    $product->save();
}
if ($product->getSku() === '26P-605036CP') {
    $product->setPrice('199.95');
    $product->save();
}
if ($product->getSku() === '26P-605048CP') {
    $product->setPrice('242.95');
    $product->save();
}
if ($product->getSku() === '26P-605060CP') {
    $product->setPrice('268.95');
    $product->save();
}
if ($product->getSku() === '26P-605084CP') {
    $product->setPrice('854.95');
    $product->save();
}
if ($product->getSku() === '26P-70036CP') {
    $product->setPrice('378.95');
    $product->save();
}
if ($product->getSku() === '26P-70044CP') {
    $product->setPrice('408.95');
    $product->save();
}
if ($product->getSku() === '26P-70048CP') {
    $product->setPrice('417.95');
    $product->save();
}
if ($product->getSku() === '26P-70054CP') {
    $product->setPrice('434.95');
    $product->save();
}
if ($product->getSku() === '26P-70060CP') {
    $product->setPrice('467.95');
    $product->save();
}
if ($product->getSku() === '26P-70068CP') {
    $product->setPrice('512.95');
    $product->save();
}
if ($product->getSku() === '26P-705036CP') {
    $product->setPrice('459.95');
    $product->save();
}
if ($product->getSku() === '26P-705048CP') {
    $product->setPrice('478.95');
    $product->save();
}
if ($product->getSku() === '26P-705060CP') {
    $product->setPrice('548.95');
    $product->save();
}
if ($product->getSku() === '26P-80036CP') {
    $product->setPrice('422.95');
    $product->save();
}
if ($product->getSku() === '26P-80044CP') {
    $product->setPrice('433.95');
    $product->save();
}
if ($product->getSku() === '26P-80048CP') {
    $product->setPrice('472.95');
    $product->save();
}
if ($product->getSku() === '26P-80054CP') {
    $product->setPrice('522.95');
    $product->save();
}
if ($product->getSku() === '26P-80060CP') {
    $product->setPrice('569.95');
    $product->save();
}
if ($product->getSku() === '26P-80068CP') {
    $product->setPrice('622.95');
    $product->save();
}
if ($product->getSku() === '26P-805036CP') {
    $product->setPrice('539.95');
    $product->save();
}
if ($product->getSku() === '26P-805048CP') {
    $product->setPrice('611.95');
    $product->save();
}
if ($product->getSku() === '26P-805060CP') {
    $product->setPrice('678.95');
    $product->save();
}
if ($product->getSku() === '26P-805084CP') {
    $product->setPrice('854.95');
    $product->save();
}
if ($product->getSku() === '26PS-50018CP') {
    $product->setPrice('74.95');
    $product->save();
}
if ($product->getSku() === '26PS-50024CP') {
    $product->setPrice('92.95');
    $product->save();
}
if ($product->getSku() === '26PS-50036CP') {
    $product->setPrice('127.95');
    $product->save();
}
if ($product->getSku() === '26PS-50044CP') {
    $product->setPrice('141.95');
    $product->save();
}
if ($product->getSku() === '26PS-50048CP') {
    $product->setPrice('159.95');
    $product->save();
}
if ($product->getSku() === '26PS-50054CP') {
    $product->setPrice('166.95');
    $product->save();
}
if ($product->getSku() === '26PS-50060CP') {
    $product->setPrice('188.95');
    $product->save();
}
if ($product->getSku() === '26PS-50068CP') {
    $product->setPrice('199.95');
    $product->save();
}
if ($product->getSku() === '26PS-50072CP') {
    $product->setPrice('215.95');
    $product->save();
}
if ($product->getSku() === '26PS-50084CP') {
    $product->setPrice('242.95');
    $product->save();
}
if ($product->getSku() === '26PS-60036CP') {
    $product->setPrice('146.95');
    $product->save();
}
if ($product->getSku() === '26PS-60044CP') {
    $product->setPrice('177.95');
    $product->save();
}
if ($product->getSku() === '26PS-60048CP') {
    $product->setPrice('196.95');
    $product->save();
}
if ($product->getSku() === '26PS-60054CP') {
    $product->setPrice('214.95');
    $product->save();
}
if ($product->getSku() === '26PS-60060CP') {
    $product->setPrice('233.95');
    $product->save();
}
if ($product->getSku() === '26PS-60068CP') {
    $product->setPrice('260.95');
    $product->save();
}
if ($product->getSku() === '26PS-605024CP') {
    $product->setPrice('137.95');
    $product->save();
}
if ($product->getSku() === '26PS-605036CP') {
    $product->setPrice('183.95');
    $product->save();
}
if ($product->getSku() === '26PS-605048CP') {
    $product->setPrice('203.95');
    $product->save();
}
if ($product->getSku() === '26PS-605060CP') {
    $product->setPrice('232.95');
    $product->save();
}
if ($product->getSku() === '26PS-605084CP') {
    $product->setPrice('317.95');
    $product->save();
}
if ($product->getSku() === '26PS-70036CP') {
    $product->setPrice('302.95');
    $product->save();
}
if ($product->getSku() === '26PS-70044CP') {
    $product->setPrice('350.95');
    $product->save();
}
if ($product->getSku() === '26PS-70048CP') {
    $product->setPrice('377.95');
    $product->save();
}
if ($product->getSku() === '26PS-70054CP') {
    $product->setPrice('413.95');
    $product->save();
}
if ($product->getSku() === '26PS-70060CP') {
    $product->setPrice('450.95');
    $product->save();
}
if ($product->getSku() === '26PS-70068CP') {
    $product->setPrice('497.95');
    $product->save();
}
if ($product->getSku() === '26PS-705036CP') {
    $product->setPrice('372.95');
    $product->save();
}
if ($product->getSku() === '26PS-705048CP') {
    $product->setPrice('418.95');
    $product->save();
}
if ($product->getSku() === '26PS-705060CP') {
    $product->setPrice('488.95');
    $product->save();
}
if ($product->getSku() === '26PS-80024CP') {
    $product->setPrice('295.95');
    $product->save();
}
if ($product->getSku() === '26PS-80036CP') {
    $product->setPrice('404.95');
    $product->save();
}
if ($product->getSku() === '26PS-80054CP') {
    $product->setPrice('495.95');
    $product->save();
}
if ($product->getSku() === '26PS-80060CP') {
    $product->setPrice('542.95');
    $product->save();
}
if ($product->getSku() === '26PS-80068CP') {
    $product->setPrice('589.95');
    $product->save();
}
if ($product->getSku() === '26PS-80446CP') {
    $product->setPrice('408.95');
    $product->save();
}
if ($product->getSku() === '26PS-805036CP') {
    $product->setPrice('513.95');
    $product->save();
}
if ($product->getSku() === '26PS-805048CP') {
    $product->setPrice('581.95');
    $product->save();
}
if ($product->getSku() === '26PS-805060CP') {
    $product->setPrice('643.95');
    $product->save();
}
if ($product->getSku() === '26PS-805084CP') {
    $product->setPrice('799.95');
    $product->save();
}
if ($product->getSku() === '26P-TL50024CP') {
    $product->setPrice('235');
    $product->save();
}
if ($product->getSku() === '26P-TL50036CP') {
    $product->setPrice('300');
    $product->save();
}
if ($product->getSku() === '26P-TL50044CP') {
    $product->setPrice('375');
    $product->save();
}
if ($product->getSku() === '26P-TL50048CP') {
    $product->setPrice('404.3');
    $product->save();
}
if ($product->getSku() === '26P-TL50054CP') {
    $product->setPrice('430.71');
    $product->save();
}
if ($product->getSku() === '26P-TL50060CP') {
    $product->setPrice('451.53');
    $product->save();
}
if ($product->getSku() === '26P-TL50068CP') {
    $product->setPrice('529.61');
    $product->save();
}
if ($product->getSku() === '26P-TL50072CP') {
    $product->setPrice('553.29');
    $product->save();
}
if ($product->getSku() === '26P-TL50084CP') {
    $product->setPrice('619.38');
    $product->save();
}
if ($product->getSku() === '26P-TL60036CP') {
    $product->setPrice('420.02');
    $product->save();
}
if ($product->getSku() === '26P-TL60044CP') {
    $product->setPrice('484.21');
    $product->save();
}
if ($product->getSku() === '26P-TL60048CP') {
    $product->setPrice('509.47');
    $product->save();
}
if ($product->getSku() === '26P-TL60054CP') {
    $product->setPrice('553.72');
    $product->save();
}
if ($product->getSku() === '26P-TL60068CP') {
    $product->setPrice('689.2');
    $product->save();
}
if ($product->getSku() === '26P-TL605036CP') {
    $product->setPrice('452.78');
    $product->save();
}
if ($product->getSku() === '26P-TL605048CP') {
    $product->setPrice('546.8');
    $product->save();
}
if ($product->getSku() === '26P-TL605060CP') {
    $product->setPrice('605.45');
    $product->save();
}
if ($product->getSku() === '26P-TL605084CP') {
    $product->setPrice('779.3');
    $product->save();
}
if ($product->getSku() === '26P-TL70036CP') {
    $product->setPrice('890.38');
    $product->save();
}
if ($product->getSku() === '26P-TL70044CP') {
    $product->setPrice('918.78');
    $product->save();
}
if ($product->getSku() === '26P-TL70048CP') {
    $product->setPrice('985.6');
    $product->save();
}
if ($product->getSku() === '26P-TL70054CP') {
    $product->setPrice('1052.4');
    $product->save();
}
if ($product->getSku() === '26P-TL70060CP') {
    $product->setPrice('1133.07');
    $product->save();
}
if ($product->getSku() === '26P-TL705036CP') {
    $product->setPrice('1112.62');
    $product->save();
}
if ($product->getSku() === '26P-TL705048CP') {
    $product->setPrice('1158.6');
    $product->save();
}
if ($product->getSku() === '26P-TL705060CP') {
    $product->setPrice('1329.64');
    $product->save();
}
if ($product->getSku() === '26P-TL80036CP') {
    $product->setPrice('1022.18');
    $product->save();
}
if ($product->getSku() === '26P-TL80044CP') {
    $product->setPrice('1044.42');
    $product->save();
}
if ($product->getSku() === '26P-TL80048CP') {
    $product->setPrice('1143.1');
    $product->save();
}
if ($product->getSku() === '26P-TL80054CP') {
    $product->setPrice('1264.01');
    $product->save();
}
if ($product->getSku() === '26P-TL80060CP') {
    $product->setPrice('1383.38');
    $product->save();
}
if ($product->getSku() === '26P-TL80068CP') {
    $product->setPrice('1505.18');
    $product->save();
}
if ($product->getSku() === '26P-TL805036CP') {
    $product->setPrice('1309.17');
    $product->save();
}
if ($product->getSku() === '26P-TL805048CP') {
    $product->setPrice('1482.7');
    $product->save();
}
if ($product->getSku() === '26P-TL805060CP') {
    $product->setPrice('1642.88');
    $product->save();
}
if ($product->getSku() === '26P-TL805084CP') {
    $product->setPrice('2070.98');
    $product->save();
}
if ($product->getSku() === '297-8953') {
    $product->setPrice('129.5');
    $product->save();
}
if ($product->getSku() === '29P-50018CP') {
    $product->setPrice('111.95');
    $product->save();
}
if ($product->getSku() === '29P-50024CP') {
    $product->setPrice('140.95');
    $product->save();
}
if ($product->getSku() === '29P-50036CP') {
    $product->setPrice('160.95');
    $product->save();
}
if ($product->getSku() === '29P-50044CP') {
    $product->setPrice('180.95');
    $product->save();
}
if ($product->getSku() === '29P-50048CP') {
    $product->setPrice('196.95');
    $product->save();
}
if ($product->getSku() === '29P-50054CP') {
    $product->setPrice('207.95');
    $product->save();
}
if ($product->getSku() === '29P-50060CP') {
    $product->setPrice('226.95');
    $product->save();
}
if ($product->getSku() === '29P-50068CP') {
    $product->setPrice('269.95');
    $product->save();
}
if ($product->getSku() === '29P-50072CP') {
    $product->setPrice('287.95');
    $product->save();
}
if ($product->getSku() === '29P-50084CP') {
    $product->setPrice('317.95');
    $product->save();
}
if ($product->getSku() === '29P-60036CP') {
    $product->setPrice('194.95');
    $product->save();
}
if ($product->getSku() === '29P-60044CP') {
    $product->setPrice('223.95');
    $product->save();
}
if ($product->getSku() === '29P-60048CP') {
    $product->setPrice('239.95');
    $product->save();
}
if ($product->getSku() === '29P-60054CP') {
    $product->setPrice('285.95');
    $product->save();
}
if ($product->getSku() === '29P-60060CP') {
    $product->setPrice('298.95');
    $product->save();
}
if ($product->getSku() === '29P-60068CP') {
    $product->setPrice('338.95');
    $product->save();
}
if ($product->getSku() === '29P-605024CP') {
    $product->setPrice('179.95');
    $product->save();
}
if ($product->getSku() === '29P-605036CP') {
    $product->setPrice('207.95');
    $product->save();
}
if ($product->getSku() === '29P-605048CP') {
    $product->setPrice('259.95');
    $product->save();
}
if ($product->getSku() === '29P-605060CP') {
    $product->setPrice('316.95');
    $product->save();
}
if ($product->getSku() === '29P-605084CP') {
    $product->setPrice('391.95');
    $product->save();
}
if ($product->getSku() === '29P-70036CP') {
    $product->setPrice('373.95');
    $product->save();
}
if ($product->getSku() === '29P-70044CP') {
    $product->setPrice('402.95');
    $product->save();
}
if ($product->getSku() === '29P-70048CP') {
    $product->setPrice('422.95');
    $product->save();
}
if ($product->getSku() === '29P-70054CP') {
    $product->setPrice('492.95');
    $product->save();
}
if ($product->getSku() === '29P-70060CP') {
    $product->setPrice('510.95');
    $product->save();
}
if ($product->getSku() === '29P-70068CP') {
    $product->setPrice('549.95');
    $product->save();
}
if ($product->getSku() === '29P-705036CP') {
    $product->setPrice('207.95');
    $product->save();
}
if ($product->getSku() === '29P-705048CP') {
    $product->setPrice('412.95');
    $product->save();
}
if ($product->getSku() === '29P-705060CP') {
    $product->setPrice('418.95');
    $product->save();
}
if ($product->getSku() === '29P-80036CP') {
    $product->setPrice('466.95');
    $product->save();
}
if ($product->getSku() === '29P-80044CP') {
    $product->setPrice('499.95');
    $product->save();
}
if ($product->getSku() === '29P-80048CP') {
    $product->setPrice('519.95');
    $product->save();
}
if ($product->getSku() === '29P-80054CP') {
    $product->setPrice('558.95');
    $product->save();
}
if ($product->getSku() === '29P-80060CP') {
    $product->setPrice('568.95');
    $product->save();
}
if ($product->getSku() === '29P-80068CP') {
    $product->setPrice('579.95');
    $product->save();
}
if ($product->getSku() === '29P-805036CP') {
    $product->setPrice('569.95');
    $product->save();
}
if ($product->getSku() === '29P-805048CP') {
    $product->setPrice('636.95');
    $product->save();
}
if ($product->getSku() === '29P-805060CP') {
    $product->setPrice('690.95');
    $product->save();
}
if ($product->getSku() === '29P-805084CP') {
    $product->setPrice('858.95');
    $product->save();
}
if ($product->getSku() === '2N2766') {
    $product->setPrice('5.22');
    $product->save();
}
if ($product->getSku() === '33P-500AZ') {
    $product->setPrice('81.95');
    $product->save();
}
if ($product->getSku() === '33ZPBX-DR7050CP') {
    $product->setPrice('664.16');
    $product->save();
}
if ($product->getSku() === '382950DDC-07') {
    $product->setPrice('225');
    $product->save();
}
if ($product->getSku() === '38501GS') {
    $product->setPrice('89');
    $product->save();
}
if ($product->getSku() === '38503GS') {
    $product->setPrice('94.51');
    $product->save();
}
if ($product->getSku() === '3S011453') {
    $product->setPrice('225.69');
    $product->save();
}
if ($product->getSku() === '3S011458') {
    $product->setPrice('276.77');
    $product->save();
}
if ($product->getSku() === '44016N') {
    $product->setPrice('19');
    $product->save();
}
if ($product->getSku() === '455-0953') {
    $product->setPrice('141.72');
    $product->save();
}
if ($product->getSku() === '455-3839') {
    $product->setPrice('179.42');
    $product->save();
}
if ($product->getSku() === '4735-41393-08') {
    $product->setPrice('125');
    $product->save();
}
if ($product->getSku() === '48CH-DRY700SP') {
    $product->setPrice('367.86');
    $product->save();
}
if ($product->getSku() === '4S6137-3406B') {
    $product->setPrice('11.35');
    $product->save();
}
if ($product->getSku() === '50BJ-700SCP') {
    $product->setPrice('74.09');
    $product->save();
}
if ($product->getSku() === '50BJ-APB700SCP') {
    $product->setPrice('99');
    $product->save();
}
if ($product->getSku() === '50BJ-KWSS700SCP') {
    $product->setPrice('88.4');
    $product->save();
}
if ($product->getSku() === '50BJ-PB700SCP') {
    $product->setPrice('89.25');
    $product->save();
}
if ($product->getSku() === '50BJ-PB800SCP') {
    $product->setPrice('98.37');
    $product->save();
}
if ($product->getSku() === '600911OER') {
    $product->setPrice('350');
    $product->save();
}
if ($product->getSku() === '631282F') {
    $product->setPrice('27.65');
    $product->save();
}
if ($product->getSku() === '641290F') {
    $product->setPrice('375');
    $product->save();
}
if ($product->getSku() === '641290FB') {
    $product->setPrice('375');
    $product->save();
}
if ($product->getSku() === '641291F') {
    $product->setPrice('375');
    $product->save();
}
if ($product->getSku() === '641291FB') {
    $product->setPrice('375');
    $product->save();
}
if ($product->getSku() === '680302F') {
    $product->setPrice('30.95');
    $product->save();
}
if ($product->getSku() === '681120F') {
    $product->setPrice('375');
    $product->save();
}
if ($product->getSku() === '681120FP') {
    $product->setPrice('450');
    $product->save();
}
if ($product->getSku() === '684-1241-212') {
    $product->setPrice('32.25');
    $product->save();
}
if ($product->getSku() === '6L8562-3406B') {
    $product->setPrice('9.65');
    $product->save();
}
if ($product->getSku() === '6NZ') {
    $product->setPrice('48000');
    $product->save();
}
if ($product->getSku() === '6P-60036CP') {
    $product->setPrice('185.95');
    $product->save();
}
if ($product->getSku() === '716405-000') {
    $product->setPrice('540');
    $product->save();
}
if ($product->getSku() === '716852-000') {
    $product->setPrice('325');
    $product->save();
}
if ($product->getSku() === '718018-300') {
    $product->setPrice('520');
    $product->save();
}
if ($product->getSku() === '72306-4') {
    $product->setPrice('0.6');
    $product->save();
}
if ($product->getSku() === '740250F') {
    $product->setPrice('18.82');
    $product->save();
}
if ($product->getSku() === '74398-4') {
    $product->setPrice('1.45');
    $product->save();
}
if ($product->getSku() === '74399-2') {
    $product->setPrice('3.35');
    $product->save();
}
if ($product->getSku() === '765-017537') {
    $product->setPrice('950');
    $product->save();
}
if ($product->getSku() === '79A5108') {
    $product->setPrice('509.73');
    $product->save();
}
if ($product->getSku() === '79A79012') {
    $product->setPrice('625');
    $product->save();
}
if ($product->getSku() === '79A9065') {
    $product->setPrice('706');
    $product->save();
}
if ($product->getSku() === '80DN-8570060SP') {
    $product->setPrice('292.5');
    $product->save();
}
if ($product->getSku() === '8L2729') {
    $product->setPrice('3.13');
    $product->save();
}
if ($product->getSku() === '9455HD') {
    $product->setPrice('11');
    $product->save();
}
if ($product->getSku() === '9506-FL5') {
    $product->setPrice('2648.82');
    $product->save();
}
if ($product->getSku() === '9506-KW9') {
    $product->setPrice('2501.79');
    $product->save();
}
if ($product->getSku() === '9506-PB1') {
    $product->setPrice('2644.19');
    $product->save();
}
if ($product->getSku() === '9506-PB2') {
    $product->setPrice('2610.5');
    $product->save();
}
if ($product->getSku() === '9506-PB3') {
    $product->setPrice('2662.71');
    $product->save();
}
if ($product->getSku() === '9506-PB4') {
    $product->setPrice('2454.33');
    $product->save();
}
if ($product->getSku() === '9506-PB5') {
    $product->setPrice('2678.92');
    $product->save();
}
if ($product->getSku() === '9506-PB6') {
    $product->setPrice('2685.87');
    $product->save();
}
if ($product->getSku() === '9506-PB9') {
    $product->setPrice('2546.94');
    $product->save();
}
if ($product->getSku() === '9506T') {
    $product->setPrice('1901.12');
    $product->save();
}
if ($product->getSku() === '9506-TF') {
    $product->setPrice('1946.52');
    $product->save();
}
if ($product->getSku() === '9506T-FL5') {
    $product->setPrice('2648.82');
    $product->save();
}
if ($product->getSku() === '9506TF-PB1') {
    $product->setPrice('3104.08');
    $product->save();
}
if ($product->getSku() === '9506TF-PB2') {
    $product->setPrice('3110.93');
    $product->save();
}
if ($product->getSku() === '9506TF-PB4') {
    $product->setPrice('2256.3');
    $product->save();
}
if ($product->getSku() === '9506T-PB6') {
    $product->setPrice('3124.54');
    $product->save();
}
if ($product->getSku() === '9506T-PB9') {
    $product->setPrice('2943.01');
    $product->save();
}
if ($product->getSku() === '9510HD') {
    $product->setPrice('15');
    $product->save();
}
if ($product->getSku() === '9550HD') {
    $product->setPrice('12');
    $product->save();
}
if ($product->getSku() === '9556-FL5') {
    $product->setPrice('2739.12');
    $product->save();
}
if ($product->getSku() === '9556-KW9') {
    $product->setPrice('2593.25');
    $product->save();
}
if ($product->getSku() === '9556-PB1') {
    $product->setPrice('2735.64');
    $product->save();
}
if ($product->getSku() === '9556-PB2') {
    $product->setPrice('2695.62');
    $product->save();
}
if ($product->getSku() === '9556-PB3') {
    $product->setPrice('2756.48');
    $product->save();
}
if ($product->getSku() === '9556-PB4') {
    $product->setPrice('2538.34');
    $product->save();
}
if ($product->getSku() === '9556-PB5') {
    $product->setPrice('2771.53');
    $product->save();
}
if ($product->getSku() === '9556-PB6') {
    $product->setPrice('2756.48');
    $product->save();
}
if ($product->getSku() === '9556-PB9') {
    $product->setPrice('2577.04');
    $product->save();
}
if ($product->getSku() === '9556TF') {
    $product->setPrice('1946.52');
    $product->save();
}
if ($product->getSku() === '98A9062') {
    $product->setPrice('625');
    $product->save();
}
if ($product->getSku() === '98A9064') {
    $product->setPrice('625');
    $product->save();
}
if ($product->getSku() === '98A9065') {
    $product->setPrice('625');
    $product->save();
}
if ($product->getSku() === '98A9067') {
    $product->setPrice('625');
    $product->save();
}
if ($product->getSku() === '98A9850') {
    $product->setPrice('625');
    $product->save();
}
if ($product->getSku() === '9Y4582-3406B') {
    $product->setPrice('5');
    $product->save();
}
if ($product->getSku() === 'A-05-18195-002') {
    $product->setPrice('110.15');
    $product->save();
}
if ($product->getSku() === 'A05-19818-000') {
    $product->setPrice('160');
    $product->save();
}
if ($product->getSku() === 'A06-36835-000') {
    $product->setPrice('37.46');
    $product->save();
}
if ($product->getSku() === 'A06-36838-000') {
    $product->setPrice('49.01');
    $product->save();
}
if ($product->getSku() === 'A06-36838-001') {
    $product->setPrice('49.01');
    $product->save();
}
if ($product->getSku() === 'A06-36850-002') {
    $product->setPrice('231.66');
    $product->save();
}
if ($product->getSku() === 'A06-36850-003') {
    $product->setPrice('231.75');
    $product->save();
}
if ($product->getSku() === 'A160203') {
    $product->setPrice('535');
    $product->save();
}
if ($product->getSku() === 'A160204') {
    $product->setPrice('535');
    $product->save();
}
if ($product->getSku() === 'A160207') {
    $product->setPrice('285');
    $product->save();
}
if ($product->getSku() === 'A160208') {
    $product->setPrice('285');
    $product->save();
}
if ($product->getSku() === 'A160210') {
    $product->setPrice('221');
    $product->save();
}
if ($product->getSku() === 'A160211') {
    $product->setPrice('221');
    $product->save();
}
if ($product->getSku() === 'A-23522707') {
    $product->setPrice('260');
    $product->save();
}
if ($product->getSku() === 'A-23523977') {
    $product->setPrice('40');
    $product->save();
}
if ($product->getSku() === 'A682105') {
    $product->setPrice('265');
    $product->save();
}
if ($product->getSku() === 'A-6918') {
    $product->setPrice('65');
    $product->save();
}
if ($product->getSku() === 'A731001') {
    $product->setPrice('191.36');
    $product->save();
}
if ($product->getSku() === 'A742305') {
    $product->setPrice('210');
    $product->save();
}
if ($product->getSku() === 'A742306') {
    $product->setPrice('210');
    $product->save();
}
if ($product->getSku() === 'A742307') {
    $product->setPrice('210');
    $product->save();
}
if ($product->getSku() === 'A742312') {
    $product->setPrice('210');
    $product->save();
}
if ($product->getSku() === 'A832014') {
    $product->setPrice('60.75');
    $product->save();
}
if ($product->getSku() === 'A962116') {
    $product->setPrice('79');
    $product->save();
}
if ($product->getSku() === 'A982125') {
    $product->setPrice('305');
    $product->save();
}
if ($product->getSku() === 'A992102') {
    $product->setPrice('190');
    $product->save();
}
if ($product->getSku() === 'ABP/N35-500CRS') {
    $product->setPrice('5');
    $product->save();
}
if ($product->getSku() === 'ABP/N35-50PLS') {
    $product->setPrice('8.4');
    $product->save();
}
if ($product->getSku() === 'ABP/N49-50EL90124C') {
    $product->setPrice('80');
    $product->save();
}
if ($product->getSku() === 'ABP/N83-304231T') {
    $product->setPrice('330');
    $product->save();
}
if ($product->getSku() === 'ABP/N83-304543') {
    $product->setPrice('205.75');
    $product->save();
}
if ($product->getSku() === 'ABP/N83-319745') {
    $product->setPrice('23.6');
    $product->save();
}
if ($product->getSku() === 'AK-1302802') {
    $product->setPrice('1053.32');
    $product->save();
}
if ($product->getSku() === 'AK-1601428') {
    $product->setPrice('559.51');
    $product->save();
}
if ($product->getSku() === 'AM0071') {
    $product->setPrice('540');
    $product->save();
}
if ($product->getSku() === 'AM1771') {
    $product->setPrice('350');
    $product->save();
}
if ($product->getSku() === 'AM84579') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'AM85679') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'AM86979') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'A-MCOF23532554Q') {
    $product->setPrice('2200');
    $product->save();
}
if ($product->getSku() === 'A-MCOF23532558Q') {
    $product->setPrice('2200');
    $product->save();
}
if ($product->getSku() === 'A-PLY-01-12002') {
    $product->setPrice('40');
    $product->save();
}
if ($product->getSku() === 'AV1555J') {
    $product->setPrice('158');
    $product->save();
}
if ($product->getSku() === 'AV1555P') {
    $product->setPrice('158');
    $product->save();
}
if ($product->getSku() === 'AVI2800J') {
    $product->setPrice('221');
    $product->save();
}
if ($product->getSku() === 'AVI2800P') {
    $product->setPrice('221');
    $product->save();
}
if ($product->getSku() === 'BCD27651-2') {
    $product->setPrice('40');
    $product->save();
}
if ($product->getSku() === 'BHT D3526') {
    $product->setPrice('1080');
    $product->save();
}
if ($product->getSku() === 'BLD2130GH') {
    $product->setPrice('418');
    $product->save();
}
if ($product->getSku() === 'BLD2333GH') {
    $product->setPrice('448');
    $product->save();
}
if ($product->getSku() === 'BLP2131GH') {
    $product->setPrice('369');
    $product->save();
}
if ($product->getSku() === 'BLP2334GH') {
    $product->setPrice('415');
    $product->save();
}
if ($product->getSku() === 'BLP4002H') {
    $product->setPrice('1327');
    $product->save();
}
if ($product->getSku() === 'BLP4004H') {
    $product->setPrice('1535');
    $product->save();
}
if ($product->getSku() === 'BLP4005H') {
    $product->setPrice('580');
    $product->save();
}
if ($product->getSku() === 'BLP4007H') {
    $product->setPrice('677');
    $product->save();
}
if ($product->getSku() === 'BOA/A4965') {
    $product->setPrice('39.25');
    $product->save();
}
if ($product->getSku() === 'BRZ/B9224-0411FRU') {
    $product->setPrice('5.25');
    $product->save();
}
if ($product->getSku() === 'BS23515598') {
    $product->setPrice('2606');
    $product->save();
}
if ($product->getSku() === 'C045001') {
    $product->setPrice('38.38');
    $product->save();
}
if ($product->getSku() === 'C17-0067') {
    $product->setPrice('3080');
    $product->save();
}
if ($product->getSku() === 'D11-1151') {
    $product->setPrice('355.75');
    $product->save();
}
if ($product->getSku() === 'D11-1173') {
    $product->setPrice('195');
    $product->save();
}
if ($product->getSku() === 'D13-1001-1') {
    $product->setPrice('87.31');
    $product->save();
}
if ($product->getSku() === 'D21-6004') {
    $product->setPrice('425.5');
    $product->save();
}
if ($product->getSku() === 'DF-BullHauler-Stack') {
    $product->setPrice('108.95');
    $product->save();
}
if ($product->getSku() === 'DF-Chino-Exhaust-Stack') {
    $product->setPrice('111.95');
    $product->save();
}
if ($product->getSku() === 'DF-Curve-Exhaust-Stack') {
    $product->setPrice('72.95');
    $product->save();
}
if ($product->getSku() === 'DF-Eagle-Claw-Stacks') {
    $product->setPrice('124.95');
    $product->save();
}
if ($product->getSku() === 'DF-EX2X-PeteT4/389') {
    $product->setPrice('1412.72');
    $product->save();
}
if ($product->getSku() === 'DF-Exhaust-Kit-Q-Pete-359') {
    $product->setPrice('673.96');
    $product->save();
}
if ($product->getSku() === 'DF-ExhaustKit-Q--PeteEDC389') {
    $product->setPrice('1626.25');
    $product->save();
}
if ($product->getSku() === 'DF-Exhaust-PeteEDC389') {
    $product->setPrice('1626.25');
    $product->save();
}
if ($product->getSku() === 'DF-KenworthA-EX-Kit') {
    $product->setPrice('968.34');
    $product->save();
}
if ($product->getSku() === 'DF-KenworthA-EX-Kit-Q') {
    $product->setPrice('968.34');
    $product->save();
}
if ($product->getSku() === 'DF-KenworthB-EX-Kit') {
    $product->setPrice('968.34');
    $product->save();
}
if ($product->getSku() === 'DF-KenworthB-EX-KitQ') {
    $product->setPrice('1089.23');
    $product->save();
}
if ($product->getSku() === 'DF-Mitered-Stacks') {
    $product->setPrice('58.95');
    $product->save();
}
if ($product->getSku() === 'DF-Ozzie-Curve-Stacks') {
    $product->setPrice('74.95');
    $product->save();
}
if ($product->getSku() === 'DF-Pete-359-Exhaust-Kit') {
    $product->setPrice('673.96');
    $product->save();
}
if ($product->getSku() === 'DF-Pete-379-Exhaust-Kit') {
    $product->setPrice('669.02');
    $product->save();
}
if ($product->getSku() === 'DF-Pete-379-Ex-Kit-Q') {
    $product->setPrice('669.02');
    $product->save();
}
if ($product->getSku() === 'DF-Straight-Chrome-Stacks') {
    $product->setPrice('149.95');
    $product->save();
}
if ($product->getSku() === 'DF-TechNine-Stacks') {
    $product->setPrice('119.95');
    $product->save();
}
if ($product->getSku() === 'DF-Toro-Loco-Stacks') {
    $product->setPrice('235');
    $product->save();
}
if ($product->getSku() === 'DP-7664CP') {
    $product->setPrice('75');
    $product->save();
}
if ($product->getSku() === 'DP-7687CP') {
    $product->setPrice('50');
    $product->save();
}
if ($product->getSku() === 'DP-7687S') {
    $product->setPrice('50');
    $product->save();
}
if ($product->getSku() === 'DP-7829AZ') {
    $product->setPrice('125');
    $product->save();
}
if ($product->getSku() === 'DP-7830S') {
    $product->setPrice('206.1');
    $product->save();
}
if ($product->getSku() === 'DP-7831S') {
    $product->setPrice('198.7');
    $product->save();
}
if ($product->getSku() === 'DP-7841CP') {
    $product->setPrice('183.25');
    $product->save();
}
if ($product->getSku() === 'DP-7842S') {
    $product->setPrice('240');
    $product->save();
}
if ($product->getSku() === 'DP-7894CP') {
    $product->setPrice('198.97');
    $product->save();
}
if ($product->getSku() === 'DP-7914CP') {
    $product->setPrice('201.15');
    $product->save();
}
if ($product->getSku() === 'DP-7915CP') {
    $product->setPrice('201.15');
    $product->save();
}
if ($product->getSku() === 'DP-7938S') {
    $product->setPrice('250');
    $product->save();
}
if ($product->getSku() === 'DP-7944S') {
    $product->setPrice('227.88');
    $product->save();
}
if ($product->getSku() === 'DP-7961S') {
    $product->setPrice('200.16');
    $product->save();
}
if ($product->getSku() === 'DP-7962S') {
    $product->setPrice('86.4');
    $product->save();
}
if ($product->getSku() === 'DP-7963S') {
    $product->setPrice('175');
    $product->save();
}
if ($product->getSku() === 'DP-7964S') {
    $product->setPrice('220');
    $product->save();
}
if ($product->getSku() === 'DP-7965S') {
    $product->setPrice('48.6');
    $product->save();
}
if ($product->getSku() === 'DP-7966S') {
    $product->setPrice('56.7');
    $product->save();
}
if ($product->getSku() === 'DP-7992AZ') {
    $product->setPrice('97.3');
    $product->save();
}
if ($product->getSku() === 'DP-8021CP') {
    $product->setPrice('198.95');
    $product->save();
}
if ($product->getSku() === 'DP-8022S') {
    $product->setPrice('211.95');
    $product->save();
}
if ($product->getSku() === 'DP-8028CP') {
    $product->setPrice('222.99');
    $product->save();
}
if ($product->getSku() === 'DP-8029CP') {
    $product->setPrice('60.25');
    $product->save();
}
if ($product->getSku() === 'DR6991-RX') {
    $product->setPrice('28500');
    $product->save();
}
if ($product->getSku() === 'E65-1041-0492000') {
    $product->setPrice('62.76');
    $product->save();
}
if ($product->getSku() === 'E65-1042-0320180') {
    $product->setPrice('77.5');
    $product->save();
}
if ($product->getSku() === 'EKT-2668') {
    $product->setPrice('7.36');
    $product->save();
}
if ($product->getSku() === 'F50-1294-010400') {
    $product->setPrice('145.95');
    $product->save();
}
if ($product->getSku() === 'F50-1295') {
    $product->setPrice('51.88');
    $product->save();
}
if ($product->getSku() === 'F50-1300-0925X0275') {
    $product->setPrice('160');
    $product->save();
}
if ($product->getSku() === 'F50-1415-0825') {
    $product->setPrice('47.95');
    $product->save();
}
if ($product->getSku() === 'F69-6003-231') {
    $product->setPrice('255');
    $product->save();
}
if ($product->getSku() === 'FL0189') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'FL0579') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'FL0589') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'FL0777') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'FL0979') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'FL1179') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'FLX500S-409-10.5') {
    $product->setPrice('12.5');
    $product->save();
}
if ($product->getSku() === 'FTP740241') {
    $product->setPrice('32.16');
    $product->save();
}
if ($product->getSku() === 'G50-6000-036') {
    $product->setPrice('40.3');
    $product->save();
}
if ($product->getSku() === 'G90-6047') {
    $product->setPrice('63');
    $product->save();
}
if ($product->getSku() === 'GB423') {
    $product->setPrice('255');
    $product->save();
}
if ($product->getSku() === 'GT17482E') {
    $product->setPrice('9.78');
    $product->save();
}
if ($product->getSku() === 'GU309') {
    $product->setPrice('235');
    $product->save();
}
if ($product->getSku() === 'HWC06726') {
    $product->setPrice('5.85');
    $product->save();
}
if ($product->getSku() === 'IMCB5235915') {
    $product->setPrice('290');
    $product->save();
}
if ($product->getSku() === 'IMCB5235915S') {
    $product->setPrice('1680');
    $product->save();
}
if ($product->getSku() === 'In House') {
    $product->setPrice('54.08');
    $product->save();
}
if ($product->getSku() === 'IN1378') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'IN1478') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'IN379') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'J21270-14') {
    $product->setPrice('47.31');
    $product->save();
}
if ($product->getSku() === 'J50-1007-08-034PT') {
    $product->setPrice('52.5');
    $product->save();
}
if ($product->getSku() === 'J86-6005') {
    $product->setPrice('192.65');
    $product->save();
}
if ($product->getSku() === 'K066-421') {
    $product->setPrice('48.25');
    $product->save();
}
if ($product->getSku() === 'K080575HD') {
    $product->setPrice('30.25');
    $product->save();
}
if ($product->getSku() === 'K100535HD') {
    $product->setPrice('34.5');
    $product->save();
}
if ($product->getSku() === 'K100607HD') {
    $product->setPrice('30');
    $product->save();
}
if ($product->getSku() === 'K130-166') {
    $product->setPrice('31.99');
    $product->save();
}
if ($product->getSku() === 'K159-863') {
    $product->setPrice('185');
    $product->save();
}
if ($product->getSku() === 'K160-2380') {
    $product->setPrice('110.42');
    $product->save();
}
if ($product->getSku() === 'K210-883') {
    $product->setPrice('39.88');
    $product->save();
}
if ($product->getSku() === 'K234-2375') {
    $product->setPrice('223.76');
    $product->save();
}
if ($product->getSku() === 'K234-2375R') {
    $product->setPrice('223.76');
    $product->save();
}
if ($product->getSku() === 'KA-DR60055CP') {
    $product->setPrice('2070.89');
    $product->save();
}
if ($product->getSku() === 'KA-DR60055CP-1') {
    $product->setPrice('2190.37');
    $product->save();
}
if ($product->getSku() === 'KA-DR70055CP') {
    $product->setPrice('2867.39');
    $product->save();
}
if ($product->getSku() === 'KA-DR70055CP-1') {
    $product->setPrice('2986.87');
    $product->save();
}
if ($product->getSku() === 'KA-DR80055CP') {
    $product->setPrice('3265.64');
    $product->save();
}
if ($product->getSku() === 'KA-DR80055CP-1') {
    $product->setPrice('3385.12');
    $product->save();
}
if ($product->getSku() === 'KA-Q705055CP-1') {
    $product->setPrice('2386.43');
    $product->save();
}
if ($product->getSku() === 'KA-Q805055CP') {
    $product->setPrice('2443.68');
    $product->save();
}
if ($product->getSku() === 'KA-Q805055CP-1') {
    $product->setPrice('2324.2');
    $product->save();
}
if ($product->getSku() === 'KA-QDR60055CP') {
    $product->setPrice('2190.37');
    $product->save();
}
if ($product->getSku() === 'KA-QDR60055CP-1') {
    $product->setPrice('2309.84');
    $product->save();
}
if ($product->getSku() === 'KA-QDR70055CP') {
    $product->setPrice('2986.87');
    $product->save();
}
if ($product->getSku() === 'KA-QDR70055CP-1') {
    $product->setPrice('3106.34');
    $product->save();
}
if ($product->getSku() === 'KA-QDR80055CP') {
    $product->setPrice('3385.12');
    $product->save();
}
if ($product->getSku() === 'KA-QDR80055CP-1') {
    $product->setPrice('3504.59');
    $product->save();
}
if ($product->getSku() === 'KA-QRP705055CP') {
    $product->setPrice('2387.03');
    $product->save();
}
if ($product->getSku() === 'KA-QRP805055CP') {
    $product->setPrice('2433.19');
    $product->save();
}
if ($product->getSku() === 'KA-RP705055CP') {
    $product->setPrice('2191.93');
    $product->save();
}
if ($product->getSku() === 'KA-RP705055CP-1') {
    $product->setPrice('2316.07');
    $product->save();
}
if ($product->getSku() === 'KA-RP805055CP') {
    $product->setPrice('2233.2');
    $product->save();
}
if ($product->getSku() === 'KA-RP805055CP-1') {
    $product->setPrice('2369.51');
    $product->save();
}
if ($product->getSku() === 'KB-50048CP') {
    $product->setPrice('968.34');
    $product->save();
}
if ($product->getSku() === 'KB-605048CP') {
    $product->setPrice('1318.88');
    $product->save();
}
if ($product->getSku() === 'KB-705048CP') {
    $product->setPrice('2123.08');
    $product->save();
}
if ($product->getSku() === 'KB-805048CP') {
    $product->setPrice('2262.6');
    $product->save();
}
if ($product->getSku() === 'KB-Q50048CP') {
    $product->setPrice('1132.22');
    $product->save();
}
if ($product->getSku() === 'KB-Q605048CP') {
    $product->setPrice('1506.69');
    $product->save();
}
if ($product->getSku() === 'KB-Q705048CP') {
    $product->setPrice('2318.17');
    $product->save();
}
if ($product->getSku() === 'KB-Q805048CP') {
    $product->setPrice('2462.58');
    $product->save();
}
if ($product->getSku() === 'KC-50048CP') {
    $product->setPrice('3387.95');
    $product->save();
}
if ($product->getSku() === 'KC-605048CP') {
    $product->setPrice('1167.66');
    $product->save();
}
if ($product->getSku() === 'KC-705048CP') {
    $product->setPrice('2009.33');
    $product->save();
}
if ($product->getSku() === 'KC-805048CP') {
    $product->setPrice('2109.87');
    $product->save();
}
if ($product->getSku() === 'KC-Q50048CP') {
    $product->setPrice('1089.23');
    $product->save();
}
if ($product->getSku() === 'KC-Q605048CP') {
    $product->setPrice('1355.47');
    $product->save();
}
if ($product->getSku() === 'KC-Q705048CP') {
    $product->setPrice('2204.42');
    $product->save();
}
if ($product->getSku() === 'KC-Q805048CP') {
    $product->setPrice('2309.86');
    $product->save();
}
if ($product->getSku() === 'KD-50052CP') {
    $product->setPrice('669.02');
    $product->save();
}
if ($product->getSku() === 'KD-50055CP') {
    $product->setPrice('684');
    $product->save();
}
if ($product->getSku() === 'KD-605052CP') {
    $product->setPrice('688.5');
    $product->save();
}
if ($product->getSku() === 'KD-605055CP') {
    $product->setPrice('845.06');
    $product->save();
}
if ($product->getSku() === 'KD-705052CP') {
    $product->setPrice('1974.58');
    $product->save();
}
if ($product->getSku() === 'KD-705052CP-1') {
    $product->setPrice('2110.87');
    $product->save();
}
if ($product->getSku() === 'KD-705052CP-NCB') {
    $product->setPrice('1098.59');
    $product->save();
}
if ($product->getSku() === 'KD-705055CP') {
    $product->setPrice('1974.58');
    $product->save();
}
if ($product->getSku() === 'KD-705055CP-1') {
    $product->setPrice('2130.52');
    $product->save();
}
if ($product->getSku() === 'KD-705055CP-NCB') {
    $product->setPrice('1481.27');
    $product->save();
}
if ($product->getSku() === 'KD-805052CP') {
    $product->setPrice('2077.87');
    $product->save();
}
if ($product->getSku() === 'KD-805052CP-1') {
    $product->setPrice('2214.15');
    $product->save();
}
if ($product->getSku() === 'KD-805052CP-NCB') {
    $product->setPrice('1570.36');
    $product->save();
}
if ($product->getSku() === 'KD-805055CP') {
    $product->setPrice('2077.87');
    $product->save();
}
if ($product->getSku() === 'KD-805055CP-1') {
    $product->setPrice('2214.15');
    $product->save();
}
if ($product->getSku() === 'KD-805055CP-NCB') {
    $product->setPrice('1570.36');
    $product->save();
}
if ($product->getSku() === 'KDD-50046CP') {
    $product->setPrice('1412.72');
    $product->save();
}
if ($product->getSku() === 'KDD-605046CP') {
    $product->setPrice('1904.86');
    $product->save();
}
if ($product->getSku() === 'KDD-705046CP') {
    $product->setPrice('2324.94');
    $product->save();
}
if ($product->getSku() === 'KDD-805046CP') {
    $product->setPrice('2334.87');
    $product->save();
}
if ($product->getSku() === 'KD-EDG-605055CP') {
    $product->setPrice('1626.25');
    $product->save();
}
if ($product->getSku() === 'KD-EDG-705055CP') {
    $product->setPrice('2234.83');
    $product->save();
}
if ($product->getSku() === 'KD-EDG-805055CP') {
    $product->setPrice('2334.87');
    $product->save();
}
if ($product->getSku() === 'KD-EDG-Q605055CP') {
    $product->setPrice('1777.77');
    $product->save();
}
if ($product->getSku() === 'KD-EDG-Q705055CP') {
    $product->setPrice('2433.25');
    $product->save();
}
if ($product->getSku() === 'KD-EDG-Q805055CP') {
    $product->setPrice('2539.26');
    $product->save();
}
if ($product->getSku() === 'KD-Q50052CP') {
    $product->setPrice('832.9');
    $product->save();
}
if ($product->getSku() === 'KD-Q50055CP') {
    $product->setPrice('847.87');
    $product->save();
}
if ($product->getSku() === 'KD-Q605052CP') {
    $product->setPrice('1011.31');
    $product->save();
}
if ($product->getSku() === 'KD-Q605055CP') {
    $product->setPrice('763.74');
    $product->save();
}
if ($product->getSku() === 'KD-Q705052CP') {
    $product->setPrice('2169.68');
    $product->save();
}
if ($product->getSku() === 'KD-Q705052CP-1') {
    $product->setPrice('2305.98');
    $product->save();
}
if ($product->getSku() === 'KD-Q705052CP-NCB') {
    $product->setPrice('1662.19');
    $product->save();
}
if ($product->getSku() === 'KD-Q705055CP') {
    $product->setPrice('2169.68');
    $product->save();
}
if ($product->getSku() === 'KD-Q705055CP-1') {
    $product->setPrice('2325.62');
    $product->save();
}
if ($product->getSku() === 'KD-Q705055CP-NCB') {
    $product->setPrice('2031.56');
    $product->save();
}
if ($product->getSku() === 'KD-Q805052CP') {
    $product->setPrice('2277.84');
    $product->save();
}
if ($product->getSku() === 'KD-Q805052CP-1') {
    $product->setPrice('2414.14');
    $product->save();
}
if ($product->getSku() === 'KD-Q805052CP-NCB') {
    $product->setPrice('1527.35');
    $product->save();
}
if ($product->getSku() === 'KD-Q805055CP') {
    $product->setPrice('2277.84');
    $product->save();
}
if ($product->getSku() === 'KD-Q805055CP-1') {
    $product->setPrice('2414.14');
    $product->save();
}
if ($product->getSku() === 'LE0111') {
    $product->setPrice('285');
    $product->save();
}
if ($product->getSku() === 'M110603') {
    $product->setPrice('315');
    $product->save();
}
if ($product->getSku() === 'M110604') {
    $product->setPrice('315');
    $product->save();
}
if ($product->getSku() === 'M110605') {
    $product->setPrice('315');
    $product->save();
}
if ($product->getSku() === 'M110608') {
    $product->setPrice('310');
    $product->save();
}
if ($product->getSku() === 'M110610') {
    $product->setPrice('315');
    $product->save();
}
if ($product->getSku() === 'M124') {
    $product->setPrice('207');
    $product->save();
}
if ($product->getSku() === 'M127') {
    $product->setPrice('230');
    $product->save();
}
if ($product->getSku() === 'M130') {
    $product->setPrice('249.7');
    $product->save();
}
if ($product->getSku() === 'M134') {
    $product->setPrice('274.67');
    $product->save();
}
if ($product->getSku() === 'M-1615719') {
    $product->setPrice('377.11');
    $product->save();
}
if ($product->getSku() === 'MAP-Kit') {
    $product->setPrice('1800');
    $product->save();
}
if ($product->getSku() === 'MC2378') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'MK0077') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'MK1075') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'MK1078') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'MK1978') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'MK2078') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'MOE/4156') {
    $product->setPrice('4.71');
    $product->save();
}
if ($product->getSku() === 'MW008') {
    $product->setPrice('425');
    $product->save();
}
if ($product->getSku() === 'MW009') {
    $product->setPrice('45');
    $product->save();
}
if ($product->getSku() === 'MW010') {
    $product->setPrice('48');
    $product->save();
}
if ($product->getSku() === 'MW011') {
    $product->setPrice('25');
    $product->save();
}
if ($product->getSku() === 'MW013') {
    $product->setPrice('68');
    $product->save();
}
if ($product->getSku() === 'MW028') {
    $product->setPrice('250');
    $product->save();
}
if ($product->getSku() === 'MW030') {
    $product->setPrice('200');
    $product->save();
}
if ($product->getSku() === 'MW038') {
    $product->setPrice('135');
    $product->save();
}
if ($product->getSku() === 'MW061') {
    $product->setPrice('250');
    $product->save();
}
if ($product->getSku() === 'N5355001') {
    $product->setPrice('167.14');
    $product->save();
}
if ($product->getSku() === 'NAP450599') {
    $product->setPrice('38');
    $product->save();
}
if ($product->getSku() === 'OR8682') {
    $product->setPrice('216.8');
    $product->save();
}
if ($product->getSku() === 'P201114') {
    $product->setPrice('9.99');
    $product->save();
}
if ($product->getSku() === 'P201115') {
    $product->setPrice('9.99');
    $product->save();
}
if ($product->getSku() === 'P301029') {
    $product->setPrice('6.1');
    $product->save();
}
if ($product->getSku() === 'P54-6034') {
    $product->setPrice('895.5');
    $product->save();
}
if ($product->getSku() === 'P92-3086-1224') {
    $product->setPrice('1233.61');
    $product->save();
}
if ($product->getSku() === 'P92-6516') {
    $product->setPrice('38');
    $product->save();
}
if ($product->getSku() === 'PC0079') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PC0979') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PC1379') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PC1479') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PC1779') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PC1879') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PC2679') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PC-3696-B') {
    $product->setPrice('565');
    $product->save();
}
if ($product->getSku() === 'PC83579') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PD-Light-Lens') {
    $product->setPrice('9.99');
    $product->save();
}
if ($product->getSku() === 'PEV1816-15L101') {
    $product->setPrice('375');
    $product->save();
}
if ($product->getSku() === 'PLY-01-12002') {
    $product->setPrice('30');
    $product->save();
}
if ($product->getSku() === 'pp70-175') {
    $product->setPrice('15');
    $product->save();
}
if ($product->getSku() === 'pp70-275') {
    $product->setPrice('14');
    $product->save();
}
if ($product->getSku() === 'PSM/8601526') {
    $product->setPrice('62.76');
    $product->save();
}
if ($product->getSku() === 'PV2479') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PV6477') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'PV83379') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'Q124') {
    $product->setPrice('366.6');
    $product->save();
}
if ($product->getSku() === 'Q127') {
    $product->setPrice('382.5');
    $product->save();
}
if ($product->getSku() === 'Q130') {
    $product->setPrice('396.12');
    $product->save();
}
if ($product->getSku() === 'Q134') {
    $product->setPrice('441.51');
    $product->save();
}
if ($product->getSku() === 'Q21-1002') {
    $product->setPrice('50.45');
    $product->save();
}
if ($product->getSku() === 'Q21-1077-3-103-ECU') {
    $product->setPrice('950');
    $product->save();
}
if ($product->getSku() === 'R23505886') {
    $product->setPrice('527.12');
    $product->save();
}
if ($product->getSku() === 'R23513559') {
    $product->setPrice('844.16');
    $product->save();
}
if ($product->getSku() === 'R23513939') {
    $product->setPrice('107.06');
    $product->save();
}
if ($product->getSku() === 'R23519307') {
    $product->setPrice('1567.39');
    $product->save();
}
if ($product->getSku() === 'R23521681') {
    $product->setPrice('588');
    $product->save();
}
if ($product->getSku() === 'R23522122') {
    $product->setPrice('548.77');
    $product->save();
}
if ($product->getSku() === 'R23523998') {
    $product->setPrice('392.16');
    $product->save();
}
if ($product->getSku() === 'R23525566') {
    $product->setPrice('1801.38');
    $product->save();
}
if ($product->getSku() === 'R23528463J') {
    $product->setPrice('24250');
    $product->save();
}
if ($product->getSku() === 'R23532558') {
    $product->setPrice('403.33');
    $product->save();
}
if ($product->getSku() === 'R23532937') {
    $product->setPrice('114.69');
    $product->save();
}
if ($product->getSku() === 'R23536459') {
    $product->setPrice('150.75');
    $product->save();
}
if ($product->getSku() === 'R23537686') {
    $product->setPrice('183.7');
    $product->save();
}
if ($product->getSku() === 'R23538247') {
    $product->setPrice('99.22');
    $product->save();
}
if ($product->getSku() === 'R23539567') {
    $product->setPrice('21700');
    $product->save();
}
if ($product->getSku() === 'R23539601') {
    $product->setPrice('320');
    $product->save();
}
if ($product->getSku() === 'R5235915') {
    $product->setPrice('340');
    $product->save();
}
if ($product->getSku() === 'R5235915S') {
    $product->setPrice('1755.48');
    $product->save();
}
if ($product->getSku() === 'R59-6101-102') {
    $product->setPrice('650');
    $product->save();
}
if ($product->getSku() === 'RB5235915') {
    $product->setPrice('290');
    $product->save();
}
if ($product->getSku() === 'RB5235915S') {
    $product->setPrice('1680');
    $product->save();
}
if ($product->getSku() === 'RX0R7923') {
    $product->setPrice('2420.3');
    $product->save();
}
if ($product->getSku() === 'S21-1031') {
    $product->setPrice('235');
    $product->save();
}
if ($product->getSku() === 'S60103-033OEMRW') {
    $product->setPrice('2800');
    $product->save();
}
if ($product->getSku() === 'S60106-017OEMRW') {
    $product->setPrice('2800');
    $product->save();
}
if ($product->getSku() === 'SL1005') {
    $product->setPrice('21');
    $product->save();
}
if ($product->getSku() === 'SP-873') {
    $product->setPrice('63.98');
    $product->save();
}
if ($product->getSku() === 'SS500HT-FL5') {
    $product->setPrice('1537.93');
    $product->save();
}
if ($product->getSku() === 'SS500HT-KW9') {
    $product->setPrice('1475.5');
    $product->save();
}
if ($product->getSku() === 'SS500HT-PB1') {
    $product->setPrice('1498.2');
    $product->save();
}
if ($product->getSku() === 'SS500HT-PB2') {
    $product->setPrice('1379.02');
    $product->save();
}
if ($product->getSku() === 'SS500HT-PB3') {
    $product->setPrice('1532.25');
    $product->save();
}
if ($product->getSku() === 'SS500HT-PB4') {
    $product->setPrice('1293.9');
    $product->save();
}
if ($product->getSku() === 'SS500HT-PB5') {
    $product->setPrice('1554.95');
    $product->save();
}
if ($product->getSku() === 'SS500HT-PB6') {
    $product->setPrice('1537.93');
    $product->save();
}
if ($product->getSku() === 'SS500HT-PB9') {
    $product->setPrice('1276.87');
    $product->save();
}
if ($product->getSku() === 'TA-B29-12RDS') {
    $product->setPrice('5010');
    $product->save();
}
if ($product->getSku() === 'TA-B29-12RVDS') {
    $product->setPrice('5010');
    $product->save();
}
if ($product->getSku() === 'TA-B50-12RDS') {
    $product->setPrice('3540');
    $product->save();
}
if ($product->getSku() === 'TA-B50-12RVGK') {
    $product->setPrice('4668');
    $product->save();
}
if ($product->getSku() === 'TA-B51-12RDS') {
    $product->setPrice('3550.34');
    $product->save();
}
if ($product->getSku() === 'TA-B56-12RDS') {
    $product->setPrice('4440');
    $product->save();
}
if ($product->getSku() === 'TA-B56-12RVGK') {
    $product->setPrice('6360');
    $product->save();
}
if ($product->getSku() === 'TA-B77-12RDS') {
    $product->setPrice('5443.81');
    $product->save();
}
if ($product->getSku() === 'TA-D54-12RDS') {
    $product->setPrice('3805.25');
    $product->save();
}
if ($product->getSku() === 'TA-D60-12RDS') {
    $product->setPrice('3990');
    $product->save();
}
if ($product->getSku() === 'TA-D64-12RDS') {
    $product->setPrice('3708.73');
    $product->save();
}
if ($product->getSku() === 'TA-D69-12R') {
    $product->setPrice('4577.45');
    $product->save();
}
if ($product->getSku() === 'TA-E41-12R') {
    $product->setPrice('6756');
    $product->save();
}
if ($product->getSku() === 'TA-E41-12RVDS') {
    $product->setPrice('5256');
    $product->save();
}
if ($product->getSku() === 'TA-E59-50R') {
    $product->setPrice('4917');
    $product->save();
}
if ($product->getSku() === 'TA-E63-50RDS') {
    $product->setPrice('6151.67');
    $product->save();
}
if ($product->getSku() === 'TA-F04-50R') {
    $product->setPrice('7659.6');
    $product->save();
}
if ($product->getSku() === 'TA-F10-50RDS') {
    $product->setPrice('8636.87');
    $product->save();
}
if ($product->getSku() === 'TA-F10-50RVDS') {
    $product->setPrice('8636.87');
    $product->save();
}
if ($product->getSku() === 'TA-F48-50R') {
    $product->setPrice('7722');
    $product->save();
}
if ($product->getSku() === 'TDC/09481-07') {
    $product->setPrice('76.34');
    $product->save();
}
if ($product->getSku() === 'THUB-FRP33') {
    $product->setPrice('24');
    $product->save();
}
if ($product->getSku() === 'THUB-RP33') {
    $product->setPrice('29');
    $product->save();
}
if ($product->getSku() === 'TYC/DCT110HIR') {
    $product->setPrice('114.95');
    $product->save();
}
if ($product->getSku() === 'UNP10257') {
    $product->setPrice('24');
    $product->save();
}
if ($product->getSku() === 'UNP10263') {
    $product->setPrice('29');
    $product->save();
}
if ($product->getSku() === 'UNP31243') {
    $product->setPrice('310');
    $product->save();
}
if ($product->getSku() === 'UNP31244') {
    $product->setPrice('310');
    $product->save();
}
if ($product->getSku() === 'VV0279') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'VV0776') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'VV0879') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'VV0977') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'VV1076') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'VV1979') {
    $product->setPrice('399');
    $product->save();
}
if ($product->getSku() === 'VV2079') {
    $product->setPrice('399');
    $product->save();
}

}
