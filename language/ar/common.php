<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'DONATEINDEX'							=> 'التبرع',
	'VIEWING_DONATE'						=> 'يُشاهد صفحة التبرعات',
	'DONATION_SAVED'						=> '<strong>تم حفظ الإعدادات بنجاح</strong>',
	'DONATION_VERSION'						=> 'الإصدار',
	'DONATION_SETTINGS'						=> 'الإعدادات العامة',
	'DONATION_ENABLE'						=> 'تفعيل ',
	'DONATION_ENABLE_EXPLAIN'				=> 'اختيارك "نعم" يعني تفعيل هذه الإضافة.',
	'DONATION_INDEX_ENABLE'					=> 'الصفحة الرئيسية ',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'اختيارك "نعم" يعني إظهار احصائيات التبرع في الصفحة الرئيسية.',
	'DONATION_INDEX_TOP'					=> 'العرض في الأعلى ',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'اختيارك "نعم" يعني اظهار احصائيات التبرع في أعلى المنتدى.',
	'DONATION_INDEX_BOTTOM'					=> 'العرض في الأسفل ',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'اختيارك "نعم" يعني اظهار احصائيات التبرع في أسفل المنتدى.',
	'DONATION_EMAIL'						=> 'البريد الإلكتروني ',
	'DONATION_EMAIL_EXPLAIN'				=> 'يجب عليك إضافة بريدك الإلكتروني في Paypal.',
	'DONATION_STATS_SETTINGS'				=> 'الإعدادات الخاصة',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'تفعيل التبرعات المدفوعة ',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'اختيارك "نعم" يعني اظهار إجمالي المبالغ التي تم تبرعها لك.',
	'DONATION_ACHIEVEMENT'					=> 'التبرعات المدفوعة ',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'اكتب اجمالي المبلغ للتبرعات المدفوعة لك حتى الآن.',
	'DONATION_GOAL_ENABLE'					=> 'تفعيل هدف التبرعات ',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'اختيارك "نعم" يعني اظهار المبلغ الذي تريد الوصول اليه من التبرعات.',
	'DONATION_GOAL'							=> 'مبلغ الهدف ',
	'DONATION_GOAL_EXPLAIN'					=> 'اكتب المبلغ الذي تريد الحصول عليه من التبرعات.',
	'DONATION_GOAL_CURRENCY_ENABLE'			=> 'تفعيل عُملة التبرعات ',
	'DONATION_GOAL_CURRENCY_ENABLE_EXPLAIN'	=> 'اختيارك "نعم" يعني اظهار العُملات المُتوفرة للتبرعات.',
	'DONATION_GOAL_CURRENCY'				=> 'عُملة التبرع ',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'عُملة التبرعات للمبلغ المدفوع والمبلغ الهدف.',
	'DONATION_BODY_SETTINGS'				=> 'اعدادات صفحة التبرع',
	'DONATION_BODY'							=> 'النص في صفحة التبرع ',
	'DONATION_BODY_EXPLAIN'					=> 'سيتم عرض النص الذي ستكتبه هنا في صفحة التبرعات.<br /><br />الـ HTML مسموح به.',
	'DONATION_SUCCESS_SETTINGS'				=> 'اعدادات نجاح التبرع',
	'DONATION_SUCCESS'						=> 'النص عند نجاح التبرع ',
	'DONATION_SUCCESS_EXPLAIN'				=> 'سيتم عرض النص الذي ستكتبه هنا عند نجاح عملية التبرع.<br />سيتم تحويل الأعضاء إلى هذه الصفحة بعد تجاح عملية التبرع.<br /><br />الـ HTML مسموح بهd.',
	'DONATION_CANCEL_SETTINGS'				=> 'اعدادات الغاء التبرع',
	'DONATION_CANCEL'						=> 'النص عند الغاء التبرع ',
	'DONATION_CANCEL_EXPLAIN'				=> 'سيتم عرض النص الذي ستكتبه هنا عند الغاء عملية التبرع.<br />سيتم تحويل الأعضاء إلى هذه الصفحة بعد الغاء عملية التبرع.<br /><br />الـ HTML مسموح به.',
	'DONATION_DISABLED'						=> 'المعذرة, صفحة التبرعات غير متوفرة حالياً',
	'DONATION_DISABLED_EMAIL'				=> 'لم يتم اضافة البريد الإلكتروني لحساب الـ Paypal. نرجوا ابلاغ إدارة المنتدى.',
	'DONATION_NOT_INSTALLED_USER'			=> 'لم يتم تثبيت صفحة التبرعات. نرجوا ابلاغ إدارة المنتدى.',
	'DONATION_TITLE'						=> 'التبرع',
	'DONATION_CANCELLED_TITLE'				=> 'تبرع ملغي',
	'DONATION_SUCCESSFULL_TITLE'			=> 'تبرع ناجح',
	'DONATION_CONTACT_PAYPAL'				=> 'جاري الإتصال بموقع Paypal - نرجوا الإنتظار…',
	'DONATION_BODY_DEFAULT'					=> 'نرجوا التبرع لدعم هذا الموقع والمساعدة في دفع تكاليفه.',
	'DONATION_SUCCESS_DEFAULT'				=> 'شكراً جزيلاً على تبرعك للموقع. نُقدر لك ذلك كثيراً.',
	'DONATION_CANCEL_DEFAULT'				=> 'لقت الغيت عملية التبرع. لا توجد لدينا أي مشكلة , ونتمنى منك التبرع مُستقبلاً.',
	'DONATIONS_INDEX'						=> 'التبرعات',
	'DONATION_USD'							=> '$ دولار أمريكي',
	'DONATION_EUR'							=> '€ يورو اوروبي',
	'DONATION_GBP'							=> '£ جنيه بريطاني',
	'DONATION_JPY'							=> '¥ ين ياباني',
	'DONATION_AUD'							=> '$ دولار استرالي',
	'DONATION_CAD'							=> '$ دولار كندي',
	'DONATION_HKD'							=> '$ دولار هونج كونج',
	'DONATION_ACHIEVED'						=> 'لقد استلمنا %1$s <strong>%2$s</strong> من التبرعات.',
	'DONATION_GOAL_ACHIEVED'				=> 'هدفنا هو الحصول على %1$s <strong>%2$s</strong>.',
));
