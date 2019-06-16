<!DOCTYPE html>
<!--[if IE 7 ]> <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]> <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php /* bagian yang
ditambahkan */ language_attributes(); ?>> <!--<![endif]-->
<!-- bagian yang ditambahkan/rubah -->
<head profile="http://gmpg.org/xfn/11">
	<!-- bagian yang ditambahkan/rubah -->
	<meta http-equiv="Content-Type" content="<?php
	bloginfo('html_type'); ?>; charset=<?php
	bloginfo('charset'); ?>" />
	<?php
	/* barisan ini digunakan untuk mengecek apakah sedang dalam mode pencarian */
	if (is_search()) {
	?>
	<!-- khusus untuk robot / bot atau webbot, maka dia tidak diperkenankan untuk mengindex halaman ini -->
	<!-- Anda bisa merubahnya menjadi content="index,follow" sesuai dengan kebutuhan Anda -->
	<meta name="robots" content="noindex, nofollow" />
	<?php
	/* yang ini merupakan penutup dari is_search() */
	}
	?>
	<title>
	<?php
	/* barisan kode-kode disini Akan menentukan Dynamic Title / Title Pada Browsernya */
	/* Dan sangat berpengaruh sekali untuk SEO dan Navigasi ... */
	/* Anda sedang berada Di Halaman akan terlihat dari Title pada Browsernya */
	/* Jika yang diakses Adalah tag post wordpress */
	if (function_exists('is_tag') && is_tag()) {
	/* maka judulnya nanti akan menjadi Tag Archive For "Nama Tagnya" */
	single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
	/* Dan jika yang di akses adalah archive(kategori) */
	elseif (is_archive()) {
	/* Maka tampilkan title si browsernya adalah NAMA KATEGORI Archive - */
	wp_title(''); echo ' Archive - '; }
	/* Jika yang di akses itu adalah hasil pencarian... */
	elseif (is_search()) {
	/* maka title yang nanti akan muncul adalah Search for "KEYWORDNYA" - */
	echo 'Search for
	&quot;'.wp_specialchars($s).'&quot; - '; }
	/* jika yang di akses halaman/page maupun artikel/post */
	elseif (!(is_404()) && (is_single()) || (is_page())) {
	/* maka titile yang akan nanti akan muncul SESUAI DENGAN JUDUL ARTIKEL / HALAMAN - */
	wp_title(''); echo ' - '; }
	/* jika yang di akses itu tidak ada sama sekali, baik itu halaman maupun artikel */
	elseif (is_404()) {
	/* maka tampilkan Not Found - */
	echo 'Not Found - '; }
	/* jika yang di akses itu halaman beranda atau home */
	if (is_home()) {
	/* title yang akan muncul nantinya adalah NAMA WEBSITE - DESKRIPSI WEBSITE */
	/* NAMA WEBSITE + DESKRIPSI WEBSITE itu diambil dari bagian SETTING > GENERAL */
	bloginfo('name'); echo ' - ';
	bloginfo('description'); }
	/* jika yang diakses itu bukan halaman beranda Atau home */
	else {
	/* maka nanti yang akan muncul adalah nama websitenya saja */
	/* hal ini dipadukan dengan bagiansebelumnya */
	/* misalkan yang diakses adalah halaman kategori herbal */
	/* maka nanti title yang akan muncul adalah Herbal Archive - NAMA WEBSITE */
	bloginfo('name'); }
	/* yang ini digunakan untuk title apabila halaman dari kategori lebih dari satu */
	/* biasanya untuk paging halaman 1 2 3 dan seterusnya ... */
	if ($paged>1) {
	echo ' - page '. $paged; }
	?>
	</title>
	<link rel="shortcut icon" href="/favicon.ico"
	type="image/x-icon" />
	<!-- bagian ini digunakan untuk mengambil file styles
	css default dari templatenya, dalam hal ini adalah style.css -->
	<link rel="stylesheet" href="http://localhost/myblog/wp-content/themes/templatesaya/style.css" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script
	src="js/jquery-1.6.1.min.js"><\/script>')</script>
	<!-- kita gunakan bloginfo('template_url') agar file jsnya bisa digunakan. lihat index.php yang sebelumnya -->
	<script src="<?php bloginfo('template_url');?>/js/scrollToTop.js"></script>
	<?php
	/* bagian ini digunakan ketika yang diakses adalah halaman artikel / single post */
	if ( is_singular() ) /* maka munculkanlah form komentar */ wp_enqueue_script( 'comment-reply' );
	?>
	<?php
	/* bagian ini adalah bagian standar dari template wordpress bagian header */
	/* biasanya digunakan oleh wordpress untuk berbagai keperluan seperti javascript */
	/* style dan lain-lain yang berhubungan dengan plugin */
	wp_head();
	?>

</head>

<body id="top">

<!--header -->
<div id="header-wrap"><header>

 	<hgroup>
        <h1><a href="index.html">Coolblue</a></h1>
        <h3>Just Another Styleshout Template</h3>
    </hgroup>

    <nav>
		<ul>
			<li id="current"><a href="index.html">Home</a><span></span></li>
			<li><a href="style.html">Style Demo</a><span></span></li>
			<li><a href="blog.html">Blog</a><span></span></li>
			<li><a href="archive.html">Archives</a><span></span></li>
			<li><a href="index.html">Support</a><span></span></li>
			<li><a href="index.html">About</a><span></span></li>
		</ul>
	</nav>

    <div class="subscribe">
        <span>Subscribe:</span> <a href="#">Email</a> | <a href="#">RSS</a>
    </div>

   <form id="quick-search" method="get" action="index.html">
      <fieldset class="search">
         <label for="qsearch">Search:</label>
         <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
         <button class="btn" title="Submit Search">Search</button>
      </fieldset>
   </form>

<!--/header-->
</header></div>