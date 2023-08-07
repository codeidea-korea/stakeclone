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
				<li><button class="ignore-mode pop-modal">사용자 무시</button></li>
				<li><button class="draggable_modal_open pop-modal">실시간통계</button></li>
			</ul>
		</li>
		<li class="mt50" data-label="casino">
			<ul>
				<li><a href="../stakeclone/casino/home.html" target="_blank" class="">카지노 홈</a></li>

				<li class="mt30" data-label="즐겨찾기">
					<ul>
						<li><a href="../stakeclone/casino/favourites.html" target="_blank" class="">즐겨찾기</a></li>
					</ul>
				</li>
				<li class="mt30" data-label="최근">
					<ul>
						<li><a href="../stakeclone/casino/recent.html" target="_blank" class="">최근</a></li>
					</ul>
				</li>
				<li class="mt30" data-label="도전과제">
					<ul>
						<li><a href="../stakeclone/casino/challenges.html" target="_blank" class="">도전과제</a></li>
					</ul>
				</li>

				<li class="mt30" data-label="게임">
					<ul>
						<li><a href="../stakeclone/casino/stake-originals.html" target="_blank" class="">Stake 오리지널</a></li>
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
					</ul>
				</li>
				

				<li class="mt30" data-label="제공자">
					<ul>
						<li><a href="../stakeclone/casino/provider.html" target="_blank" class="">제공자</a></li>
					</ul>
				</li>

				<li class="mt30" data-label="스폰서쉽">
					<ul>
						<li><a href="../stakeclone/sponsor_drake.html" target="_blank" class="">drake</a></li>
						<li><a href="../stakeclone/sponsor_everton.html" target="_blank" class="">에버튼 풋볼 클럽</a></li>
						<li><a href="../stakeclone/sponsor_alfa-romeo-f1.html" target="_blank" class="">Alfa Romeo F1 팀 Stake</a></li>
						<li><a href="../stakeclone/sponsor_adesanya.html" target="_blank" class="">이스라엘 아데산야</a></li>
						<li><a href="../stakeclone/sponsor_fittipaldi.html" target="_blank" class="">Fittipaldi 형제</a></li>
						<li><a href="../stakeclone/sponsor_brazil-rugby.html" target="_blank" class="">브라질 럭비 리그</a></li>
						<li><a href="../stakeclone/sponsor_gabigol.html.html" target="_blank" class="">Gabigol</a></li>
						<li><a href="../stakeclone/sponsor_sergio.html" target="_blank" class="">세르히오 아구에로</a></li>
						<li><a href="../stakeclone/sponsor_alexa.html" target="_blank" class="">알렉사 그라소</a></li>
						<li><a href="../stakeclone/sponsor_jailton.html" target="_blank" class="">자일턴 알메이다</a></li>
						<li><a href="../stakeclone/sponsor_ufc.html" target="_blank" class="">UFC</a></li>
						<li><a href="../stakeclone/sponsor_inoue.html" target="_blank" class="">일본 복싱</a></li>
						<li><a href="../stakeclone/sponsor_volleyboll.html" target="_blank" class="">지금 베팅하세요! 배구 네이션스 리그</a></li>
						<li><a href="../stakeclone/sponsor_gilbert.html" target="_blank" class="">길버트 번즈</a></li>
					</ul>
				</li>

				<li class="mt30"><a href="../stakeclone/casino/stake_safe.html" target="_blank" class="">Stake 세이프</a></li>
				
				<li class="mt30" data-label="프로필">
					<ul>
						<li><a href="#">지갑</a></li>
						<li><a href="#">금고</a></li>
						<li><a href="#">VIP</a></li>
						<li><a href="#">통계</a></li>
						<li><a href="#">스포츠 베팅</a></li>
						<li><a href="../stakeclone/setting.html">설정</a></li>
						<li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#logout_modal">로그아웃</button></li>
					</ul>
				</li>

				<li class="mt30" data-label="프로모션">
					<ul>
						<li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#races_modal">$75,000 주간 복권</button></li>
						<li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#ticket_modal">$100,000 레이스 - 24시간</button></li>
						<li>
							<a href="../stakeclone/promotions.html" target="_blank" class="">모두보기</a>
							<ul>
								<li>
									<a href="../stakeclone/promotions_casino.html" target="_blank" class="">프로모션-카지노</a>
									<ul>
										<li>
											<a href="../stakeclone/promotions_casino_view.html" target="_blank" class="">프로모션-카지노-veiw</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
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
					<button class="ignore-mode scale p-4" id="Ignore">
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
								<thead class="whitespace-nowrap">
									<tr>
										<th class="text-left">게임</th>
										<th class="text-center">제공자</th>
										<th class="text-right">트로피</th>
									</tr>
								</thead>
								<tbody class="whitespace-nowrap">
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

 <!-- races 모달 -->
 <div id="races_modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content"> <!-- BEGIN: Modal Header -->
			<div class="modal-header">
				<h2 class="font-semibold text-base mr-auto flex items-center gap-2">
					<svg><use xlink:href="#icon-coupon"></use></svg>
					프로모션
				</h2>
				<button data-tw-dismiss="modal"><svg><use xlink:href="#icon-cross"></use></svg></button>
			</div>
			<div class="modal-body">
				<div class="flex items-center justify-center">
					<div class="flex items-center">
						<div class="flex items-center">
							<ul class="nav nav-boxed-tabs p-1 rounded-full gap-2" role="tablist">
								<li id="tab14" class="nav-item" role="presentation">
									<button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_con14" type="button" role="tab" aria-controls=tab_con14" aria-selected="false">
										<span class="flex items-center gap-1 ">$75,000 주간 복권</span>
									</button>
								</li>
								<li id="tab15" class="nav-item" role="presentation">
									<button class="nav-link w-full py-3 px-5 gap-1 active" data-tw-toggle="pill" data-tw-target="#tab_con15" type="button" role="tab" aria-controls="tab_con15" aria-selected="true">
										<span class="flex items-center gap-1">$100,000 레이스 - 24시간</span>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="tab-content mt-3">
					<div id="tab_con14" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="tab14">
						<div class="flex flex-col items-center gap-3">
							<svg class="w-24 h-24"><use xlink:href="#icon-empty-game"></use></svg>
							<span class="text-base text-white font-semibold">$75,000 주간 복권</span>
							<span class="text-grey-200">2023. 8. 5. - 2023. 8. 12.</span>
							<span class="text-grey-200">매주 토요일 2:00PM (GMT)</span>
							<div class="flex itesm-center gap-3">
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">5</div>
									<span class="font-semibold">일</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">0</div>
									<span class=font-semibold">시간</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">57</div>
									<span class=font-semibold">분</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">28</div>
									<span class=font-semibold">초</span>
								</div>
							</div>
							<span class="text-center">베팅하고 경품 행사 티켓을 받아가세요. 누구나 참여할 수 있습니다. 티켓 한 장만 있으면 매주 총 $75,000 상당의 상금에 응모할 수 있습니다. 티켓 한 장당 $1,000이며 최대한 많은 티켓을 획득하고 베팅하여 우승을 거머쥐어 보세요! 매주 토요일 오후 11시 www.kick.com/Eddie에서 실시간으로 추첨이 진행됩니다!</span>
						</div> 
						<div class="p-3 bg-grey-500 rounded-md mt-3">
							<div class="flex items-center">
								<span class="text-grey-200">내 티켓 조회</span>
								<div class="ml-auto">
									<div class="flex items-center">
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#tooltip01" class="tooltip inline-flex items-center gap-1">
												<span class="text-white">US$0.00</span>
											</a>
										</div>
										<span>/</span>
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#tooltip02" class="tooltip inline-flex items-center gap-1">
												<span class="text-white">US$1,000</span>
											</a>
										</div>
									</div>
									
									<div class="tooltip-content">
										<div id="tooltip01"
											class="relative flex items-center py-1 gap-1">
											<span>US$0.00</span>
											<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
										</div>
									</div>
									<div class="tooltip-content">
										<div id="tooltip02"
											class="relative flex items-center py-1 gap-1">
											<span>US$1,000</span>
											<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
										</div>
									</div>
								</div>
							</div>
							<div class="mt-2">
								<div class="progress_bar_wrap">
									<div class="bar bg-grey-400 rounded-full">
										<div class="progress_bar bg-green-400" style="right:65%"></div>
									</div>
								</div>
							</div>
							<div class="flex items-center justify-center mt-2 gap-1">
								<span>You have to play with</span>
								<div class="flex justify-end">
									<a href="javascript:;" data-theme="light" data-tooltip-content="#tooltip03" class="tooltip inline-flex items-center gap-1">
										<span>US$1,000</span>
									</a>
								</div>
								<span>more until your next ticket!</span>
								<div class="tooltip-content">
									<div id="tooltip03"
										class="relative flex items-center py-1 gap-1">
										<span>US$0.00</span>
										<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
									</div>
								</div>
							</div>
							<div class="flex items-center justify-center mt-2">
								<span>내 참가 번호:</span>
								<span class="text-white font-semibold">0</span>
							</div>
							<div class="flex justify-center mt-3">
								<button class="hover:bg-grey-300 bg-grey-400 py-3 px-4 rounded-md font-semibold transition text-white scale"><span>내 티켓 조회</span></button>
							</div>
						</div>
						
						<div class="mt-8">
							<div class="flex items-center justify-center p-3 -m-4 bg-grey-700 rounded-b-md">
								<a href="/stakeclone/promotions_casino_view.html" target="_blank" class="scale"><span class="text-white font-bold">Stake 주간 경품에 대해 자세히 알아보기</span></a>
							</div>
						</div>
					</div>
					<div id="tab_con15" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="tab15">
						<div class="flex flex-col items-center gap-3">
							<svg class="w-24 h-24"><use xlink:href="#icon-empty-race"></use></svg>
							<span class="text-base text-white font-semibold">$100,000 레이스 - 24시간</span>
							<span class="text-grey-200">2023. 8. 6. - 2023. 8. 7.</span>
							<span class="text-grey-200">24시간마다</span>
							<div class="flex itesm-center gap-3">
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">0</div>
									<span class="font-semibold">일</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">1</div>
									<span class=font-semibold">시간</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">30</div>
									<span class=font-semibold">분</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">10</div>
									<span class=font-semibold">초</span>
								</div>
							</div>
							<span class="text-center">Stake의 24시간 $100,000 일일 레이스에 참여해 보세요! 스포츠 또는 카지노를 통틀어 베팅 내역 상위 5000위 안에 든 사람들을 제치고 더 높은 순위로 올라갈수록 상금이 늘어납니다! Stake 레이스가 완료되면 모든 상품은 동일한 BTC 가격으로 귀하의 잔고에 즉시 지급됩니다!</span>
						</div>
						<div class="p-3 bg-grey-500 rounded-md mt-3">
							<div class="flex flex-col md:flex-row  items-center justify-center">
								<div class="flex flex-col justify-center items-center p-2 w-full">
									<span class="font-semibold">내 포지션</span>
									<div class="flex items-center justify-center gap-1">
										<span class="font-semibold">-</svg>
									</div>
								</div>
								<div class="flex flex-col justify-center items-center border-t border-b md:border-b-0 md:border-t-0 md:border-l md:border-r border-gray-600 p-2 w-full gap-1">
									<span class="font-semibold">현재 상금</span>
									<div>
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" class="tooltip inline-flex items-center gap-1">
												<span class="text-white font-semibold">US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</a>
										</div>
										<div class="tooltip-content">
											<div id="custom-content-tooltip"
												class="relative flex items-center py-1 gap-1">
												<span>US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</div>
										</div>
									</div>
								</div>
								<div class="flex flex-col justify-center items-center p-2 w-full gap-2">
									<span class="font-semibold flex items-center gap-1">내 베팅<svg><use xlink:href="#icon-info"></use></svg></span>
									<div>
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" class="tooltip inline-flex items-center gap-1">
												<span class="text-white font-semibold">US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</a>
										</div>
										<div class="tooltip-content">
											<div id="custom-content-tooltip"
												class="relative flex items-center py-1 gap-1">
												<span>US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-8">
							<div class="flex items-center justify-center p-3 -m-4 bg-grey-700 rounded-b-md">
								<a href="/stakeclone/promotions_casino_view.html" target="_blank" class="scale"><span class="text-white font-bold">Stake 일일 레이스에 대해 더 알아보기</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- races 모달 끝 -->

<!-- ticket 모달 -->
<div id="ticket_modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content"> <!-- BEGIN: Modal Header -->
			<div class="modal-header">
				<h2 class="font-semibold text-base mr-auto flex items-center gap-2">
					<svg><use xlink:href="#icon-coupon"></use></svg>
					프로모션
				</h2>
				<button data-tw-dismiss="modal"><svg><use xlink:href="#icon-cross"></use></svg></button>
			</div>
			<div class="modal-body">
				<div class="flex items-center justify-center">
					<div class="flex items-center">
						<div class="flex items-center">
							<ul class="nav nav-boxed-tabs p-1 rounded-full gap-2" role="tablist">
								<li id="tab16" class="nav-item" role="presentation">
									<button class="nav-link w-full py-3 px-5 gap-1 active" data-tw-toggle="pill" data-tw-target="#tab_con16" type="button" role="tab" aria-controls=tab_con16" aria-selected="true">
										<span class="flex items-center gap-1 ">$75,000 주간 복권</span>
									</button>
								</li>
								<li id="tab17" class="nav-item" role="presentation">
									<button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_con17" type="button" role="tab" aria-controls="tab_con17" aria-selected="false">
										<span class="flex items-center gap-1">$100,000 레이스 - 24시간</span>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="tab-content mt-3">
					<div id="tab_con16" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="tab16">
						<div class="flex flex-col items-center gap-3">
							<svg class="w-24 h-24"><use xlink:href="#icon-empty-game"></use></svg>
							<span class="text-base text-white font-semibold">$75,000 주간 복권</span>
							<span class="text-grey-200">2023. 8. 5. - 2023. 8. 12.</span>
							<span class="text-grey-200">매주 토요일 2:00PM (GMT)</span>
							<div class="flex itesm-center gap-3">
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">5</div>
									<span class="font-semibold">일</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">0</div>
									<span class=font-semibold">시간</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">57</div>
									<span class=font-semibold">분</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">28</div>
									<span class=font-semibold">초</span>
								</div>
							</div>
							<span class="text-center">베팅하고 경품 행사 티켓을 받아가세요. 누구나 참여할 수 있습니다. 티켓 한 장만 있으면 매주 총 $75,000 상당의 상금에 응모할 수 있습니다. 티켓 한 장당 $1,000이며 최대한 많은 티켓을 획득하고 베팅하여 우승을 거머쥐어 보세요! 매주 토요일 오후 11시 www.kick.com/Eddie에서 실시간으로 추첨이 진행됩니다!</span>
						</div> 
						<div class="p-3 bg-grey-500 rounded-md mt-3">
							<div class="flex items-center">
								<span class="text-grey-200">내 티켓 조회</span>
								<div class="ml-auto">
									<div class="flex items-center">
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#tooltip01" class="tooltip inline-flex items-center gap-1">
												<span class="text-white">US$0.00</span>
											</a>
										</div>
										<span>/</span>
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#tooltip02" class="tooltip inline-flex items-center gap-1">
												<span class="text-white">US$1,000</span>
											</a>
										</div>
									</div>
									
									<div class="tooltip-content">
										<div id="tooltip01"
											class="relative flex items-center py-1 gap-1">
											<span>US$0.00</span>
											<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
										</div>
									</div>
									<div class="tooltip-content">
										<div id="tooltip02"
											class="relative flex items-center py-1 gap-1">
											<span>US$1,000</span>
											<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
										</div>
									</div>
								</div>
							</div>
							<div class="mt-2">
								<div class="progress_bar_wrap">
									<div class="bar bg-grey-400 rounded-full">
										<div class="progress_bar bg-green-400" style="right:65%"></div>
									</div>
								</div>
							</div>
							<div class="flex items-center justify-center mt-2 gap-1">
								<span>You have to play with</span>
								<div class="flex justify-end">
									<a href="javascript:;" data-theme="light" data-tooltip-content="#tooltip03" class="tooltip inline-flex items-center gap-1">
										<span>US$1,000</span>
									</a>
								</div>
								<span>more until your next ticket!</span>
								<div class="tooltip-content">
									<div id="tooltip03"
										class="relative flex items-center py-1 gap-1">
										<span>US$0.00</span>
										<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
									</div>
								</div>
							</div>
							<div class="flex items-center justify-center mt-2">
								<span>내 참가 번호:</span>
								<span class="text-white font-semibold">0</span>
							</div>
							<div class="flex justify-center mt-3">
								<button class="hover:bg-grey-300 bg-grey-400 py-3 px-4 rounded-md font-semibold transition text-white scale"><span>내 티켓 조회</span></button>
							</div>
						</div>
						
						<div class="mt-8">
							<div class="flex items-center justify-center p-3 -m-4 bg-grey-700 rounded-b-md">
								<a href="/stakeclone/promotions_casino_view.html" target="_blank" class="scale"><span class="text-white font-bold">Stake 주간 경품에 대해 자세히 알아보기</span></a>
							</div>
						</div>
					</div>
					<div id="tab_con17" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="tab17">
						<div class="flex flex-col items-center gap-3">
							<svg class="w-24 h-24"><use xlink:href="#icon-empty-race"></use></svg>
							<span class="text-base text-white font-semibold">$100,000 레이스 - 24시간</span>
							<span class="text-grey-200">2023. 8. 6. - 2023. 8. 7.</span>
							<span class="text-grey-200">24시간마다</span>
							<div class="flex itesm-center gap-3">
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">0</div>
									<span class="font-semibold">일</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">1</div>
									<span class=font-semibold">시간</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">30</div>
									<span class=font-semibold">분</span>
								</div>
								<div class="flex items-center flex-col gap-1">
									<div class="px-5 py-3 border rounded-md border-grey-400 text-white font-semibold">10</div>
									<span class=font-semibold">초</span>
								</div>
							</div>
							<span class="text-center">Stake의 24시간 $100,000 일일 레이스에 참여해 보세요! 스포츠 또는 카지노를 통틀어 베팅 내역 상위 5000위 안에 든 사람들을 제치고 더 높은 순위로 올라갈수록 상금이 늘어납니다! Stake 레이스가 완료되면 모든 상품은 동일한 BTC 가격으로 귀하의 잔고에 즉시 지급됩니다!</span>
						</div>
						<div class="p-3 bg-grey-500 rounded-md mt-3">
							<div class="flex flex-col md:flex-row  items-center justify-center">
								<div class="flex flex-col justify-center items-center p-2 w-full">
									<span class="font-semibold">내 포지션</span>
									<div class="flex items-center justify-center gap-1">
										<span class="font-semibold">-</svg>
									</div>
								</div>
								<div class="flex flex-col justify-center items-center border-t border-b md:border-b-0 md:border-t-0 md:border-l md:border-r border-gray-600 p-2 w-full gap-1">
									<span class="font-semibold">현재 상금</span>
									<div>
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" class="tooltip inline-flex items-center gap-1">
												<span class="text-white font-semibold">US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</a>
										</div>
										<div class="tooltip-content">
											<div id="custom-content-tooltip"
												class="relative flex items-center py-1 gap-1">
												<span>US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</div>
										</div>
									</div>
								</div>
								<div class="flex flex-col justify-center items-center p-2 w-full gap-2">
									<span class="font-semibold flex items-center gap-1">내 베팅<svg><use xlink:href="#icon-info"></use></svg></span>
									<div>
										<div class="flex justify-end">
											<a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" class="tooltip inline-flex items-center gap-1">
												<span class="text-white font-semibold">US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</a>
										</div>
										<div class="tooltip-content">
											<div id="custom-content-tooltip"
												class="relative flex items-center py-1 gap-1">
												<span>US$0.00</span>
												<span title="usd" style="max-width: 12ch;"><svg class=""><use xlink:href="#icon-currency-usd"></use></svg></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-8">
							<div class="flex items-center justify-center p-3 -m-4 bg-grey-700 rounded-b-md">
								<a href="/stakeclone/promotions_casino_view.html" target="_blank" class="scale"><span class="text-white font-bold">Stake 일일 레이스에 대해 더 알아보기</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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
					<div class="flex flex-col md:flex-row items-center justify-center">
						<div class="flex flex-col justify-center items-center p-2 w-full">
							<span class="font-semibold">배팅</span>
							<div class="flex items-center justify-center gap-1">
								<span class="text-white font-semibold">11343.912345</span><svg><use xlink:href="#icon-currency-trx"></use></svg>
							</div>
						</div>
						<div class="flex flex-col justify-center items-center border-t border-b md:border-t-0 md:border-b-0 md:border-l md:border-r border-gray-600 p-2 w-full">
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
<!-- 고스트모드 얼럿 끝 -->

<!-- 사용자 무시 얼럿 -->
<div class="ignore alert flex items-center mb-2" id="Ignore_alert">
	<div class="p-4">
		<svg class=" text-red-500 w-5 h-5"><use xlink:href="#icon-unfriend"></use></svg>
		<!-- <svg class=" text-red-400"><use xlink:href="#icon-add-friend"></use></svg> -->
	</div>
	
	<div class="bg-grey-400">
		<div class="flex items-center">
			<div class="p-4">
				<p class="font-semibold text-base">사용자가 무시되었습니다</p>
				<!-- <p class="font-semibold text-base">사용자가 무시 상태가 해제 되었습니다</p> -->
			</div>
			<button type="button" class="ignore-btn-close text-white ml-auto p-4">
				<i data-lucide="x" class="w-4 h-4" style="stroke:currentColor"></i> 
			</button> 
		</div>
	</div>
</div>
<!-- 사용자 무시 얼럿 끝 -->


<!-- 실시간 통계 모달 -->
<div class="draggable_modal w-[280px] transition-all">
	<div class="draggable_modal_header px-3 py-2 flex items-center bg-grey-600 rounded-t-md">
		<div class="flex items-center gap-1">
			<span><svg><use xlink:href="#icon-stats"></use></svg></span>
			<span>실시간 통계</span>
		</div>
		<button class="draggable_modal_close ml-auto"><svg><use xlink:href="#icon-cross"></use></svg></button>
	</div>
	<div class="bg-grey-400 rounded-b-md p-3">
		<div class="flex items-center">
			<div class="select_custom" style="z-index: 10;">
				<button class="select_toggle_btn">
					<p>
						<span>레이스</span>
						<svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
					</p>
				</button>
				<div class="option_box click_option click_main">
					<button>
						<p>
							<span>모두</span>
						</p>
					</button>
					<button>
						<p>
							<span>배팅</span>
						</p>
					</button>
					<button class="active">
						<p>
							<span>레이스</span>
						</p>
					</button>
					<button >
						<p>
							<span>hide</span>
						</p>
					</button>
				</div>
			</div>
			<div class="statistics_reset ml-auto">
				<button class="tooltip" data-theme="light" title="실시간 통계 초기화"><span><svg><use xlink:href="#icon-rotate"></use></svg></span></button>
			</div>
		</div>
		
		<div id="toggleDiv1" class="toggle_div">
			<div class="mt-3">
				<div class="select_custom w-full">
					<button class="select_toggle_btn" style="width:100%;">
						<p class="flex items-center">
							<span class="text-sm">모두</span>
							<svg class="svg-icon ml-auto"><use xlink:href="#icon-arrowdown"></use></svg>
						</p>
					</button>
					<div class="option_box click_option">
						<button class="active">
							<p>
								<span>모두</span>
							</p>
						</button>
					</div>
				</div>
			</div>
			<div class="mt-3 bg-grey-700 rounded-md p-3">
				<div class="flex items-center justify-center">
					<div class="flex flex-col gap-1 pr-3 w-full">
						<span class="font-semibold">이익</span>
						<div class="flex items-center gap-1">
							<span class="text-green-400 font-bold">0.00000000</span>
							<svg><use xlink:href="#icon-currency-btc"></use></svg>
						</div>
						<span class="font-semibold">배팅</span>
						<div class="flex items-center gap-1">
							<span class="text-white font-bold">0.00000000</span>
							<svg><use xlink:href="#icon-currency-btc"></use></svg>
						</div>
					</div>
					<div class="border-l border-grey-400 pl-3 flex flex-col w-full gap-1">
						<span class="font-semibold">승리</span>
						<span class="text-green-400 font-bold">0</span>
						<span class="font-semibold">손실</span>
						<span class="text-red-500 font-bold">0</span>
					</div>
				</div>
			</div>
			<div class="mt-3 bg-grey-700 rounded-md p-3 h-[220px]">

			</div>
		</div>
		<div id="toggleDiv2" class="toggle_div">
			<div class="mt-3 bg-grey-700 p-3 rounded-md">
				<div class="select_custom">
					<button class="select_toggle_btn" style="padding:0;height:auto;">
						<p>
							<span class="text-sm">$100,000 레이스 - 24시간</span>
							<svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
						</p>
					</button>
					<div class="option_box click_option">
						<button class="active">
							<p>
								<span>$100,000 레이스 - 24시간</span>
							</p>
						</button>
					</div>
				</div>
				<div class="p-3 h-[93px] flex justify-center items-center">
					<span class="font-bold text-grey-200">레이스에 참가하려면 베팅하세요!</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 실시간 통계 모달 끝-->

<!-- 로그아웃 모달 -->
<div id="logout_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content"> <!-- BEGIN: Modal Header -->
			<div class="modal-header">
				<h2 class="font-semibold text-base mr-auto flex items-center gap-2">
					<svg><use xlink:href="#icon-exit"></use></svg>
					로그아웃
				</h2>
				<button data-tw-dismiss="modal"><svg><use xlink:href="#icon-cross"></use></svg></button>
			</div>
			<div class="modal-body">
                <div class="text-center text-grey-200">
                    종료하기 전에, 다양한 카지노 및 스포츠 프로모션을 꼭 확인해주세요!
                </div>
				<div class="flex justify-center mt-3">
					<button class="hover:bg-red-700 bg-red-600 py-3 px-4 rounded-md font-semibold transition-all text-white scale w-full text-base"><span>로그아웃</span></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 로그아웃 모달 끝 -->

<!-- ** 모달 끝 ** -->

<script src='https://design01.codeidea.io/link_script.js'></script>
<script src="./dist/js/app.js"></script>
<script src="./dist/js/jquery-ui.js"></script>

<script>
	jQuery(document).ready(function() {
		jQuery('.ghost_mode').click(function() {
			jQuery('#Ghost_alert').addClass('show');
		});
		jQuery('.ghost-btn-close').click(function(){
			jQuery('#Ghost_alert').removeClass('show');
		});
	});
	jQuery(document).ready(function() {
		jQuery('.ignore-mode').click(function() {
			jQuery('#Ignore_alert').addClass('show');
		});
		jQuery('.ignore-btn-close').click(function(){
			jQuery('#Ignore_alert').removeClass('show');
		});
	});

	jQuery(".select_custom .select_toggle_btn").on("click", function (e) {
		jQuery(".select_custom .option_box").hide();
		jQuery(".select_custom .select_toggle_btn").removeClass("active");

		jQuery(this).next(".option_box").toggle();
		jQuery(this).toggleClass("active");
	});

	// 바깥 클릭했을때 option 닫기
	jQuery("body").on("click", function (e) {
		if (!jQuery(e.target).closest(".select_custom").length) {
			jQuery(".select_custom .option_box").hide();
			jQuery(".select_custom .select_toggle_btn").removeClass("active");
		}
	});

	// option 클릭했을때 값 변경, option_box 닫기
	jQuery(".select_custom .click_option.option_box button").on("click", function () {
		const value = jQuery(this).find("span").text();

		if (jQuery(this).parents(".option_box").hasClass("language_option")) {
			// 채팅 > 언어 클릭시
			const img = jQuery(this).find("i").html();
			jQuery(this)
				.parents(".select_custom")
				.find(".select_toggle_btn span")
				.html(img + "Stake: " + value);
		} else {
			jQuery(this).parents(".select_custom").find(".select_toggle_btn span").text(value);
		}

		jQuery(this).addClass("active").siblings().removeClass("active");
		jQuery(this).parents(".option_box").hide();
		jQuery(this).parents(".select_custom").find(".select_toggle_btn").removeClass("active");
	});

	// input check 했을 때,
	jQuery(".select_custom .input_option.option_box input").on("change", function () {
		if (jQuery(this).prop("checked")) {
			jQuery(this).parents("button").addClass("active");
			jQuery(this).parents("button").siblings().addClass("off");
		} else {
			jQuery(this).parents("button").removeClass("active");
		}

		let checked = 0;
		jQuery(this)
			.parents(".option_box")
			.find("button")
			.each(function (index, item) {
				if (jQuery(item).find("input").prop("checked")) {
					checked += 1;
				}
			});
		if (checked > 0) {
			jQuery(this).parents(".select_custom").find(".select_toggle_btn span i").addClass("on").text(checked);
		} else {
			jQuery(this).parents(".select_custom").find(".select_toggle_btn span i").removeClass("on");
		}
	});

	jQuery(".select_custom .input_option.option_box .clear_btn").on("click", function () {
		jQuery(this).parents(".select_custom").find(".select_toggle_btn").removeClass("active");
		jQuery(this).parents(".select_custom").find(".select_toggle_btn span i").removeClass("on").text("");
		jQuery(this).parents(".select_custom").find(".option_box").hide();
		jQuery(this)
			.parents(".option_box")
			.find("button")
			.each(function (index, item) {
				jQuery(item).removeClass("active off");
				jQuery(item).find("input").prop("checked", false);
			});
	});
	

	 // 드래그
	 jQuery(document).ready(function() {
		const DraggModal = jQuery(".draggable_modal");
		
		jQuery('.draggable_modal_open').on('click', function() {
			DraggModal.addClass('show');
			jQuery("#toggleDiv2").show();

			// show 클래스가 추가된 후 300ms 지연
			setTimeout(function() {
				DraggModal.removeClass('transition-all');
			}, 200);
		});
		
		DraggModal.draggable({ handle: ".draggable_modal_header" });
		
		jQuery('.draggable_modal_close').on('click', function() {
			DraggModal.removeClass('show');
			DraggModal.addClass('transition-all');
		});

		jQuery(".click_main button").click(function(event) {
			// 클릭된 버튼에 "active" 클래스 추가, 다른 버튼에서 제거
			jQuery(".click_main button").removeClass("active");
			jQuery(this).addClass("active");

			var index = jQuery(this).index();

			// 기본적으로 모든 div를 숨깁니다.
			jQuery("#toggleDiv1, #toggleDiv2, .statistics_reset").hide();

			// index에 따라 필요한 div를 표시합니다.
			if (index === 0 || index === 1) {
				jQuery("#toggleDiv1").show();
				jQuery(".statistics_reset").show();
			}
			if (index === 0 || index === 2) {
				jQuery("#toggleDiv2").show();
			}

			// 특별한 케이스를 처리합니다.
			if (index === 3) {
				DraggModal.removeClass('show');
			}
		});

		// a태그 내부 버튼 a태그 이벤트 억제
        jQuery(document).ready(function() {
            jQuery('.prevention').on('click', function(e) {
                e.preventDefault();
            });
        });
	});
</script>
</body>

</html>