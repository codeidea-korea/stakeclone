<?php include_once('lib/common.lib.php'); ?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<title>stakeclone</title>
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link href="https://design01.codeidea.io/link_style.css" rel="stylesheet">
	<link rel="stylesheet" href="./dist/css/app.css" />
	<link rel="stylesheet" href="./dist/custom_css/custom.css" />
	<style>
		.ex_table th{
			border-bottom-width:1px;	
			border-right-width:1px;
		}
		.ex_table th:last-child{
			border-right-width:0px;
		}
	</style>
</head>
</body>

<div class="publishing-help">
	<span class="label not">작업중</span>
	<span class="label popup">팝업</span>
	<span class="label change">수정</span>
	<span class="label add">최근 추가</span>
	<a href="./css/iconfont/intaefont/" target="_blank" class="icon">아이콘 모음</a>
</div>

<?php
function txtRecord($dir)
{
	if (is_dir($dir)) {
		$handle  = opendir($dir);
		$files = array();
		while (false !== ($filename = readdir($handle))) {
			if ($filename == "." || $filename == "..") continue;
			if (is_file($dir . "/" . $filename)) {
				$files[] = $filename;
			}
		}
		closedir($handle);
		rsort($files);
		if (count($files) > 0) {
			echo '<div class="_record rsort">';
			echo '<ul>';
			foreach ($files as $f) {
				$name = '수정 ' . preg_replace("/[^0-9]*/s", "", $f);
				echo '<li><a href="' . $dir . $f . '" target="_black">' . $name . '</a></li>';
			}
			echo '</ul>';
			echo '</div>';
		}
	}
}
echo txtRecord('./@record/');
?>

<div id="publishingContainer">

	<ul class="page-link" style="width:100%;margin-bottom:-50px">
		<li class="" data-label="stakeclone">
			<ul>
				<li><a href="#" target="_blank" class="">메인</a></li>
			</ul>
		</li>
		<li class="mt50" data-label="casino">
			<ul>
				<li><a href="../stakeclone/casino/home.html" target="_blank" class="">카지노 홈</a></li>

				<li class="mt30"><a href="../stakeclone/casino/stake-originals.html" target="_blank" class="">Stake 오리지널</a></li>
				<li><a href="../stakeclone/casino/stake-exclusives.html" target="_blank" class="">Stake 독점</a></li>
				<li><a href="../stakeclone/casino/slots.html" target="_blank" class="">슬롯</a></li>
				<li><a href="../stakeclone/casino/live-casino.html" target="_blank" class="">실시간 카지노</a></li>
				<li><a href="../stakeclone/casino/game-shows.html" target="_blank" class="">게임 쇼</a></li>
				<li><a href="../stakeclone/casino/new-releases.html" target="_blank" class="">신규 출시</a></li>
				<li><a href="../stakeclone/casino/feature-buy-in.html" target="_blank" class="">바이 인 기능</a></li>
				<li><a href="../stakeclone/casino/enhanced-rtp.html" target="_blank" class="">향상된 RTP</a></li>
				<li><a href="../stakeclone/casino/table-games.html" target="_blank" class="">테이블 게임</a></li>
				<li><a href="../stakeclone/casino/blackjack.html" target="_blank" class="">블랙잭</a></li>
				<li><a href="../stakeclone/casino/baccarat.html" target="_blank" class="">바카라</a></li>
				<li><a href="../stakeclone/casino/roulette.html" target="_blank" class="">룰렛</a></li>

				<li class="mt30"><a href="../stakeclone/casino/provider.html" target="_blank" class="">제공자</a></li>
			</ul>
		</li>
	</ul>
</div>

<!-- ** 모달 시작 ** -->

<!-- ** 모달 끝 ** -->

<script src='https://design01.codeidea.io/link_script.js'></script>
<script src="./dist/js/app.js"></script>



</body>

</html>