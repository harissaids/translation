<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: search.php 2017 harissaids@gmail.com
 * @author 2017 Harissaid Alewni http://www.triutama.com
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 *
 */


/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'Semua tersedia',
	'ALL_RESULTS'			=> 'Semua Waktu',

	'DISPLAY_RESULTS'		=> 'Tampilkan hasil sebagai',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Ditemukan %d pencarian yang cocok',
		2	=> 'Ditemukan %d pencarian yang cocok',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Ditemukan lebih dari %d pencarian yang cocok',
		2	=> 'Ditemukan lebih dari %d pencarian yang cocok',
	),

	'GLOBAL'				=> 'Pengumuman Global',

	'IGNORED_TERMS'			=> 'diabaikan',
	'IGNORED_TERMS_EXPLAIN'	=> 'Kata-kata yang ada di query pencarian anda diabaikan, karena merupakan kata-kata yang terlalu umum: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Ke Halaman',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Halaman membutuhkan anda untuk didaftarkan dan dimasukkan untuk melihat post anda sendiri.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Halaman membutuhkan anda untuk didaftarkan dan dimasukkan untuk melihat post anda yang belum terbaca.',
	'LOGIN_EXPLAIN_NEWPOSTS'   => 'Papan membutuhkan anda untuk terdaftar dan masuk untuk melihat post baru sejak kunjungan terakhir anda.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Kata-kata yang anda masukkan terlalu banyak. Silahkan masukkan dengan tidak lebih dari %1$d kata.',
		2	=> 'Kata-kata yang anda masukkan terlalu banyak. Silahkan masukkan dengan tidak lebih dari %1$d kata.',
	),

	'NO_KEYWORDS'			=> 'Anda harus menetukan paling sedikitnya satu kata untuk dicari. Setiap kata paling sedikitnya harus terdiri dari %s karakter dan tidak melebihi %s karakter termasuk wildcard.',
	'NO_RECENT_SEARCHES'	=> 'Tidak ada pencarian yang dimuat akhir ini.',
	'NO_SEARCH'				=> 'Maaf, anda tidak diijinkan untuk menggunakan sistem pencarian.',
	'NO_SEARCH_RESULTS'		=> 'Pencarian tidak ditemukan.',
	'NO_SEARCH_LOAD'		=> 'Maaf, anda tidak bisa menggunakan pencarian saat ini. Silahkan coba lagi dalam beberapa menit.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Maaf, anda tidak bisa menggunakan pencarian saat ini. Silahkan coba lagi dalam beberapa menit.',
		2	=> 'Maaf, anda tidak bisa menggunakan pencarian saat ini. Silahkan coba lagi dalam beberapa menit.',
	),
    'NO_SEARCH_UNREADS'     => 'Maaf, pencarian untuk post tak terbaca sudah dinonaktifkan di halaman ini.',
	'WORD_IN_NO_POST'		=> 'Tidak ada post yang ditemukan karena kata pencarian <strong>%s</strong> tidak ditemukan di post lainnya.',
	'WORDS_IN_NO_POST'		=> 'Tidak ada post yang ditemukan karena kata-kata pencarian <strong>%s</strong> tidak ditemukan di post lainnya.',

	'POST_CHARACTERS'		=> 'Karakter posting',
	'PHRASE_SEARCH_DISABLED'	=> 'Pencarian menurut frasa yang tepat tidak didukung di forum ini.',

	'RECENT_SEARCHES'		=> 'Pencarian-pencarian terakhir',
	'RESULT_DAYS'			=> 'Batas hasil',
	'RESULT_SORT'			=> 'Pencarian berdasarkan',
	'RETURN_FIRST'			=> 'Tampilkan pertama, memiliki hasil',
	'GO_TO_SEARCH_ADV'	=> 'ke pencarian lanjutan',

	'SEARCHED_FOR'				=> 'Cari istilah yang digunakan',
	'SEARCHED_TOPIC'			=> 'Topik tercari',
	'SEARCHED_QUERY'			=> 'Cari query',
	'SEARCH_ALL_TERMS'			=> 'Cari semua istilah atau gunakan query yang dimasukan',
	'SEARCH_ANY_TERMS'			=> 'Cari semua istilah',
	'SEARCH_AUTHOR'				=> 'Cari pengarang',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Gunakan * sebagai wildcard untuk pencocokan bagian.',
	'SEARCH_FIRST_POST'			=> 'Hanya post pertama dari topik',
	'SEARCH_FORUMS'				=> 'Cari di forum',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Pilih forum atau forum yang ingin anda cari. Subforum dicari secara otomatis, jika anda tidak memakai “cari subforum“ dibawah ini.',
	'SEARCH_IN_RESULTS'			=> 'Cari ini',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Tempatkan <strong>+</strong> di depan kata yang akan dicari dan <strong>-</strong> di depan kata yang harus ditemukan. Letakkan sebuah daftar yang dipisahkan dengan <strong>|</strong> kedalam kurung jika hanya satu dari kata-kata tersebut yang harus dicari. Gunakan tanda * untuk mencari secara perbagian saja.',
	'SEARCH_MSG_ONLY'			=> 'Hanya pesan teks',
	'SEARCH_OPTIONS'			=> 'Pilihan-pilihan pencarian',
	'SEARCH_QUERY'				=> 'Cari query',
	'SEARCH_SUBFORUMS'			=> 'Cari subforum',
	'SEARCH_TITLE_MSG'			=> 'Subjek posting dan pesan teks',
	'SEARCH_TITLE_ONLY'			=> 'Hanya judul topik',
	'SEARCH_WITHIN'				=> 'Mencari di dalam',
	'SORT_ASCENDING'			=> 'Urutan terbaru',
	'SORT_AUTHOR'				=> 'Penulis',
	'SORT_DESCENDING'			=> 'Urutan terlama',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Subjek posting',
	'SORT_TIME'					=> 'Waktu posting',
	'SPHINX_SEARCH_FAILED'		=> 'Pencarian Gagal: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Maaf, pencarian tidak bisa dilakukan Informasi lebih lanjut tentang kegagalan ini telah dicatat dalam log kesalahan.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Anda harus menentukan setidaknya %d karakter dari nama penulis.',
		2	=> 'Anda harus menentukan setidaknya %d karakter dari nama penulis.',
	),
));