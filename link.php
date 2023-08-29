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
				<li><a href="../stakeclone/index.html" target="_blank" class="">메인</a></li>
				<li>
                    <a href="../stakeclone/index_logout.html" target="_blank" class="">메인 - 로그인 안했을때</a>
                    <ul>
                        <li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#login_modal">로그인 모달</button></li>
                        <li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#findpassword_modal">비밀번호 찾기 모달</button></li>
                        <li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#join_modal">회원가입 모달 : step1</button></li>
                        <li><button class="pop-modal" data-tw-toggle="modal" data-tw-target="#join_modal2">회원가입 모달 : step2</button></li>
                    </ul>
                </li>
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
        <li class="mt50" data-label="sports">
            <ul>
                <li><a href="../stakeclone/sports/home.html" target="_blank" class="">스포츠 홈</a></li>
                <li class="mt30" data-label="실시간 경기">
					<ul>
						<li><a href="../stakeclone/sports/live.html" target="_blank" class="">실시간 경기</a></li>
					</ul>
				</li>
                <li class="mt30" data-label="곧 시작하는 경기">
					<ul>
						<li><a href="../stakeclone/sports/upcoming.html" target="_blank" class="">곧 시작하는 경기</a></li>
					</ul>
				</li>
                <li class="mt30" data-label="내 베팅">
					<ul>
                        <li><a href="../stakeclone/sports/betting.html" target="_blank" class="">내 베팅</a></li>
						<li><a href="../stakeclone/sports/betting_nobetting.html" target="_blank" class="">내 베팅 - 베팅 없을때</a></li>
					</ul>
				</li>
                <li class="mt30" data-label="쿠폰">
					<ul>
						<li><a href="../stakeclone/sports/coupon.html" target="_blank" class="">쿠폰</a></li>
					</ul>
				</li>
                <li class="mt30" data-label="All Esports">
					<ul>
                        <li data-label="축구">
                            <ul>
                                <li>
                                    <a href="../stakeclone/sports/soccer_live.html" target="_blank" class="">Live & Upcoming</a>
                                    <ul>
                                        <li><a href="../stakeclone/sports/sports_detail.html" target="_blank" class="">sports view (모든 스포츠 공통)</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../stakeclone/sports/soccer_outright.html" target="_blank" class="">Outrights</a>
                                    <ul>
                                        <li><a href="../stakeclone/sports/soccer_outright_noresult.html" target="_blank" class="">Outrights - 결과 없을때</a></li>
                                    </ul>
                                </li>
                                <li><a href="../stakeclone/sports/soccer_all.html" target="_blank" class="">모두축구</a></li>
                                <li><a href="../stakeclone/sports/soccer_major.html" target="_blank" class="">메이저리그 축구</a></li>
                                <li><a href="../stakeclone/sports/soccer_premier.html" target="_blank" class="">프리미어 리그</a></li>
                                <li><a href="../stakeclone/sports/soccer_laliga.html" target="_blank" class="">라리가</a></li>
                            </ul>
                        </li>
                        <li class="mt30" data-label="테니스">
                            <ul>
                                <li><a href="../stakeclone/sports/tennis_live.html" target="_blank" class="">Live & Upcoming</a></li>
                                <li><a href="../stakeclone/sports/tennis_outright.html" target="_blank" class="">Outrights</a></li>
                                <li><a href="../stakeclone/sports/tennis_all.html" target="_blank" class="">모두테니스</a></li>
                                <li><a href="../stakeclone/sports/tennis_winston.html" target="_blank" class="">ATP 윈스턴 살렘, 미국 남자 단식</a></li>
                                <li><a href="../stakeclone/sports/tennis_challenger.html" target="_blank" class="">ATP Challenger Zhuhai, China Men Singles</a></li>
                                <li><a href="../stakeclone/sports/tennis_cleveland.html" target="_blank" class="">WTA Cleveland, USA Women Singles</a></li>
                            </ul>
                        </li>
                        <li class="mt30" data-label="야구">
                            <ul>
                                <li><a href="../stakeclone/sports/baseball_live.html" target="_blank" class="">Live & Upcoming</a></li>
                                <li><a href="../stakeclone/sports/baseball_outright.html" target="_blank" class="">Outrights</a></li>
                                <li><a href="../stakeclone/sports/baseball_all.html" target="_blank" class="">모두 야구</a></li>
                                <li><a href="../stakeclone/sports/baseball_mlb.html" target="_blank" class="">MLB</a></li>
                                <li><a href="../stakeclone/sports/baseball_profess.html" target="_blank" class="">프로페셔널 야구</a></li>
                                <li><a href="../stakeclone/sports/baseball_kbo.html" target="_blank" class="">KBO 야구</a></li>
                            </ul>
                        </li>
                        <li class="mt30" data-label="미식축구">
                            <ul>
                                <li><a href="../stakeclone/sports/football_live.html" target="_blank" class="">Live & Upcoming</a></li>
                                <li><a href="../stakeclone/sports/football_outright.html" target="_blank" class="">Outrights</a></li>
                                <li><a href="../stakeclone/sports/football_all.html" target="_blank" class="">모두 미식축구</a></li>
                                <li><a href="../stakeclone/sports/football_nfl.html" target="_blank" class="">NFL 프리시즌</a></li>
                                <li><a href="../stakeclone/sports/football_cfl.html" target="_blank" class="">CFL</a></li>
                            </ul>
                        </li>
                        <li class="mt30" data-label="농구">
                            <ul>
                                <li><a href="../stakeclone/sports/basketball_live.html" target="_blank" class="">Live & Upcoming</a></li>
                                <li><a href="../stakeclone/sports/basketball_outright.html" target="_blank" class="">Outrights</a></li>
                                <li><a href="../stakeclone/sports/basketball_all.html" target="_blank" class="">모두 농구</a></li>
                                <li><a href="../stakeclone/sports/basketball_wnba.html" target="_blank" class="">WNBA</a></li>
                                <li><a href="../stakeclone/sports/basketball_inter.html" target="_blank" class="">국제 친선경기</a></li>
                            </ul>
                        </li>
					</ul>
				</li>
                <li class="mt30" data-label="All Esports">
					<ul>
                        <li><a href="../stakeclone/sports/esports_dota2.html" target="_blank" class="">도타2</a></li>
                        <li><a href="../stakeclone/sports/esports_rainbow-six.html" target="_blank" class="">레인보우 식스</a></li>
                        <li><a href="../stakeclone/sports/esports_league-of-legends.html" target="_blank" class="">리그 오브 레전드</a></li>
                        <li><a href="../stakeclone/sports/esports_mobile-legends.html" target="_blank" class="">모바일 레전드</a></li>
                        <li><a href="../stakeclone/sports/esports_valorant.html" target="_blank" class="">발로란트</a></li>
                        <li><a href="../stakeclone/sports/esports_starcraft-2.html" target="_blank" class="">스타크래프트 I</a></li>
                        <li><a href="../stakeclone/sports/esports_kings-of-glory.html" target="_blank" class="">영광의 왕</a></li>
                        <li><a href="../stakeclone/sports/esports_overwatch.html" target="_blank" class="">오버워치</a></li>
                        <li><a href="../stakeclone/sports/esports_arena-of-valor.html" target="_blank" class="">투기장</a></li>
                        <li><a href="../stakeclone/sports/esports_halo.html" target="_blank" class="">후광</a></li>
                        <li><a href="../stakeclone/sports/esports_counter-strike.html" target="_blank" class="">CS:GO</a></li>
                        <li><a href="../stakeclone/sports/esports_fifa.html" target="_blank" class="">FIFA</a></li>
                    </ul>
                </li>
                <li class="mt30" data-label="모든스포츠">
					<ul>
                        <li><a href="../stakeclone/sports/sports_gaelic-football.html" target="_blank" class="">게일식 풋볼</a></li>
                        <li><a href="../stakeclone/sports/sports_gaelic-hurling.html" target="_blank" class="">게일식 헐링</a></li>
                        <li><a href="../stakeclone/sports/sports_golf.html" target="_blank" class="">골프</a></li>
                        <li><a href="../stakeclone/sports/sports_boxing.html" target="_blank" class="">권투</a></li>
                        <li><a href="../stakeclone/sports/sports_basketball.html" target="_blank" class="">농구</a></li>
                        <li><a href="../stakeclone/sports/sports_darts.html" target="_blank" class="">다트</a></li>
                        <li><a href="../stakeclone/sports/sports_lacrosse.html" target="_blank" class="">라크로스</a></li>
                        <li><a href="../stakeclone/sports/sports_rugby.html" target="_blank" class="">럭비</a></li>
                        <li><a href="../stakeclone/sports/sports_american-football.html" target="_blank" class="">미식축구</a></li>
                        <li><a href="../stakeclone/sports/sports_biathlon.html" target="_blank" class="">바이애슬론</a></li>
                        <li><a href="../stakeclone/sports/sports_volleyball.html" target="_blank" class="">배구</a></li>
                        <li><a href="../stakeclone/sports/sports_bowls.html" target="_blank" class="">보울스</a></li>
                        <li><a href="../stakeclone/sports/sports_cycling.html" target="_blank" class="">사이클</a></li>
                        <li><a href="../stakeclone/sports/sports_snooker.html" target="_blank" class="">스누커</a></li>
                    </ul>
                </li>
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
						<li>
							<a href="../stakeclone/casino/stake-originals.html" target="_blank" class="">Stake 오리지널</a>
							<ul>
								<li>
									<a href="../stakeclone/casino/casino_game_view.html" target="_blank" class="">게임_view (모든게임 공통)</a>
								</li>
							</ul>
						</li>
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
            </ul>
        </li>
        <li class="mt50" data-label="공통">
            <ul>
				<li data-label="프로필">
					<ul>
						<li><button  class="pop-modal" data-tw-toggle="modal" data-tw-target="#wallet_modal">지갑</button></li>
						<li><button  class="pop-modal" data-tw-toggle="modal" data-tw-target="#vault_modal">금고</button></li>
						<li><button  class="pop-modal" data-tw-toggle="modal" data-tw-target="#vip_modal">VIP</button></li>
						<li><button  class="pop-modal" data-tw-toggle="modal" data-tw-target="#statistics_modal">통계</button></li>
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


				<li class="mt30" data-label="제휴">
					<ul>
						<li><a href="../stakeclone/affiliate.html" target="_blank" class="">제휴</a></li>
					</ul>
				</li>

				<li class="mt30" data-label="VIP 클럽">
					<ul>
						<li><a href="../stakeclone/vip_club.html" target="_blank" class="">VIP 클럽</a></li>
					</ul>
				</li>

				<li class="mt30" data-label="블로그">
					<ul>
						<li>
							<a href="../stakeclone/blog.html" target="_blank" class="">블로그</a>
							<ul>
								<li><a href="../stakeclone/blog_sub.html" target="_blank" class="">블로그-sub</a></li>
								<li><a href="../stakeclone/blog_view.html" target="_blank" class="">블로그-view</a></li>
							</ul>
						</li>
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

				<li class="mt30" data-label="Stake 세이프">
					<ul>
						<li><a href="../stakeclone/stake_safe.html" target="_blank" class="">Stake 세이프</a></li>
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

<!-- 지갑 모달 -->
<div id="wallet_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-base mr-auto flex items-center gap-2">
                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-coins"></use></svg>
                    지갑
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
            </div>
            <div class="modal-body" style="padding: 0">
                <div class="flex items-center justify-center">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <ul class="nav nav-boxed-tabs p-1 rounded-full gap-2" role="tablist">
                                <li id="wallet01" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1 active" data-tw-toggle="pill" data-tw-target="#tab_wallet01" type="button" role="tab" aria-controls="tab_wallet01" aria-selected="true">
                                        <span class="flex items-center gap-1">입금</span>
                                    </button>
                                </li>
                                <li id="wallet02" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_wallet02" type="button" role="tab" aria-controls="tab_wallet02" aria-selected="false">
                                        <span class="flex items-center gap-1">출금</span>
                                    </button>
                                </li>
                                <li id="wallet03" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_wallet03" type="button" role="tab" aria-controls="tab_wallet03" aria-selected="false">
                                        <span class="flex items-center gap-1">암호화폐 구매</span>
                                    </button>
                                </li>
                                <li id="wallet04" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_wallet04" type="button" role="tab" aria-controls="tab_wallet04" aria-selected="false">
                                        <span class="flex items-center gap-1">팁</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content mt-3">
                    <div id="tab_wallet01" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="wallet01">
                        <div class="p-4">
                            <div class="flex align-center justify-center gap-2">
                                <div>
                                    <p class="font-medium">통화</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-btc"></use></svg>
                                                <span>BTC</span>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option center img_option">
                                            <div class="p-1">
                                                <input type="text" class="form-control light" placeholder=" 검색" />
                                            </div>
                                            <div class="h-[300px] overflow-y-scroll text-center">
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-btc"></use></svg>
                                                        <span>BTC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eth"></use></svg>
                                                        <span>ETH</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ltc"></use></svg>
                                                        <span>LTC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdt"></use></svg>
                                                        <span>USDT</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-doge"></use></svg>
                                                        <span>DOGE</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bch"></use></svg>
                                                        <span>BCH</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-xrp"></use></svg>
                                                        <span>XRP</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eos"></use></svg>
                                                        <span>EOS</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-trx"></use></svg>
                                                        <span>TRX</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bnb"></use></svg>
                                                        <span>BNB</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdc"></use></svg>
                                                        <span>USDC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ape"></use></svg>
                                                        <span>APE</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-busd"></use></svg>
                                                        <span>BUSD</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cro"></use></svg>
                                                        <span>CRO</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-dai"></use></svg>
                                                        <span>DAI</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-link"></use></svg>
                                                        <span>LINK</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-sand"></use></svg>
                                                        <span>SAND</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-shib"></use></svg>
                                                        <span>SHIB</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-uni"></use></svg>
                                                        <span>UNI</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-matic"></use></svg>
                                                        <span>MATIC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                        <span>EUR</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                        <span>JPY</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                        <span>BRL</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                        <span>CAD</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-inr"></use></svg>
                                                        <span>INR</span>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-medium">네트워크</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <span>ETH</span>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option">
                                            <button>
                                                <p>
                                                    <span>ETH</span>
                                                    <b class="whitespace-nowrap"> - Ethereum (ERC20)</b>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <span>BSC</span>
                                                    <b class="whitespace-nowrap"> - BNB Smart Chain (BEP20)</b>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <span>POLYGON</span>
                                                    <b class="whitespace-nowrap"> - Matic</b>
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium">내 ETH 입금 주소</p>
                                <div class="input-group mt-2 w-full">
                                    <input type="text" class="form-control bgfull font-semibold" value="AWKLASIBNWERLISDF4ADSG1ABZXD54ASDFBINLOKNBIJ" />
                                    <button class="btn-gray px-3 le_no_radius tooltip" data-trigger="click" data-theme="light" title="복사되었습니다">
                                        <svg class="svg-icon w-3.5 h-3.5"><use xlink:href="#icon-copy"></use></svg>
                                    </button>
                                </div>
                                <div class="text-center">
                                    <div class="inline-block p-2 bg-white rounded mt-2"><img width="128" src="/stakeclone/dist/custom_img/setting_code_img.png" alt="" /></div>
                                    <p>"이 주소로 ETH만 보내세요. 2 확인번의 확인은 필수입니다."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab_wallet02" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="wallet02">
                        <div class="p-4">
                            <div class="flex align-center justify-center gap-2">
                                <div>
                                    <p class="font-medium">통화</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <span>0.00000000</span>
                                                <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-btc"></use></svg>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option img_option between">
                                            <div class="p-1">
                                                <input type="text" class="form-control light" placeholder=" 검색" />
                                            </div>
                                            <div class="h-[300px] overflow-y-scroll text-center">
                                                <button>
                                                    <p>
                                                        <span class="text-left">0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-btc"></use></svg>
                                                            <strong>BTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eth"></use></svg>
                                                            <strong>ETH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ltc"></use></svg>
                                                            <strong>LTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdt"></use></svg>
                                                            <strong>USDT</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-doge"></use></svg>
                                                            <strong>DOGE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bch"></use></svg>
                                                            <strong>BCH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-xrp"></use></svg>
                                                            <strong>XRP</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eos"></use></svg>
                                                            <strong>EOS</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-trx"></use></svg>
                                                            <strong>TRX</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bnb"></use></svg>
                                                            <strong>BNB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdc"></use></svg>
                                                            <strong>USDC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ape"></use></svg>
                                                            <strong>APE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-busd"></use></svg>
                                                            <strong>BUSD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cro"></use></svg>
                                                            <strong>CRO</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-dai"></use></svg>
                                                            <strong>DAI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-link"></use></svg>
                                                            <strong>LINK</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-sand"></use></svg>
                                                            <strong>SAND</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-shib"></use></svg>
                                                            <strong>SHIB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-uni"></use></svg>
                                                            <strong>UNI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-matic"></use></svg>
                                                            <strong>MATIC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                            <strong>EUR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                            <strong>JPY</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                            <strong>BRL</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                            <strong>CAD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-inr"></use></svg>
                                                            <strong>INR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-medium">네트워크</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <span>ETH</span>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option">
                                            <button>
                                                <p>
                                                    <span>ETH</span>
                                                    <b class="whitespace-nowrap"> - Ethereum (ERC20)</b>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <span>BSC</span>
                                                    <b class="whitespace-nowrap"> - BNB Smart Chain (BEP20)</b>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <span>POLYGON</span>
                                                    <b class="whitespace-nowrap"> - Matic</b>
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="flex items-center font-medium">
                                    <svg class="svg-icon mr-1"><use xlink:href="#icon-currency-eth"></use></svg>
                                    ETH 주소
                                    <span class="text-[#ED4163]">*</span>
                                </p>
                                <input type="text" class="input mt-1 form-control pr-10 font-semibold" />
                                <div class="flex justify-between items-center mt-3">
                                    <p class="font-medium">
                                        금액
                                        <span class="text-[#ED4163]">*</span>
                                    </p>
                                    <span class="text-xs">US$0.00</span>
                                </div>
                                <div class="relative input-group mt-1 w-full">
                                    <input type="text" class="form-control font-semibold" value="0.000000000" />
                                    <i class="absolute right-14 top-3 z-10">
                                        <svg class="svg-icon w-4 h-4"><use xlink:href="#icon-currency-eth"></use></svg>
                                    </i>
                                    <button class="btn-gray px-3 whitespace-nowrap le_no_radius">최대</button>
                                </div>
                                <p class="text-xs flex items-center text-rose-400 mt-1">
                                    <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                                    <span> The minimum value is 0.004</span>
                                </p>
                                <button class="btn btn-primary w-full mt-4 p-3 text-base font-medium">
                                    <svg class="svg-icon mr-2"><use xlink:href="#icon-google"></use></svg> 다음으로 다시 인증 구굴
                                </button>
                                <p class="mt-2">
                                    최소 출금 금액은 0.00400000 <svg class="svg-icon mr-1 inline-block"><use xlink:href="#icon-currency-eth"></use></svg> 입니다. 출금 시 잔액에서 트랜잭션 처리 수수료 0.00050000
                                    <svg class="svg-icon mr-1 inline-block"><use xlink:href="#icon-currency-eth"></use></svg> 가 차감됩니다.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab_wallet03" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="wallet03">
                        <div class="p-4">
                            <p class="font-medium">Ethereum 구매하기</p>
                            <div class="relative input-group mt-1 w-full">
                                <input type="text" class="form-control font-semibold" value="0.01585892" />
                                <div class="select_custom">
                                    <button class="select_toggle_btn gray le_no_radius">
                                        <p>
                                            <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-btc"></use></svg>
                                            <span>BTC</span>
                                            <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </p>
                                    </button>
                                    <div class="option_box click_option center img_option">
                                        <div class="p-1">
                                            <input type="text" class="form-control light" placeholder=" 검색" />
                                        </div>
                                        <div class="h-[300px] overflow-y-scroll text-center">
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-btc"></use></svg>
                                                    <span>BTC</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eth"></use></svg>
                                                    <span>ETH</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ltc"></use></svg>
                                                    <span>LTC</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdt"></use></svg>
                                                    <span>USDT</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-doge"></use></svg>
                                                    <span>DOGE</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bch"></use></svg>
                                                    <span>BCH</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-xrp"></use></svg>
                                                    <span>XRP</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eos"></use></svg>
                                                    <span>EOS</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-trx"></use></svg>
                                                    <span>TRX</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bnb"></use></svg>
                                                    <span>BNB</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdc"></use></svg>
                                                    <span>USDC</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ape"></use></svg>
                                                    <span>APE</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-busd"></use></svg>
                                                    <span>BUSD</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cro"></use></svg>
                                                    <span>CRO</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-dai"></use></svg>
                                                    <span>DAI</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-link"></use></svg>
                                                    <span>LINK</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-sand"></use></svg>
                                                    <span>SAND</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-shib"></use></svg>
                                                    <span>SHIB</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-uni"></use></svg>
                                                    <span>UNI</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-matic"></use></svg>
                                                    <span>MATIC</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                    <span>EUR</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                    <span>JPY</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                    <span>BRL</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                    <span>CAD</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-inr"></use></svg>
                                                    <span>INR</span>
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="font-medium">USD로 결제</p>
                            <div class="relative input-group mt-1 w-full">
                                <input type="text" class="form-control font-semibold" value="30.00" />
                                <div class="select_custom">
                                    <button class="select_toggle_btn gray le_no_radius">
                                        <p>
                                            <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-usd"></use></svg>
                                            <span>USD</span>
                                            <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </p>
                                    </button>
                                    <div class="option_box click_option center img_option">
                                        <div class="h-[300px] overflow-y-scroll text-center">
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                    <span>BRL</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-krw"></use></svg>
                                                    <span>KRW</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usd"></use></svg>
                                                    <span>USD</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cop"></use></svg>
                                                    <span>COP</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                    <span>EUR</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                    <span>JPY</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-idr"></use></svg>
                                                    <span>IDR</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                    <span>CAD</span>
                                                </p>
                                            </button>
                                            <button>
                                                <p>
                                                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cny"></use></svg>
                                                    <span>CNY</span>
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-green w-full mt-4 p-3 text-base font-medium opacity-60 hover:opacity-100">MoonPay</button>
                            <p class="mt-2">
                                면책 조항: 위의 제3자 서비스는 Stake에서 플레이하는 데 사용할 수 있는 암호화폐를 구매하는 데 사용할 수 있습니다. 플랫폼에 가입하면 서비스 약관에 동의한 것으로 간주하며, KYC 절차를 통과해야 합니다. 해당 절차는 당사와 별개로
                                독립적으로 운영되고 있습니다.
                            </p>
                        </div>
                    </div>
                    <div id="tab_wallet04" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="wallet04">
                        <div class="p-4">
                            <div class="flex align-center justify-center gap-2">
                                <div>
                                    <p class="font-medium">통화</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <span>0.00000000</span>
                                                <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-btc"></use></svg>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option img_option between">
                                            <div class="p-1">
                                                <input type="text" class="form-control light" placeholder=" 검색" />
                                            </div>
                                            <div class="h-[300px] overflow-y-scroll text-center">
                                                <button>
                                                    <p>
                                                        <span class="text-left">0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-btc"></use></svg>
                                                            <strong>BTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eth"></use></svg>
                                                            <strong>ETH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ltc"></use></svg>
                                                            <strong>LTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdt"></use></svg>
                                                            <strong>USDT</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-doge"></use></svg>
                                                            <strong>DOGE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bch"></use></svg>
                                                            <strong>BCH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-xrp"></use></svg>
                                                            <strong>XRP</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eos"></use></svg>
                                                            <strong>EOS</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-trx"></use></svg>
                                                            <strong>TRX</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bnb"></use></svg>
                                                            <strong>BNB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdc"></use></svg>
                                                            <strong>USDC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ape"></use></svg>
                                                            <strong>APE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-busd"></use></svg>
                                                            <strong>BUSD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cro"></use></svg>
                                                            <strong>CRO</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-dai"></use></svg>
                                                            <strong>DAI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-link"></use></svg>
                                                            <strong>LINK</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-sand"></use></svg>
                                                            <strong>SAND</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-shib"></use></svg>
                                                            <strong>SHIB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-uni"></use></svg>
                                                            <strong>UNI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-matic"></use></svg>
                                                            <strong>MATIC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                            <strong>EUR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                            <strong>JPY</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                            <strong>BRL</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                            <strong>CAD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-inr"></use></svg>
                                                            <strong>INR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium">
                                    이름
                                    <span class="text-[#ED4163]">*</span>
                                </p>
                                <input type="text" class="input mt-1 form-control pr-10 font-semibold" />
                                <div class="flex justify-between items-center mt-3">
                                    <p class="font-medium">
                                        금액
                                        <span class="text-[#ED4163]">*</span>
                                    </p>
                                    <span class="text-xs">US$0.00</span>
                                </div>
                                <div class="relative input-group mt-1 w-full">
                                    <input type="text" class="form-control font-semibold" value="0.000000000" />
                                    <i class="absolute right-14 top-3 z-10">
                                        <svg class="svg-icon w-4 h-4"><use xlink:href="#icon-currency-eth"></use></svg>
                                    </i>
                                    <button class="btn-gray px-3 whitespace-nowrap le_no_radius">최소</button>
                                </div>
                                <p class="text-xs flex items-center text-rose-400 mt-1">
                                    <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                                    <span> 최솟값은 0.000005입니다</span>
                                </p>
                                <button class="btn btn-primary w-full mt-4 p-3 text-base font-medium">
                                    <svg class="svg-icon mr-2"><use xlink:href="#icon-google"></use></svg> 다음으로 다시 인증 구굴
                                </button>
                                <div class="form-check form-switch flex items-center gap-2 mt-2">
                                    <input id="wallet_input" class="form-check-input" type="checkbox" />
                                    <label class="form-check-label" for="wallet_input">
                                        <b class="block text-sm">공개</b>
                                        <span class="text-sm text-[#557086]">팁은 글로벌 채팅에 메시지로 표시됩니다.</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="padding: 0; border: 0 none">
                <div class="text-center bg-grey-700 py-3">
                    <span class="block">이중 인증으로 계정 보안 강화하기</span>
                    <button class="btn btn-primary mt-2 py-2 px-4">2FA 활성화</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 금고모달 -->
<div id="vault_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-base mr-auto flex items-center gap-2">
                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-vault"></use></svg>
                    금고
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
            </div>
            <div class="modal-body" style="padding: 0">
                <div class="flex items-center justify-center">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <ul class="nav nav-boxed-tabs p-1 rounded-full gap-2" role="tablist">
                                <li id="vault01" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1 active" data-tw-toggle="pill" data-tw-target="#tab_vault01" type="button" role="tab" aria-controls="tab_vault01" aria-selected="true">
                                        <span class="flex items-center gap-1">입금</span>
                                    </button>
                                </li>
                                <li id="vault01" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_vault02" type="button" role="tab" aria-controls="tab_vault02" aria-selected="false">
                                        <span class="flex items-center gap-1">출금</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content mt-3">
                    <div id="tab_vault01" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="vault01">
                        <div class="p-4">
                            <div class="flex align-center justify-center gap-2">
                                <div>
                                    <p class="font-medium">통화</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <span>0.00000000</span>
                                                <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-btc"></use></svg>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option img_option between">
                                            <div class="p-1">
                                                <input type="text" class="form-control light" placeholder=" 검색" />
                                            </div>
                                            <div class="h-[300px] overflow-y-scroll text-center">
                                                <button>
                                                    <p>
                                                        <span class="text-left">0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-btc"></use></svg>
                                                            <strong>BTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eth"></use></svg>
                                                            <strong>ETH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ltc"></use></svg>
                                                            <strong>LTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdt"></use></svg>
                                                            <strong>USDT</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-doge"></use></svg>
                                                            <strong>DOGE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bch"></use></svg>
                                                            <strong>BCH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-xrp"></use></svg>
                                                            <strong>XRP</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eos"></use></svg>
                                                            <strong>EOS</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-trx"></use></svg>
                                                            <strong>TRX</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bnb"></use></svg>
                                                            <strong>BNB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdc"></use></svg>
                                                            <strong>USDC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ape"></use></svg>
                                                            <strong>APE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-busd"></use></svg>
                                                            <strong>BUSD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cro"></use></svg>
                                                            <strong>CRO</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-dai"></use></svg>
                                                            <strong>DAI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-link"></use></svg>
                                                            <strong>LINK</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-sand"></use></svg>
                                                            <strong>SAND</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-shib"></use></svg>
                                                            <strong>SHIB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-uni"></use></svg>
                                                            <strong>UNI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-matic"></use></svg>
                                                            <strong>MATIC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                            <strong>EUR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                            <strong>JPY</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                            <strong>BRL</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                            <strong>CAD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-inr"></use></svg>
                                                            <strong>INR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mt-3">
                                    <p class="font-medium">금액</p>
                                    <span class="text-xs">US$0.00</span>
                                </div>
                                <div class="relative input-group mt-1 w-full">
                                    <input type="text" class="form-control font-semibold" value="0.000000000" />
                                    <i class="absolute right-14 top-3 z-10">
                                        <svg class="svg-icon w-4 h-4"><use xlink:href="#icon-currency-eth"></use></svg>
                                    </i>
                                    <button class="btn-gray px-3 whitespace-nowrap le_no_radius">최대</button>
                                </div>
                                <p class="text-xs flex items-center text-rose-400 mt-1">
                                    <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                                    <span>최솟값은 1e-8입니다</span>
                                </p>
                                <button class="btn btn-green w-full mt-4 p-3 text-base font-medium">금고에 입금</button>
                            </div>
                        </div>
                    </div>
                    <div id="tab_vault02" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="vault02">
                        <div class="p-4">
                            <div class="flex align-center justify-center gap-2">
                                <div>
                                    <p class="font-medium">통화</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <span>0.00000000</span>
                                                <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-btc"></use></svg>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option img_option between">
                                            <div class="p-1">
                                                <input type="text" class="form-control light" placeholder=" 검색" />
                                            </div>
                                            <div class="h-[300px] overflow-y-scroll text-center">
                                                <button>
                                                    <p>
                                                        <span class="text-left">0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-btc"></use></svg>
                                                            <strong>BTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eth"></use></svg>
                                                            <strong>ETH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ltc"></use></svg>
                                                            <strong>LTC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdt"></use></svg>
                                                            <strong>USDT</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-doge"></use></svg>
                                                            <strong>DOGE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bch"></use></svg>
                                                            <strong>BCH</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-xrp"></use></svg>
                                                            <strong>XRP</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eos"></use></svg>
                                                            <strong>EOS</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-trx"></use></svg>
                                                            <strong>TRX</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bnb"></use></svg>
                                                            <strong>BNB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdc"></use></svg>
                                                            <strong>USDC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ape"></use></svg>
                                                            <strong>APE</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-busd"></use></svg>
                                                            <strong>BUSD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cro"></use></svg>
                                                            <strong>CRO</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-dai"></use></svg>
                                                            <strong>DAI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-link"></use></svg>
                                                            <strong>LINK</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-sand"></use></svg>
                                                            <strong>SAND</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-shib"></use></svg>
                                                            <strong>SHIB</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-uni"></use></svg>
                                                            <strong>UNI</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-matic"></use></svg>
                                                            <strong>MATIC</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                            <strong>EUR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                            <strong>JPY</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                            <strong>BRL</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                            <strong>CAD</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <span>0.00000000</span>
                                                        <b class="flex items-center gap-1 min-w-[60px] ml-4">
                                                            <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-inr"></use></svg>
                                                            <strong>INR</strong>
                                                        </b>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mt-3">
                                    <p class="font-medium">금액</p>
                                    <span class="text-xs">US$0.00</span>
                                </div>
                                <div class="relative input-group mt-1 w-full">
                                    <input type="text" class="form-control font-semibold" value="0.000000000" />
                                    <i class="absolute right-14 top-3 z-10">
                                        <svg class="svg-icon w-4 h-4"><use xlink:href="#icon-currency-eth"></use></svg>
                                    </i>
                                    <button class="btn-gray px-3 whitespace-nowrap le_no_radius">최대</button>
                                </div>
                                <p class="text-xs flex items-center text-rose-400 mt-1">
                                    <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                                    <span>최솟값은 1e-8입니다</span>
                                </p>
                                <button class="btn btn-primary w-full mt-4 p-3 text-base font-medium">
                                    <svg class="svg-icon mr-2"><use xlink:href="#icon-google"></use></svg> 다음으로 다시 인증 구굴
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="padding: 0; border: 0 none">
                <div class="text-center bg-grey-700 py-3">
                    <span class="block">이중 인증으로 계정 보안 강화하기</span>
                    <button class="btn btn-primary mt-2 py-2 px-4">2FA 활성화</button>
                    <a href="javascript:;" class="block mt-2 font-bold hover:text-white">금고에 대해 더 알아보기</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- VIP -->
<div id="vip_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-base mr-auto flex items-center gap-2">
                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-list"></use></svg>
                    VIP
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
            </div>
            <div class="modal-body" style="padding: 0">
                <div class="flex items-center justify-center">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <ul class="nav nav-boxed-tabs p-1 rounded-full gap-2" role="tablist">
                                <li id="vip01" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1 active" data-tw-toggle="pill" data-tw-target="#tab_vip01" type="button" role="tab" aria-controls="tab_vip01" aria-selected="true">
                                        <span class="flex items-center gap-1">진행도</span>
                                    </button>
                                </li>
                                <li id="vip02" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_vip02" type="button" role="tab" aria-controls="tab_vip02" aria-selected="false">
                                        <span class="flex items-center gap-1">혜택</span>
                                    </button>
                                </li>
                                <li id="vip03" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_vip03" type="button" role="tab" aria-controls="tab_vip03" aria-selected="false">
                                        <span class="flex items-center gap-1">다시 불러오기</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content mt-3">
                    <div id="tab_vip01" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="vip01">
                        <div class="p-4">
                            <img class="max-w-[60%] mx-auto" src="/stakeclone/dist/custom_img/vip_modal_img.avif" alt="" />
                            <div class="flex justify-between text-white mt-2">
                                <b>내 VIP 진행도</b>
                                <b>0.00%</b>
                            </div>
                            <div class="progress_bar_wrap my-1">
                                <div class="bar bg-grey-400 rounded-full">
                                    <div class="progress_bar bg-green-400" style="right: 65%"></div>
                                </div>
                            </div>
                            <div class="flex justify-between text-white">
                                <span class="flex items-center gap-1"
                                    ><svg class="svg-icon"><use xlink:href="#icon-vip-none"></use></svg>없음</span
                                >
                                <span class="flex items-center gap-1"
                                    ><svg class="svg-icon"><use xlink:href="#icon-vip-bronze"></use></svg>브론즈</span
                                >
                            </div>
                            <p class="mt-4">사용자의 진행도는 당사 카지노와 스포츠북에 베팅한 금액이 누적될수록 증가하게 됩니다. 티어가 증가하면 더 큰 보상과 독점적인 VIP 대우를 받을 수 있습니다.</p>
                            <p class="bg-grey-700 rounded-md p-2 mt-2 border border-dashed border-gray-300">스포츠북에 정산된 모든 베팅은 진행도에 3배로 반영됩니다. 무효화된 베팅은 제외됩니다.</p>
                        </div>
                    </div>
                    <div id="tab_vip02" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="vip02">
                        <div class="p-4">
                            <div id="faq-accordion-1" class="accordion mb-2">
                                <div class="accordion-item">
                                    <div id="faq-accordion-content-1" class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="false" aria-controls="faq-accordion-collapse-1">
                                            <span class="flex items-center font-bold">
                                                <svg class="svg-icon w-3 h-3 mr-1"><use xlink:href="#icon-vip-bronze"></use></svg>
                                                브론즈
                                            </span>
                                            <svg class="svg-icon arrow"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </button>
                                    </div>
                                    <div id="faq-accordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                        <ul class="list-disc pl-3">
                                            <li>지원 팀에게 받을 보너스(희망하는 통화)</li>
                                            <li>레이크백이 활성화되었습니다</li>
                                            <li>주간 보너스</li>
                                            <li>월간 보너스</li>
                                            <li>VIP 텔레그램 채널 액세스</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div id="faq-accordion-content-2" class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                            <span class="flex items-center font-bold">
                                                <svg class="svg-icon w-3 h-3 mr-1"><use xlink:href="#icon-vip-silver"></use></svg>
                                                실버
                                            </span>
                                            <svg class="svg-icon arrow"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </button>
                                    </div>
                                    <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                                        <ul class="list-disc pl-3">
                                            <li>지원 팀에게 받을 보너스(희망하는 통화)</li>
                                            <li>주간 & 월간 보너스 증가</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div id="faq-accordion-content-3" class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                            <span class="flex items-center font-bold">
                                                <svg class="svg-icon w-3 h-3 mr-1"><use xlink:href="#icon-vip-gold"></use></svg>
                                                골드
                                            </span>
                                            <svg class="svg-icon arrow"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </button>
                                    </div>
                                    <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                                        <ul class="list-disc pl-3">
                                            <li>지원 팀에게 받을 보너스(희망하는 통화)</li>
                                            <li>주간 & 월간 보너스 증가</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div id="faq-accordion-content-4" class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                            <span class="flex items-center font-bold">
                                                <svg class="svg-icon w-3 h-3 mr-1"><use xlink:href="#icon-vip-platinum-1"></use></svg>
                                                플래티넘 I - III
                                            </span>
                                            <svg class="svg-icon arrow"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </button>
                                    </div>
                                    <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                                        <ul class="list-disc pl-3">
                                            <li>지원 팀에게 받을 보너스(희망하는 통화)</li>
                                            <li>주간 & 월간 보너스 증가</li>
                                            <li>14 - 42일, 일일 보너스 (리로드)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div id="faq-accordion-content-5" class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="false" aria-controls="faq-accordion-collapse-5">
                                            <span class="flex items-center font-bold">
                                                <svg class="svg-icon w-3 h-3 mr-1"><use xlink:href="#icon-vip-platinum-4"></use></svg>
                                                플래티넘 IV - VI
                                            </span>
                                            <svg class="svg-icon arrow"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </button>
                                    </div>
                                    <div id="faq-accordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-1">
                                        <ul class="list-disc pl-3">
                                            <li>전용 VIP 호스트</li>
                                            <li>VIP 호스트로부터 보너스(희망하는 통화)</li>
                                            <li>주간 & 월간 보너스 증가</li>
                                            <li>월간 보너스</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div id="faq-accordion-content-6" class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                            <span class="flex items-center font-bold">
                                                <svg class="svg-icon w-3 h-3 mr-1"><use xlink:href="#icon-vip-diamond-1"></use></svg>
                                                다이아몬드
                                            </span>
                                            <svg class="svg-icon arrow"><use xlink:href="#icon-arrowdown"></use></svg>
                                        </button>
                                    </div>
                                    <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-1">
                                        <ul class="list-disc pl-3">
                                            <li>VIP 호스트로부터 보너스(희망하는 통화)</li>
                                            <li>독점적인 커스터마이징 혜택</li>
                                            <li>주간 & 월간 보너스 증가</li>
                                            <li>월간 보너스</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab_vip03" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="vip03">
                        <div class="p-4">
                            <div class="flex justify-center">
                                <div>
                                    <p class="font-medium">통화</p>
                                    <div class="select_custom">
                                        <button class="select_toggle_btn">
                                            <p>
                                                <svg class="svg-icon svg_img mr-1"><use xlink:href="#icon-currency-btc"></use></svg>
                                                <span>BTC</span>
                                                <svg class="svg-icon"><use xlink:href="#icon-arrowdown"></use></svg>
                                            </p>
                                        </button>
                                        <div class="option_box click_option center img_option">
                                            <div class="p-1">
                                                <input type="text" class="form-control light" placeholder=" 검색" />
                                            </div>
                                            <div class="h-[300px] overflow-y-scroll text-center">
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-btc"></use></svg>
                                                        <span>BTC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eth"></use></svg>
                                                        <span>ETH</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ltc"></use></svg>
                                                        <span>LTC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdt"></use></svg>
                                                        <span>USDT</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-doge"></use></svg>
                                                        <span>DOGE</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bch"></use></svg>
                                                        <span>BCH</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-xrp"></use></svg>
                                                        <span>XRP</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eos"></use></svg>
                                                        <span>EOS</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-trx"></use></svg>
                                                        <span>TRX</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-bnb"></use></svg>
                                                        <span>BNB</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-usdc"></use></svg>
                                                        <span>USDC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-ape"></use></svg>
                                                        <span>APE</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-busd"></use></svg>
                                                        <span>BUSD</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cro"></use></svg>
                                                        <span>CRO</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-dai"></use></svg>
                                                        <span>DAI</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-link"></use></svg>
                                                        <span>LINK</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-sand"></use></svg>
                                                        <span>SAND</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-shib"></use></svg>
                                                        <span>SHIB</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-uni"></use></svg>
                                                        <span>UNI</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-matic"></use></svg>
                                                        <span>MATIC</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-eur"></use></svg>
                                                        <span>EUR</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-jpy"></use></svg>
                                                        <span>JPY</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-brl"></use></svg>
                                                        <span>BRL</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-cad"></use></svg>
                                                        <span>CAD</span>
                                                    </p>
                                                </button>
                                                <button>
                                                    <p>
                                                        <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-currency-inr"></use></svg>
                                                        <span>INR</span>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-center mt-3">
                                <p class="font-medium">금액</p>
                                <span class="text-xs">US$0.00</span>
                            </div>
                            <div class="relative input-group mt-1 w-full">
                                <input type="text" class="form-control font-semibold bgfull" value="0.000000000" />
                                <i class="absolute right-3 top-3 z-10">
                                    <svg class="svg-icon w-4 h-4"><use xlink:href="#icon-currency-eth"></use></svg>
                                </i>
                            </div>
                            <button class="btn btn-green w-full mt-4 p-3 text-base font-bold">리로드 수령</button>
                            <p class="mt-2 text-center">리로드가 만료됩니다 오전 5:49 2023. 8. 13.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="padding: 0; border: 0 none">
                <div class="text-center bg-grey-700 py-3">
                    <a href="javascript:;" class="block mt-2 font-bold hover:text-white">Stake VIP 더 알아보기</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 통계 모달 -->
<div id="statistics_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-base mr-auto flex items-center gap-2">
                    <svg class="svg-icon svelte-kjfvep">
                        <use xlink:href="#icon-list"></use>
                    </svg>
                    SyztmzTV
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
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
                <div class="flex items-center justify-center mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <ul class="nav nav-boxed-tabs p-1 rounded-full gap-2" role="tablist">
                                <li id="statistics01" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1 active" data-tw-toggle="pill" data-tw-target="#tab_statistics01" type="button" role="tab" aria-controls="tab_statistics01" aria-selected="true">
                                        <span class="flex items-center gap-1">통계</span>
                                    </button>
                                </li>
                                <li id="statistics02" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_statistics02" type="button" role="tab" aria-controls="tab_statistics02" aria-selected="false">
                                        <span class="flex items-center gap-1">트로피</span>
                                    </button>
                                </li>
                                <li id="statistics03" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_statistics03" type="button" role="tab" aria-controls="tab_statistics03" aria-selected="false">
                                        <span class="flex items-center gap-1">레이스</span>
                                    </button>
                                </li>
                                <li id="statistics04" class="nav-item" role="presentation">
                                    <button class="nav-link w-full py-3 px-5 gap-1" data-tw-toggle="pill" data-tw-target="#tab_statistics04" type="button" role="tab" aria-controls="tab_statistics04" aria-selected="false">
                                        <span class="flex items-center gap-1">경품</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content mt-3">
                    <div id="tab_statistics01" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="tab10">
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
                                                <span title="btc" style="max-width: 12ch">
                                                    <svg class="svg-icon svelte-kjfvep">
                                                        <use xlink:href="#icon-currency-btc"></use>
                                                    </svg>
                                                </span>
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
                                                <span title="btc" style="max-width: 12ch">
                                                    <svg class="svg-icon svelte-kjfvep">
                                                        <use xlink:href="#icon-currency-btc"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="tab_statistics02" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="tab11">
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
                                                    <span>
                                                        <svg class="w-5 h-5">
                                                            <use xlink:href="#icon-provider-slots"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="font-semibold text-white">Rome Rise of an Empire</span>
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
                                                <span>
                                                    <svg>
                                                        <use xlink:href="#icon-trophy-1"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:;">
                                                <div class="flex items-center gap-1 justify-start scale">
                                                    <span>
                                                        <svg class="w-5 h-5">
                                                            <use xlink:href="#icon-provider-slots"></use>
                                                        </svg>
                                                    </span>
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
                                                <span>
                                                    <svg>
                                                        <use xlink:href="#icon-trophy-2"></use>
                                                    </svg>
                                                </span>
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
                    <div id="tab_statistics03" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="tab12">
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
                                                <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" class="tooltip inline-flex items-center gap-1">
                                                    <span class="">US$200.00</span>
                                                    <span title="usd" style="max-width: 12ch">
                                                        <svg class="">
                                                            <use xlink:href="#icon-currency-usd"></use>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="tooltip-content">
                                                <div id="custom-content-tooltip" class="relative flex items-center py-1 gap-1">
                                                    <span class="">US$200.00</span>
                                                    <span title="usd" style="max-width: 12ch">
                                                        <svg class="">
                                                            <use xlink:href="#icon-currency-usd"></use>
                                                        </svg>
                                                    </span>
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
                    <div id="tab_statistics04" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="tab12">
                        <div class="overflow-x-scroll">
                            <table class="table table-striped">
                                <thead class="whitespace-nowrap">
                                    <tr>
                                        <th class="text-left">경품 이름</th>
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
                                                <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" class="tooltip inline-flex items-center gap-1">
                                                    <span class="">US$200.00</span>
                                                    <span title="usd" style="max-width: 12ch">
                                                        <svg class="">
                                                            <use xlink:href="#icon-currency-usd"></use>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="tooltip-content">
                                                <div id="custom-content-tooltip" class="relative flex items-center py-1 gap-1">
                                                    <span class="">US$200.00</span>
                                                    <span title="usd" style="max-width: 12ch">
                                                        <svg class="">
                                                            <use xlink:href="#icon-currency-usd"></use>
                                                        </svg>
                                                    </span>
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


<!-- 로그인 모달 -->
<div id="login_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-lg mr-auto flex items-center gap-2 justify-center w-full">
                    로그인
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-grey-200 text-base">
                    <div>
                        <p class="text-sm font-semibold">이메일 또는 사용자명 <span class="text-[#ED4163]">*</span></p>
                        <input type="text" class="input mt-1 form-control pr-10 font-semibold" />
                        <p class="text-xs flex items-center text-rose-400 mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                            <span> 최소 문자 길이는 3입니다</span>
                        </p>
                    </div>
                    <div class="mt-2">
                        <p class="text-sm font-semibold">비밀번호 <span class="text-[#ED4163]">*</span></p>
                        <div class="relative">
                            <input type="password" class="input mt-1 form-control pr-10 font-semibold" />
                            <button class="absolute top-4 right-4 password_onoff"><svg class="svg-icon"><use xlink:href="#icon-friend-unignored"></use></svg></button>
                        </div>
                        <p class="text-xs flex items-center text-rose-400 mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                            <span> 최소 문자 길이는 6입니다</span>
                        </p>
                    </div>
                    <div class="mt-4">
                        <button class="bg-green-500 py-3 px-4 rounded-md text-black font-semibold w-full text-base"><span>로그인</span></button>
                    </div>
                    <div class="mt-4 flex gap-4 items-center justify-center">
                        <p class="w-20 h-[1px] bg-grey-400"></p>
                        <p class="text-sm">OR</p>
                        <p class="w-20 h-[1px] bg-grey-400"></p>
                    </div>
                    <div class="mt-4 grid grid-cols-4 gap-2">
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-facebook"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-google"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-line"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-twitch"></use></svg></button>
                    </div>
                    <div class="mt-4 text-center text-sm">
                        <button class="scale text-white font-semibold" data-tw-toggle="modal" data-tw-target="#findpassword_modal" data-tw-dismiss="modal">비밀번호를 잊어버렸습니다</button>
                        <div class="mt-4">
                            계정이 없으신가요?
                            <button class="scale text-white font-semibold" data-tw-toggle="modal" data-tw-target="#join_modal" data-tw-dismiss="modal">회원가입</button>
                        </div>
                        <div class="mt-4 text-xs">
                            Stake는 hCaptcha로 보호되고 있습니다. hCaptcha <a href="javascript:;" class="hover:text-white">개인정보 보호 정책</a> 및 <a href="javascript:;" class="hover:text-white">서비스 약관</a> 가 적용됩니다.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 비밀번호 찾기 모달 -->
<div id="findpassword_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-base mr-auto flex items-center gap-2 ">
                    <svg class="svg-icon svelte-kjfvep"><use xlink:href="#icon-gear"></use></svg>
                    비밀번호를 잊어버렸습니다.
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-grey-200 text-base">
                    <div>
                        <p class="text-sm font-semibold">이메일  <span class="text-[#ED4163]">*</span></p>
                        <input type="text" class="input mt-1 form-control pr-10 font-semibold" />
                        <p class="text-xs flex items-center text-rose-400 mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                            <span> 이메일 형식에 올바르지 않은 글자가 포함되어 있습니다.</span>
                        </p>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="bg-green-500 py-3 px-4 rounded-md text-black font-semibold w-full text-base"><span>비밀번호 복구</span></button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- 회원가입 모달 -->
<div id="join_modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-lg mr-auto flex items-center gap-2 justify-center w-full">
                    계정 생성
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-grey-200 text-base">
                    <div class="text-center font-bold">
                        단계 1/2: 세부 정보 입력
                    </div>
                    <div class="mt-2">
                        <p class="text-sm font-semibold">이메일 <span class="text-[#ED4163]">*</span></p>
                        <input type="text" class="input mt-1 form-control pr-10 font-semibold" />
                        <p class="text-xs flex items-center text-rose-400 mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                            <span> 지원하지 않는 이메일 도메인</span>
                        </p>
                    </div>
                    <div class="mt-2">
                        <p class="text-sm font-semibold">사용자명 <span class="text-[#ED4163]">*</span></p>
                        <input type="text" class="input mt-1 form-control pr-10 font-semibold" />
                        <p class="text-xs flex items-center mt-1">
                            <span> 사용자명은 3자 이상이어야 합니다.</span>
                        </p>
                    </div>
                    <div class="mt-2">
                        <p class="text-sm font-semibold">비밀번호 <span class="text-[#ED4163]">*</span></p>
                        <div class="relative">
                            <input type="password" class="input mt-1 form-control pr-10 font-semibold" />
                            <button class="absolute top-4 right-4 password_onoff"><svg class="svg-icon"><use xlink:href="#icon-friend-unignored"></use></svg></button>
                        </div>
                        <p class="text-xs flex items-center text-rose-400 mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                            <span> 비밀번호는 8자 이상이어야 합니다.</span>
                        </p>
                        <p class="text-xs flex items-center mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-check"></use></svg>
                            <span> 소문자와 대문자를 포함해야 합니다</span>
                        </p>
                        <p class="text-xs flex items-center mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-check"></use></svg>
                            <span> 숫자가 최소 1개 이상이어야 합니다</span>
                        </p>
                        <p class="text-xs flex items-center mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-check"></use></svg>
                            <span> 최소 8자 이상</span>
                        </p>
                    </div>
                    <div class="mt-2">
                        <p class="text-sm font-semibold">생일 <span class="text-[#ED4163]">*</span></p>
                        <div class="grid grid-cols-3 gap-2">
                            <input type="text" class="input mt-1 form-control pr-10 font-semibold" placeholder="DD" />
                            <select name="" id="" class="form-select mt-1">
                                <option value="">월</option>
                            </select>
                            <input type="text" class="input mt-1 form-control pr-10 font-semibold" placeholder="YYYY" />
                        </div>
                        <p class="text-xs flex items-center text-rose-400 mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                            <span> 생년월일을 입력하세요</span>
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center gap-2">
                            <input type="checkbox" class="custom line" id="code_check">
                            <i></i>
                            <label for="code_check" class="cursor-pointer text-sm font-semibold">코드(선택 사항)</label>
                        </div>
                        <div id="code_check_input" class="hidden">
                            <input type="text" class="input mt-1 form-control pr-10 font-semibold"  />
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="bg-green-500 py-3 px-4 rounded-md text-black font-semibold w-full text-base" data-tw-toggle="modal" data-tw-target="#join_modal2" data-tw-dismiss="modal"><span>계속하기</span></button>
                    </div>
                    <div class="mt-4 flex gap-4 items-center justify-center">
                        <p class="w-20 h-[1px] bg-grey-400"></p>
                        <p class="text-sm">OR</p>
                        <p class="w-20 h-[1px] bg-grey-400"></p>
                    </div>
                    <div class="mt-4 grid grid-cols-4 gap-2">
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-facebook"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-google"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-line"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-twitch"></use></svg></button>
                    </div>
                    <div class="mt-4 text-center text-sm">
                        <div class="mt-4">
                            이미 계정이 있으신가요?
                            <button class="scale text-white font-semibold" data-tw-toggle="modal" data-tw-target="#login_modal">로그인</button>
                        </div>
                        <div class="mt-4 text-xs">
                            Stake는 hCaptcha로 보호되고 있습니다. hCaptcha <a href="javascript:;" class="hover:text-white">개인정보 보호 정책</a> 및 <a href="javascript:;" class="hover:text-white">서비스 약관</a> 가 적용됩니다.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 회원가입 모달 step 2 -->
<div id="join_modal2" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-semibold text-lg mr-auto flex items-center gap-2 justify-center w-full">
                    계정 생성
                </h2>
                <button data-tw-dismiss="modal">
                    <svg><use xlink:href="#icon-cross"></use></svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-grey-200 text-base">
                    <div class="flex items-center justify-between text-center font-bold">
                        <button data-tw-toggle="modal" data-tw-target="#join_modal" data-tw-dismiss="modal"><svg class="svg-icon"><use xlink:href="#icon-back"></use></svg></button>
                        <p>단계 2/2: 이용 약관을 읽고 동의하십시오.</p>
                        <button></button>
                    </div>
                    <div class="mt-2 overflow-y-auto bg-grey-500 h-[460px] p-3 rounded">
                        이용약관 내용 들어가는 곳
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center gap-2">
                            <input type="checkbox" class="custom line" id="agree">
                            <i></i>
                            <label for="agree" class="cursor-pointer text-sm font-semibold">이용약관을 읽었고 이에 동의합니다.</label>
                        </div>
                        <p class="text-xs flex items-center text-rose-400 mt-1">
                            <svg class="svg-icon mr-1"><use xlink:href="#icon-error"></use></svg>
                            <span> 이용 약관 전체를 읽고 끝까지 스크롤하여 동의하십시오.</span>
                        </p>
                    </div>
                    <div class="mt-4">
                        <button class="bg-green-500 py-3 px-4 rounded-md text-black font-semibold w-full text-base"><span>활성화</span></button>
                    </div>
                    <div class="mt-4 flex gap-4 items-center justify-center">
                        <p class="w-20 h-[1px] bg-grey-400"></p>
                        <p class="text-sm">OR</p>
                        <p class="w-20 h-[1px] bg-grey-400"></p>
                    </div>
                    <div class="mt-4 grid grid-cols-4 gap-2">
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-facebook"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-google"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-line"></use></svg></button>
                        <button class="btn btn-gray !py-3"><svg class="svg-icon"><use xlink:href="#icon-twitch"></use></svg></button>
                    </div>
                    <div class="mt-4 text-center text-sm">
                        <div class="mt-4">
                            이미 계정이 있으신가요?
                            <button class="scale text-white font-semibold" data-tw-toggle="modal" data-tw-target="#login_modal">로그인</button>
                        </div>
                        <div class="mt-4 text-xs">
                            Stake는 hCaptcha로 보호되고 있습니다. hCaptcha <a href="javascript:;" class="hover:text-white">개인정보 보호 정책</a> 및 <a href="javascript:;" class="hover:text-white">서비스 약관</a> 가 적용됩니다.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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