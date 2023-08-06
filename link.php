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

<body>
<?php include_once('./_svg_reset.php'); ?>

<div class="publishing-help">
	<span class="label not">작업중</span>
	<span class="label popup">팝업</span>
	<span class="label change">수정</span>
	<span class="label add">최근 추가</span>
	<!-- <a href="./css/iconfont/intaefont/" target="_blank" class="icon">아이콘 모음</a> -->
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
		<li class="mt50" data-label="모달 팝업">
			<ul>
				<li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#user_modal">유저 모달</button></li>
				<li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#game_modal">게임 모달</button></li>
				<li><button class="ghost_mode pop-modal">고스트모드 얼럿</button></li>
			</ul>
		</li>
		<li class="mt50" data-label="casino">
			<ul>
				<li><a href="../stakeclone/casino/favourites.html" target="_blank" class="">즐겨찾기</a></li>
				<li><a href="../stakeclone/casino/recent.html" target="_blank" class="">최근</a></li>
				
				<li class="mt30"><a href="../stakeclone/casino/home.html" target="_blank" class="">카지노 홈</a></li>

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
<!-- 유저모달 -->
<div id="user_modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content"> <!-- BEGIN: Modal Header -->
			<div class="modal-header">
				<h2 class="font-semibold text-base mr-auto flex items-center gap-2">
					<svg class="svg-icon svelte-kjfvep">
						<use xlink:href="#icon-list"></use>
					</svg>
					SyztmzTV
				</h2>
				<button data-tw-dismiss="modal"><svg><use xlink:href="#icon-cross"></use></svg></button>
			</div>
			<div class="modal-body">
				<div class="flex items-center justify-center">
					<div class="flex items-center gap-1">
						<svg class="tooltip" data-theme="light" title="Platinum III">
							<use xlink:href="#icon-vip-platinum-3"></use>
						</svg>
						<svg class="tooltip" data-theme="light" title="Highroller">
							<use xlink:href="#icon-emoji-highroller"></use>
						</svg>
						<button class="scale">
							<span class="font-semibold">asket8888</span>
						</button>
					</div>
				</div>
				<div class="text-center text-xs font-semibold mt-2">가입 날짜 2020년 8월 31일</div>
				<div class="flex items-center justify-center gap-1">
					<button class="scale p-4">
						<svg>
							<use xlink:href="#icon-coins"></use>
						</svg>
					</button>
					<button class="scale p-4">
						<svg>
							<use xlink:href="#icon-friend-ignored"></use>
						</svg>
					</button>
				</div>
				<div class="flex items-center justify-center">
					<div class="flex items-center">
						<div class="flex items-center">
							<ul class="nav nav-boxed-tabs p-1 rounded-full gap-2" role="tablist">
								<li id="tab10" class="nav-item" role="presentation">
									<button class="nav-link w-full py-3 px-5 gap-1 active" data-tw-toggle="pill"
										data-tw-target="#tab_con10" type="button" role="tab"
										aria-controls=tab_con10" aria-selected="true"><span
											class="flex items-center gap-1 "></svg>통계</span></button>
								</li>
								<li id="tab11" class="nav-item" role="presentation">
									<button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill"
										data-tw-target="#tab_con11" type="button" role="tab"
										aria-controls="tab_con11" aria-selected="false"><span
											class="flex items-center gap-1"></svg>트로피</span></button>
								</li>
								<li id="tab12" class="nav-item" role="presentation">
									<button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill"
										data-tw-target="#tab_con12" type="button" role="tab"
										aria-controls="tab_con12" aria-selected="false"><span
											class="flex items-center gap-1">레이스</span></button>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-content mt-3">
					<div id="tab_con10" class="tab-pane leading-relaxed active" role="tabpanel"
						aria-labelledby="tab10">
						<div class="overflow-x-scroll">
							<table class="table table-striped">
								<thead>
									<tr>
										<th class="text-left">배팅</th>
										<th class="text-center">승리</th>
										<th class="text-center">손실</th>
										<th class="text-right">배팅</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="flex items-center gap-1 justify-start">
												<span>45,000</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center gap-1">
												<span>5,327</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center">
												<span>39,408</span>
											</div>
										</td>
										<td>
											<div class="flex items-center gap-1 justify-end">
												<span>2001.99999800</span>
												<span title="btc" style="max-width: 12ch;"><svg
														class="svg-icon svelte-kjfvep">
														<use xlink:href="#icon-currency-btc"></use>
													</svg></span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex items-center gap-1 justify-start">
												<span>45,000</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center gap-1">
												<span>5,327</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center">
												<span>39,408</span>
											</div>
										</td>
										<td>
											<div class="flex items-center gap-1 justify-end">
												<span>2001.99999800</span>
												<span title="btc" style="max-width: 12ch;"><svg
														class="svg-icon svelte-kjfvep">
														<use xlink:href="#icon-currency-btc"></use>
													</svg></span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div id="tab_con11" class="tab-pane leading-relaxed" role="tabpanel"
						aria-labelledby="tab11">
						<div class="flex items-center justify-center">
							<select name="" id="" class="form-select custom w-28">
								<option value="">최고의 행운</option>
								<option value="">가장 큰</option>
							</select>
						</div>
						<div class="overflow-x-scroll">
							<table class="table table-striped">
								<thead>
									<tr>
										<th class="text-left">게임</th>
										<th class="text-center">제공자</th>
										<th class="text-right">트로피</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="javascript:;">
												<div class="flex items-center gap-1 justify-start scale">
													<span><svg class="w-5 h-5">
															<use xlink:href="#icon-provider-slots"></use>
														</svg></span>
													<span class="font-semibold text-white">Rome Rise of an
														Empire</span>
												</div>
											</a>
										</td>
										<td>
											<div class="flex items-center justify-center gap-1">
												<span>Epicmedia</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center">
												<span><svg>
														<use xlink:href="#icon-trophy-1"></use>
													</svg></span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="javascript:;">
												<div class="flex items-center gap-1 justify-start scale">
													<span><svg class="w-5 h-5">
															<use xlink:href="#icon-provider-slots"></use>
														</svg></span>
													<span class="font-semibold text-white">Dino P.D.</span>
												</div>
											</a>
										</td>
										<td>
											<div class="flex items-center justify-center gap-1">
												<span>Pushgaming</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center">
												<span><svg>
														<use xlink:href="#icon-trophy-2"></use>
													</svg></span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="flex items-center justify-center gap-5 mt-4">
							<button><span class="font-semibold">이전</span></button>
							<button><span class="font-semibold text-white">다음</span></button>
						</div>
					</div>
					<div id="tab_con12" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="tab12">
						<div class="overflow-x-scroll">
							<table class="table table-striped">
								<thead class="whitespace-nowrap">
									<tr>
										<th class="text-left">레이스 이름</th>
										<th class="text-center">날짜</th>
										<th class="text-center">포지션</th>
										<th class="text-right">상금</th>
									</tr>
								</thead>
								<tbody class="whitespace-nowrap">
									<tr>
										<td>
											<div class="flex items-center gap-1 justify-start">
												<span>$100,000 레이스 - 24시간</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center gap-1">
												<span>2023. 8. 3.</span>
											</div>
										</td>
										<td>
											<div class="flex items-center justify-center gap-1">
												<span>25th</span>
											</div>
										</td>
										<td>
											<div class="flex justify-end">
												<a href="javascript:;" data-theme="light"
													data-tooltip-content="#custom-content-tooltip"
													class="tooltip inline-flex items-center gap-1">
													<span class="">US$200.00</span>
													<span title="usd" style="max-width: 12ch;"><svg class="">
															<use xlink:href="#icon-currency-usd"></use>
														</svg></span>
												</a>
											</div>
											<div class="tooltip-content">
												<div id="custom-content-tooltip"
													class="relative flex items-center py-1 gap-1">
													<span class="">US$200.00</span>
													<span title="usd" style="max-width: 12ch;"><svg class="">
															<use xlink:href="#icon-currency-usd"></use>
														</svg></span>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="flex items-center justify-center gap-5 mt-4">
							<button><span class="font-semibold">이전</span></button>
							<button><span class="font-semibold text-white">다음</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 유저모달 끝 -->

<!-- 게임 모달 -->
<div id="game_modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content"> <!-- BEGIN: Modal Header -->
			<div class="modal-header">
				<h2 class="font-semibold text-base mr-auto flex items-center gap-2">
					<svg class="svg-icon svelte-kjfvep">
						<use xlink:href="#icon-list"></use>
					</svg>
					베팅
				</h2>
				<button data-tw-dismiss="modal"><svg><use xlink:href="#icon-cross"></use></svg></button>
			</div>
			<div class="modal-body">
				<div class="flex justify-center font-bold text-white text-base">
					Keno
				</div>
				<div class="flex justify-center gap-2">
					<span class="font-bold text-white text-base">ID 172,830,473,102</span>
					<button class="tooltip scale" data-trigger="click" data-theme="light" title="복사되었습니다,채팅창에 공유해보세요!"><svg><use xlink:href="#icon-copy"></use></svg></button>
					<button class="tooltip scale" data-trigger="click" data-theme="light" title="복사하고 온라인에 공유해보세요"><svg><use xlink:href="#icon-hyperlink"></use></svg></button>
				</div>
				<div class="flex items-center justify-center mt-3">
					<div class="flex items-center gap-1">
						<svg class="tooltip" data-theme="light" title="Platinum III">
							<use xlink:href="#icon-vip-platinum-3"></use>
						</svg>
						<svg class="tooltip" data-theme="light" title="Highroller">
							<use xlink:href="#icon-emoji-highroller"></use>
						</svg>
						<div class="flex items-center">
							<button class="scale">
								<span class="font-semibold">asket8888</span>
							</button>
							<span>에 의해 배치되었습니다</span>
						</div>
						
					</div>
				</div>
				<div class="text-center mt-1">에 2023. 8. 6. 에서 오후 7:50</div>
				<div class="p-3 bg-grey-700 rounded-md mt-3">
					<div class="flex items-center justify-center">
						<div class="flex flex-col justify-center items-center p-2 w-full">
							<span class="font-semibold">배팅</span>
							<div class="flex items-center justify-center gap-1">
								<span class="text-white font-semibold">11343.912345</span><svg><use xlink:href="#icon-currency-trx"></use></svg>
							</div>
						</div>
						<div class="flex flex-col justify-center items-center border-l border-r border-gray-600 p-2 w-full">
							<span class="font-semibold">승수</span>
							<div class="flex items-center justify-center">
								<span class="text-white font-semibold">3.35×</span>
							</div>
						</div>
						<div class="flex flex-col justify-center items-center p-2 w-full">
							<span class="font-semibold">지불금</span>
							<div class="flex items-center justify-center gap-1">
								<span class="text-green-400 font-semibold">37985.424132</span><svg><use xlink:href="#icon-currency-trx"></use></svg>
							</div>
						</div>
					</div>
				</div>
				<div class="flex justify-center mt-3">
					<button class="hover:bg-grey-300 bg-grey-400 py-3 px-4 rounded-md font-semibold transition text-white scale"><span>Keno 플레이</span></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 게임 모달 끝-->

<!-- 고스트모드 얼럿 -->
<div class="ghost_alert alert flex items-center mb-2" id="Ghost_alert">
	<div class="p-4">
		<svg class=" text-green-400"><use xlink:href="#icon-ghost-mode"></use></svg>
	</div>
	
	<div class="bg-grey-400">
		<div class="flex items-center">
			<div class="p-4">
				<p class="font-semibold">유령모드</p>
				<p>베팅이 현재 비공개 상태입니다.</p>
				<!-- <p>베팅이 현재 공개 상태입니다.</p> -->
			</div>
			<button type="button" class="ghost-btn-close text-white ml-auto p-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg> 
			</button> 
		</div>
	</div>
</div>
<!-- 고스트모드 얼럿 -->

<!-- ** 모달 끝 ** -->

<script src='https://design01.codeidea.io/link_script.js'></script>
<script src="./dist/js/app.js"></script>
<script>
	jQuery(document).ready(function() {
		jQuery('.ghost_mode').click(function() {
			jQuery('#Ghost_alert').addClass('show');
		});
		jQuery('.ghost-btn-close').click(function(){
			jQuery('#Ghost_alert').removeClass('show');
		});
	});
</script>
</body>

</html>